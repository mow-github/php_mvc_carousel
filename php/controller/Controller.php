<?php

class Controller extends ParentController{

  public function __construct(){
    parent::__construct();
  }

  public function pageOne(){
    $this->view->render(__FUNCTION__);
  }

  public function pageTwo(){
/*    $obj = $this->model->getImagesMOCK();
    $this->view->pdata = $obj;*/
    $this->view->render(__FUNCTION__);
  }

}