<?php
session_start();
if(isset($_POST['submit']))
{
    $_SESSION['project-name'] = $_POST['title'];
    $_SESSION['company'] = $_POST['company'];
    $_SESSION['description'] = $_POST['description'];

    $_SESSION['pic_name'] = $_FILES['picture']['name'];
    $_SESSION['pic_size'] = $_FILES['picture']['size'];
    $_SESSION['pic_type'] = $_FILES['picture']['type'];
    $_SESSION['pic_tmpname'] = $_FILES['picture']['tmp_name'];
    $_SESSION['pic_dest'] = "Upload/".$_SESSION['pic_name'];
    
    move_uploaded_file($_FILES['picture']['tmp_name'], $_SESSION['pic_dest']);
    
    header("location:create-project2.php");
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
         <legend>Create New Project</legend>
         <p>Enter basic project information</p>

      <!-- Name -->
      <div class="row">
        <div class="large-4 columns">
          <label>Project title
            <input type="text" placeholder="Enter project title" name="title" required pattern="name"/>
          </label>
          <small class="error">Project title is required and must be a string.</small>
        </div>
      </div>

      <!-- Other information -->
      <div class="row">
        <div class="large-4 columns">
          <label>Company Name
            <input type="text" placeholder="Enter company name" name="company" required/>
          </label>
          <small class="error">Company or team name is required</small>
        </div>
      </div>

      <div class="row">
        <div class="large-4 columns">
          <label>Upload Picture</br>
            <input type="file" name="picture"/>
          </label>
          <small class="error">Picture is required</small>
        </div>
      </div>
      
      <!-- description -->
      <div class="row">
        <div class="large-12 columns">
          <label>Description
            <textarea id="description" placeholder="Project description" name="description" required></textarea>
          </label>
          <small class="error">Project scope or description is required. (1000 characters max)</small>
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
              name: /^[a-zA-Z ]{3,50}$/
            }
          }
        });

    </script>
  </body>
</html>
