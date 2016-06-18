<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$company = $_POST['company'];

$picture_name = $_FILES['picture']['name'];
$picture_size = $_FILES['picture']['size'];
$picture_type = $_FILES['picture']['type'];
$picture_tmpname = $_FILES['picture']['tmp_name'];
$destination = "Upload/".$picture_name;

//if(){
move_uploaded_file($picture_tmpname, $destination);
//header("location:index.php?errorMsg=Picture Size too large");
//}
mysql_connect("localhost","root","") or die("Error in Database Connection");
mysql_select_db("abstract") or die("Error in Database Selection");

//check if email already exists
$sql = "SELECT * FROM `abstract`.`user` WHERE email = '$email';";

$result = mysql_query($sql);

if( mysql_num_rows($result) == 1 ){
    header("location:register-member.php?errorMsg=Email already used");
    exit();	
}

//create new user
$sql = "INSERT INTO `abstract`.`user` (`id`, `name`, `email`, `password`, `company`, `picture`)
         VALUES (NULL, '$name', '$email', '$password', '$company', '$destination');";

if(mysql_query($sql)){
    header("location:index.php?successMsg=You are registered Successfully");	
}
else{
    header("location:register-member.php?errorMsg=Sign up Failed");	
}











?>