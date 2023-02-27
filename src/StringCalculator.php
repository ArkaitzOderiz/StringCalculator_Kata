<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function Add(string $numbers): int
    {
        $result = 0;
        $delimiter = "/n";

        if(empty($numbers)) {
            return $result;
        }

        if(str_starts_with($numbers,"//")){
            $delimiter = $numbers[2];
            $parsedNumbers = str_replace("//".$delimiter."/n", "", $numbers);
        } else {
            $parsedNumbers = $numbers;
        }

        $parsedNumbers = str_replace($delimiter, ",", $parsedNumbers);

        for($i=0;$i<=strlen($parsedNumbers);$i+=2){
            $result += $parsedNumbers[$i];
        }
        return $result;
    }

}