<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register | Abstract</title>
     
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
s

      <ul class="right">  
        <li class="divider"></li>
        <li>
          <a href="index.php">About</a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="index.php">Support</a>
        </li>        
        <li class="divider"></li>
        <li class="has-form">
          <a href="#" id="login" class="button success">Log in</a>
        </li>
        <li class="divider"></li>
        <li class="divider"></li>
        <li class="has-form">
          <a href="#" class="button success">Sign up</a>
        </li>
        <li class="divider"></li>
      </ul>
      </section>
    </nav>
  </div>

  <div class="clear-fix"></div>
  

  <!-- Registration Form -->
  <div class="row">
    <form id="registrationForm" enctype="multipart/form-data" method="post" action="register-member-action.php" data-abide>
      <fieldset>
         <legend>Member Registration</legend>
      
      <!-- Name -->
      <div class="row">
        <div class="large-4 columns">
          <label>Full Name
            <input type="text" placeholder="Enter full name" name="name" required pattern="name"/>
          </label>
          <small class="error">Full Name is required and must be a string.</small>
        </div>
      </div>

      <!-- Email -->
      <div class="row">
        <div class="large-4 columns">
          <label>Email Address
            <input type="email" id="email1" placeholder="Enter email address" name="email" required pattern="email"/>
          </label>
          <small class="error">Email is required.</small>
        </div>
      </div>

      <!-- Password -->
      <div class="row">
        <div class="large-4 columns">
          <label>Password
            <input type="password" id="password1" placeholder="Enter Password" name="password" required pattern="password"/>
          </label>
          <small class="error">Alphanumeric password is required. (Minimum 8 characters, both uppercase and lowercase)</small>
        </div>
      </div>


      <!-- Other information -->
      <div class="row">
        <div class="large-4 columns">
          <label>Company Name
            <input type="text" placeholder="Enter company name" name="company" required/>
          </label>
          <small class="error">Company name is required</small>
        </div>
      </div>

      <div class="row">
        <div class="large-4 columns">
          <label>Upload Picture</br>
            <input type="file" name="picture" required/>
          </label>
          <small class="error">Picture is required</small>
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          <button id="submit" class="button small" value="submit">Submit</button>
        </div>
      </div>
      </fieldset>

    </form>
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
    <script src="js/foundation/foundation.abide.js"></script>

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

    </script>
  </body>
</html>
