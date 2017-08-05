<?php

namespace FizzBuzz;

class Range
{
    /** @var FizzBuzz */
    protected $fizzBuzz;

    public function __construct(FizzBuzz $fizzBuzz)
    {
        $this->fizzBuzz = $fizzBuzz;
    }

    public function forRange(int $start, int $end)
    {
        for ($i = $start; $i <= $end; $i++) {
            echo $this->fizzBuzz->get($i), PHP_EOL;
        }
    }
}
