<?php

namespace Klinf\Template\controller;
use League\Plates\Engine;

class HomeController
{
    public $view;
    public $router;
    public function __construct($router)
    {
        $this->router=$router;
        $this->view = New Engine(__DIR__ ."/../../view", "php");
    }

    public function home(){
        echo $this->view->render("home");
    }
    public function contato():void{
        echo $this->view->render("contato");
    }
    public function error(array $data):void{
        echo"<h1>Erro {$data["errcode"]}</h1>";
    }
}