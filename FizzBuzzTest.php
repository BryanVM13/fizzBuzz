<?php

require "vendor/autoload.php";
require "FizzBuzz.php";

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function test_count_given1_shouldReturn1(){


        //Arrange = Preparer tout ce qu'on a besoin pour ecrire notre test
        $fizzBuzz = new FizzBuzz();

        //Act = executer la fonction qu'on souhaite tester
        $actual = $fizzBuzz->count(1);

        //Assert
        $this->assertEquals("1",$actual);
    }

    public function test_count_given2_shouldReturn2(){
        $fizzBuzz = new FizzBuzz();

        $actual = $fizzBuzz->count(2);

        $this->assertEquals("2",$actual);
    }
}
