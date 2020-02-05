<?php include 'conn.php';

	$sql = 'create table student(
	student_id int(11) auto_increment primary key,
	name varchar(255),
	phone varchar(255)
	)';

	if($conn->query($sql) === true)
	{
		echo "table created!";
	}
	else
	{
		echo $conn->error;
	}
?>
