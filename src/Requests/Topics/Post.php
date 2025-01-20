<?php 

namespace D4veR\BcfPhp\Requests\Topics;

use D4veR\BcfPhp\Data\Topic;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class PostTopicRequest extends BaseRequest implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected readonly string $project_id,
        protected readonly Topic $topic,
    ) {
        parent::__construct($project_id);
    }

    public function resolveBody(): Topic
    {
        return $this->topic;
    }
}