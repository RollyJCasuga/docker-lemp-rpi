<?php
$con = mysqli_connect("172.17.0.3","root","admin","sampledb");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = "SELECT * FROM sampletable";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) {
	echo $row["ID"]." ".$row["Name"]." ".$row["Age"];
	echo "<br>";
}


?>
