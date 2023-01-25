<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\Sort\BubbleSort;

class BubbleSortTest extends TestCase
{
    public function test_bubble_sort()
    {
        $bs = new BubbleSort;

        $res1 = $bs->sort(array());
        $this->assertEquals(array(), $res1);

        $res2 = $bs->sort(array(1,2,3,4,5));
        $this->assertEquals(array(1,2,3,4,5), $res2);

        $res3 = $bs->sort(array(5,3,6,2,10));
        $this->assertEquals(array(2,3,5,6,10), $res3);
    }
}