<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\HashTable\Hash;

class HashTableTest extends TestCase
{
    public function test_hash_table()
    {
        $ht = new Hash();

        $res = $ht->twoSum(array(1,2,3), 5);
        $this->assertEquals(array(1,2), $res);

        $res2 = $ht->twoSum(array(1,2,3,4,5,6), 10);
        $this->assertEquals(array(3,5), $res2);
    }
}
