<?php
//csatlakozás db-hez és adatok frissítése, majd visszatérés
session_start();
include('config/dbconnect.php');
if(isset($_POST['disabled2']))
{
	$dis = 1;
} else { $dis = 0;};

$query="UPDATE users SET name='".$_POST['name2']."',username='".$_POST['username2']."',email='".$_POST['email2']."',role_id='".$_POST['role2']."',disabled='".$dis."' where ID = '".$_POST['id2']."'";
echo $query;
mysqli_query($con,$query) or die ("Nem sikerült".mysqli_error($con));
mysqli_close($con);
//echo '<meta http-equiv="refresh" content="0; URL=menu.php?d=2">';
?>