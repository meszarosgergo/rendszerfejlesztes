<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intranet";
//Csatlakozás
//$conn = new mysqli($servername, $username, $password);
$con=mysqli_connect($servername,$username,$password, $dbname);   
mysqli_set_charset($con,"utf8"); 
if(!isset($con))  
{ 
    die ("Nem sikerült".mysqli_error($con));  
}  
// Ellenőrzés
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}*/

?>