<?php

namespace D4veR\BcfPhp\Requests\Projects;

use D4veR\BcfPhp\Data\Project;

use Saloon\Enums\Method;
use Saloon\Http\Response;

class IndexProjectsRequest extends BaseRequest
{
    protected Method $method = Method::GET;

    public function createDtoFromResponse(Response $response): array
    {
        $data = $response->json();
        
        return array_map(function ($project) {
            return Project::fromArray($project);
        }, $data);
    }
}