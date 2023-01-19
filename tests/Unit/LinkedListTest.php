<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\LinkedList\LinkedList;

class LinkedListTest extends TestCase
{
    public function test_linked_list()
    {
        $list = array("a","b","c","d");
        $linkedList = new LinkedList();

        $linkedList->insertAt(0, "a");
        $linkedList->insertAt(1, "b");
        $linkedList->insertAt(2, "c");
        $linkedList->insertAt(3, "d");

        foreach ($list as $index => $value) { 
            $res = $linkedList->readAt($index);
            $this->assertEquals($value, $res);
        }

        foreach ($list as $index => $value) { 
            $res = $linkedList->indexOf($value);
            $this->assertEquals($index, $res);
        }

        unset($list[3]);
        $linkedList->deleteAt(3);
        foreach ($list as $index => $value) { 
            $res = $linkedList->readAt($index);
            $this->assertEquals($value, $res);
        }
    }
}
