<?php 
include 'conn.php';

$sql = "insert into student(name,phone) values('amandeep','8735980694');";
$sql .= "insert into student(name,phone) values('rahul','8735980694');";
$sql .= "insert into student(name,phone) values('harsh','8735980694');";

if($conn->multi_query($sql) === true)
{
	echo "Record inserted successfully!<br>";
}
else
{
	echo $conn->error.'<br>';
}

echo $conn->insert_id;
?>