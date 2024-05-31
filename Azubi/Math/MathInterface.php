<?php
declare(strict_types=1);

namespace Azubi\Math;

interface MathInterface
{
    public function add(float $value1, float $value2): float;

    public function subtract(float $value1, float $value2): float;

    public function multiply(float $value1, float $value2): float;

    public function divide(float $value1, float $value2): float;
}