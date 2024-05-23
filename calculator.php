<?php
require_once 'vendor/autoload.php';

use App\Services\OperationFactory;

if($argc < 3 || $argc > 4){

    die("Error: Please enter numbers and operation to perform on the numbers\n");
}


$num1 = $argv[1];
$num2 = $argv[3] ?? null; ;
$op = $argv[2];


try {
    $operation = OperationFactory::createOperation($op);
    $operation->validate($num1,$num2);
    $result = $operation->calculate($num1, $num2);
    echo "Output: ". $result."\n";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}