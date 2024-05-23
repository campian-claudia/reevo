<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase ;
use App\Services\Operations\DivisionOperation;

class DivisionOperationTest extends TestCase
{


    public function testDivide()
    {
        $operation = new DivisionOperation();
        $operation->validate(10, 2);
        $this->assertEquals(5, $operation->calculate(10, 2));
    }
    public function validate()
    {
        $operation = new DivisionOperation();
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Both numbers must be numeric');
        $operation->validate('one','two');
    }

    public function testDivideByZero(){
        $operation = new DivisionOperation();
        $this->expectException('DivisionByZeroError');
        $this->expectExceptionMessage('Cannot divide by zero');
        $operation->validate(10,0);
    }
}