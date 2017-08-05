<?php

require __DIR__ . '/vendor/autoload.php';

$fizzBuzz = new \FizzBuzz\FizzBuzz((int) $argv[1], (int) $argv[2]);
(new \FizzBuzz\Range($fizzBuzz))->forRange(1, 100);
