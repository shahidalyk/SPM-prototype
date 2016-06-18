<?php
session_start();

$user = $_SESSION['login-user'];

$title = $_SESSION['project-name'];
$company = $_SESSION['company'];
$description = $_SESSION['description'];

$picture_name = $_SESSION['pic_name'];
$picture_size = $_SESSION['pic_size'];
$picture_type = $_SESSION['pic_type'];
$picture_tmpname = $_SESSION['pic_tmpname'];
$destination = $_SESSION['pic_dest'];

$name1 = $_SESSION['name1'];
$password1 = $_SESSION['password1'];
$role1 = $_SESSION['role1'];

$name2 = $_SESSION['name2'];
$password2 = $_SESSION['password2'];
$role2 = $_SESSION['role2'];

$name3 = $_SESSION['name3'];
$password3 = $_SESSION['password3'];
$role3 = $_SESSION['role3'];

$name4 = $_SESSION['name4'];
$password4 = $_SESSION['password4'];
$role4 = $_SESSION['role4'];

mysql_connect("localhost","root","") or die("Error in Database Connection");
mysql_select_db("abstract") or die("Error in Database Selection");

//insert members information
$sql = "INSERT INTO `abstract`.`member` (`mid`, `name`, `password`, `role`) VALUES (NULL, '$name1', '$password1', '$role1');";
mysql_query($sql);

$sql = "INSERT INTO `abstract`.`member` (`mid`, `name`, `password`, `role`) VALUES (NULL, '$name2', '$password2', '$role2');";
mysql_query($sql);

$sql = "INSERT INTO `abstract`.`member` (`mid`, `name`, `password`, `role`) VALUES (NULL, '$name3', '$password3', '$role3');";
mysql_query($sql);

$sql = "INSERT INTO `abstract`.`member` (`mid`, `name`, `password`, `role`) VALUES (NULL, '$name4', '$password4', '$role4');";
mysql_query($sql);


//get project members id
$sql = "SELECT `mid` FROM `member` WHERE `name` = '$name1' AND `password` = '$password1' AND `role` = '$role1';";
$result2 = mysql_query($sql);
$row2 = mysql_fetch_array($result2);
$uid2 = $row2[0];

$sql = "SELECT `mid` FROM `member` WHERE `name` = '$name2' AND `password` = '$password2' AND `role` = '$role2';";
$result3 = mysql_query($sql);
$row3 = mysql_fetch_array($result3);
$uid3 = $row3[0];

$sql = "SELECT `mid` FROM `member` WHERE `name` = '$name3' AND `password` = '$password3' AND `role` = '$role3';";
$result4 = mysql_query($sql);
$row4 = mysql_fetch_array($result4);
$uid4 = $row4[0];

$sql = "SELECT `mid` FROM `member` WHERE `name` = '$name4' AND `password` = '$password4' AND `role` = '$role4';";
$result5 = mysql_query($sql);
$row5 = mysql_fetch_array($result5);
$uid5 = $row5[0];


//insert project basic information
$sql = "INSERT INTO `abstract`.`project` (`pid`, `uid`, `uid2`, `uid3`, `uid4`, `uid5`, `picture`, `title`, `description`, `company`) VALUES (NULL, '$user', '$uid2', '$uid3', '$uid4', '$uid5', '$destination', '$title', '$description', '$company');";



if(mysql_query($sql)){
    header("location:dashboard.php?successMsg=Project created successfully");	
}
else{
    header("location:dashboard.php?errorMsg=Project creation failed");	
}











?>