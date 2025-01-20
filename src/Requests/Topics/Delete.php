<?php 

namespace D4veR\BcfPhp\Requests\Topics;

use D4veR\BcfPhp\Data\Topic;

use Saloon\Enums\Method;

class DeleteTopicRequest extends GetTopicsRequest
{
    protected Method $method = Method::DELETE;

    public function __construct(
        protected readonly string $project_id,
        protected readonly string $topic_id,
    ) {
        parent::__construct($project_id, $topic_id);
    }
}