<?php
   include('../db.php');
   session_start();
   $user_check = $_SESSION['email'];
   
   // $ses_sql = mysqli_query($con,"select email from MyUsers where email = '$user_check' ");
   
   // $row = mysqli_fetch_array($ses_sql);
   
   if(!isset($_SESSION['email'])){
      header("location:login.php");
   }
?>