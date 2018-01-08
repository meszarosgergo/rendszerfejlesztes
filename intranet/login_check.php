<?php
session_start();
include('config/dbconnect.php');

$username = $_POST['username'];
//$password = md5($_POST['password']);
$password = $_POST['password'];
	
if(!empty($username) && !empty($password)){
// Prepare a select statement

	$query = "SELECT name, username, password, role_id FROM users WHERE username = '".$username."'";
	$result=mysqli_query($con,$query) or die ("Failed".$query);

	while($row = mysqli_fetch_assoc($result)) 
	{
		if($password == $row["password"])
		{
			$_SESSION['name'] = $row["name"];
			$_SESSION['username'] = $username; 
			$_SESSION['role_id'] = $row["role_id"];
			header("location: index.php");
		}
		else
		{
			echo "Hibás jelszó";
		}
	}
} 
else
{
	echo "Valami bibi történt";
}
	mysqli_close($con);
?>