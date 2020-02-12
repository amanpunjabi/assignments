<?php 
require_once ('employee.php');
$employee = new Employee();

if(isset($_POST['email']))
{
	if(!$employee->validate_email($_POST['email']))
    {
    	$status = false;
    }
    else
    {
    	$status = true;
    }
    echo json_encode($status);
    exit;
}

if(isset($_POST['contact']))
{
	if(!$employee->validate_phone($_POST['contact']))
    {
    	$status = false;
    }
    else
    {
    	$status = true;
    }
    echo json_encode($status);
    exit;
}



?>