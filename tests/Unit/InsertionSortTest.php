<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\Sort\InsertionSort;

class InsertionSortTest extends TestCase
{
    public function test_insertion_sort()
    {
        $is = new InsertionSort;

        $res1 = $is->sort(array());
        $this->assertEquals(array(), $res1);

        $res2 = $is->sort(array(1,2,3,4,5));
        $this->assertEquals(array(1,2,3,4,5), $res2);

        $res3 = $is->sort(array(5,3,6,2,10));
        $this->assertEquals(array(2,3,5,6,10), $res3);
    }
}