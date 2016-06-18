<?php
session_start();
$uid =  $_SESSION['login-user'];
$password = $_POST['password'];
$password1 = $_POST['password1'];

mysql_connect("localhost","root","") or die("Error in Database Connection");
mysql_select_db("abstract") or die("Error in Database Selection");
$sql = "SELECT * FROM `abstract`.`user` WHERE id = '$uid' AND password = '$password';";
$result = mysql_query($sql);

if(mysql_num_rows($result) == 1){
  $sql = "UPDATE `abstract`.`user` SET `password` = '$password1' WHERE `user`.`id` = '$uid';";
  mysql_query($sql);
  header("location:settings.php?successMsg=Password successfully changed");  
}
else{
  header("location:settings.php?errorMsg=Wrong old password"); 
}









?>