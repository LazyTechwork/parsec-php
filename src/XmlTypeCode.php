<?php

namespace LazyTechwork\Parsec;

/**
 * Представляет типы схем языка определения схемы XML (XSD) W3C.
 *
 * @see https://learn.microsoft.com/ru-ru/dotnet/api/system.xml.schema.xmltypecode?view=net-8.0#fields
 */
enum XmlTypeCode: int
{
    case AnyAtomicType = 10; // Any atomic value of a union.

    case AnyUri = 28; // A W3C XML Schema xs:anyURI type.

    case Attribute = 5; // This value supports the .NET Framework infrastructure and is not intended to be used directly from your code.

    case Base64Binary = 27; // A W3C XML Schema xs:base64Binary type.

    case Boolean = 13; // A W3C XML Schema xs:boolean type.

    case Byte = 46; // A W3C XML Schema xs:byte type.

    case Comment = 8; // This value supports the .NET Framework infrastructure and is not intended to be used directly from your code.

    case Date = 20; // A W3C XML Schema xs:date type.

    case DateTime = 18; // A W3C XML Schema xs:dateTime type.

    case DayTimeDuration = 54; // This value supports the .NET Framework infrastructure and is not intended to be used directly from your code.

    case Decimal = 14; // A W3C XML Schema xs:decimal type.

    case Document = 3; // This value supports the .NET Framework infrastructure and is not intended to be used directly from your code.

    case Double = 16; // A W3C XML Schema xs:double type.

    case Duration = 17; // A W3C XML Schema xs:Duration type.

    case Element = 4; // This value supports the .NET Framework infrastructure and is not intended to be used directly from your code.

    case Entity = 39; // A W3C XML Schema xs:ENTITY type.

    case Float = 15; // A W3C XML Schema xs:float type.

    case GDay = 24; // A W3C XML Schema xs:gDay type.

    case GMonth = 25; // A W3C XML Schema xs:gMonth type.

    case GMonthDay = 23; // A W3C XML Schema xs:gMonthDay type.

    case GYear = 22; // A W3C XML Schema xs:gYear type.

    case GYearMonth = 21; // A W3C XML Schema xs:gYearMonth type.

    case HexBinary = 26; // A W3C XML Schema xs:hexBinary type.

    case Id = 37; // A W3C XML Schema xs:ID type.

    case Idref = 38; // A W3C XML Schema xs:IDREF type.

    case Int = 44; // A W3C XML Schema xs:int type.

    case Integer = 40; // A W3C XML Schema xs:integer type.

    case Item = 1; // An item such as a node or atomic value.

    case Language = 33; // A W3C XML Schema xs:language type.

    case Long = 43; // A W3C XML Schema xs:long type.

    case Name = 35; // A W3C XML Schema xs:Name type.

    case Namespace = 6; // This value supports the .NET Framework infrastructure and is not intended to be used directly from your code.

    case NCName = 36; // A W3C XML Schema xs:NCName type.

    case NegativeInteger = 42; // A W3C XML Schema xs:negativeInteger type.

    case NmToken = 34; // A W3C XML Schema xs:NMTOKEN type.

    case Node = 2; // This value supports the .NET Framework infrastructure and is not intended to be used directly from your code.

    case None = 0; // No type information.

    case NonNegativeInteger = 47; // A W3C XML Schema xs:nonNegativeInteger type.

    case NonPositiveInteger = 41; // A W3C XML Schema xs:nonPositiveInteger type.

    case NormalizedString = 31; // A W3C XML Schema xs:normalizedString type.

    case Notation = 30; // A W3C XML Schema xs:NOTATION type.

    case PositiveInteger = 52; // A W3C XML Schema xs:positiveInteger type.

    case ProcessingInstruction = 7; // This value supports the .NET Framework infrastructure and is not intended to be used directly from your code.

    case QName = 29; // A W3C XML Schema xs:QName type.

    case Short = 45; // A W3C XML Schema xs:short type.

    case String = 12; // A W3C XML Schema xs:string type.

    case Text = 9; // This value supports the .NET Framework infrastructure and is not intended to be used directly from your code.

    case Time = 19; // A W3C XML Schema xs:time type.

    case Token = 32; // A W3C XML Schema xs:token type.

    case UnsignedByte = 51; // A W3C XML Schema xs:unsignedByte type.

    case UnsignedInt = 49; // A W3C XML Schema xs:unsignedInt type.

    case UnsignedLong = 48; // A W3C XML Schema xs:unsignedLong type.

    case UnsignedShort = 50; // A W3C XML Schema xs:unsignedShort type.

    case UntypedAtomic = 11; // An untyped atomic value.

    case YearMonthDuration = 53; // This value supports the .NET Framework infrastructure and is not intended to be used directly from your code.
}
