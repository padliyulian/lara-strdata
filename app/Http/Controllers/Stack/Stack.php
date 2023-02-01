<?php

namespace App\Http\Controllers\Stack;

use App\Http\Controllers\Controller;

class Stack extends Controller
{
    public $stack;

    public function __construct()
    {
        $this->stack = array();
    }

    public function push($val)
    {
        // $this->stack[] = $val;
        array_push($this->stack, $val);
    }

    public function pop()
    {
        array_pop($this->stack);
    }

    public function read()
    {
        if (count($this->stack)) {
            return $this->stack[count($this->stack) - 1];
        } else {
            return null;
        }
    }
}