<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add(string $numbers): int
    {
        $result = 0;
        $delimiter = "/n";

        if (empty($numbers)) {
            return $result;
        }

        if (str_starts_with($numbers, "//")) {
            $delimiter = $numbers[2];
            $numbers = str_replace("//" . $delimiter . "/n", "", $numbers);
        }

        $parsedNumbers = str_replace($delimiter, ",", $numbers);
        $parsedNumbers = explode(",", $parsedNumbers);

        for ($i = 0; $i < sizeof($parsedNumbers); $i += 1) {
            if ($parsedNumbers[$i] <= 1000) {
                $result += $parsedNumbers[$i];
            }
        }
        return $result;
    }
}
