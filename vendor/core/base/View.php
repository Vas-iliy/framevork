<?php


namespace vendor\core\base;


class View
{
    /**
     * текущий маршрут
     * @var array
     */
    protected $route = [];

    /**
     * текущий вид
     * @var string
     */
    protected  $view;

    /**
     * текущий шаблон
     * @var string
     */
    protected $layout;

    public function __construct($route, $layout = '', $view = '')
    {
        $this->route = $route;
        $this->layout = $layout ?: LAYOUT;
        $this->view = $view;
    }

    public function render ()
    {
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        if (is_file($file_view)) {
            require $file_view;
        } else {
            echo "<pre>Не найден вид</pre>";
        }
    }

}