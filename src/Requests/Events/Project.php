<?php

namespace D4veR\BcfPhp\Requests\Projects;

use D4veR\BcfPhp\Data\Event;
use Saloon\Http\Response;

class ProjectRequest extends BaseRequest
{
    public function resolveEndpoint(): string
    {
        return parent::resolveEndpoint().'/events';
    }

    public function createDtoFromResponse(Response $response): array
    {
        $events = $response->json();

        return array_map(function ($event) {
            return Event::fromArray($event);
        }, $events);
    }
}
