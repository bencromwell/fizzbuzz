<?php

namespace Tests;

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @var FizzBuzz */
    protected $fizzBuzz;

    protected function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testFizz()
    {
        $this->verify([3, 6, 9, 12], 'Fizz');
    }

    public function testBuzz()
    {
        $this->verify([5, 10, 20], 'Buzz');
    }

    public function testFizzBuzz()
    {
        $this->verify([15, 30, 45, 60, 75, 90], 'FizzBuzz');
    }

    public function testNeither()
    {
        foreach ([1, 2, 4, 7, 8] as $case) {
            $this->assertEquals($case, $this->fizzBuzz->get($case));
        }
    }

    private function verify(array $cases, string $expected)
    {
        foreach ($cases as $case) {
            $this->assertEquals($expected, $this->fizzBuzz->get($case));
        }
    }
}
