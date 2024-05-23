<?php
namespace App\Tests;
use PHPUnit\Framework\TestCase;
use App\Services\Operations\SqrtOperation;

class SqrtOperationTest extends TestCase
{

    public function testSqrt()
    {
        $operation = new SqrtOperation();
        $operation->validate(9);
        $this->assertEquals(3, $operation->calculate(9));
    }

    public function validate ()
    {
        $operation = new SqrtOperation();
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Number must be numeric');
        $operation->validate('one');
    }

    public function validateNegativeNumber()
    {
        $operation = new SqrtOperation();
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('The number must be positive');
        $operation->validate(-3);
    }

}