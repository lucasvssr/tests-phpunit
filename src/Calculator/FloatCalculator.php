<?php

declare(strict_types=1);

namespace Calculator;

use RuntimeException;

class FloatCalculator
{
    /**
     * Méthode d'addition de deux nombres flottants
     * @param float $firstOperand Premier opérande
     * @param float $secondOperand Second opérande
     * @return float Somme des deux opérandes
     */
    public function add(float $firstOperand, float $secondOperand): float
    {
        return $firstOperand+$secondOperand;
    }

    public function subtract(float $firstOperand, float $secondOperand): float
    {
        return $firstOperand-$secondOperand;
    }

    public function multiply(float $firstOperand, float $secondOperand): float
    {
        return $firstOperand*$secondOperand;
    }

    public function divide(float $firstOperand, float $secondOperand): float
    {
        if ($secondOperand == 0) {
            throw new RuntimeException("Division by Zero");
        }
        return $firstOperand/$secondOperand;
    }

    public function modulus(float $firstOperand, float $secondOperand): float
    {
        return fmod($firstOperand, $secondOperand);
    }

    public function sum(array $float)
    {
        $res = 0.0;
        foreach ($float as $nbr) {
            $res += $nbr;
        }
        return $res;
    }
}
