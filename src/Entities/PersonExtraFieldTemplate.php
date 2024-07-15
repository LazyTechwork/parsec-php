<?php

namespace LazyTechwork\Parsec\Entities;

use LazyTechwork\Parsec\Enums\XmlTypeCode;
use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для определения дополнительного поля данных персонала.
 */
final class PersonExtraFieldTemplate extends BaseObject
{
    /**
     * @var UuidInterface Уникальный ключ шаблона
     */
    private UuidInterface $id;
    /**
     * @var XmlTypeCode Тип представленных данных
     */
    private XmlTypeCode $type;
    /**
     * @var string Наименование шаблона
     */
    private string $name;

    /**
     * @param UuidInterface $ID   Уникальный ключ шаблона
     * @param XmlTypeCode   $TYPE Тип представленных данных
     * @param string        $NAME Наименование шаблона
     */
    public function __construct(UuidInterface $ID, XmlTypeCode $TYPE, string $NAME)
    {
        $this->id = $ID;
        $this->type = $TYPE;
        $this->name = $NAME;
    }

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function setId(UuidInterface $id): PersonExtraFieldTemplate
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): XmlTypeCode
    {
        return $this->type;
    }

    public function setType(XmlTypeCode $type): PersonExtraFieldTemplate
    {
        $this->type = $type;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): PersonExtraFieldTemplate
    {
        $this->name = $name;

        return $this;
    }
}
