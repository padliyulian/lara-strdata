<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\BinnarySearch\BinnarySearch;

class BinnarySearchTest extends TestCase
{
    public function test_binnary_search()
    {
        // log2^n , log2^3
        $binnarySearch = new BinnarySearch;
        $list = array(1,2,3,4,5,6,7,8,9,10);
        $testCase = array(-1,1,2,3,4,5,6,7,8,9,10);
        
        foreach ($testCase as $item) {
            $res = $binnarySearch->search($list, $item);
            if ($res == null) {
                $this->assertEquals(null, $res);
            } else {
                $this->assertEquals($item - 1, $res);
            }
        }
    }
}
