<?php


class IFlyWeightTransformerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \ReflectionClass
     */
    private static $reflection;


    public static function setUpBeforeClass()
    {
        static::$reflection = new \ReflectionClass('\chilimatic\lib\Interfaces\IFlyWeightTransformer');
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
            $method = static::$reflection->getMethod('transform');
        } catch (\Exception $e) {
            static::fail('Exception happened');
        }

        static::assertEquals('transform', $method->name);
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