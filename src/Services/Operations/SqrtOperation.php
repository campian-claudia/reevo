<?php

namespace App\Services\Operations;

use App\Services\Operations\OperationInterface;
use InvalidArgumentException;
class SqrtOperation implements OperationInterface
{
    /**
     * @throws InvalidArgumentException
     * @return int|float
     **/
    public function calculate ( $num1, $num2 = null )
    {

        return sqrt($num1);
    }

    public function validate ( $num1, $num2 = null )
    {
        if(!is_numeric($num1) ){
            throw new \InvalidArgumentException('The number must be numeric');
        }

        if($num1 < 0){
            throw new \InvalidArgumentException('The number must be positive');
        }
    }
}