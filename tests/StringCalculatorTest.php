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
    public function return0IfStringIsEmpty()
    {
        $response = $this->calculator->Add("");

        $this->assertEquals(0, $response);
    }

    /**
     * @test
     */
    public function returnSameNumberIfStringHave1Number()
    {
        $response = $this->calculator->Add("2");

        $this->assertEquals(2, $response);
    }

    /**
     * @test
     */
    public function returnSumResultIfStringHave2Numbers()
    {
        $response = $this->calculator->Add("1,2");

        $this->assertEquals(3, $response);
    }

    /**
     * @test
     */
    public function returnSumResultIfStringHaveMoreThan2Numbers()
    {
        $response = $this->calculator->Add("1,2,3,4");

        $this->assertEquals(10, $response);
    }

    /**
     * @test
     */
    public function returnSumResultIfStringHaveLineFeed()
    {
        $response = $this->calculator->Add("1/n2/n3,4");

        $this->assertEquals(10, $response);
    }

    /**
     * @test
     */
    public function returnSumResultIfStringHavePersonalizedDelimeters()
    {
        $response = $this->calculator->Add("//;/n1;2;3;4");

        $this->assertEquals(10, $response);
    }

    /**
     * @test
     */
    public function returnSumResultIgnoringNumbersBiggerThan1000()
    {
        $response = $this->calculator->Add("1,2000,3,4000");

        $this->assertEquals(4, $response);
    }
}
