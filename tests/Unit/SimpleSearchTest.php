<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\BinnarySearch\SimpleSearch;

class SimpleSearchTest extends TestCase
{
    public function test_simple_search()
    {
        // log n
        $simpleSearch = new SimpleSearch;
        $list = array(1,2,3,4,5,6,7,8,9,10);
        $testCase = array(-1,1,2,3,4,5,6,7,8,9,10);
        
        foreach ($testCase as $item) {
            $res = $simpleSearch->search($list, $item);
            if ($res == null) {
                $this->assertEquals(null, $res);
            } else {
                $this->assertEquals($item - 1, $res);
            }
        }
    }
}
