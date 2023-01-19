<?php

namespace App\Http\Controllers\BinnarySearch;

use App\Http\Controllers\Controller;

class SimpleSearch extends Controller
{
    public function search(array $list, int $num)
    {
        $low = 0;
        $high = count($list) - 1;

        while ($low <= $high) {
            if ($list[$low] == $num) return $low;
            $low++;
        }

        return null;
    }
}
