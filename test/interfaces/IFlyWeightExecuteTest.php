<?php


class IFlyWeightExecuteTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \ReflectionClass
     */
    private static $reflection;


    public static function setUpBeforeClass()
    {
        static::$reflection = new \ReflectionClass('\chilimatic\lib\Interfaces\IFlyWeightExecute');
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
    public function containsExecuteMethod()
    {
        try {
            $method = static::$reflection->getMethod('execute');
        } catch (\Exception $e) {
            static::fail('Exception happened');
        }

        static::assertEquals('execute', $method->name);
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