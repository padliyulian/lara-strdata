<?php

namespace App\Http\Controllers\Tree;

use App\Http\Controllers\Controller;

class Tree extends Controller
{
    public $root;

    public function __construct($value)
    {
        $this->root = new Node($value);
    }

    public function search($value, $node = null)
    {
        if (!$node) $node = $this->root;

        if ($value == $node->value) return true;
        if (!count($node->children)) return false;
        
        $status = false;
        foreach ($node->children as $child) {
            $status = $this->search($value, $child);
        }

        return $status;
    }
}