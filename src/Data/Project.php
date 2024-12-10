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
}