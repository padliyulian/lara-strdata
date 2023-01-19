<?php

namespace App\Http\Controllers\LinkedList;

use App\Http\Controllers\Controller;

class Node extends Controller
{
    public $value;
    public $nextNode;

    public function __construct($value)
    {
        $this->value = $value;
        $this->nextNode = null;
    }
}
