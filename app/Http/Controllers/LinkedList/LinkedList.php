<?php

namespace App\Http\Controllers\LinkedList;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LinkedList\Node;

class LinkedList extends Controller
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function insertAt($index, $value)
    {
        $newNode = new Node($value);

        if ($index == 0) {
            $newNode->nextNode = $this->head;
            $this->head = $newNode;
        }

        $currentNode = $this->head;
        $currentIndex = 0;

        while ($currentIndex < ($index - 1)) {
            if ($currentNode != null) {
                $currentNode = $currentNode->nextNode;
            }
            $currentIndex++;
        }

        $newNode->nextNode = $currentNode->nextNode;
        $currentNode->nextNode = $newNode;
    }

    public function readAt($index)
    {
        // a,b,c,d
        // 0,1,2,3

        $currentNode = $this->head;
        $currentIndex = 0;

        while ($currentIndex < $index) {
            if ($currentNode != null) {
                $currentNode = $currentNode->nextNode;
            }
            $currentIndex++;
        }

        if ($currentNode != null) {
            return $currentNode->value;
        }
    }

    public function indexOf($value)
    {
        $status = true;
        $currentNode = $this->head;
        $currentIndex = 0;

        if ($currentNode != null) {
            if ($currentNode->value == $value) {
                $status = false;
                return $currentIndex;
            }
        }

        while ($status) {
            if ($currentNode != null) {
                $currentNode = $currentNode->nextNode;
            }
            $currentIndex++;

            if ($currentNode != null) {
                if ($currentNode->value == $value) {
                    $status = false;
                    return $currentIndex;
                }
            }
        }
    }

    public function deleteAt($index)
    {
        if ($index == 0) {
            if ($this->head != null) {
                $this->head = $this->head->nextNode;
                return;
            }
        }

        $currentNode = $this->head;
        $currentIndex = 0;

        while ($currentIndex < ($index - 1)) {
            if ($currentNode != null) {
                $currentNode = $currentNode->nextNode;
            }
            
            $currentIndex++;
        }

        $nodeAfterDeleteNode = $currentNode->nextNode->nextNode;
        $currentNode->nextNode = $nodeAfterDeleteNode;
    }
}
