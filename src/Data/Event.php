<?php

namespace D4veR\BcfPhp\Data;

class EventType {
    public function __construct(
        public readonly string $type,
        public readonly string $value,
    ) {
        //
    }

    public static function fromArray(array $data): self
    {
        return new self(
            type: $data['type'],
            value: $data['value'],
        );
    }
}

class Event
{
    public function __construct(
        public readonly string $topic_guid,
        public readonly array $events,
        public readonly string $date,
        public readonly string $author,
        public readonly ?string $comment_guid = null,
    ) {
        //
    }

    public static function fromArray(array $data): self
    {
        return new self(
            topic_guid: $data['topic_guid'],
            events: array_map(fn($event) => EventType::fromArray($event), $data['events']),
            date: $data['date'],
            author: $data['author'],
            comment_guid: $data['comment_guid'] ?? [],
        );
    }
}
