<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\BinnarySearchTree\Node;

class NodeTreeTest extends TestCase
{
    public function test_should_return_value_1_if_we_initiate_with_1()
    {
        $res = new Node(1);
        $this->assertEquals(1, $res->value);
    }

    public function test_should_return_nil_on_left_where_first_initiate()
    {
        $res = new Node(1);
        $this->assertEquals(null, $res->left);
    }

    public function test_should_return_nil_on_right_where_first_initiate()
    {
        $res = new Node(1);
        $this->assertEquals(null, $res->right);
    }
}