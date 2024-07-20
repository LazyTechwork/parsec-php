<?php

include './vendor/autoload.php';
$entitiesDir = realpath(__DIR__.'/src/Entities');
$namespace = '\LazyTechwork\Parsec\Entities\\';

foreach (new GlobIterator($entitiesDir.'/*.php') as $entityFile) {
    $className = $namespace.str_replace([$entitiesDir.'/', '.php', '/'], ['', '', '\\'], $entityFile->getRealPath());
    $class = new ReflectionClass($className);
    if ($class->isAbstract() || $class->isInterface() || $class->getConstructor() === null || !$class->isSubclassOf(LazyTechwork\Parsec\Entities\BaseObject::class)) {
        continue;
    }

    $constructor = $class->getConstructor();
    $params = $constructor->getParameters();
    $casts = [];
    foreach ($params as $param) {
        $type = $param->getType();
        if (!$type instanceof ReflectionNamedType) {
            continue;
        }

        $casts[$param->getName()] = match ($type->getName()) {
            Ramsey\Uuid\UuidInterface::class => 'guid',
            default => $type->getName(),
        };
    }

    $transformers = [];
    $classFileContents = file_get_contents($class->getFileName());
    preg_match('/^[\s\t]*public function __construct\(\X*\)[\s\t\n]*{([^}]*)}$/um', $classFileContents, $transformers);
    if (empty($transformers[1])) {
        echo 'Cannot parse file: '.$class->getFileName();
        continue;
    }
    preg_match_all('/[\s\t]*\$this->([\w\d]+)\s*=\s*\$([\w\d]+);/u', $transformers[1], $transformers);
    $transformers = array_combine($transformers[2], $transformers[1]);
    $castsExport = var_export($casts, true);
    $mapping = var_export($transformers, true);
    $generatedCode = <<<PHP
/**
 * @return array<string, string|class-string|callable>
 */
protected function casts(): array
{
    return {$castsExport};
}

/**
 * @var array<string, string> stdClass -> this
 */
protected array \$attributeMapping = {$mapping};
PHP;

    $replacementCount = 0;
    $classFileContents = preg_replace('/^\s+\/\*\*(?:[\n\s]+\*\s*[^*]+)+\s*\*\/[\s\n\t]*public function __construct[\s\n\t]*\([^({}]+{[^{}]+}\n$/um', '', $classFileContents, 1, $replacementCount);

    if ($replacementCount === 0) {
        echo 'Cannot remove constructor in file: '.$class->getFileName()."\n";
    }

    if (($endParenthesisPos = mb_strrpos($classFileContents, '}', encoding: 'utf8')) !== false) {
        $generatedCode = mb_substr_replace($classFileContents, "\n".$generatedCode."\n", $endParenthesisPos, 0);
        file_put_contents($class->getFileName(), $generatedCode);
    }
}

function mb_substr_replace(string $original, string $replacement, int $position, int $length): string
{
    return mb_substr($original, 0, $position).$replacement.mb_substr($original, $position + $length, mb_strlen($original));
}
