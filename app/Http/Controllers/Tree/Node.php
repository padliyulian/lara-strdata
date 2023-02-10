<?php

namespace App\Http\Controllers\Tree;

use App\Http\Controllers\Controller;

class Node extends Controller
{
    public $value;
    public $children;

    public function __construct($value)
    {
        $this->value = $value;
        $this->children = array();
    }

    public function addChild($value)
    {
        $this->children[] = new Node($value);
    }
}