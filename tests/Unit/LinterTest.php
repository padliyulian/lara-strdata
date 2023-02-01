<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\Stack\Linter;

class LinterTest extends TestCase
{
    public function test_with_empty_code()
    {
        $linter = new Linter;
        $code = "";
        $res = $linter->lint($code);
        $this->assertEquals(true, $res);
    }

    public function test_with_open_brace()
    {
        $linter = new Linter;
        $code = "(";
        $res = $linter->lint($code);
        $this->assertEquals(false, $res);
    }

    public function test_with_close_brace()
    {
        $linter = new Linter;
        $code = ")";
        $res = $linter->lint($code);
        $this->assertEquals(false, $res);
    }

    public function test_with_two_brace()
    {
        $linter = new Linter;
        $code = "()";
        $res = $linter->lint($code);
        $this->assertEquals(true, $res);
    }
}