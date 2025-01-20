<?php

namespace D4veR\BcfPhp\Requests\Topics;

use D4veR\BcfPhp\Data\Topic;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class UpdateTopicRequest extends GetTopicsRequest implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function __construct(
        protected readonly string $project_id,
        protected readonly string $topic_id,
        protected readonly Topic $topic
    ) {
        parent::__construct($project_id, $topic_id);
    }

    public function resolveBody()
    {
        return $this->topic;
    }
}
