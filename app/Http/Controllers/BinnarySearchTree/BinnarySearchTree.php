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

    public function delete($value, $node = null, $parentNode = null, $mark = null)
    {
        if (!$this->root) return null;

        if (!$node) $node = $this->root;

        if ($value == $node->value) {
            $deletedNode = $node;

            if ($node == $this->root) {
                $this->root = null;
            } else {               
                if (!$node->left || !$node->right) {
                    $parentNode->$mark = $node->left ?? $node->right;
                } else {
                    $parentNode->$mark->value = $this->__leftMostNode($node->right)->value;
                }
            }
        } else {
            if ($value < $this->root->value) {
                $deletedNode = $this->delete($value, $node->left, $node, 'left');
            } else if ($value > $this->root->value) {
                $deletedNode = $this->delete($value, $node->right, $node, 'right');
            }
        }

        return $deletedNode;
    }

    public function __leftMostNode($node)
    {
        if ($node && !$node->left) {
            return $node;
        } else {
            return $this->__leftMostNode($node->left);
        }
    }
}