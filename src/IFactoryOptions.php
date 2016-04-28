<?php
namespace chilimatic\lib\Interfaces;

/**
 * Interface IFactoryOptions
 * @package chilimatic\lib\Interfaces
 */
Interface IFactoryOptions {

    /**
     * @param string $name
     * @param $options
     *
     * @return mixed
     */
    public function make($name, $options);


    /**
     * @param string $name
     * @param $options
     *
     * @return mixed
     */
    public function __invoke($name, $options);
}