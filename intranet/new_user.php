<?php
include('config/dbconnect.php');

$userquery = "select count(username) as numofsame from users where username ='".$_POST['username']."'";
$numOfSameUserResult = mysqli_query($con, $userquery) or die ("Nem sikerült".mysqli_error($con)); 
$row=$numOfSameUserResult->fetch_assoc();
$numOfSameUser = intval($row['numofsame']);mysqli_fetch_row($numOfSameUserResult);

if ($numOfSameUser == 0)
{
	$query="insert into users (name, username, email, password, role_id) values ('".$_POST['fullname']."','".$_POST['username']."','".$_POST['email']."','".md5($_POST['password'])."','3')"; 

	$result=mysqli_query($con, $query) or die ("Nem sikerült".mysqli_error($con)); 
	mysqli_close($con);
	header("location: menu.php?d=2");
}
else
{
	echo "A felhasználónév már foglalt!";
}
?>