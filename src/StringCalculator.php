<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function Add(string $numbers): int
    {
        $result = 0;

        if(empty($numbers)) {
            return $result;
        }

        for($i=0;$i<=strlen($numbers);$i+=2){
            $result += $numbers[$i];
        }
        return $result;
    }

}