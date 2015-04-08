<?php

include_once('user.php');

// Inialize session
session_start();


// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username']) || empty($_SESSION['username']) == true){
  header("Location: index.php");
}

//checks some loging page , bag'o lang gi add
if (!isset($_SESSION['user'])) header("login.php");


// Delete certain session
//unset($_SESSION['username']);
// Delete all session variables
// session_destroy();

// Jump to login page
//header('Location: index.php');

?>




<!DOCTYPE html>
<html>
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title> CebuSutdio.com </title>
	
	<meta name="description" content="My works and about me"/>
	<meta name="keywords" content="Mendez,Dulastudio,bisaya"/>
	
	<link href="style.css" rel="stylesheet" type="text/css"/>	
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

	
</head>
  
	<body>
	
     
	 
			<div id="bar">
			
				<div id="header">	
						   
							
								
								<ul>
									<li> <a href="">Home</a>    </li>
									<li> <a href="">Works</a>   </li>
									<li> <a href="">Contact me</a>   </li>
								</ul>
								
					<div class="logout">
						<a href="logout.php"></a>
					</div>

				</div>
						
			
			    
			</div>
			
			<div id="bgupper">
			
			
			<div id="container">
                <div style="clear:both"></div>				                                                        
                            
    
                        <div id="content">
						
							<div id="centerheader">
							
							</div>							
                         
							<div id="col1">
							
							    <div id="portfoliobtn">
									<a href="#"></a>
								</div>
								
								<div id="contactbtn">
									<a href="#"></a>
								</div>
								
								
								
							</div>
							
							<div id="col2">
								<center>
								<textarea class="textarea" rows="15" cols="50"></textarea>
								</center>

							</div>
                                    <div style="clear:both"></div>

						</div>
                <div style="clear:both"></div>
               
		
				</div>
			


					<div id="footer">
					</div>


				</div>
		 
		
	</body>

	
</html>