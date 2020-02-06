<?php
include 'utilities.php';
require_once ('database.php');

class Employee {

  public $conn; 

  function __construct() {    
      // Create database connection
    $db = new Database();
    $this->conn = $db->db_connect();
 
  }   

  
  function add_user($name,$email,$contact,$city,$gender,$image)
  {
   
     
      $sql = "insert into employee(name,email,contact,city,gender,image) values('".$name."','".$email."','".$contact."','".$city."','".$gender."','".$image."');";
    
     // echo "$sql";exit;
    if($this->conn->query($sql) === TRUE)
    {
      header("Location: index.php?message=success");
      // echo "Added successfully.";
    }
    else
    {
      header("Location: index.php?message=failed");
      // echo "Failed to add";
    }
    
  }

  function get_users()
  {
    $sql = "select * from employee ";
    return $this->conn->query($sql);

  }

  function validate_email($email)
  {
    $sql = "select * from employee where email = '".$email."'";
    $result = $this->conn->query($sql);
    if($result->num_rows > 0)
    {
       return false;
    }
    else
    {
      return true;
    }
    
  }

  public function validate_phone($phone)
  {
    $sql = "select * from employee where contact = '".$phone."'";
    $result = $this->conn->query($sql);
    if($result->num_rows > 0)
    {
       return false;
    }
    else
    {
      return true;
    }
  }
 
}
?>

 