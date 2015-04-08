<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['username']);
unset($_SESSION['username']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: login.php');

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
								
					<div class="login">
						<a href="login.php"></a>
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
							
							<div id="logincol2">
										<div id="login">
								  
												<form method="POST" action="login.php" class="log">
													Username : <br/><input type="text" name="user" size="20"> <br/> <br/>
													Password : <br/><input type="password" name="pass" size="20"> <br/> <br/>
													<input type="submit" name="submit" value="Login">
												</form>

												<div id="errormsg">
												<?php include_once('user.php');?>
																<?php if(isset($_POST['submit'])){
																			$name = $_POST['user'];
																			$pass = $_POST['pass'];
																	$object	= new User();
																	$object->Login($name, $pass);
																	}	 ?>
												</div>
												
									    </div>
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