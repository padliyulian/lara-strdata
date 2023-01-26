<?php

namespace App\Http\Controllers\Sort;

use App\Http\Controllers\Controller;

class InsertionSort extends Controller
{
    public function sort($arr)
    {
        $arraySize = count($arr) - 1;

        for ($i=1; $i < $arraySize; $i++) { 
            $tmpValue = $arr[$i];
            $position = $i - 1;

            while ($position >= 0) {
                if ($arr[$position] > $tmpValue) {
                    $arr[$position + 1] = $arr[$position];
                    $position--;
                } else {
                    break;
                }
            }

            $arr[$position + 1] = $tmpValue;
        }

        return $arr;
    }
}