<?php

namespace App\Http\Controllers\HashTable;

use App\Http\Controllers\Controller;

class Hash extends Controller
{
    public function twoSum($nums, $target)
    {
        $hashNums = array();

        for ($i=0; $i < count($nums) ; $i++) { 
            $hashNums[$nums[$i]] = $i;
            $secondElement = $target - $nums[$i];

            if ($secondElement < count($nums)) {
                if ($hashNums[$secondElement] != $i) {
                    return array_reverse(array($i, $hashNums[$secondElement]));
                }
            }
        }
    }
}
