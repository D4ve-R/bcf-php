<?php

namespace D4veR\BcfPhp\Requests\Topics;

use D4veR\BcfPhp\Data\Topic;
use Saloon\Enums\Method;
use Saloon\Http\Response;

class GetTopicsRequest extends BaseRequest
{
    protected Method $method = Method::GET;

    public function __construct(
        protected readonly string $project_id,
        protected readonly string $topic_id
    ) {
        parent::__construct($project_id);
    }

    public function resolveEndpoint(): string
    {
        return parent::resolveEndpoint().'/'.$this->topic_id;
    }

    public function createDtoFromResponse(Response $response): Topic
    {
        $topic = $response->json();

        return Topic::fromArray($topic);
    }
}
