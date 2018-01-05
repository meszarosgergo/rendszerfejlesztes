<?php
session_start();
include('config/dbconnect.php');

if (!$_SESSION['logged'] ) {
  header('location: sign_in.php');
  }