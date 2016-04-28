<?php

class IFactoryOptionsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \ReflectionClass
     */
    private static $reflection;


    public static function setUpBeforeClass()
    {
        static::$reflection = new \ReflectionClass('\chilimatic\lib\Interfaces\IFactoryOptions');
    }

    /**
     * @test
     */
    public function isInterface()
    {
        static::assertTrue(static::$reflection->isInterface());
    }

    /**
     * @test
     */
    public function IFactoryContainsMakeMethod()
    {
        try {
            $method = static::$reflection->getMethod('make');
        } catch (\Exception $e) {
            static::fail('Exception happened');
        }

        static::assertEquals('make', $method->name);
    }


    /**
     * @test
     */
    public function IFactoryContainsInvokeMethod()
    {
        try {
            $method = static::$reflection->getMethod('__invoke');
        } catch (\Exception $e) {
            static::fail('Exception happened');
        }

        static::assertEquals('__invoke', $method->name);
    }
}