<?php
require_once '../view/View.php';
class Controller{
    public function __construct()
    {
        $this->view = new View();
    }
}