<?php
namespace chilimatic\lib\Interfaces;

/**
 * Interface IFlyWeightOperate
 * @package chilimatic\lib\Interfaces
 */
interface IFlyWeightOperate
{

    /**
     * @param mixed $input1
     * @param mixed $input2
     *
     * @return mixed
     */
    public function operate($input1, $input2);

    /**
     * @param mixed $input1
     * @param mixed $input2
     *
     * @return mixed
     */
    public function __invoke($input1, $input2);
}