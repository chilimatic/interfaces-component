<?php

namespace chilimatic\lib\Interfaces;

/**
 * Interface IFlyWeightExecute
 * @package chilimatic\lib\Interfaces
 */
interface IFlyWeightExecute
{

    /**
     * @param $input
     *
     * @return mixed
     */
    public function execute($input);

    /**
     * @param mixed $param
     *
     * @return mixed
     */
    public function __invoke($input);
}
