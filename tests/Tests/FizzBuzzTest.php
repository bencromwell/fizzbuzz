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

    public function testAlternatives()
    {
        $this->fizzBuzz = new FizzBuzz(10, 20);
        $this->verify([10, 30, 50, 70, 90], 'Fizz');
        $this->verify([20, 40, 60, 80, 100], 'FizzBuzz');

        $this->fizzBuzz = new FizzBuzz(3, 11);
        $this->verify([3, 6, 9, 12, 15], 'Fizz');
        $this->verify([11, 22, 44, 55, 77, 88], 'Buzz');
        $this->verify([33, 66, 99], 'FizzBuzz');
    }

    private function verify(array $cases, string $expected)
    {
        foreach ($cases as $case) {
            $this->assertEquals($expected, $this->fizzBuzz->get($case), 'Case ' . $case . ' failed');
        }
    }
}
