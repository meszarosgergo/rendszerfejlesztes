<html>
<head>
  <meta charset="UTF-8">
  
</head> 
<body>
<div class="wrapper2">
<?php  
	session_start();
	include('config/dbconnect.php');
	$query="select title, link, role_id from menu";  
	$result=mysqli_query($con,$query) or die ("Nem sikerült".$query); 
	echo "<table class='menu'>";
	echo "<tr>";
	while (list($title,$link,$role_id) = mysqli_fetch_row($result))   
	{     
		if($_SESSION['role_id'] <= $role_id)
		{
			echo "<td><a class=menu href=menu.php?d=".$link.">".$title."</a></td>";
		}
	}
	echo "<td>".$_SESSION['name']."</td>";
	echo "<td><a class=menu href=change_password.html>Jelszó módosítás</a></td>";
	echo "<td><a class=menu href=logout.php>Kijelentkezés</a></td>";
	echo "</tr>";	
	echo "</table>";   
	mysqli_close($con);  
	if(!isset($_GET["d"]))     
		$_GET["d"]=0;   

	switch($_GET["d"])   
	{      
		case 0: include "hirek.php";break;     
		case 1: include "bekuldes.php";break;      
		case 2: include "adminisztracio.php";break;  
		default: break;   
	}
?>
</div>
</body>
</html>