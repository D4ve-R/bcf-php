<?php

namespace D4veR\BcfPhp\Requests\Comments;

use Saloon\Http\Request;

class BaseRequest extends Request
{
    public function __construct(
        protected readonly string $project_id,
        protected readonly string $topic_id
    ) {
        //
    }

    public function resolveEndpoint(): string
    {
        return '/projects/' . $this->project_id . '/topics/' . $this->topic_id . '/comments';
    }
}
