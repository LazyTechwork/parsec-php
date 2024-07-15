<?php

namespace LazyTechwork\Parsec;

final class ReflectionHelper
{
    /**
     * @return \ReflectionNamedType[]
     */
    public static function getAllTypes(\ReflectionParameter $reflectionParameter): array
    {
        $reflectionType = $reflectionParameter->getType();

        if (!$reflectionType) {
            return [];
        }

        if ($reflectionType instanceof \ReflectionUnionType) {
            return $reflectionType->getTypes();
        }

        return [$reflectionType];
    }

    /**
     * @param \ReflectionNamedType[] $types
     * @param class-string           $type
     *
     * @throws \ReflectionException
     */
    public static function hasType(array $types, string $type): bool
    {
        foreach ($types as $t) {
            if ($t->getName() === $type
                || (!$t->isBuiltin() && (new \ReflectionClass($t->getName()))->isSubclassOf($type))) {
                return true;
            }
        }

        return false;
    }
}
