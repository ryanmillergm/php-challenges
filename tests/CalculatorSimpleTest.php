<?php

use App\CalculatorSimple;
use PHPUnit\Framework\TestCase;

class CalculatorSimpleTest extends TestCase
{
  public function testExamples() {
    $calculatorSimple = new CalculatorSimple;

    $this->assertEquals(3, $calculatorSimple->calculator(1, 2, "+"));
    $this->assertEquals(-1, $calculatorSimple->calculator(1, 2, "-"));
    $this->assertEquals(15, $calculatorSimple->calculator(3, 5, "*"));
    $this->assertEquals(3, $calculatorSimple->calculator(6, 2, "/"));
    $this->assertEquals("unknown value", $calculatorSimple->calculator(6, 2, "$"));
    $this->assertEquals("unknown value", $calculatorSimple->calculator(6, "h", "*"));
  }
}