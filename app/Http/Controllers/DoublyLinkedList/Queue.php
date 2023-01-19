<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\DoublyLinkedList;

use App\Http\Controllers\Controller;

class Queue extends Controller
{
    public $list;

    public function __construct()
    {
        $this->list = new DoublyLinkedList;
    }

    public function enqueue($element)
    {
        $this->list->append($element);
    }

    public function dequeue()
    {
        $this->list->removeHead();
    }

    public function read()
    {
        if ($this->list->head) {
            return $this->list->head->value;
        } else {
            return null;
        }
    }
}
