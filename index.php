<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome | Abstract</title>
     
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
      if(isset($_SESSION['login-user'])){
        header("location:dashboard.php");
      }
      if(isset($_GET['successMsg'])){
        echo "<div data-alert class='alert-box success'>You are signed up successfully<a href='#' class='close'>&times;</a></div>";
      }
    ?>
  <div id="virtualBody"></div>

  <div class="fixed">
    <nav class="top-bar fixed" data-topbar>
    <ul class="title-area">
       
      <li class="name">
        <h1>
          <a href="#top">
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
          <a href="#about">About</a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#support">Support</a>
        </li>        
        <li class="divider"></li>
        <li class="has-form">
          <a href="#" id="login" class="button success">Log in</a>
        </li>
        <li class="divider"></li>
        <li class="divider"></li>
        <li class="has-form">
          <a href="register-member.php" class="button success">Sign up</a>
        </li>
        <li class="divider"></li>
      </ul>
      </section>
    </nav>
  </div>

  <a href="#" name="top"></a>
<!--
  #################################
    - THEMEPUNCH BANNER -
  #################################
  -->
  <div class="tp-banner-container">
    <div class="tp-banner" >
      <ul>
        
        <!-- SLIDE  -->
        <li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-thumb="images/parallax_thumb1.jpg"  data-saveperformance="off"  data-title="Parallax 3D">
                  <!-- MAIN IMAGE -->
                  <img src="images/dummy.png"  alt="greenbg" data-lazyload="images/screenshot_00.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                  <!-- LAYERS -->

                  

                  <!-- LAYER NR. 6 -->
                  <div class="tp-caption lft skewtoleftshort rs-parallaxlevel-3"
                    data-x="100"
                    data-y="55" 
                    data-speed="1000"
                    data-start="2000"
                    data-easing="Power3.easeInOut"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    style="z-index: 7;"><img src="images/dummy.png" alt="" data-lazyload="">
                  </div>

                  <!-- LAYER NR. 7 -->
                  <div class="tp-caption black_heavy_60 customin randomrotateout tp-resizeme rs-parallaxlevel-3"
                    data-x="746"
                    data-y="230" 
                    data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="1000"
                    data-start="2400"
                    data-easing="Power4.easeOut"
                    data-splitin="chars"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">Abstract
                  </div>

                  <!-- LAYER NR. 8 -->
                  <div class="tp-caption black_bold_bg_20 skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2"
                    data-x="750"
                    data-y="320" 
                    data-speed="1000"
                    data-start="2900"
                    data-easing="Power3.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Manage Teams
                  </div>

                  <!-- LAYER NR. 9 -->
                  <div class="tp-caption black_bold_bg_20 skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2"
                    data-x="750"
                    data-y="360" 
                    data-speed="1000"
                    data-start="3000"
                    data-easing="Power3.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Enhanced Usability
                  </div>

                  <!-- LAYER NR. 10 -->
                  <div class="tp-caption black_bold_bg_20 skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2"
                    data-x="750"
                    data-y="400" 
                    data-speed="1000"
                    data-start="3100"
                    data-easing="Power3.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    style="z-index: 11; max-width: auto; max-height: auto; white-space: nowrap;">Strinking Utilities for your Projects
                  </div>

                  <!-- LAYER NR. 11 -->
                  <div class="tp-caption black_bold_bg_20 skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2"
                    data-x="750"
                    data-y="440" 
                    data-speed="1000"
                    data-start="3200"
                    data-easing="Power3.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;">Easy Setup
                  </div>

                  <!-- LAYER NR. 12 -->
                  <div class="tp-caption green_bold_bg_20 skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2"
                    data-x="750"
                    data-y="480" 
                    data-speed="1000"
                    data-start="3300"
                    data-easing="Power3.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    style="z-index: 13; max-width: auto; max-height: auto; white-space: nowrap;">And Much More ...
                  </div>
        </li>




        <!-- SLIDE  -->
        <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500" >
          <!-- MAIN IMAGE -->
          <img src="images/slider-2.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

          <!-- LAYERS -->
          
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption white_bold_bg_20 sfl tp-resizeme rs-parallaxlevel-1"
                    data-x="766"
                    data-y="373" 
                    data-speed="1000"
                    data-start="2600"
                    data-easing="Power3.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="300"
                    style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Software Projects
                  </div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption red_bold_bg_20 sfl tp-resizeme rs-parallaxlevel-1"
                    data-x="766"
                    data-y="408" 
                    data-speed="1000"
                    data-start="2900"
                    data-easing="Power3.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="300"
                    style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Team Members
                  </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption blue_bold_bg_20 sfl tp-resizeme rs-parallaxlevel-1"
                    data-x="768"
                    data-y="443" 
                    data-speed="1000"
                    data-start="3200"
                    data-easing="Power3.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="300"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">And much more
                  </div>

                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption customin rs-parallaxlevel-2"
                    data-x="925"
                    data-y="299" 
                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="300"
                    data-start="1900"
                    data-easing="Power3.easeInOut"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="300"
                    style="z-index: 5;"><img src="images/dummy.png" alt="" data-lazyload="images/redbg.png">
                  </div>

                  <!-- LAYER NR. 5 -->
                  <div class="tp-caption light_heavy_40 customin tp-resizeme rs-parallaxlevel-2"
                    data-x="940"
                    data-y="302" 
                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="300"
                    data-start="2200"
                    data-easing="Power3.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="300"
                    style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">ONE
                  </div>

                  <!-- LAYER NR. 6 -->
                  <div class="tp-caption black_heavy_60 lft tp-resizeme rs-parallaxlevel-2"
                    data-x="808"
                    data-y="251" 
                    data-speed="600"
                    data-start="2600"
                    data-easing="Power3.easeInOut"
                    data-splitin="chars"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="300"
                    style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">All in
                  </div>

                  <!-- LAYER NR. 7 -->
                  <div class="tp-caption light_heavy_70 lfr tp-resizeme rs-parallaxlevel-2"
                    data-x="1045"
                    data-y="282" 
                    data-speed="600"
                    data-start="2500"
                    data-easing="Power3.easeInOut"
                    data-splitin="chars"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="300"
                    style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">Web
                  </div>

                  <!-- LAYER NR. 8 -->
                  <div class="tp-caption white_thin_34 customin tp-resizeme rs-parallaxlevel-2"
                    data-x="1001"
                    data-y="347" 
                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="300"
                    data-start="2800"
                    data-easing="Power3.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="300"
                    style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Application
                  </div>

                  <!-- LAYER NR. 9 -->
                  <div class="tp-caption customin fadeout rs-parallaxlevel-3"
                    data-x="-122"
                    data-y="12" 
                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="500"
                    data-start="1300"
                    data-easing="Power3.easeInOut"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="600"
                    style="z-index: 10;"><img src="images/dummy.png" alt="" data-lazyload="images/ipad_dark.png">
                  </div>

                  <!-- LAYER NR. 10 -->
                  <div class="tp-caption tp-fade fadeout rs-parallaxlevel-3"
                    data-x="78"
                    data-y="103" 
                    data-speed="300"
                    data-start="1600"
                    data-easing="Power3.easeInOut"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    data-endspeed="600"
                    data-autoplay="false"
                    data-autoplayonlyfirsttime="false"
                    style="z-index: 11;"><img src="images/large-screen.png" width='700' height='647' style='width:700px;height:647px;' />
                  </div>

        </li>

        <!-- SLIDE  -->
        <li data-transition="parallaxtoleft" data-slotamount="7" data-masterspeed="1000" >
          <!-- MAIN IMAGE -->
          <img src="images/laptopmockup_sliderdy.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
          <!-- LAYERS -->
          
          
        </li>
        
      </ul>
    </div>
  </div>

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
    <div class="large-4 columns">
      <img src="images/imac1.png" class="img-center" />
      <h4>What is Abstract?</h4>
      <p>Abstract makes it easy for people in different roles with different responsibilities to communicate and work together. It’s a place to share files, have discussions, collaborate on documents, assign tasks, and check due dates. Basecamp stores everything securely and can be accessed at anytime from anywhere.</p>
    </div>
    
    <div class="large-4 columns">
      <img src="images/icon_photo.png" class="img-center" />
      <h4>Everything You Need</h4>
      <p>Different teams have different needs, and every project is different. We give you the tools you need when you need them. Through our revolutionary platform, all your employees can communicate in one central location increasing productivity and communication. Sounds like Fun and everything.</p>
    </div>
    
    <div class="large-4 columns">
      <img src="images/macbook2.png" class="img-center" />
      <h4>Why Choose Abstract?</h4>
      <p>There are a lot of project management tools out there, and many of them do the same things. It can be tough to choose. With that in mind, here are a few things we prepared for you. Its Free.<br>
      You have no excuse for not trying our system. Sign up now and enjoy unlimited projects and users forever! Takes only a few minutes.</p>
    </div>
  
  </div>
    

  <div class="clear-fix"></div>


  <div class=" mainCenter">
  <div class="row">
    <div class="large-6 columns">
      <a href="register-member.php">
        <button class="button right projectButton">Create Project</button>
      </a>
    </div>
    <div class="large-6 columns">
      <a href="register-member.php">
        <button class="button memberButton">Become Member</button>
      </a>
    </div>
  </div>
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
            <a href="register-member.php" class="radius button right">Sign up Now</a>
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
        


        //$('#submit').click(function(){

         $("#loginForm").submit(function(event){

          var email = $('#email1').val();
          var password = $('#password1').val();
          var dataString = 'email='+email+'&password='+password;

          if($.trim(email).length > 0 && $.trim(password).length > 0){
            //alert("if successful");
            $.ajax({
              type : "post",
              url  : "login.php",
              data : dataString,
              cache: false,
              beforeSend: function(){$("#submit").html("Connecting");},
              success: function(data){
                  if(data){
                    //success
                    window.location.href = "dashboard.php";
                  }
                  else{
                    //failed
                    $("#submit").html("Login");
                    $(".login-error").fadeIn();       
                  }
              }
            });
          }

          return false;
        });

         $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });
    </script>
  </body>
</html>
