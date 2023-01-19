<?php

namespace App\Http\Controllers\DoublyLinkedList;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DoublyLinkedList\Node;

class DoublyLinkedList extends Controller
{
    public $head;
    public $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function append($value)
    {
        $newNode = new Node($value);

        if ($this->tail == null) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $newNode->prevNode = $this->tail;
            $this->tail->nextNode = $newNode;
            $this->tail = $newNode;
        }
    }

    public function removeHead()
    {
        $removeHead = $this->head;
        if ($this->head) {
            $this->head = $this->head->nextNode;
        }
        
        if ($removeHead) {
            return $removeHead->value;
        }
    }
}
