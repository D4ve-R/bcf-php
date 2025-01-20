<?php

namespace D4veR\BcfPhp\Requests\Topics;

use D4veR\BcfPhp\Data\Topic;
use Saloon\Enums\Method;
use Saloon\Http\Response;

class IndexTopicsRequest extends BaseRequest
{
    protected Method $method = Method::GET;

    public function createDtoFromResponse(Response $response): array
    {
        $data = $response->json();

        return array_map(function ($topic) {
            return Topic::fromArray($topic);
        }, $data);
    }
}
