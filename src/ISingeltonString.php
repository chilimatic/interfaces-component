<?php
namespace chilimatic\lib\Interfaces;

/**
 * Interface ISingeltonString
 * @package chilimatic\lib\Interfaces
 */
interface ISingeltonString
{
    /**
     * standard singelton method returns
     * the instance
     *
     * @param null|string $param
     *
     * @return mixed
     */
    public static function getInstance($param = '');
}