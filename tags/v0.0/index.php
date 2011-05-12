<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Karya Digital</title>
<link rel="stylesheet" type="text/css" href="/css/header_footer.css"/>
<link rel="stylesheet" href="css/home.css" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script type="text/javascript" src="js/cloud-carousel.1.0.5.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
						   
	// This initialises carousels on the container elements specified, in this case, carousel1.
	$("#slider").CloudCarousel(		
		{			
			xPos: 128,
			yPos: 50,
			yRadius: -20,
			xRadius:300,
			autoRotate: "left",
			speed:0.1,
			autoRotateDelay:2000
		}
	);
});
</script>

<!-- [if IE]>
<style type="text/css"> 
#wrapper { word-wrap: break-word;}
#nav { zoom: 1;}
</style>
<![endif]-->
</head>

<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<a href="index.php"><img src="images/logo.png" alt="logo" /></a>
		</div><!--END logo-->
		
		<ul>
			<li><a href="index.php" class="selected">home</a></li>
			<li><a href="services.php">services</a></li>
			<li><a href="portfolio.php">portfolio</a></li>
			<li><a href="contact.php">contact</a></li>
		</ul>
		
		<div id="slogan">
			<p>“&nbsp;The&nbsp;Digital&nbsp;Way</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of Solution  &nbsp;&nbsp;&nbsp;”</p>
		</div><!--END slogan-->
	</div><!--END header-->
    
    <div id="profile">
    	<div id="desc">
        	<h1>WHO WE ARE</h1>
            <p><span>KARYA DIGITAL</span>, located in Jakarta, provides various professional computer solutions for each unique client needs.</p>
            <p>We are specialized in Website Developments, Online Applications, and Offline Applications to support and enhance your business.</p>
			<p>We are continuously growing and ready for challenges!</p>
		</div><!--END desc-->
        
        <div id="slider">
        	<!--<img src="images/slider_temp.png" alt="slider" />-->
            <img class= "cloudcarousel" src="images/gallery_1.jpg" alt="pic1" />
            <img class= "cloudcarousel" src="images/gallery_2.jpg" alt="pic1" />
            <img class= "cloudcarousel" src="images/gallery_3.jpg" alt="pic1" />
        </div><!--END slider-->
        
            
    </div><!--END profile-->
    
    <div id="service">
    	<h1>WHAT WE DO</h1>
    	<div id="col1" class="service_cols">
        	<a href="services.php"><img src="images/website_dev.jpg" alt="webdev"/></a>
            <p class="service_desc">"Lorem ipsum dolor sit amet, consect- etur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="services.php"><img src="images/more_details.jpg" alt="more details"/></a>
        </div><!--END col1-->
    
    	<div id="col2" class="service_cols">
       	    <a href="services.php"><img src="images/online_app.jpg" alt="online"/></a>
            <p class="service_desc">"Lorem ipsum dolor sit amet, consect- etur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="services.php"><img src="images/more_details.jpg" alt="more details"/></a>
        </div><!--END col2-->
        
        <div id="col3" class="service_cols">
        	<a href="services.php"><img src="images/offline.jpg" alt="offline"/></a>
            <p class="service_desc">"Lorem ipsum dolor sit amet, consect- etur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="services.php"><img src="images/more_details.jpg" alt="more details"/></a>
        </div><!--END col3-->
        <div id="clear"></div><!--END clear-->
    </div><!--END service-->

	<?php include("footer.html") ?>
</div><!--END wrapper-->
</body>
</html>
