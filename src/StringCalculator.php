<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function Add(string $numbers): int
    {
        if(empty($numbers)) {
            return 0;
        }
        if(strlen($numbers) == 1){
            return (int) $numbers;
        }
        if(strlen($numbers) == 3){
            return (int) $numbers[0]+ (int) $numbers[2];
        }
    }

}