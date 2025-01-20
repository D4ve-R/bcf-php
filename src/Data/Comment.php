<?php

namespace D4veR\BcfPhp\Data;

class Comment
{
    public function __construct(
        public readonly string $guid,
        public readonly string $comment,
        public readonly string $date,
        public readonly string $author,
        public readonly string $topic_guid,
    ) {
        //
    }

    public static function fromArray(array $data): self
    {
        return new self(
            guid: $data['guid'],
            comment: $data['comment'],
            date: $data['date'],
            author: $data['author'],
            topic_guid: $data['topic_guid'],
        );
    }
}
