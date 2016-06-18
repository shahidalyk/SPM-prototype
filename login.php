<?php

session_start();

		$email = $_POST['email'];
		$password = $_POST['password'];


		mysql_connect("localhost","root","") or die("Error in Database Connection");
		mysql_select_db("abstract") or die("Error in Database Selection");

		$sql = "SELECT * FROM `abstract`.`user` WHERE email = '$email' AND password = '$password';";

		$result = mysql_query($sql);


		if( mysql_num_rows($result) == 1 ){
			$row = mysql_fetch_array($result);
			$_SESSION['login-user']  = $row[0];
			$_SESSION['name'] = $row[1];
			$_SESSION['email']  = $row[2];
			$_SESSION['company']  = $row[3];
			$_SESSION['picture']  = $row[3];

			header("location:dashboard.php");
			return 1;
		}
		else{
			return 0;
		}


 // else{
 //    //header("location:index.php#login?error=Invalid Email or Password");	
 // }

// $result = mysql_query($sql);
// $users = mysql_num_rows($result);
// echo $users;
// if($users == 1){
//     echo "success";
// }
// else{
//     echo "Failed";	
// }











?>