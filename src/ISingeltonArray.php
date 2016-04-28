<?php
namespace chilimatic\lib\Interfaces;

/**
 * Interface ISingeltonArray
 * @package chilimatic\lib\Interfaces
 */
interface ISingeltonArray
{

    /**
     * standard singelton method returns
     * the instance
     *
     * @param array $array
     *
     * @internal param array $param
     *
     * @return mixed
     */
    public static function getInstance(array $array = array());
}