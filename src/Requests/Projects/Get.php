<?php

namespace D4veR\BcfPhp\Requests\Projects;

use D4veR\BcfPhp\Data\Project;
use Saloon\Enums\Method;
use Saloon\Http\Response;

class GetProjectsRequest extends BaseRequest
{
    protected Method $method = Method::GET;

    public function __construct(
        protected readonly string $project_id
    ) {
        //
    }

    public function resolveEndpoint(): string
    {
        return parent::resolveEndpoint().'/'.$this->project_id;
    }

    public function createDtoFromResponse(Response $response): Project
    {
        $project = $response->json();

        return Project::fromArray($project);
    }
}
