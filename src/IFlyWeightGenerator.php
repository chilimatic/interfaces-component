<?php
namespace chilimatic\lib\Interfaces;


/**
 * Interface IFlyWeightGenerator
 * @package chilimatic\lib\Interfaces
 */
interface IFlyWeightGenerator
{
    /**
     * default exit code if none has been set
     *
     * @var string
     */
    const DEFAULT_EXIT = 'exit';

    /**
     * @param mixed $resource
     * @param string $command
     * @param mixed $exitCode // defines a exit sequence
     */
    public function __construct($resource, string $command, $exitCode = null);

    /**
     * @return mixed
     */
    public function generate();

    /**
     * @return mixed
     */
    public function __invoke();
}