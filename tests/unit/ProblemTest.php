<?php

use PHPUnit\Framework\TestCase;
require './src/Problem.php';

class ProblemTest extends TestCase
{
    public function testCalcZero()
    {
        $mathController = new Problem();
        $result = $mathController->calc(0);
        $this->assertEquals(1, $result);
    }

    public function testCalcOne()
    {
        $mathController = new Problem();
        $result = $mathController->calc(1);
        $this->assertEquals(1, $result);
    }

    public function testCalcFive()
    {
        $mathController = new Problem();
        $result = $mathController->calc(5);
        $this->assertEquals(120, $result);
    }

    public function testCalcRandomInt()
    {
        $mathController = new Problem();
        $randomInt = mt_rand(4, 100); 
        $expectedResult = $mathController->calc($randomInt - 1) * $randomInt;
        $result = $mathController->calc($randomInt);
        $this->assertEquals($expectedResult, $result);
    }

    public function testCalcNegative()
    {
        $mathController = new Problem();
        $result = $mathController->calc(-3);
        $this->assertNull($result);
    }

    public function testCalcFloat()
    {
        $mathController = new Problem();
        $result = $mathController->calc(1.5);
        $this->assertNull($result);
    }

    public function testCalcFalse()
    {
        $mathController = new Problem();
        $result = $mathController->calc(false);
        $this->assertNull($result);
    }

    public function testCalcString()
    {
        $mathController = new Problem();
        $result = $mathController->calc('abc');
        $this->assertNull($result);
    }
}


?>