<?php

namespace LazyTechwork\Parsec;

use LazyTechwork\Parsec\Enums\ParsecMethod;

class ParsecClient
{
    private \SoapClient $client;
    private string $sessionId;

    /**
     * @throws \SoapFault
     */
    public function __construct(
        private readonly string $wsdlUri,
        #[\SensitiveParameter] private readonly string $domain,
        #[\SensitiveParameter] private readonly string $user,
        #[\SensitiveParameter] private readonly string $password,
        private readonly int $soapVersion = SOAP_1_2,
    ) {
        $this->client = new \SoapClient($this->wsdlUri, ['soap_version' => $this->soapVersion]);
    }

    /**
     * @throws \SoapFault
     */
    public function call(ParsecMethod|string $name, array $args, ?array $options = null, \SoapHeader|array|null $inputHeaders = null, ?array &$outputHeaders = null): mixed
    {
        return $this->client->__soapCall($name instanceof ParsecMethod ? $name->value : $name, $args, $options, $inputHeaders, $outputHeaders);
    }

    public function connect()
    {
        $this->call(ParsecMethod::OpenSession, [
            'domain' => $this->domain,
            'userName' => $this->user,
            'password' => $this->password,
        ]);
    }
}
