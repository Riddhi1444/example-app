<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require(__DIR__.'/../../practicals/Practical.php');
use practicals\Practical;

class PracticalTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testAdd(): void
    {
        $this->assertEquals(Practical::add(1,3), 4);
    }


    // Test Cases for add Function

    // It Should Accepts Integers
    public function testAddAcceptsFloat(): void
    {
        $result = Practical::add(1.5, 3.5);
        $this->assertEquals($result, 5.0);
    }

    // It Should Accepts Floating point numbers
    public function testAddAcceptsFloatInteger(): void
    {
        $result = Practical::add(1.5, 2);
        $this->assertEquals($result, 3.5);
    }

    // It Should Accepts String values of Integers
    public function testAddAcceptsIntegerString(): void
    {
        $result = Practical::add("1", "2");
        $this->assertEquals($result, 3);
    }

    // It Should Accepts String values of Floating point numbers
    public function testAddAcceptsFloatString(): void
    {
        $result = Practical::add("1.4", "3.14");
        $this->assertEquals($result, 4.54);
    }

    // It should reject any non numeric string
    public function testAddRejectsAlphabetString(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::add("abc", "xyz");
    }


    // It should reject if any one input is non numeric string
    public function testAddRejectsAlphanumericString(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::add("a1", 1);
    }



    //Test Cases for generateFibonacciSequence Function

    // It Should Accepts Integers
    public function testFibonacciAcceptsInteger(): void
    {
        $result = Practical::generateFibonacciSequence(4);
        $this->assertEquals([0,1,1,2], $result);
    }

    // It Should Rejects Strings
    public function testFibonacciRejectsIntegerString(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::generateFibonacciSequence("4");
        
    }
    // It Should Rejects AlphabeticalString
    public function testFibonacciRejectsAlphabetString(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::generateFibonacciSequence("abc");
        
    }

    // It Should Rejects Floating point numbers
    public function testFibonacciRejectsFloat(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::generateFibonacciSequence(3.5);
        
    }

}

?>