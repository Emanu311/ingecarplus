<?php

abstract class Controller {

    protected $view;

    abstract protected function exec();

    protected function render($controller_name = '' , $params = array()){
        $this->view = new View ($controller_name, $params);
    }


}