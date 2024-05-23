<?php

namespace App\Services\Operations;

use InvalidArgumentException;
use App\Services\Operations\OperationInterface;
class AddOperation implements OperationInterface
{
    /**
     * @throws InvalidArgumentException
     * @return int|float
     */
    public function calculate ( $num1, $num2 )
    {
         return $num1 + $num2;
    }

    public function validate ( $num1, $num2 )
    {
        if (!preg_match('/^\d+$/', $num1) && !preg_match('/^\d+$/', $num2) ) {
            throw new \InvalidArgumentException('Both numbers must be numeric');
        }
    }
}