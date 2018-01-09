<?php
if(!isset($_GET["d"]))     
$_GET["d"] = 0; 

//Todo: Navigáció full refact
switch($_GET["d"])   
	{      
		case 0: header('location: hirek.php');;break;     
		case 1:header('location: bekuldes.php');;break;      
		case 2:header('location: adminisztracio.php');;break;  
		default: break;   
	}
	
	?>