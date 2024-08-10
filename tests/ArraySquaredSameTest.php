<!-- Given two arrays a and b write a function comp(a, b) (orcompSame(a, b)) that checks whether the two arrays have the "same" elements, with the same multiplicities (the multiplicity of a member is the number of times it appears). "Same" means, here, that the elements in b are the elements in a squared, regardless of the order.

Examples
Valid arrays
a = [121, 144, 19, 161, 19, 144, 19, 11]  
b = [121, 14641, 20736, 361, 25921, 361, 20736, 361]
comp(a, b) returns true because in b 121 is the square of 11, 14641 is the square of 121, 20736 the square of 144, 361 the square of 19, 25921 the square of 161, and so on. It gets obvious if we write b's elements in terms of squares:

a = [121, 144, 19, 161, 19, 144, 19, 11] 
b = [11*11, 121*121, 144*144, 19*19, 161*161, 19*19, 144*144, 19*19]
Invalid arrays
If, for example, we change the first number to something else, comp is not returning true anymore: -->

<?php

use App\ArraySquaredSame;
use PHPUnit\Framework\TestCase;

class ArraySquaredSameTest extends TestCase
{
    public function testArraySquaredSame() {
        $array_squared_same = new ArraySquaredSame;
        $a1 = [121, 144, 19, 161, 19, 144, 19, 11];
        $a2 = [11*11, 121*121, 144*144, 19*19, 161*161, 19*19, 144*144, 19*19];
        $result = $array_squared_same->comp($a1, $a2);
        $this->assertEquals(true, $result);

        $a3 = [121, 144, 19, 161, 19, 144, 19, 11];
        $a4 = [11*21, 121*121, 144*144, 19*19, 161*161, 19*19, 144*144, 19*19];
        $result2 = $array_squared_same->comp($a3, $a4);
        $this->assertEquals(false, $result2);

        $a5 = [46,6,57,75,59,47,69,49,32,63,14,31,31,74,41,27,56,93,19,33,42,44,77];
        $a6 = [2116,36,3249,5625,3481,2209,4761,2401,1024,3969,196,962,961,5476,1681,729,3136,8649,361,1089,1764,1156,5929];
        $result3 = $array_squared_same->comp($a5, $a6);
        $this->assertEquals(false, $result3);

        $a7 = array();
        $a8 = [2116,36,3249,5625,3481,2209,4761,2401,1024,3969,196,962,961,5476,1681,729,3136,8649,361,1089,1764,1156,5929];
        $result4 = $array_squared_same->comp($a7, $a8);
        $this->assertEquals(false, $result4);

        $a8 = null;
        $a9 = [2116,36,3249,5625,3481,2209,4761,2401,1024,3969,196,962,961,5476,1681,729,3136,8649,361,1089,1764,1156,5929];
        $result5 = $array_squared_same->comp($a8, $a9);
        $this->assertEquals(false, $result5);
    }
}