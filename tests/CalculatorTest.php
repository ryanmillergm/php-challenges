<?php

use PHPUnit\Framework\TestCase;
use Challenges\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd() {

        $calculator = new Calculator;
        $result = $calculator->add(20,5);

        $this->assertEquals(25, $result);
    }
}