<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\Stack\Stack;

class StackTest extends TestCase
{
    public function test_with_null()
    {
        $stack = new Stack;
        $res = $stack->read();
        $this->assertEquals(null, $res);
    }

    public function test_push()
    {
        $stack = new Stack;
        $stack->push(1);
        $res = $stack->read();
        $this->assertEquals(1, $res);
    }

    public function test_pop()
    {
        $stack = new Stack;

        $stack->push(1);
        $stack->push(2);
        $stack->push(3);
        $stack->push(4);
        $stack->push(5);

        $res = $stack->read();
        $this->assertEquals(5, $res);

        $stack->pop();
        $re2 = $stack->read();
        $this->assertEquals(4, $re2);
    }
}