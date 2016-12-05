<?php

class View{

  public $pdata = null; # controller may send data to this holder

  public function render($layout){
    $pdata = $this->pdata;
    $cPath = $layout;
    require realpath( __DIR__ .DIRECTORY_SEPARATOR."..").DIRECTORY_SEPARATOR."layout".DIRECTORY_SEPARATOR.$layout.".php";
  }

}