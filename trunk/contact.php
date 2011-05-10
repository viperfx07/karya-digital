<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Karya Digital</title>
<link rel="stylesheet" type="text/css" href="/css/header_footer.css"/>
<link rel="stylesheet" href="css/contact.css" type="text/css" />
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
			<li><a href="index.php">home</a></li>
			<li><a href="services.php">services</a></li>
			<li><a href="portfolio.php">portfolio</a></li>
			<li><a href="contact.php" class="selected">contact</a></li>
		</ul>
		
		<div id="slogan">
			<p>“&nbsp;The&nbsp;Digital&nbsp;Way</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of Solution  &nbsp;&nbsp;&nbsp;”</p>
		</div><!--END slogan-->
	</div><!--END header-->
    
    <div id="content">
    	<span>CONTACT</span>
		<div id="phone">
        	<h3>BY PHONE</h3>
            <p><strong>Contact No : </strong>&nbsp; 0817-19282940403, <strong>PIC</strong> : Juryan</p>
        </div><!--END phone-->
        
        <div id="email">
        	<h3>BY EMAIL</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
            et dolore magna aliqua.</p>
            <form id="email_form" action="." method="post">
                <table>
                	<tr>
                    	<td class="field_title">Name</td>
                        <td><input type="text" name="name" size="45" /></td>
                    </tr>
                    <tr>
                    	<td class="field_title">Email Address</td>
                       <td><input type="text" name="email" size="45" /></td>
                    </tr>
                    <tr>
                    	<td class="field_title">Phone Number</td>
                        <td><input type="text" name="phone" size="45" /></td>
                    </tr>
                    <tr>
                    	<td class="field_title">Subject / Inquiry</td>
                        <td><input type="text" name="subject"size="45" /></td>
                    </tr>
                    <tr>
                    	<td class="field_title">Messages</td>
                        <td><textarea name="messages" rows="6" cols="50"></textarea></td>
                    </tr>
                </table>
               	<input id="btn_send" type="image" src="images/btn_send.png" alt="submit" />
            </form>
        </div><!--END email-->
      
    </div><!--END content-->

	<?php include("footer.html") ?>
</div><!--END wrapper-->
</body>
</html>
