<?php
session_start();
include('config/dbconnect.php');

if (!$_SESSION['username'] ) {
  header('location: sign_in.php');
}
else
{
	header('location: menu.php');
}