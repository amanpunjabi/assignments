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
  function delete_user($user_id)
  {
    $sql = "delete from employee where id =".$user_id.";";
    $result = $this->get_user_by_id($user_id);
    $row = $result->fetch_assoc();
    if($this->conn->query($sql) === TRUE)
    {
      
      $image = $row['image'];
      unlink('uploads/'.$image);
      header("Location: index.php?message_delete=success");
    }
    else
    {
      header("Location: index.php?message_delete=failed");
    }
  }

  function get_user_by_id($user_id)
  {
    $sql = "select * from employee where id=".$user_id;
    
    return $this->conn->query($sql);
  }

  function update_user($name,$email,$contact,$city,$gender,$image,$id)
  {
    if($image ==  "")
    {
      $sql = "update  employee set name = '$name',email='$email',contact='$contact',city='$city',gender='$gender' where id=$id";

    }
    else
    {
      $sql = "update  employee set name = '$name',email='$email',contact='$contact',city='$city',gender='$gender',image='$image' where id=$id";

    }
    // echo $sql;exit;
    if($this->conn->query($sql) === TRUE)
    {
      header("Location: index.php?message_update=success");
    }
    else
    {
      header("Location: index.php?message_update=failed");
    }

    
  }
 
}
?>

 