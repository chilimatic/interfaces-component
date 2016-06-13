<?php
namespace chilimatic\lib\Interfaces;

/**
 * Interface IFlyWeightValidator
 * @package chilimatic\lib\Interfaces
 */
interface IFlyWeightValidator
{

    /**
     * abstract validation
     *
     * @param mixed $value
     *
     * @return bool
     */
    public function __invoke($value) : bool;

    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function validate($value) : bool;
}