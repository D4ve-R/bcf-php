<?php

namespace D4veR\BcfPhp\Requests\Comments;

use D4veR\BcfPhp\Data\Comment;
use Saloon\Enums\Method;
use Saloon\Http\Response;

class GetRequest extends BaseRequest
{
    protected Method $method = Method::GET;

    public function __construct(
        protected readonly string $project_id,
        protected readonly string $topic_id
    ) {
        parent::__construct($project_id, $topic_id);
    }

    public function resolveEndpoint(): string
    {
        return parent::resolveEndpoint().'/'.$this->topic_id;
    }

    public function createDtoFromResponse(Response $response): Comment
    {
        $comment = $response->json();

        return Comment::fromArray($comment);
    }
}
