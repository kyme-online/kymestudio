<?php

include_once('user.php');

// Inialize session
session_start();



if (isset($_SESSION['username'])){
 
}

// fetch info
$con=mysqli_connect("localhost","root","walnutroad47","cebustudio");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 

$result = mysqli_query($con,"SELECT * FROM siteinfo where id=1");

if ($result) while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
{
  $aboutme = $row['aboutme']; // 
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
       /* padding-top: 60px; <--temporarily dissabled */
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
            <div class="menu_cs"> <ul class="nav">
              <li class="active"><a href="index.php">Home</a></li>               
              <li><a href="about.php">About</a></li>               
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolios<b class="caret"></b></a> 
                            <ul class="dropdown-menu"> 
                                  <li><a href="print.php">Print Graphics</a></li>                   
                                  <li><a href="web.php">Web/Media Design</a></li>                   
                                  <!--li class="divider"></li> 
                                  <li class="nav-header">Nav header</li>
                                  <li><a href="#">Separated link</a></li>                   
                                  <li><a href="#">One more separated link</a></li-->     
                            </ul>  
                  </li>
                  <li><a href="blog.php">Blogs</a></li>               
                  <li><a href="contact.php">Contact Me</a></li>
              <?php if (isset($_SESSION['username'])): ?><li><a href="logout.php">Logout</a></li><?php endif; ?>
            </ul>
          </div>
            <!--form class="navbar-form pull-right">
              <input class="span2" placeholder="Email" type="text">
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
           
    <div class="container container_cs">

      <!-- Main hero unit for a primary marketing message or call to action -->
      

      <!-- Example row of columns -->
      <div class="row colcenter">
        <div class="span4 col1">
          <h2>About</h2>
          <p><?php echo $aboutme; ?> </p>
          <p><a class="btn" href="#">View details »</a></p>
          <?php if (isset($_SESSION['username'])): ?><a href="/cebustudio/securedpage.php"><p class="edit">Edit</p><?php endif; ?>
        </div>
        <div class="span4 col2">
          <h2>Contact</h2>
          <p><?php echo $contact; ?></p>
          <p><a class="btn" href="#">View details »</a></p>
          <?php if(isset($_SESSION['username'])): ?><a href="/cebustudio/securedpage.php"><p class="edit">Edit</p></a><?php endif; ?> 
       </div>
        <div class="span4 col3">
          <h2>Portfolios</h2>
          <p><?php echo $contact; ?></p>
         
        </div>
      </div>

      <hr> </hr>

      <footer>
        <p>© Company
            <?php
                $t=time();
                echo(date("Y",$t));
            ?>
        </p>
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

  

</body></html>