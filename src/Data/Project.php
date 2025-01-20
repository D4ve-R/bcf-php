<?php

namespace D4veR\BcfPhp\Data;

class Project
{
    public function __construct(
        public readonly string $name,
        public readonly string $project_id,
        public readonly ?object $authorization = null,
    ) {
        //
    }

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'],
            project_id: $data['project_id'],
            authorization: $data['authorization'] ?? null,
        );
    }
}
