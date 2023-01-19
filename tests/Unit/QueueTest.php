<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\DoublyLinkedList\Queue;

class QueueTest extends TestCase
{
    public function test_enqueue()
    {
        $queue = new Queue();

        $queue->enqueue("a");
        $queue->enqueue("b");
        $queue->enqueue("c");
        
        $this->assertEquals("a", $queue->read());
    }

    public function test_dequeue()
    {
        $queue = new Queue();

        $queue->enqueue("a");
        $queue->enqueue("b");
        $queue->enqueue("c");

        $queue->dequeue();
        
        $this->assertEquals("b", $queue->read());
    }
}
