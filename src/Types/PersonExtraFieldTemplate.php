<?php

namespace LazyTechwork\Parsec\Types;

class PersonExtraFieldTemplate
{
    private string $ID;

    /**
     * @var 'None'|'Item'|'Node'|'Document'|'Element'|'Attribute'|'Namespace'|'ProcessingInstruction'|'Comment'|'Text'|'AnyAtomicType'|'UntypedAtomic'|'String'|'Boolean'|'Decimal'|'Float'|'Double'|'Duration'|'DateTime'|'Time'|'Date'|'GYearMonth'|'GYear'|'GMonthDay'|'GDay'|'GMonth'|'HexBinary'|'Base64Binary'|'AnyUri'|'QName'|'Notation'|'NormalizedString'|'Token'|'Language'|'NmToken'|'Name'|'NCName'|'Id'|'Idref'|'Entity'|'Integer'|'NonPositiveInteger'|'NegativeInteger'|'Long'|'Int'|'Short'|'Byte'|'NonNegativeInteger'|'UnsignedLong'|'UnsignedInt'|'UnsignedShort'|'UnsignedByte'|'PositiveInteger'|'YearMonthDuration'|'DayTimeDuration'
     */
    private string $TYPE;

    private ?string $NAME = null;

    private ?string $GROUP_NAME = null;

    private bool $IS_BASE;

    private int $ORDER_INDEX;

    public function getID(): string
    {
        return $this->ID;
    }

    public function withID(string $ID): static
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    /**
     * @return 'None'|'Item'|'Node'|'Document'|'Element'|'Attribute'|'Namespace'|'ProcessingInstruction'|'Comment'|'Text'|'AnyAtomicType'|'UntypedAtomic'|'String'|'Boolean'|'Decimal'|'Float'|'Double'|'Duration'|'DateTime'|'Time'|'Date'|'GYearMonth'|'GYear'|'GMonthDay'|'GDay'|'GMonth'|'HexBinary'|'Base64Binary'|'AnyUri'|'QName'|'Notation'|'NormalizedString'|'Token'|'Language'|'NmToken'|'Name'|'NCName'|'Id'|'Idref'|'Entity'|'Integer'|'NonPositiveInteger'|'NegativeInteger'|'Long'|'Int'|'Short'|'Byte'|'NonNegativeInteger'|'UnsignedLong'|'UnsignedInt'|'UnsignedShort'|'UnsignedByte'|'PositiveInteger'|'YearMonthDuration'|'DayTimeDuration'
     */
    public function getTYPE(): string
    {
        return $this->TYPE;
    }

    /**
     * @param 'None'|'Item'|'Node'|'Document'|'Element'|'Attribute'|'Namespace'|'ProcessingInstruction'|'Comment'|'Text'|'AnyAtomicType'|'UntypedAtomic'|'String'|'Boolean'|'Decimal'|'Float'|'Double'|'Duration'|'DateTime'|'Time'|'Date'|'GYearMonth'|'GYear'|'GMonthDay'|'GDay'|'GMonth'|'HexBinary'|'Base64Binary'|'AnyUri'|'QName'|'Notation'|'NormalizedString'|'Token'|'Language'|'NmToken'|'Name'|'NCName'|'Id'|'Idref'|'Entity'|'Integer'|'NonPositiveInteger'|'NegativeInteger'|'Long'|'Int'|'Short'|'Byte'|'NonNegativeInteger'|'UnsignedLong'|'UnsignedInt'|'UnsignedShort'|'UnsignedByte'|'PositiveInteger'|'YearMonthDuration'|'DayTimeDuration' $TYPE
     */
    public function withTYPE(string $TYPE): static
    {
        $new = clone $this;
        $new->TYPE = $TYPE;

        return $new;
    }

    public function getNAME(): ?string
    {
        return $this->NAME;
    }

    public function withNAME(?string $NAME): static
    {
        $new = clone $this;
        $new->NAME = $NAME;

        return $new;
    }

    public function getGROUP_NAME(): ?string
    {
        return $this->GROUP_NAME;
    }

    public function withGROUP_NAME(?string $GROUP_NAME): static
    {
        $new = clone $this;
        $new->GROUP_NAME = $GROUP_NAME;

        return $new;
    }

    public function isIS_BASE(): bool
    {
        return $this->IS_BASE;
    }

    public function withIS_BASE(bool $IS_BASE): static
    {
        $new = clone $this;
        $new->IS_BASE = $IS_BASE;

        return $new;
    }

    public function getORDER_INDEX(): int
    {
        return $this->ORDER_INDEX;
    }

    public function withORDER_INDEX(int $ORDER_INDEX): static
    {
        $new = clone $this;
        $new->ORDER_INDEX = $ORDER_INDEX;

        return $new;
    }
}
