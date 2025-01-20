<?php

namespace D4veR\BcfPhp\Data;

class Topic
{
    public function __construct(
        public readonly string $guid,
        public readonly string $title,
        public readonly string $creation_date,
        public readonly string $creation_author,
        public readonly ?string $topic_type,
        public readonly ?string $topic_status,
        public readonly ?string $stage,
        public readonly ?string $priority,
        public readonly ?string $description,
        public readonly string $modified_date,
        public readonly string $modified_author,
        public readonly ?string $due_date,
        public readonly ?string $assigned_to,
        public readonly ?array $labels,
        public readonly ?array $reference_links,
        public readonly ?object $authorization = null,
    ) {
        //
    }

    public static function fromArray(array $data): self
    {
        return new self(
            guid: $data['guid'],
            title: $data['title'],
            creation_date: $data['creation_date'],
            creation_author: $data['creation_author'],
            topic_type: $data['topic_type'] ?? null,
            topic_status: $data['topic_status'] ?? null,
            stage: $data['stage'] ?? null,
            priority: $data['priority'] ?? null,
            description: $data['description'] ?? null,
            modified_date: $data['modified_date'],
            modified_author: $data['modified_author'],
            due_date: $data['due_date'] ?? null,
            assigned_to: $data['assigned_to'] ?? null,
            labels: $data['labels'] ?? null,
            reference_links: $data['reference_links'] ?? null,
            authorization: $data['authorization'] ?? null,
        );
    }
}
