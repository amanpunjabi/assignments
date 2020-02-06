<?php
class Database{
  private $host;
  private $user;
  private $pass;
  private $db;
  public $mysqli;

  public function db_connect(){

    $this->host = 'localhost';
    $this->user = 'root';
    $this->pass = '';
    $this->db = 'test2';

    $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
    return $this->mysqli;
    
  }
}
?>