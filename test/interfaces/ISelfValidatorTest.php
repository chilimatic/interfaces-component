<?php

class ISelfValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \ReflectionClass
     */
    private static $reflection;


    public static function setUpBeforeClass()
    {
        static::$reflection = new \ReflectionClass('\chilimatic\lib\Interfaces\ISelfValidator');
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
            $method = static::$reflection->getMethod('validateProperties');
        } catch (\Exception $e) {
            static::fail('Exception happened');
        }

        static::assertEquals('validateProperties', $method->name);
    }
}