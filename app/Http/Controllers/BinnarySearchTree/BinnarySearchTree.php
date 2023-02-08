<?php

namespace App\Http\Controllers\BinnarySearchTree;

use App\Http\Controllers\Controller;

class BinnarySearchTree extends Controller
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function insert($value, $node = null)
    {
        if (!$node) $node = $this->root;
        
        if (!$this->root) {
            $this->root = new Node($value);
        } else {
            $newNode = new Node($value);
            if ($newNode->value < $node->value) {
                if (!$node->left) {
                    $node->left = $newNode;
                } else {
                    $this->insert($value, $node->left);
                }
            } else if ($newNode->value > $node->value) {
                if (!$node->right) {
                    $node->right = $newNode;
                } else {
                    $this->insert($value, $node->right);
                }
            }
        }
    }
}