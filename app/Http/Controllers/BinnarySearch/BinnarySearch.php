<?php

namespace App\Http\Controllers\BinnarySearch;

use App\Http\Controllers\Controller;

class BinnarySearch extends Controller
{
    public function search(array $list, int $num)
    {
        $low = 0;
        $high = count($list) - 1;

        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);
            $guess = $list[$mid];

            if ($guess == $num) return $mid;

            if ($guess > $num) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }

        return null;
    }
}