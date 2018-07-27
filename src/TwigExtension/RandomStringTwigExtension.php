<?php

namespace nvbooster\StringGenerator\TwigExtension;

use nvbooster\StringGenerator\StringGenerator;

/**
 * RandomStringTwigExtension
 */
class RandomStringTwigExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     *
     * @see \Twig_Extension::getFunctions()
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('stringgenerator_generate', StringGenerator::class.'::generate'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'nvbooster_stringgenerator_twigextension';
    }
}
