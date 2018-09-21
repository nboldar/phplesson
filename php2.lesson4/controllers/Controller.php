<?php

namespace app\controllers;


abstract class Controller
{
    private $action;
    private $defaultAction = 'index';
    private $layout = 'main';
//    public $useLayout = false;

    public function run($action = null)
    {
        $this->action = $action ?: $this->defaultAction;
        $method = "action" . ucfirst($this->action);
        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            echo "404";
        }
    }

    public function render($template, $params = [])
    {
//        if ($this->useLayout) {
//            $content = $this->renderTemplate($template, $params);
//            return $this->renderTemplate("layouts/{$this->layout}", ['content' => $content]);
//        }
        return $this->renderTemplate($template, $params);
    }


    public function renderTemplate($template, $params = [])
    {
        $twigTemplate = $GLOBALS['twig']->load($template . ".html.twig");
        echo $twigTemplate->render($params);

//        ob_start();
//        extract($params);
//        $templatePath = TEMPLATES_DIR . $template . ".html";
//        include $templatePath;
//        return ob_get_clean();
    }
}