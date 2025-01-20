<?php

namespace D4veR\BcfPhp\Requests\Projects;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class UpdateProjectsRequest extends GetProjectsRequest implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function __construct(
        protected string $project_id,
        protected string $name,
        protected string $authorization
    ) {
        parent::__construct($project_id);
    }

    public function resolveBody(): array
    {
        return [
            'name' => $this->name,
            'authorization' => $this->authorization,
        ];
    }
}
