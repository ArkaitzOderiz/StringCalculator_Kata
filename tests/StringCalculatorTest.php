<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function return_0_if_string_is_empty()
    {
        $calculator = new StringCalculator();

        $response = $calculator->Add("");

        $this->assertEquals(0, $response);
    }

    /**
     * @test
     */
    public function return_same_number_if_string_have_1_number()
    {
        $calculator = new StringCalculator();

        $response = $calculator->Add("2");

        $this->assertEquals(2, $response);
    }

    /**
     * @test
     */
    public function return_sum_if_string_have_2_numbers()
    {
        $calculator = new StringCalculator();

        $response = $calculator->Add("1,2");

        $this->assertEquals(3, $response);
    }

    /**
     * @test
     */
    public function return_sum_if_string_have_more_than_2_numbers()
    {
        $calculator = new StringCalculator();

        $response = $calculator->Add("1,2,3,4");

        $this->assertEquals(10, $response);
    }

}