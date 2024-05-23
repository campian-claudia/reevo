<?php

namespace App\Services;


use App\Services\Operations\OperationInterface;
use App\Services\Operation;
use App\Services\Operations\SubstractOperation;
use App\Services\Operations\MultiplicationOperation;
use App\Services\Operations\DivisionOperation;
use App\Services\Operations\SqrtOperation;
use App\Services\Operations\AddOperation;
use InvalidArgumentException;


class OperationFactory
{

    public static function createOperation($operation): OperationInterface {
        switch ($operation) {
            case Operation::ADD:
                return new AddOperation();
            case Operation::SUBTRACT:
                return new SubstractOperation();
            case Operation::MULTIPLY:
                return new MultiplicationOperation();
            case Operation::DIVIDE:
                return new DivisionOperation();
                case Operation::SQRT:
                return new SqrtOperation();
            default:
                throw new InvalidArgumentException("Invalid operation. Valid operations are: " . implode(", ", Operation::getAllOperations()));
        }
    }
}