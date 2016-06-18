<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Abstract | Project</title>
     
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
          <a href="index.php">
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
          <a href="dashboard.php">Projects</a>
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
    <div class="large-6 columns">
      <a href="#" name="about"></a>
        <h4 class="about-text">About Abstract</h4>
    </div>
  </div>
  
  <div class="row">

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
    
    $sql = "SELECT * FROM `project` WHERE `pid` = '$pid';";
    $result = mysql_query($sql);

    if( mysql_num_rows($result) > 0 ){
    $row = mysql_fetch_array($result);



  ?>
  
    <div class="large-12 columns">
      <div class="large-8 columns">
        <h1><?php echo $row[7]; ?></h1>
        <h3>Project Manager:
        <?php
          $user_id = $row[1];
          $sql = "SELECT * FROM `user` WHERE `id` = '$user_id';";
          $result = mysql_query($sql);

          $project_manager = mysql_fetch_array($result);
          echo $project_manager[1];
        ?>
        </h3>
        <p><?php echo $row[8]; ?></p>
      </div>

      <div class="large-4 columns">
        <img src="<?php echo $row[6]; ?>" width="303" height="210"/>
      </div>

    </div>

    <div class="large-12 columns">
      <h2>Team Members</h2>
    </div>
    <div class="large-12 columns">
    <?php
        
        for($i=2; $i<6; $i++){
           $uid = $row[$i];

           $sql = "SELECT * FROM `member` WHERE `mid` = '$uid';";
           $result = mysql_query($sql);
           $member = mysql_fetch_array($result);



    ?>
      <div class="large-4 columns left">
        <ul class="pricing-table">
            <li class="bullet-item"><?php echo $member[1]; ?></li>
            <li class="bullet-item"><?php echo $member[3]; ?></</li>
        </ul>
      </div>

    <?php

        }  //for loop ends


    ?>
    </div>


  <?php
    }  //if ends
    else{
  ?>
    <div class="large-12 columns">
      <p>There are no projects. Create new project.</p>
      <button id="login" class="button right projectButton">Create New Project</button>
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


      jQuery(document).ready(function() {
             jQuery('.tp-banner').revolution(
            {
              dottedOverlay:"none",
            delay:16000,
            startwidth:1170,
            startheight:700,
            hideThumbs:200,
            
            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:4,
            
            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview1",
            
            touchenabled:"on",
            onHoverStop:"on",
            
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
                        
            parallax:"scroll",
            parallaxBgFreeze:"on",
            parallaxLevels:[10,20,30,40,50,60,70,80,90,100],
                        
            keyboardNavigation:"off",
            
            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,

            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,

            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,
                
            shadow:0,
            fullWidth:"on",
            fullScreen:"off",

            spinner:"spinner4",
            
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,

            shuffle:"off",
            
            autoHeight:"off",           
            forceFullWidth:"on",            
                        
                        
                        
            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,            
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,
            
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            hideTimerBar:"on",
            startWithSlide:0
            });
        });

        
        $('#login').click(function(){
          $('#virtualBody').addClass('bg-fade');
          $('.login-popup').css({
            top :  $(window).height() / 2 - $('.login-popup').height() /2,
            left : $(window).width() / 2  - $('.login-popup').width() /2
          });
          $('.login-popup').fadeIn();
        });


        $('.login-close').click(function(){
          $('.login-popup').fadeOut();
          $('#virtualBody').removeClass('bg-fade');
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
