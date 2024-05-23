<?php

namespace App\Services;


class Operation {
    const ADD = '+';
    const SUBTRACT = '-';
    const MULTIPLY = '*';
    const DIVIDE = '/';
    const SQRT = 'sqrt';

    public static function getAllOperations() {
        return [
            self::ADD,
            self::SUBTRACT,
            self::MULTIPLY,
            self::DIVIDE,
            self::SQRT,
        ];
    }
}
?>
