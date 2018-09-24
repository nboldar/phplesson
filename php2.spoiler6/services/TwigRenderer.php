<?php
namespace app\services;
use app\interfaces\IRenderer;
use Twig_Loader_Filesystem as TemplateLoader;

class TwigRenderer implements IRenderer
{

    protected $templater;
    /**
     * TwigRenderer constructor.
     */
    public function __construct()
    {
        $loader = new TemplateLoader(TEMPLATES_DIR . "twig");
        $this->templater = new \Twig_Environment($loader);
    }

    public function render($template, $params = [])
    {
        $template .= ".twig";
        return $this->templater->render($template, $params);
    }
}