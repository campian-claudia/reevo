<?php

namespace App\Tests;
use App\Services\Operations\AddOperation;
use PHPUnit\Framework\TestCase ;
class AddOperationTest extends TestCase
{
  public function testAdd()
  {
    $operation = new AddOperation();
    $operation->validate(2, 3);
    $this->assertEquals(5, $operation->calculate(2, 3));

  }

    public function testValidate()
    {
        $operation = new AddOperation();
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Both numbers must be numeric');
        $operation->validate('one','two');

    }
}