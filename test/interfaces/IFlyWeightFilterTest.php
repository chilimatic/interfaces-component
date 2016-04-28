<?php


class IFlyWeightFilterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \ReflectionClass
     */
    private static $reflection;


    public static function setUpBeforeClass()
    {
        static::$reflection = new \ReflectionClass('\chilimatic\lib\Interfaces\IFlyWeightFilter');
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
            $method = static::$reflection->getMethod('filter');
        } catch (\Exception $e) {
            static::fail('Exception happened');
        }

        static::assertEquals('filter', $method->name);
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