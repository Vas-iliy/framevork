<?php

namespace vendor\core\base;

abstract class Controller
{
    /*
     * текущий маршрут
     * @var array
     */
    public $route = [];

    /*
     * вид
     * @var string
     */
    public $view;

    /*
     * шаблон
     * @var string
     */
    public $layout;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView ()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render();
    }

}