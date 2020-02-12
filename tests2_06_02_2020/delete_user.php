<?php 
require_once('employee.php'); 
if(!empty($_GET))
{
	if(isset($_GET['id']))
	{
		$employee = new Employee();
    	$employee->delete_user($_GET['id']);
	}
}

?>