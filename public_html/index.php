<?php
$con = mysqli_connect("172.17.0.3","root","admin","dokdb");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = "SELECT * FROM names";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) {
	echo $row["id"]." ".$row["name"]." ".$row["age"];
	echo "<br>";
}


?>
