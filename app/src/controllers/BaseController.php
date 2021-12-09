<?php

namespace App\controllers;

abstract class BaseController
{
    protected $params;
    protected $template = __DIR__ . './../view/template.php';
    protected $viewsDir = __DIR__ . './../view/';

    /** 
    * BaseController constructor.
    * @param string $action
    * @param null $id
    **/
    public function __construct(string $action, array $params = [])
    {
        $this->params = $params;

        $method = 'execute' . ucfirst($action);
        if (!is_callable([$this, $method])) {
            throw new \RuntimeException('L\'action"' . $method . '" n\'est pas définie sur ce module');
        }
        $this->$method();
    }

    /**
    * @param string $title
    * @param array $vars
    * @param string $view
    * @return mixed
    */
    public function render(string $title, array $vars, string $view)
    {
    $view = $this->viewsDir . $view . '.php';
    ob_start();
    require $view;
    $content = ob_get_clean();
    return require $this->template;
    }
}

?>