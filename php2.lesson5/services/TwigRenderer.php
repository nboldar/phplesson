<?php


namespace app\services;

use app\interfaces\IRenderer;


class TwigRenderer implements IRenderer
{
    protected $templater;

    /**
     * TwigRenderer constructor.
     */
    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem(ROOT_DIR . 'views');
        $this->templater = new \Twig_Environment($loader, array(
            'cache' => false,
        ));
    }

    public function render($template, $params = [])
    {

        $twigTemplate = $this->templater->load($template . ".twig");
        echo $twigTemplate->render($params);
    }
}