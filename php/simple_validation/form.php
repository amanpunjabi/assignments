<?php include 'validate.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>form validation</title>
</head>
<body>
<form method="post" action="">
<table>
	<tr><td>name:</td><td><input type="text" name="name" value="<?=$name?>" /></td></tr>
	<tr><td>email:</td><td><input type="email" name="email" value="<?=$email?>" /></td></tr>
	<tr><td rowspan="2"><input type="submit" name="submit" /></td></tr>
</table>
<?=$err?>
	
	 
</form>
</body>
</html>