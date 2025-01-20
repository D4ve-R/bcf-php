<?php

namespace D4veR\BcfPhp;

use Saloon\Http\Connector as BaseConnector;

class Connector extends BaseConnector
{
    public function __construct(
        protected readonly string $baseUrl,
        public string $bcfVersion = '3.0',
    ) {
        //
    }

    public function resolveBaseUrl(): string
    {
        return $this->baseUrl.'/'.$this->bcfVersion;
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }
}
