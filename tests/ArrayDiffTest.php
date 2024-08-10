<?php

use App\ArrayDifferentiator;
use PHPUnit\Framework\TestCase;

class ArrayDiffTest extends TestCase
{
    public function testArrayDiff() {
        $array_differentiator = new ArrayDifferentiator;
        $this->assertSame([2], $array_differentiator->arrayDiff([1,2], [1]), "a was [1,2], b was [1], expected [2]");
        $this->assertSame([2,2], $array_differentiator->arrayDiff([1,2,2], [1]), "a was [1,2,2], b was [1], expected [2,2]");
        $this->assertSame([1], $array_differentiator->arrayDiff([1,2,2], [2]), "a was [1,2,2], b was [2], expected [1]");
        $this->assertSame([1,2,2], $array_differentiator->arrayDiff([1,2,2], []), "a was [1,2,2], b was [], expected [1,2,2]");
        $this->assertSame([], $array_differentiator->arrayDiff([], [1,2]), "a was [], b was [1,2], expected []");
        $this->assertSame([3], $array_differentiator->arrayDiff([1, 2, 3], [1,2]), "a was [1, 2, 3], b was [1,2], expected [3]");
    }
}