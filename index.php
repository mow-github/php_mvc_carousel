<?php

  $e_flag = false;
  $php = "php";
  require __DIR__ .DIRECTORY_SEPARATOR.$php."/controller/ParentController.".$php;
  require __DIR__ .DIRECTORY_SEPARATOR.$php."/view/View.".$php;
  require __DIR__ .DIRECTORY_SEPARATOR.$php."/model/Model.".$php;
  require __DIR__ .DIRECTORY_SEPARATOR.$php."/controller/Controller.".$php;

  $query_string = $_SERVER["QUERY_STRING"];
  $query_array = explode("/", $query_string);
  outputMsg($query_array,$e_flag);

  $controller = new Controller();

  switch ($query_array){
    case isset($query_array[1]):
      outputMsg("-- run method + one arg",$e_flag);
      # run method + one arg
      break;
    case ( isset($query_array[0]) && !empty($query_array[0]) ):
      outputMsg("-- init - run method  + zero arg",$e_flag);
      $controller->{$query_array[0]}();
      break;
    default:
      echo outputMsg("default route",$e_flag);
      $controller->index();
  }

  function outputMsg($msg,$flag){
    if($flag){var_dump($msg); }
  }

?>