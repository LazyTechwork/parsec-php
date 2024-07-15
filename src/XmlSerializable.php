<?php

namespace LazyTechwork\Parsec;

interface XmlSerializable
{
    public static function fromStdClass(\stdClass $obj): static;

    public function toXmlParamsArray(): string;
}
