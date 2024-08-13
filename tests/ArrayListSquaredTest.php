<?php

use App\ArrayListSquared;
use PHPUnit\Framework\TestCase;

class ArrayListSquaredTest extends TestCase
{
    public function testArrayListSquared() {
        $array_list_squared = new ArrayListSquared;

        $result1 = $array_list_squared->listSquared(1, 250);
        $result2 = $array_list_squared->listSquared(42, 250);
        $result3 = $array_list_squared->listSquared(250, 500);
        $result4 = $array_list_squared->listSquared(300, 600);

        $this->assertSame($result1, [[1, 1], [42, 2500], [246, 84100]]);
        $this->assertSame($result2, [[42, 2500], [246, 84100]]);
        $this->assertSame($result3, [[287, 84100]]);
        $this->assertSame($result4, []);
    }
}