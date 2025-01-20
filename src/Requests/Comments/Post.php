<?php

namespace D4veR\BcfPhp\Requests\Comments;

use D4veR\BcfPhp\Data\Comment;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class PostTopicRequest extends BaseRequest implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected readonly string $project_id,
        protected readonly string $topic_id,
        protected readonly Comment $comment,
    ) {
        parent::__construct($project_id, $topic_id);
    }

    public function resolveBody(): Comment
    {
        return $this->comment;
    }
}
