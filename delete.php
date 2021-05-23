<?php

$conn = mysqli_connect("localhost","root","","payroll");

if(!$conn)
{
	 die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['id'];
$del = mysqli_query($conn, "DELETE FROM pay where id='$id'");
if($del)
{
	mysqli_close($conn);
	header("location:user.php");
	exit;
}

else
{
	echo "Error deleting record";
}
?>