<?php

class Model{

  private $dsn;
  private $username;
  private $password;
  private $charencoding;
  private $pdocon;

  private function openConnectionDB(){

    if (!defined('USER')){
      require 'db_connect_local.php';
    }

    $this->dsn = DSN;
    $this->username = USER;
    $this->password = PASS;
    $this->charencoding = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $this->pdocon = new PDO($this->dsn, $this->username, $this->password, $this->charencoding);
  }

  public function getImages(){
    try {
      $this->openConnectionDB();

      $pdoStatement = $this->pdocon->prepare("SELECT srcOrg, srcMini, text, CONCAT(fname,' ', lname) AS name FROM image");
      $pdoStatement->execute();
      $tablecontent = $pdoStatement->fetchAll(PDO::FETCH_OBJ);
      $this->pdocon = NULL;
      return $tablecontent;
    } catch (PDOException $pdoexp) {
      $this->pdocon = NULL;
      throw new Exception('DB error: ' . $pdoexp->getMessage());
    }
  }

  public function getImagesMOCK(){
    try {
      $object = [0 =>
        (object) ["image_id" => "1","srcOrg" => "https://dummyimage.com/1920x1920/000000/fff", "srcMini" => "https://dummyimage.com/480x480/000000/fff", "text" => "image 1", "name" => "Donald Duck"],
        (object) ["image_id" => "2","srcOrg" => "https://dummyimage.com/1920x1920/6b226b/fff", "srcMini" => "https://dummyimage.com/480x480/6b226b/fff", "text" => "image 2", "name" => "Donald Duck"],
        (object) ["image_id" => "3","srcOrg" => "https://dummyimage.com/1920x1920/222869/fff", "srcMini" => "https://dummyimage.com/480x480/222869/fff", "text" => "image 3", "name" => "Donald Duck"]
      ];
      return $object;
    } catch (PDOException $pdoexp) {
      $this->pdocon = NULL;
      throw new Exception('DB error: ' . $pdoexp->getMessage());
    }
  }

}