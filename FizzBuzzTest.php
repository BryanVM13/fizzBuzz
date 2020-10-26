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
        $actual = $this->fizzBuzz->count(1);
        //Assert
        $this->assertEquals("1",$actual);
    }

    public function test_count_given2_shouldReturn2(){

        $actual = $this->fizzBuzz->count(2);

        $this->assertEquals("2",$actual);
    }
}
