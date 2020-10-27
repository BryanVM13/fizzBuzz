<?php


class FizzBuzz
{

    public function count(int $int): string
    {
        if($int%3 === 0) return "Fizz";
        if($int === 5) return "Buzz";

        return (string)$int;
    }
}