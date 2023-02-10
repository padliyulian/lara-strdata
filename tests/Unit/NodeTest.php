<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\Tree\Node;

class NodeTest extends TestCase
{
    public function test_should_return_a_when_initialized_with_value_a()
    {
        $node = new Node('A');
        $this->assertEquals('A', $node->value);
    }

    public function test_should_return_empty_array_when_first_initialized()
    {
        $node = new Node('A');
        $this->assertEquals(array(), $node->children);
    }

    public function test_should_add_value_to_node_children()
    {
        $node = new Node('A');
        $node->addChild('B');
        $this->assertEquals('B', $node->children[0]->value);
    }
}