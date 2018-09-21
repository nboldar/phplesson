<?php


namespace app\services;
use app\interfaces\IRenderer;

class TwigRenderer implements IRenderer
{
    public function render($template, $params = [])
    {
        $twigTemplate = $GLOBALS['twig']->load($template . ".html.twig");
        echo $twigTemplate->render($params);
    }
}