<?php

namespace App\Http\Controllers\Stack;

use App\Http\Controllers\Controller;

class Linter extends Controller
{
    public $stack;
    public $openBrace;
    public $closeBrace;

    public function __construct()
    {
        $this->stack = new Stack;
        $this->openBrace = array('(','{');
        $this->closeBrace = array(')','}');
    }

    public function lint(string $code) : bool
    {
        $codes = str_split($code);

        foreach ($codes as $item) {
            // echo $item . PHP_EOL;
            if (in_array($item, $this->openBrace)) {
                $this->stack->push($item);
            } else if (in_array($item, $this->closeBrace)) {
                if (in_array($this->stack->read(), $this->openBrace)) {
                    $popedChar = $this->stack->read();
                    $this->stack->pop();

                    return $this->isMatched($popedChar, $item);
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

    private function isMatched($openBrace, $closeBrace)
    {
        $matchedBraces = array("(" => ")", "{" => "}");
        if ($matchedBraces[$openBrace] == $closeBrace) {
            return true;
        } else {
            return false;
        }
    }
}