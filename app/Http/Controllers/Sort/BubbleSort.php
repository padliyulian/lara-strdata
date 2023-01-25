<?php

namespace App\Http\Controllers\Sort;

use App\Http\Controllers\Controller;

class BubbleSort extends Controller
{
    public function sort($arr)
    {
        $unorderUntilIndex = count($arr) - 1;

        while ($unorderUntilIndex >= 0) {
            $index = 0;

            while ($index < $unorderUntilIndex) {
                $nextIndex = $index + 1;

                if ($arr[$index] > $arr[$nextIndex]) {
                    $tmp = $arr[$index];
                    $arr[$index] = $arr[$nextIndex];
                    $arr[$nextIndex] = $tmp;
                }

                $index++;
            }

            $unorderUntilIndex--;
        }

        return $arr;
    }
}