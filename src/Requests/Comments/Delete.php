<?php

namespace D4veR\BcfPhp\Requests\Comments;

use Saloon\Enums\Method;

class DeleteRequest extends GetRequest
{
    protected Method $method = Method::DELETE;

    public function __construct(
        protected readonly string $project_id,
        protected readonly string $topic_id,
    ) {
        parent::__construct($project_id, $topic_id);
    }
}
