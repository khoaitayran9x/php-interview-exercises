<?php

declare(strict_types=1);

namespace Exercises\LinkedList;

/**
 * Represents single item in a LinkedList.
 *
 * @property mixed $data
 * @property self|null $next default is null when Node is not provided
 */

final class NodeComplete
{
    public $next;
    public $data;
    public function __construct($data, ?self $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }
}
