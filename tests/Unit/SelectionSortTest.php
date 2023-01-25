<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\Sort\SelectionSort;

class SelectionSortTest extends TestCase
{
    public function test_selection_sort()
    {
        $sr = new SelectionSort;

        $res1 = $sr->selectionSort(array());
        $this->assertEquals(array(), $res1);

        $res2 = $sr->selectionSort(array(1,2,3,4,5));
        $this->assertEquals(array(1,2,3,4,5), $res2);

        $res3 = $sr->selectionSort(array(5,3,6,2,10));
        $this->assertEquals(array(2,3,5,6,10), $res3);
    }
}