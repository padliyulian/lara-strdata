<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\DoublyLinkedList\DoublyLinkedList;

class DoublyLinkedListTest extends TestCase
{
    public function test_doubly_linked_list()
    {
        $doublyLinkedList = new DoublyLinkedList();

        $doublyLinkedList->append("a");
        if ($doublyLinkedList->head != null) {
            $res =  $doublyLinkedList->head->value;
            $this->assertEquals("a", $res);
        }

        $doublyLinkedList->append("b");
        if ($doublyLinkedList->head != null) {
            $res =  $doublyLinkedList->head->value;
            $this->assertEquals("a", $res);
        }

        $doublyLinkedList->removeHead();
        if ($doublyLinkedList->head != null) {
            $res = $doublyLinkedList->head->value;
            $this->assertEquals("b", $res);
        }
    }
}
