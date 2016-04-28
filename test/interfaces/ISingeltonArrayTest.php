<?php

class ISingeltonArrayTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \ReflectionClass
     */
    private static $reflection;


    public static function setUpBeforeClass()
    {
        static::$reflection = new \ReflectionClass('\chilimatic\lib\Interfaces\ISingeltonArray');
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
    public function containsGetInstanceMethod()
    {
        try {
            $method = static::$reflection->getMethod('getInstance');
        } catch (\Exception $e) {
            static::fail('Exception happened');
        }

        static::assertEquals('getInstance', $method->name);
    }


    /**
     * @test
     */
    public function getInstanceAcceptsParamNamedArray()
    {
        try {
            $method = static::$reflection->getMethod('getInstance');
        } catch (\Exception $e) {
            static::fail('Exception happened');
        }
        $params = $method->getParameters();
        static::assertEquals('array', $params[0]->getName());
    }
}