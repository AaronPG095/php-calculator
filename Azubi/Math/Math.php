<?php
declare(strict_types=1);

namespace Azubi\Math;

class Math implements MathInterface { 
    public function add(float $value1, float $value2): float {
        return $value1 + $value2;
    }

    public function subtract(float $value1, float $value2): float {
        return $value1 - $value2;
    }

    public function multiply(float $value1, float $value2): float {
        return $value1 * $value2;
    }

    public function divide(float $value1, float $value2): float {
        if ($value2 == 0.0) {
            throw new \InvalidArgumentException('Invalid operation: Division by zero.');
        }
        return $value1 / $value2;
    }
}