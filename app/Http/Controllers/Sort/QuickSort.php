<?php

namespace App\Http\Controllers\Sort;

use App\Http\Controllers\Controller;

class QuickSort extends Controller
{
    public function sort($arr)
    {
        if (count($arr) < 2) {
            return $arr;
        } else {
            $pivot = $arr[0];
            $less = array();
            $greater = array();

            for ($i=0; $i < count($arr) - 1; $i++) { 
                if ($arr[$i + 1] <= $pivot) {
                    $less[] = $arr[$i + 1];
                } else {
                    $greater[] = $arr[$i + 1];
                }
            }

            return array_merge($this->sort($less), array($pivot), $this->sort($greater));
        }
        
    }
}