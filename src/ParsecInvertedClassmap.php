<?php

namespace LazyTechwork\Parsec;

use Soap\Engine\Metadata\Model\XsdType;

class ParsecInvertedClassmap
{
    /**
     * @var array<string, XsdType>|null
     */
    private static ?array $collection = null;

    /**
     * @return array<string, XsdType>
     */
    public static function getCollection(): array
    {
        if (self::$collection === null) {
            self::$collection = [];
            foreach (ParsecClassmap::getCollection() as $classmap) {
                self::$collection[$classmap->getPhpClassName()] = XsdType::create($classmap->getXmlType())
                    ->withXmlNamespace($classmap->getXmlNamespace())
                    ->withXmlTypeName($classmap->getXmlType());
            }
        }

        return self::$collection;
    }
}
