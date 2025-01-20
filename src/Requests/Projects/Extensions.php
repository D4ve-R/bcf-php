<?php

namespace D4veR\BcfPhp\Requests\Projects;

use D4veR\BcfPhp\Data\ProjectExtensions;
use Saloon\Http\Response;

class ExtensionsProjectsRequest extends BaseRequest
{
    public function __construct(
        protected string $project_id,
        protected string $name,
        protected string $authorization
    ) {
        parent::__construct($project_id);
    }

    public function resolveEndpoint(): string
    {
        return parent::resolveEndpoint().'/'.$this->project_id.'/extensions';
    }

    public function createDtoFromResponse(Response $response): ProjectExtensions
    {
        $extensions = $response->json();

        return ProjectExtensions::fromArray($extensions);
    }
}
