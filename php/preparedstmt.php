<?php 
include 'conn.php';
$sql = "";
$fname = "mana";
$phone = "9999";
$stmt = $conn->prepare("insert into student(name,phone) values(?,?);");
$stmt->bind_param("ss",$fname,$phone);
 
if($stmt->execute())
{
	echo "record inserted using prepared statement successfully.";
}
else
{
	echo "Record insertion failed.";
}
?>