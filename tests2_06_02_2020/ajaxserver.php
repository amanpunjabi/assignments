<?php 
require_once ('employee.php');
$employee = new Employee();

if(isset($_POST['email']))
{
	if(!$employee->validate_email($_POST['email']))
    {
    	echo $emailerr = "email already exist.";
    }
}

if(isset($_POST['contact']))
{
	if(!$employee->validate_phone($_POST['contact']))
    {
    	echo $emailerr = "Phone number already exist.";
    }
}



?>