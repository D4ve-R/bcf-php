<?php

namespace D4veR\BcfPhp\Requests\Comments;

use D4veR\BcfPhp\Data\Comment;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class UpdateTopicRequest extends GetRequest implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function __construct(
        protected readonly string $project_id,
        protected readonly string $topic_id,
        protected readonly Comment $comment
    ) {
        parent::__construct($project_id, $topic_id);
    }

    public function resolveBody()
    {
        return $this->comment;
    }
}
