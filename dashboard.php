<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projects | Abstract</title>
     
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/extralayers.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,700,800,900' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" type="text/css" href="css/all.css" media="screen" />



    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
  <?php
  session_start();
    if(!isset($_SESSION['login-user'])){
      header("location:index.php");
    }
    if(isset($_GET['successMsg'])){
      echo "<div data-alert class='alert-box success'>".$_GET['successMsg']."<a href='#' class='close'>&times;</a></div>";
    }
    if(isset($_GET['errorMsg'])){
      echo "<div data-alert class='alert-box alert'>".$_GET['errorMsg']."<a href='#' class='close'>&times;</a></div>";
    }

  ?>
  <div id="virtualBody"></div>

  <div class="fixed">
    <nav class="top-bar fixed" data-topbar>
    <ul class="title-area">
       
      <li class="name">
        <h1>
          <a href="#">
            Abstract Software Management
          </a>
        </h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>

    </ul>
    
    <section class="top-bar-section">


      <ul class="right">  
        <li class="divider"></li>
        <li>
          <a href="#">Projects</a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="settings.php">Settings</a>
        </li>        
        <li class="divider"></li>
        <li class="has-form">
          <a href="#" class="button success"><?php echo $_SESSION['name']; ?></a>
        </li>
        <li class="divider"></li>
        <li class="has-form">
          <button id="logout" class="button small success">Log out</button>
        </li>
        <li class="divider"></li>
      </ul>
      </section>
    </nav>
  </div>


<!--
  #################################
    - THEMEPUNCH BANNER -
  #################################
  -->

<!--
  #################################
    - THEMEPUNCH BANNER -
  #################################
  -->



  <div class="clear-fix"></div>
  
  <div class="row">
      <h2>Your Projects</h2>  
      <a href="create-project.php"><button id="login" class="button right projectButton">Create New Project</button></a>
  </div>
  
  
  <div class="row">

  <?php
  //database connection get user projects
      $uid = $_SESSION['login-user'];
      //$_SESSION['name'];
      //$_SESSION['email'];
      //$_SESSION['company'];
      //$_SESSION['picture'];

    mysql_connect("localhost","root","") or die("Error in Database Connection");
    mysql_select_db("abstract") or die("Error in Database Selection");
    
    $sql = "SELECT * FROM `project` WHERE `uid` = '$uid';";
    $result = mysql_query($sql);

    if( mysql_num_rows($result) > 0 ){
    while( $row = mysql_fetch_array($result) )
    {

  ?>
  
    <div class="large-4 columns left height-content">
      <img src="<?php echo $row[6]; ?>" class="project-img"/>
      <h4><?php echo $row[7]; ?></h4>
      <p class="dialog-height"><?php echo $row[8]; ?></p>
      <a href="view-project.php?pid=<?php echo $row[0]; ?>" ><button class="button small">View Project</button></a>
      <a href="delete-project.php?pid=<?php echo $row[0]; ?>" ><button class="button small">Delete Project</button></a>
    </div>
  <?php
     }  //while ends
    }  //if ends
    else{
  ?>
    <div class="large-12 columns">
      <p>There are no projects. Create new project.</p>
      <a href="create-project.php"><button id="login" class="button right projectButton">Create New Project</button></a>
    </div>
  <?php
    }
  ?>
  </div>
    


  <div class="clear-fix"></div>
  
  
  <div class="row">
    <div class="large-6 columns">
      <a href="#" name="support"></a>
        <h4 class="about-text">Support Abstract</h4>
    </div>
  </div>


<div class="mainLower">
<div class="row space">
    <div class="large-12 columns">
    
      <div class="footerbg">
        <h4>Get in touch!</h4>
            
        <div class="row">
          <div class="large-9 columns">
            <p>We'd love to hear from you, you attractive person you. We do whatever it takes to make sure our customer service is the best in the business. Fast, friendly, knowledgeable, and often hilarious, you’ll feel like old friends in no time. Email us right now. We’ve been responding to emails in about one minute lately, so we’ll get back to you super fast!</p>
          </div>
          <div class="large-3 columns">
            <a href="contact.php" class="radius button right">Contact Us</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
 </div>




  
  
  
  <footer class="row">
    <div class="large-12 columns">
      <hr/>
      <div class="row">
        <div class="large-6 columns">
          <p>© Copyright Abstract 2015. All rights reserved.</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="https://www.facebook.com/">Facebook</a></li>
            <li><a href="https://plus.google.com/">Google+</a></li>
            <li><a href="https://twitter.com/">Twitter</a></li>
            <li><a href="https://www.pinterest.com/">Pintrest</a></li>
          </ul>
        </div>
      </div>
    </div> 
  </footer>


  <div class="large-4 columns login-popup">
    <!-- Login Error -->
          <div data-alert class='alert-box alert radius login-error'>
          Email or password doesn't match.
            <a href='#' class='close'>&times;</a>
          </div>
    <!-- Registration Form -->
      <a href="#" class="close login-close right">&times;</a>
      <div class="row">
        <form id="loginForm" method="post" action="" data-abide>
          <fieldset>
             <legend>Login</legend>

              <!-- Email -->
              <div class="row">
                <div class="large-12 columns">
                  <label>Email Address
                    <input type="email" id="email1" placeholder="Enter email address" name="email" required pattern="email"/>
                  </label>
                  <small class="error">Email is required.</small>
                </div>
              </div>

              <!-- Password -->
              <div class="row">
                <div class="large-12 columns">
                  <label>Password
                    <input type="password" id="password1" placeholder="Enter Password" name="password" required pattern="password"/>
                  </label>
                  <small class="error">Alphanumeric password is required. (Minimum 8 characters, both uppercase and lowercase)</small>
                </div>
              </div>
              
              <div class="row">
                <div class="large-12 columns">
                  <button id="submit" value="submit" class="button small login-button">Login</button>
                </div>
              </div>

          </fieldset>

        </form>
      </div>
  </div>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script src="js/all.js"></script>
    <script>
      $(document).foundation({
          abide : {
            patterns: {
              password: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{8,}$/,
              name: /^[a-zA-Z ]{3,25}$/
            }
          }
        });


     

         $("#logout").click(function(){
              $.ajax({
                type: "POST",
                url: "logout.php"
                }).done(function() {
                window.location.href = "index.php";
              }); 
          });
    </script>
  </body>
</html>
