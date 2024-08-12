<?php

use App\ArrayOutlier;
use PHPUnit\Framework\TestCase;

class ArrayOutlierTest extends TestCase
{
    public function testArrayOutlier() {
        $array_outlier = new ArrayOutlier;
        $result1 = $array_outlier->find([100, 101, 102]);
        $result2 = $array_outlier->find([1, 9, 27, 81, 100]);
        $result3 = $array_outlier->find([2, 4, 0, 100, 4, 11, 2602, 36]);
        $result4 = $array_outlier->find([160, 3, 1719, 19, 11, 13, -21]);
        $this->assertSame(101, $result1);
        $this->assertSame(100, $result2);
        $this->assertSame(11, $result3);
        $this->assertSame(160, $result4);
    }
}