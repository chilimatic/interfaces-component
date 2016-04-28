<?php


class IFlyWeightGeneratorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \ReflectionClass
     */
    private static $reflection;


    public static function setUpBeforeClass()
    {
        static::$reflection = new \ReflectionClass('\chilimatic\lib\Interfaces\IFlyWeightGenerator');
    }

    /**
     * @test
     */
    public function isInterface()
    {
        static::assertTrue(self::$reflection->isInterface());
    }

    /**
     * @test
     */
    public function containsFilterMethod()
    {
        try {
            $method = static::$reflection->getMethod('generate');
        } catch (\Exception $e) {
            static::fail('Exception happened');
        }

        static::assertEquals('generate', $method->name);
    }


    /**
     * @test
     */
    public function containsInvokeMethod()
    {
        try {
            $method = static::$reflection->getMethod('__invoke');
        } catch (\Exception $e) {
            static::fail('Exception happened');
        }

        static::assertEquals('__invoke', $method->name);
    }
}