<?php 
include 'conn.php';
 
$sql = 'select * from student limit 10';
$result = $conn->query($sql);
// echo "<pre>";
echo "<table border='1px'>";
while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["student_id"]."</td><td>".$row["name"]."</td><td> ".$row["phone"]."</td></tr>";
    }
echo "</table>";
