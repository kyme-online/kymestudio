<?php
// Test Edut
include_once('user.php');

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username']) || empty($_SESSION['username']) == true){
  header("Location: login.php");
}

//checks some loging page , bag'o lang gi add
if (!isset($_SESSION['user'])) header("login.php");


// Delete certain session
//unset($_SESSION['username']);
// Delete all session variables
// session_destroy();

// Jump to login page
//header('Location: index.php');

$bio = '';
$aboutme = '';
$contact = '';
$address = '';
// if user submitted
if (isset($_POST['bio'])) {
  // sa diri pud
  $con=mysqli_connect("localhost","root","walnutroad47","cebustudio");
  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  //blocks to save data for about aboutme
  $bio = mysqli_real_escape_string($con, $_POST['bio']);
  $sql="UPDATE siteinfo set aboutme='$bio' WHERE id=1";

  //if ($mysqli->query("INSERT into myCity (bio) VALUES ('$bio')"))
  if (!mysqli_query($con,$sql))
  {
    die('Error: ' . mysqli_error($con));
  }

  mysqli_close($con);
}

//if user submited from contact 
if (isset($_POST['address'])) {
  // sa diri pud
  $con=mysqli_connect("localhost","root","walnutroad47","cebustudio");
  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    
  //blocks to save data for about aboutme
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $sql="UPDATE siteinfo set contact='$address' WHERE id=1";

  //if ($mysqli->query("INSERT into myCity (bio) VALUES ('$bio')"))
  if (!mysqli_query($con,$sql))
  {
    die('Error: ' . mysqli_error($con));
  }

  mysqli_close($con);
}

// fetch info and display the content-type
$con=mysqli_connect("localhost","root","walnutroad47","cebustudio");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 

$result = mysqli_query($con,"SELECT * FROM siteinfo where id=1");

if ($result) while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
{
  $aboutme = $row['aboutme'];
  $contact = $row['contact'];
}
mysqli_close($con);

?>



<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="Bootstrap,%20from%20Twitter_files/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="style.css" rel="stylesheet" type="text/css"/> 
    <link href="Bootstrap,%20from%20Twitter_files/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="http://twitter.github.io/bootstrap/assets/ico/favicon.png">

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container_cs container">
          <div class="social_cs">
            <a href="" ><img class="fb" src="images/fb.png"/></a>
            <a href=""> <img class="twitter" src="images/twitter.png"/></a>
          </div>
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--a class="brand" href="#">Project name</a-->
          <div class="nav-collapse collapse">
            <div class="menu_cs">
            <ul class="nav">
              <li><a href="index">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolios<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="print.php">Print Graphics</a></li>
                  <li><a href="web.php">Web Design</a></li>
                  <!--li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li-->
                </ul>
              </li>
              <li><a href="blog.php">Blogs</a></li>
              <li><a href="contact.php">Contact Me</a></li>
              <li><a href="logout.php">Logout</a></li>
              	

            </ul>
          </div>
            <!--form class="navbar-form pull-right">
              <input class="span2" placeholder="http://www.w3schools.com/php/php_mysql_insert.aspEmail" type="text">
              <input class="span2" placeholder="Password" type="password">
              <button type="submit" class="btn">Sign in</button>
            </form-->
          </div><!--/.nav-collapse -->
        </div> 
      </div>
    </div>

    <div id="bodycontentcs">

        <div class="hero-unit">
        <!--h1>Hello, world!</h1-->  
        <div class="logo_cs"><img src="images/logo-text.png"/></div>
        <!--p>This is a paragraph for header</p-->
        <!--p><a href="#" class="btn btn-primary btn-large">Learn more »</a></p-->
      
               <!--The 3 circle buttons in header -->
      <div id="headerlinks_cs">
          <div id="blogs_cs"> 
              <a href="" /> </a>
          </div>
          <div id="works_cs">
              <a href="" /> </a>
          </div>
          <div id="emailme_cs">
              <a href="" /> </a>
          </div>
          <div style="clear:both"></div>
      </div>

      </div>
      <!-- 
      comment 
    -->  
    <p>Test</p>       
    <div class="container container_cs">

      <!-- Main hero unit for a primary marketing message or call to action -->
      

      <!-- Example row of columns -->
      <div class="row colcenter">
            
                <form id="myform" action="securedpage.php" method="post">
                      <div class="span4 about-edit">
                          <h2>Edit About</h2>
                          <textarea rows="8" col="20" name="bio"><?php echo $aboutme; ?></textarea>

                            <p><a class="btn" href="#" name="submit">Save for About Me »</a></p>
                      </div>

                      <div class="span4 col2">
                          <h2>Edit Contact</h2>
                          <textarea rows="8" col="20" name="address"><?php echo $contact; ?> </textarea>
                          <p><a class="btn" href="#" name="submit">Save Contact Us »</a></p>

                     </div>

                     
              </form>

               <div class="span4 col3">
                        <h2>Upload Works</h2>
                        <p>To upload file, please select UPLOAD category.</p>

                          <?php
                                  if (isset($_SESSION['error']))
                                  {
                                      echo "<span id=\"error\"><p>" . $_SESSION['error'] . "</p></span>";
                                      unset($_SESSION['error']);
                                  }
                          ?>

                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                Select image to upload:
                                <!--input type="hidden" name="MAX_FILE_SIZE" value="100000" /--> 
                                <input type="file" name="uploadFile">
                                <input type="submit" id="submit" value="Upload" />
                            </form>
              </div>


      </div> <!-- End of row colcenter --> 
      
        <hr></hr>

      <footer>
        <p>© Company 2013</p>
      </footer>

    </div> <!-- /container -->

  </div> <!-- /of the bodycontent -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Bootstrap,%20from%20Twitter_files/jquery.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-transition.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-alert.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-modal.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-dropdown.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-scrollspy.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-tab.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-tooltip.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-popover.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-button.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-collapse.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-carousel.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-typeahead.js"></script>

<script>
$('.btn').click(function (e) {
  e.preventDefault();
  $('#myform').submit();
});
</script>

</body></html>
