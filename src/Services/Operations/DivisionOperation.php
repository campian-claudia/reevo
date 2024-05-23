<?php

namespace App\Services\Operations;

use InvalidArgumentException;
use DivisionByZeroError;
use App\Services\Operations\OperationInterface;

class DivisionOperation implements OperationInterface
{

    /**
     * @throws InvalidArgumentException | DivisionByZeroError
     * @return int|float
     **/
    public function calculate ( $num1, $num2 )
    {
       $this->validate($num1,$num2);
        return $num1 / $num2;
    }


    public function validate ( $num1, $num2 )
    {
        if(!is_numeric($num1) && !is_numeric($num2)){
            throw new \InvalidArgumentException('Both numbers must be numeric');
        }

        if($num2==0){
            throw new \DivisionByZeroError('Cannot divide by zero');
        }
    }
}