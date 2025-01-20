<?php

namespace D4veR\BcfPhp\Data;

final class ProjectExtensions
{
    public function __construct(
        public array $topicType = [],
        public array $topicStatus = [],
        public array $topicLabel = [],
        public array $snippetType = [],
        public array $priority = [],
        public array $users = [],
        public array $stage = [],
        public array $projectActions = [],
        public array $topicActions = [],
        public array $commentActions = []
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            $data['topic_type'] ?? [],
            $data['topic_status'] ?? [],
            $data['topic_label'] ?? [],
            $data['snippet_type'] ?? [],
            $data['priority'] ?? [],
            $data['users'] ?? [],
            $data['stage'] ?? [],
            $data['project_actions'] ?? [],
            $data['topic_actions'] ?? [],
            $data['comment_actions'] ?? []
        );
    }
}