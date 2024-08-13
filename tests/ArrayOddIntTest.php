<?php

use App\ArrayOddInt;
use PHPUnit\Framework\TestCase;

class ArrayOddIntTest extends TestCase 
{
    public function testFindIt(){
        $array_odd_int = new ArrayOddInt;

        $result1 = $array_odd_int->findIt([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]);
        $result2 = $array_odd_int->findIt([1,1,2,-2,5,2,4,4,-1,-2,5]);
        $result3 = $array_odd_int->findIt([20,1,1,2,2,3,3,5,5,4,20,4,5]);
        $result4 = $array_odd_int->findIt([10]);
        $result5 = $array_odd_int->findIt([1,1,1,1,1,1,10,1,1,1,1]);

        $this->assertSame(5, $result1);
        $this->assertSame(-1, $result2);
        $this->assertSame(5, $result3);
        $this->assertSame(10, $result4);
        $this->assertSame(10, $result5);
    }
}