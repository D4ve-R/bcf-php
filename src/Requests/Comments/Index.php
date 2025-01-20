<?php

namespace D4veR\BcfPhp\Requests\Comments;

use D4veR\BcfPhp\Data\Comment;
use Saloon\Enums\Method;
use Saloon\Http\Response;

class IndexRequest extends BaseRequest
{
    protected Method $method = Method::GET;

    public function createDtoFromResponse(Response $response): array
    {
        $data = $response->json();

        return array_map(function ($comment) {
            return Comment::fromArray($comment);
        }, $data);
    }
}
