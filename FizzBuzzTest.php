<?php

require "vendor/autoload.php";
require "FizzBuzz.php";

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;




    protected function setUp(): void
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz();
    }

    public function test_count_given1_shouldReturn1(){

        //Arrange = Preparer tout ce qu'on a besoin pour ecrire notre test

        //Act = executer la fonction qu'on souhaite tester
        $actual = $this->actCount(1);
        //Assert
        $this->assertEquals("1",$actual);
    }

    public function test_count_given2_shouldReturn2(){

        $actual = $this->actCount(2);
        $this->assertEquals("2",$actual);
    }

    public function test_count_given3_shouldReturnFizz(){

        $actual = $this->actCount(3);
        $this->assertEquals("Fizz", $actual);
    }

    public function test_count_given4_shouldReturn4(){

        $actual = $this->actCount(4);
        $this->assertEquals("4",$actual);
    }

    public function test_count_given5_shouldReturnBuzz(){

        $actual = $this->actCount(5);
        $this->assertEquals("Buzz", $actual);
    }

    public function test_count_given6_shouldReturnFizz(){

        $actual = $this->actCount(6);
        $this->assertEquals("Fizz", $actual);
    }

    private function actCount(int $int): string
    {
        return $this->fizzBuzz->count($int);
    }
}
