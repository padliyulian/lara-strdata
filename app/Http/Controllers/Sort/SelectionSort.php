<?php

namespace App\Http\Controllers\Sort;

use App\Http\Controllers\Controller;

class SelectionSort extends Controller
{
    public function findSmallest($arr)
    {
        $smallest = $arr[0];
        $smallestIndex = 0;

        for ($i=0; $i < count($arr); $i++) { 
            if ($arr[$i] < $smallest) {
                $smallest = $arr[$i];
                $smallestIndex = $i;
            }
        }

        return $smallestIndex;
    }

    public function selectionSort($arr)
    {
        $counter = count($arr);
        $newArray = array();

        for ($i=0; $i < $counter; $i++) { 
            $smallest = $this->findSmallest($arr);
            $newArray[] = $arr[$smallest];
            array_splice($arr, $smallest, 1); 
        }

        return $newArray;
    }
}