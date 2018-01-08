<?php
include('config/dbconnect.php');
session_start();

$query = "select password from users where username ='".$_SESSION['username']."'";
$result=mysqli_query($con,$query) or die ("Failed".$query);
$row = mysqli_fetch_assoc($result); 
$oldPassDB = $row['password'];
$oldPassSite = md5($_POST['oldPass']);
$newPass =md5($_POST['newPass']);

if ($oldPassSite == $oldPassDB)
{
	$updatequery="UPDATE users SET password='".$newPass."' WHERE username='".$_SESSION['username']."'";
echo $updatequery;
	$result=mysqli_query($con, $updatequery) or die ("Nem sikerült".mysqli_error($con)); 
	mysqli_close($con);
	header("location: menu.php");
}
else
{
	echo "Hibás jelszó!";
}
?>