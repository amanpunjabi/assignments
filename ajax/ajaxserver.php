<?php 
include "conn.php";
if($_POST['name'] == null)
{
	echo "";
	exit;
}
$sql = "select * from student where name like '%".$_POST['name']."%';";
$result = $conn->query($sql);
// echo $sql;
// exit;
$res = "<table border='1px'>";
while ($row = $result->fetch_assoc()) {
	 $res.= "<tr><td>".$row["student_id"]."</td><td>".$row["name"]."</td><td> ".$row["phone"]."</td></tr>";
	 
}
$res.="</table>";
echo $res;
?>