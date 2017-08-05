<?php

namespace FizzBuzz;

class FizzBuzz
{
    protected $divisibleForFizz = 3;
    protected $divisibleForBuzz = 5;

    /**
     * @param int $case
     *
     * @return string
     */
    public function get(int $case): string
    {
        if ($this->isFizzBuzz($case)) {
            return 'FizzBuzz';
        }

        if ($this->isFizz($case)) {
            return 'Fizz';
        }

        if ($this->isBuzz($case)) {
            return 'Buzz';
        }

        return (string) $case;
    }

    protected function isFizz(int $case): bool
    {
        return $case % $this->divisibleForFizz === 0 && !$this->isFizzBuzz($case);
    }

    protected function isBuzz(int $case): bool
    {
        return $case % $this->divisibleForBuzz === 0 && !$this->isFizzBuzz($case);
    }

    protected function isFizzBuzz(int $case): bool
    {
        return $case % $this->divisibleForFizz === 0 && $case % $this->divisibleForBuzz === 0;
    }
}
