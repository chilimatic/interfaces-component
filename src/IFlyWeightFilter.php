<?php

namespace chilimatic\lib\Interfaces;

/**
 * Interface IFlyWeightFilter
 * @package chilimatic\lib\Interfaces
 */
interface IFlyWeightFilter
{

    /**
     * @param $input
     *
     * @return mixed
     */
    public function filter($input);

    /**
     * @param null|mixed $param
     *
     * @return mixed
     */
    public function __invoke($param = null);
}
