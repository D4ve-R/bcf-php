<?php

namespace D4veR\BcfPhp\Requests\Projects;

use D4veR\BcfPhp\Data\Event;
use Saloon\Http\Response;

class TopicsRequest extends BaseRequest
{
    public function __construct(
        protected readonly string $project_id,
        protected readonly string $topic_id
    ) {
        parent::__construct($project_id);
    }

    public function resolveEndpoint(): string
    {
        return parent::resolveEndpoint() . '/' . $this->topic_id . '/events';
    }

    public function createDtoFromResponse(Response $response): array
    {
        $events = $response->json();

        return array_map(function ($event) {
            return Event::fromArray($event);
        }, $events);
    }
}
