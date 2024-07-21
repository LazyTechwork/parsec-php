<?php

namespace LazyTechwork\Parsec\Encoders;

use LazyTechwork\Parsec\Types\Guid;
use Soap\Encoding\Encoder\Context;
use Soap\Encoding\Encoder\XmlEncoder;
use VeeWee\Reflecta\Iso\Iso;

/**
 * @implements XmlEncoder<Guid, string>
 */
class GuidEncoder implements XmlEncoder
{
    public function iso(Context $context): Iso
    {
        return new Iso(
            static fn (Guid $value): string => (string) $value,
            static fn (string $value): Guid => Guid::fromString($value)
        );
    }
}
