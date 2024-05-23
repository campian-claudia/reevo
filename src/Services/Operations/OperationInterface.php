<?php

namespace App\Services\Operations;

interface OperationInterface
{

    public function calculate($num1, $num2);
    public function validate($num1, $num2);

}