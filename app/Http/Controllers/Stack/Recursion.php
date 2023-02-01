<?php

namespace App\Http\Controllers\Stack;

use App\Http\Controllers\Controller;

class Recursion extends Controller
{
    public function factorial(int $value) : int
    {
        if ($value === 1) {
            return $value;
        } else {
            return $value * $this->factorial($value - 1);
        }
    }
}