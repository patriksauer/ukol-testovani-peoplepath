<?php

use IW\Workshop\Calculator;
use PHPUnit\Framework\TestCase;

class CalculationTest extends TestCase{
    public function testIsSumCorrect(){
        $calc = new Calculator();
        $result = $calc->add(1, 2.5);
        $expected = 3.5;
        $this->assertName($expected, $result);
    }
    public function testIsDevisionCorrect(){
        $calc = new Calculator();
        $result = $calc->devide(25.0,5.0);
        $expected = 5;
        $this->assertName($expected, $result);
    }
    public function testIsDevisionUncorrect(){
        $calc = new Calculator();
        $result = $calc->devide(25, 0);
        $expected = throw new InvalidArgumentException('Devision by zero');
        $this->assertName($expected, $result);
    }
}