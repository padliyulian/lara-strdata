<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\Sort\QuickSort;

class QuickSortTest extends TestCase
{
    public function test_quick_sort()
    {
        $qs = new QuickSort;

        $res1 = $qs->sort(array());
        $this->assertEquals(array(), $res1);

        $res2 = $qs->sort(array(1,2,3,4,5));
        $this->assertEquals(array(1,2,3,4,5), $res2);

        $res3 = $qs->sort(array(5,3,6,2,10));
        $this->assertEquals(array(2,3,5,6,10), $res3);
    }
}