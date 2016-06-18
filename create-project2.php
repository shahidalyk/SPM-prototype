<?php
session_start();
$picture_tmpname = $_SESSION['pic_tmpname'];
if(isset($_POST['submit']))
{
    $_SESSION['name1'] = $_POST['name1'];
    $_SESSION['password1'] = $_POST['password1'];
    $_SESSION['role1'] = $_POST['role1'];

    $_SESSION['name2'] = $_POST['name2'];
    $_SESSION['password2'] = $_POST['password2'];
    $_SESSION['role2'] = $_POST['role2'];

    $_SESSION['name3'] = $_POST['name3'];
    $_SESSION['password3'] = $_POST['password3'];
    $_SESSION['role3'] = $_POST['role3'];

    $_SESSION['name4'] = $_POST['name4'];
    $_SESSION['password4'] = $_POST['password4'];
    $_SESSION['role4'] = $_POST['role4'];
            
    header("location:create-project-action.php");
} 
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Project | Abstract</title>
     
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
    
      if(!isset($_SESSION['login-user'])){
        header("location:index.php");
      }
      if(isset($_GET['errorMsg'])){
        echo "<div data-alert class='alert-box alert'>".$_GET['errorMsg']."<a href='#' class='close'>&times;</a></div>";
      }
    ?>
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
 <!-- Header ends.................................................................................-->
  <div class="clear-fix"></div>
  

  <!-- Registration Form -->
  <div class="row">
    <form id="registrationForm" enctype="multipart/form-data" method="post" action="" data-abide>
      <fieldset>
         <legend>Project Members</legend>
         <p>Member 1</p>

      <!-- Name -->
      <div class="row">
        <div class="large-4 columns">
          <label>Name
            <input type="text" placeholder="Enter name" name="name1" required pattern="name"/>
          </label>
          <small class="error">Member name is required and must be a string.</small>
        </div>

        <div class="large-4 columns">
          <label>Password
            <input type="password" placeholder="Enter password" name="password1" required/>
          </label>
          <small class="error">Alphanumeric password is required. (Minimum 8 characters, both uppercase and lowercase)</small>
        </div>

        <div class="large-4 columns">
          <label>Role
                  <select id="customDropdown1" class="medium" name="role1">
                    <option>Requirements Engineer</option>
                    <option>Software Designer</option>
                    <option>Software Developer</option>
                    <option>Software Tester</option>
                  </select>
          </label>
          <small class="error">Member role is required and must be a string.</small>
        </div>
      </div>


      <p>Member 2</p>

      <!-- Name -->
      <div class="row">
        <div class="large-4 columns">
          <label>Name
            <input type="text" placeholder="Enter name" name="name2" required pattern="name"/>
          </label>
          <small class="error">Member name is required and must be a string.</small>
        </div>

        <div class="large-4 columns">
          <label>Password
            <input type="password" placeholder="Enter password" name="password2" required/>
          </label>
          <small class="error">Alphanumeric password is required. (Minimum 8 characters, both uppercase and lowercase)</small>
        </div>

        <div class="large-4 columns">
          <label>Role
                  <select id="customDropdown1" class="medium" name="role2">
                    <option DISABLED>Requirements Engineer</option>
                    <option>Software Designer</option>
                    <option>Software Developer</option>
                    <option>Software Tester</option>
                  </select>
          </label>
          <small class="error">Member role is required and must be a string.</small>
        </div>
      </div>


      <p>Member 3</p>

      <!-- Name -->
      <div class="row">
        <div class="large-4 columns">
          <label>Name
            <input type="text" placeholder="Enter name" name="name3" required pattern="name"/>
          </label>
          <small class="error">Member name is required and must be a string.</small>
        </div>

        <div class="large-4 columns">
          <label>Password
            <input type="password" placeholder="Enter password" name="password3" required/>
          </label>
          <small class="error">Alphanumeric password is required. (Minimum 8 characters, both uppercase and lowercase)</small>
        </div>

        <div class="large-4 columns">
          <label>Role
                  <select id="customDropdown1" class="medium" name="role3">
                    <option DISABLED>Requirements Engineer</option>
                    <option>Software Designer</option>
                    <option>Software Developer</option>
                    <option>Software Tester</option>
                  </select>
          </label>
          <small class="error">Member role is required and must be a string.</small>
        </div>
      </div>


      <p>Member 1</p>

      <!-- Name -->
      <div class="row">
        <div class="large-4 columns">
          <label>Name
            <input type="text" placeholder="Enter name" name="name4" required pattern="name"/>
          </label>
          <small class="error">Member name is required and must be a string.</small>
        </div>

        <div class="large-4 columns">
          <label>Password
            <input type="password" placeholder="Enter password" name="password4" required/>
          </label>
          <small class="error">Alphanumeric password is required. (Minimum 8 characters, both uppercase and lowercase)</small>
        </div>

        <div class="large-4 columns">
          <label>Role
                  <select id="customDropdown1" class="medium" name="role4">
                    <option DISABLED>Requirements Engineer</option>
                    <option>Software Designer</option>
                    <option>Software Developer</option>
                    <option>Software Tester</option>
                  </select>
          </label>
          <small class="error">Member role is required and must be a string.</small>
        </div>
      </div>


      <div class="row">
        <div class="large-12 columns">
          <button id="submit" class="button small" value="submit" name="submit">Submit</button>

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

    </script>
  </body>
</html>
