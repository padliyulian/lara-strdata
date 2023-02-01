<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\Stack\Recursion;

class RecursionTest extends TestCase
{
    public function test_recursion()
    {
        $recursion = new Recursion;
        $res = $recursion->factorial(5);
        $this->assertEquals(120, $res);
    }
}