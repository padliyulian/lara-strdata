<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\Tree\Tree;

class TreeTest extends TestCase
{
    public function test_should_return_root_value_when_first_initialized()
    {
        $tree = new Tree('A');
        $this->assertEquals('A', $tree->root->value);
    }

    public function test_should_return_true_when_searching_for_a()
    {
        $tree = new Tree('A');
        $this->assertEquals(true, $tree->search('A'));
        $this->assertEquals(false, $tree->search('B'));
    }

    public function test_should_return_true_when_searching_for_b()
    {
        $tree = new Tree('A');
        $tree->root->addChild('B');
        $this->assertEquals(true, $tree->search('B'));
    }

    public function test_should_return_true_when_searching_for_mp3()
    {
        $tree = new Tree('Musik');
        $tree->root->addChild('Pop');
        $tree->root->addChild('Rock');
        $tree->root->children[1]->addChild('korn.mp3');

        $this->assertEquals(true, $tree->search('korn.mp3'));
        $this->assertEquals(array('Musik','Pop','Rock','korn.mp3'), $tree->path);
    }
}