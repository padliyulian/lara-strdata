<?php

namespace App\Http\Controllers\DoublyLinkedList;

use App\Http\Controllers\Controller;

class Node extends Controller
{
    public $value;
    public $nextNode;
    public $prevNode;

    public function __construct($value)
    {
        $this->value = $value;
        $this->nextNode = null;
        $this->prevNode = null;
    }
}
