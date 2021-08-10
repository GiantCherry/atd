<?php

namespace App\StackTests;

use SplStack;
use function App\Stack\maxStack;
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testBinToDec()
    {
        $stackOperations1 = [1 => 'push', 7 => 'push', 0 => 'pop'];
        $this->assertEquals([], maxStack($stackOperations1));

        $stackOperations2 = [2 => 'push', 1 => 'push', 0 => 'max', 3 => 'pop', 4 => 'max'];
        $this->assertEquals([2, 2], maxStack($stackOperations2));

        $stackOperations3 = [6 => 'push', 1 => 'push', 7 => 'push', 3 => 'max', 5=> 'pop', 4 => 'max'];
        $this->assertEquals([7, 6], maxStack($stackOperations3));

        $stackOperations4 = [1 => 'push', 2 => 'push', 0 => 'max', 3 => 'pop', 4 => 'max'];
        $this->assertEquals([2, 1], maxStack($stackOperations4));

        $stackOperations5 = [2 => 'push', 3 => 'push', 9 => 'push', 7 => 'push', 4 => 'push', 10 => 'max', 11 => 'max', 12 => 'max', 13 => 'pop', 14 => 'max'];
        $this->assertEquals([9, 9, 9, 9], maxStack($stackOperations5));
    }
}
