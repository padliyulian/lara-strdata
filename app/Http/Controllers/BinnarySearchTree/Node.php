<?php

namespace App\Http\Controllers\BinnarySearchTree;

use App\Http\Controllers\Controller;

class Node extends Controller
{
    public $value;
    public $left;
    public $right;

    public function __construct($value)
    {
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }
}