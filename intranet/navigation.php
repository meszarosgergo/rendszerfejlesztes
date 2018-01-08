<?php
if(!isset($_GET["d"]))     
$_GET["d"] = 0; 

//Todo: Navigáció full refact
switch($_GET["d"])   
	{      
		case 0: header('location: hirek.php');;break;     
		case 1: include "bekuldes.php";break;      
		case 2: include "adminisztracio.php";break;  
		default: break;   
	}