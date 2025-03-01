<?php

namespace D4veR\BcfPhp\Data;

class BimSnippet
{
    public function __construct(
        public readonly string $reference,
        public readonly string $reference_schema,
        public readonly string $snippet_type,
        public bool $is_external = false,
    ) {
        //
    }

    public static function fromArray(array $data): self
    {
        return new self(
            reference: $data['reference'],
            reference_schema: $data['reference_schema'],
            snippet_type: $data['snippet_type'],
            is_external: $data['is_external'] ?? false,
        );
    }
}
