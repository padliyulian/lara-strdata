<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\BinnarySearchTree\BinnarySearchTree;

class BinnarySearchTreeTest extends TestCase
{
    public function test_should_return_null_when_first_initiate()
    {
        $bst = new BinnarySearchTree();
        $this->assertEquals(null, $bst->root);
    }

    public function test_should_return_1_when_insert_1()
    {
        $bst = new BinnarySearchTree();
        $bst->insert(1);
        $this->assertEquals(1, $bst->root->value);
    }

    public function test_should_add_value_to_left_node_when_add_value_smaller_than_root()
    {
        $bst = new BinnarySearchTree();
        $bst->insert(2);
        $bst->insert(1);
        $this->assertEquals(1, $bst->root->left->value);
    }

    public function test_should_add_value_to_right_node_when_add_value_bigger_than_root()
    {
        $bst = new BinnarySearchTree();
        $bst->insert(1);
        $bst->insert(2);
        $this->assertEquals(2, $bst->root->right->value);
    }

    public function test_should_add_value_to_left_grandchild_node_when_add_value_smaller_than_acestor_left_node()
    {
        $bst = new BinnarySearchTree();
        $bst->insert(3);
        $bst->insert(2);
        $bst->insert(1);
        $this->assertEquals(1, $bst->root->left->left->value);
    }

    public function test_should_add_value_to_right_grandchild_node_when_add_value_bigger_than_acestor_right_node()
    {
        $bst = new BinnarySearchTree();
        $bst->insert(1);
        $bst->insert(2);
        $bst->insert(3);
        $this->assertEquals(3, $bst->root->right->right->value);
    }

    public function test_final()
    {
        $bst = new BinnarySearchTree();
        $bst->insert(4);
        $bst->insert(2);
        $bst->insert(6);
        $bst->insert(1);
        $bst->insert(3);
        $bst->insert(5);
        $bst->insert(7);
        $this->assertEquals(3, $bst->root->left->right->value);
    }
}