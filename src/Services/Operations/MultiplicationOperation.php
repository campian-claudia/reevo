<?php

namespace App\Services\Operations;

use App\Services\Operations\OperationInterface;
use InvalidArgumentException;

class MultiplicationOperation implements OperationInterface
{
    /**
     * @throws InvalidArgumentException
     * @return int|float
     **/
    public function calculate ( $num1, $num2 )
    {
        return $num1 * $num2;
    }

    public function validate ( $num1, $num2 )
    {
        if(!is_numeric($num1) && !is_numeric($num2)){
            throw new \InvalidArgumentException('Both numbers must be numeric');
        }
    }
}