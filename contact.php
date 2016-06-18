<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact | Abstract</title>
     
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
          <a href="index.php">Projects</a>
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
    <div class="large-12 columns">
        <h2>Contact</h2>
        <form action="sendemail.php" method="post" data-abide>
          <h3>Send Email</h3>
          <!-- Name -->
          <div class="row">
            <div class="large-6 columns">
              <label>Full Name
                <input type="text" placeholder="Enter full name" name="name" required pattern="name"/>
              </label>
              <small class="error">Full Name is required and must be a string.</small>
            </div>
          </div>

          <!-- Email -->
          <div class="row">
            <div class="large-6 columns">
              <label>Email Address
                <input type="email" id="email1" placeholder="Enter email address" name="email" required pattern="email"/>
              </label>
              <small class="error">Email is required.</small>
            </div>
          </div>

          <!-- Subject -->
          <div class="row">
            <div class="large-12 columns">
              <label>Subject
                <input type="text" placeholder="Enter subject" name="subject" required/>
              </label>
              <small class="error">Subject is required and must be a string.</small>
            </div>
          </div>
          
          <!-- description -->
          <div class="row">
            <div class="large-12 columns">
              <label>Message
                <textarea id="description" placeholder="Enter Message" name="message" required></textarea>
              </label>
              <small class="error">Message is required</small>
            </div>
          </div>

          <button id="submit" class="button small button-margin" value="submit">Submit</button>
        </form>
    </div>
</div>





<!-- footer -->
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
            <a href="#" class="radius button right">Contact Us</a>
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
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.abide.js"></script>
    <script type="text/javascript" src="js/all.js"></script>
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
