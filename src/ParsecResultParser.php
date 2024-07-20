<?php

namespace LazyTechwork\Parsec;

use LazyTechwork\Parsec\Entities\BaseObject;
use LazyTechwork\Parsec\Entities\EventsHistory;
use LazyTechwork\Parsec\Entities\Session;
use LazyTechwork\Parsec\Enums\ParsecMethod;
use LazyTechwork\Parsec\Exceptions\CannotParseResult;
use LazyTechwork\Parsec\Responses\BaseResult;
use LazyTechwork\Parsec\Responses\EventsHistoryResult;
use LazyTechwork\Parsec\Responses\GuidResult;
use LazyTechwork\Parsec\Responses\ObjectResult;
use LazyTechwork\Parsec\Responses\SessionResult;
use LazyTechwork\Parsec\Responses\StringResult;
use Ramsey\Uuid\Guid\Guid;

/**
 * @template T of BaseObject|BaseResult
 */
final class ParsecResultParser
{
    /**
     * @param class-string<T>|literal-string $targetClass
     *
     * @return BaseResult|ObjectResult<T|scalar>
     *
     * @throws \Exception
     */
    public static function fromResponse(string|ParsecMethod $method, string $targetClass, \stdClass $response): BaseResult|ObjectResult
    {
        if ($method instanceof ParsecMethod) {
            $method = $method->value;
        }

        if (property_exists($response, $method.'Result')) {
            $value = $response->{$method.'Result'};

            if (is_array($value)) {
                $result = [];
                foreach ($value as $item) {
                    $result[] = (new $targetClass())->fill($item);
                }

                return ObjectResult::fromObject($result);
            }

            if ($value instanceof \stdClass) {
                return ObjectResult::fromObject((new $targetClass())->fill($value));
            }

            if (property_exists($value, 'Value')) {
                return ObjectResult::fromObject($value->Value);
            }

            throw new CannotParseResult('Cannot parse result for method '.$method);
        }

        if (property_exists($response, 'Result')) {
            if (property_exists($response, 'Value')) {
                return self::parseValue($response, $targetClass);
            }

            return BaseResult::fromStdClass($response);
        }

        throw new CannotParseResult('Cannot parse result for method '.$method);
    }

    /**
     * @param class-string<T>|non-empty-lowercase-string $targetClass
     *
     * @throws \Exception
     */
    private static function parseValue(\stdClass $response, string $targetClass): mixed
    {
        $value = $response->Value;
        if (is_string($value)) {
            if ($targetClass === 'guid' || $targetClass === GuidResult::class) {
                $response->Result = Guid::fromString($value);

                return GuidResult::fromStdClass($response);
            }

            if ($targetClass === 'string' || $targetClass === StringResult::class) {
                return StringResult::fromStdClass($response);
            }

            throw new CannotParseResult('Requested type '.$targetClass.' but string given.');
        }

        if (is_int($value)) {
            if ($targetClass === 'int') {
                return ObjectResult::fromObject($value);
            }

            throw new CannotParseResult('Requested type '.$targetClass.' but integer given.');
        }

        if ($targetClass === EventsHistoryResult::class || $targetClass === EventsHistory::class) {
            if (
                property_exists($value, 'Events')
                && property_exists($value, 'Persons')
                && property_exists($value, 'PersonFullNames')
                && property_exists($value, 'Territories')
                && property_exists($value, 'TerritoryNames')
            ) {
                return EventsHistoryResult::fromStdClass($response);
            }

            throw new CannotParseResult('Requested type '.$targetClass.' but response does not have required fields.');
        }

        if ($targetClass === SessionResult::class || $targetClass === Session::class) {
            if (
                property_exists($value, 'SessionID')
                && property_exists($value, 'RootOrgUnitID')
                && property_exists($value, 'RootTerritoryID')
            ) {
                return SessionResult::fromStdClass($response);
            }

            throw new CannotParseResult('Requested type '.$targetClass.' but response does not have required fields.');
        }

        return ObjectResult::fromStdClass($response);
    }
}
