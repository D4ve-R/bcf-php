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

        // is a list of projects
        if (isset($data[0])) {
            return array_map(function ($project) {
                return new Project(
                    name: $project['name'],
                    project_id: $project['project_id'],
                    authorization: $project['authorization'],
                );
            }, $data);
        }

        return [];
    }
}