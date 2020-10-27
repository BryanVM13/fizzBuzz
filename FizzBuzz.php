<?php


class FizzBuzz
{

    public function count(int $int): string
    {
        if($int === 3) return "Fizz";


        return (string)$int;
    }
}