<?php

namespace Azubi\Math;

class Math
{
    // Properties / Fields
    private $operator;
    private $num1;
    private $num2;

    // Constructor
    public function __construct(string $operator, float $num1, float $num2)
    {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    // Getter & Setter Methods

    

    // Operator Methods
    public function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2)
    {
        return $num1 - $num2;
    }

    public function multiply($num1, $num2)
    {
        return $num1 * $num2;
    }

    public function divide($num1, $num2)
    {
        return $num1 / $num2;
    }
    // Simplify Math to one switch case function that collets operator ?
    public function calculate($operator, $num1, $num2)
    {
        switch ($operator) {
            case 'add':
                return $num1 + $num2;
                break;
            case 'subtract':
                return $num1 - $num2;
                break;
            case 'multiply':
                return $num1 * $num2;
                break;
            case 'divide':
                return $num1 / $num2;
                break;
            default:
                return 'Cant be calculated';
                break;
        }
    }
}
