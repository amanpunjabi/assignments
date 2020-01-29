<?php
	$err = "";
	$name="";
	$email="";
	if(!empty($_POST))
	{
	$name = $_POST['name'];
	$email = $_POST['email'];
	

	if ($name ==  "") {
		$err .= "enter your name<br>";
		 
	}
	if ($email == "") {
		$err .= "enter your email<br>";
	}
	 
	}
	// header('Location:form.php');
?>