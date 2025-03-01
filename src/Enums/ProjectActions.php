<?php

namespace D4veR\BcfPhp\Enums;

enum ProjectActions: string
{
    case Update = 'update';
    case CreateTopic = 'create_topic';
    case CreateDocument = 'create_document';
}