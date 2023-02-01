<?php

namespace App\Http\Controllers\Stack;

use App\Http\Controllers\Controller;

class Linter extends Controller
{
    public $stack;

    public function __construct()
    {
        $this->stack = new Stack;
    }

    public function lint(string $code) : bool
    {
        $codes = str_split($code);

        foreach ($codes as $item) {
            echo $item . PHP_EOL;
            if ($item == "(") {
                $this->stack->push($item);
            } else if ($item == ")") {
                if ($this->stack->read() == "(") {
                    $this->stack->pop();
                } else {
                    return false;
                }
            }
        }

        if ($this->stack->read() == null) {
            return true;
        } else {
            return false;
        }
    }
}