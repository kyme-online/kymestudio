<!DOCTYPE html>
<html>
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title> CebuSutdio.com </title>
	
	<meta name="description" content="My works and about me"/>
	<meta name="keywords" content="Mendez,Dulastudio,bisaya"/>

	<link href="style.css" rel="stylesheet" type="text/css"/>	
	
<script type="text/javascript">	
var timeout	= 500;
var closetimer	= 0;
var ddmenuitem	= 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 	
</script>
	
</head>
  
	<body>
	
     <div id="wholebody">
			<div id="bar">
			    <a href="login.php">| Login </a>			     
			</div>
			
			<div id="bgside">
				
		 
			<div id="container">
                <div style="clear:both"></div>
				 
                        <div id="header">	
						   
							<div id="upper_nav">
							
							</div>
                        </div>
                                
                            
    
                        <div id="content">
                         
							<div id="col1">
							
							    <div id="portfoliobtn">
									<a href="#"><img src="images/portfolio.png" /></a>
								</div>
								
								<div id="contactbtn">
									<a href="#"><img src="images/contact.png" /></a>
								</div>
								
								<img src="images/coffee.png" />
								
							</div>
							
							<div id="col2">
							
							</div>
                                    <div style="clear:both"></div>

						</div>
                <div style="clear:both"></div>
                <div id="footer">
				</div>
		
				</div>
				
		 <div style="clear:both"></div>
		</div>
	</body>

	
</html>