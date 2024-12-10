<?php

namespace D4veR\BcfPhp\Requests\Projects;

use Saloon\Http\Request;

class BaseRequest extends Request
{
    public function resolveEndpoint(): string
    {
        return '/projects';
    }
}