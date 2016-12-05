<?php

class ParentController{

  protected $view = null;
  protected $model = null;

  public function __construct(){
    $this->view = new View();
    $this->model = new Model();
  }

  public function index(){
    $obj = $this->model->getImagesMOCK();
    $this->view->pdata = $obj;
    $this->view->render(__FUNCTION__);
  }

}