<?php
namespace chilimatic\lib\Interfaces;

/**
 * Interface ISingelton
 * @package chilimatic\lib\Interfaces
 */
interface ISingelton
{

    /**
     * standard singelton method returns
     * the instance
     *
     * @param null|mixed $param
     *
     * @return mixed
     */
    public static function getInstance($param = null);
}