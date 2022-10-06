<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | Online Flight Booking System</title>
 	

<?php
	session_start();
  if(!isset($_SESSION['login_id']))
    header('location:login.php');
 include('./header.php'); 
 // include('./auth.php'); 
 ?>

</head>
<style>
	body{
        background: #80808045;
  }
  .modal-dialog.large {
    width: 80% !important;
    max-width: unset;
  }
  .modal-dialog.mid-large {
    width: 50% !important;
    max-width: unset;
  }
</style>
