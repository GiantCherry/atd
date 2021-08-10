<?php

namespace App\LinkedListTests;

use SplDoublyLinkedList;
use function App\LinkedList\binToDec;
use PHPUnit\Framework\TestCase;

class LinkedListTest extends TestCase
{
    public function testBinToDec()
    {
        $linkedList1 = new SplDoublyLinkedList();
        $linkedList1->add(0, 0);
        $this->assertEquals(0, binToDec($linkedList1));

        $linkedList2 = new SplDoublyLinkedList();
        $linkedList2->add(0, 1);
        $this->assertEquals(1, binToDec($linkedList2));

        $linkedList3 = new SplDoublyLinkedList();
        $linkedList3->add(0, 1);
        $linkedList3->add(1, 0);
        $this->assertEquals(2, binToDec($linkedList3));

        $linkedList4 = new SplDoublyLinkedList();
        $linkedList4->add(0, 1);
        $linkedList4->add(1, 1);
        $linkedList4->add(2, 0);
        $linkedList4->add(3, 1);
        $linkedList4->add(4, 0);
        $linkedList4->add(5, 1);
        $this->assertEquals(53, binToDec($linkedList4));
    }
}
