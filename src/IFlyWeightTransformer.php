<?php
namespace chilimatic\lib\Interfaces;

/**
 * Interface IFlyWeightTransformer
 * @package chilimatic\lib\Interfaces
 */
interface IFlyWeightTransformer
{

    /**
     * @param string $content
     * @param array $options
     *
     * @return string
     */
    public function transform($content, $options = []);

    /**
     * @param string $content
     * @param array $options
     *
     * @return string
     */
    public function __invoke($content, $options = []);
}