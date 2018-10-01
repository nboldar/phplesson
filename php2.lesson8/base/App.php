<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 28.09.2018
 * Time: 20:37
 */

namespace app\base;

use \app\controllers\Error;
use \app\traits\TSingleton;
use app\interfaces\IRenderer;
use app\services\Db;
use app\services\Request;
//use ReflectionClass;

class App
{
    use TSingleton;

    public $config;
    private $components;

    public static function call()
    {
        return static::getInstance();
    }

    public function run($config)
    {
        $this->config = $config;
        $this->components = new Storage();
        $this->runController();


    }

    private function runController()
    {


        $controllerName = $this->request->getControllerName() ?:
            $this->config['defaultController'];
        $action = $this->request->getActionName();
        $controllerClass = $this->config['controllerNamespace'] . "\\" . ucfirst($controllerName) . "Controller";
        try {
            if (class_exists($controllerClass)) {
                $controller = new $controllerClass($this->templateRenderer);
                $controller->run($action);
            }
        } catch (\Exception $e) {

            $error = new Error($this->templateRenderer);
            $error->run('error');
        }
    }

    /**
     * @param $name
     * @return mixed
     * @throws \ReflectionException
     */
    public function createComponent($name)
    {
        if (isset($this->config['components'][$name])) {

            $params = $this->config['components'][$name];
            $class = $params['class'];
            if (class_exists($class)) {
                $reflection = new \ReflectionClass($class);
                unset($params['class']);
                return $reflection->newInstanceArgs($params);

            }
        }
        throw new \Exception('Компонент не описан');
    }

    function __get($name)
    {

        return $this->components->get($name);
    }
}