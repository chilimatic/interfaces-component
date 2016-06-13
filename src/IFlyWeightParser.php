<?php
namespace chilimatic\lib\Interfaces;

/**
 * Interface IFlyWeightParser
 * @package chilimatic\lib\Interfaces
 */
interface IFlyWeightParser
{
    /**
     * parse method that fills the collection
     *
     * @param string $content
     *
     * @return mixed
     */
    public function parse(string $content);
}