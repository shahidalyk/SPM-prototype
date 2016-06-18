<?php
  //database connection get user projects
      $uid = $_SESSION['login-user'];
      $pid = $_GET['pid'];
      //$_SESSION['name'];
      //$_SESSION['email'];
      //$_SESSION['company'];
      //$_SESSION['picture'];

    mysql_connect("localhost","root","") or die("Error in Database Connection");
    mysql_select_db("abstract") or die("Error in Database Selection");
    
    $sql = "DELETE FROM `abstract`.`project` WHERE `project`.`pid` = '$pid';";
    mysql_query($sql);

    header("location:dashboard.php?successMsg=Project deleted");

  ?>
