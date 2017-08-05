<?php

namespace FizzBuzz;

class FizzBuzz
{
    const DEFAULT_FIZZ = 3;
    const DEFAULT_BUZZ = 5;

    /** @var int */
    protected $divisibleForFizz;

    /** @var int */
    protected $divisibleForBuzz;

    public function __construct(int $divisibleForFizz = self::DEFAULT_FIZZ, int $divisibleForBuzz = self::DEFAULT_BUZZ)
    {
        $this->divisibleForFizz = $divisibleForFizz;
        $this->divisibleForBuzz = $divisibleForBuzz;
    }

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
