<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    private StringCalculator $calculator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->calculator = new StringCalculator();
    }

    /**
     * @test
     */
    public function return_0_if_string_is_empty()
    {
        $response = $this->calculator->Add("");

        $this->assertEquals(0, $response);
    }

    /**
     * @test
     */
    public function return_same_number_if_string_have_1_number()
    {
        $response = $this->calculator->Add("2");

        $this->assertEquals(2, $response);
    }

    /**
     * @test
     */
    public function return_sum_result_if_string_have_2_numbers()
    {
        $response = $this->calculator->Add("1,2");

        $this->assertEquals(3, $response);
    }

    /**
     * @test
     */
    public function return_sum_result_if_string_have_more_than_2_numbers()
    {
        $response = $this->calculator->Add("1,2,3,4");

        $this->assertEquals(10, $response);
    }

    /**
     * @test
     */
    public function return_sum_result_if_string_have_line_feed()
    {
        $response = $this->calculator->Add("1/n2/n3,4");

        $this->assertEquals(10, $response);
    }

    /**
     * @test
     */
    public function return_sum_result_if_string_have_personalized_delimeters()
    {
        $response = $this->calculator->Add("//;/n1;2;3;4");

        $this->assertEquals(10, $response);
    }

    /**
     * @test
     */
    public function return_sum_result_ignoring_numbers_bigger_than_1000()
    {
        $response = $this->calculator->Add("1,2000,3,4000");

        $this->assertEquals(4, $response);
    }

}