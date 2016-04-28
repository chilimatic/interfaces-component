<?php


class IFlyWeightValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \ReflectionClass
     */
    private static $reflection;


    public static function setUpBeforeClass()
    {
        static::$reflection = new \ReflectionClass('\chilimatic\lib\Interfaces\IFlyWeightValidator');
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
            $method = static::$reflection->getMethod('validate');
        } catch (\Exception $e) {
            static::fail('Exception happened');
        }

        static::assertEquals('validate', $method->name);
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