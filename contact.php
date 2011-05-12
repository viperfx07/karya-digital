<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Karya Digital</title>
<link rel="stylesheet" type="text/css" href="/css/header_footer.css"/>
<link rel="stylesheet" href="css/contact.css" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<!-- [if IE]>
<style type="text/css"> 
#wrapper { word-wrap: break-word;}
#nav { zoom: 1;}
</style>
<![endif]-->
<script type="text/javascript">
$(document).ready(function(e) {
    $("#email_form").validate();
});
</script>
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
        
        <span style="border:1px solid #0f0; background-color:#3F9; di"><?php
		if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["messages"]))
		{
			$isSuccess = mail("viperfx07@gmail.com",$_POST["subject"],$_POST["messages"]);
			echo ($isSuccess) ? 'Banzai' : 'No Way';
		}
		?></span>
        
		<div id="phone">
        	<h3>BY PHONE</h3>
            <p><strong>Contact No : </strong>&nbsp; 0817-19282940403, <strong>PIC</strong> : Juryan</p>
        </div><!--END phone-->
        
        <div id="email">
        	<h3>BY EMAIL</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
            et dolore magna aliqua.</p>
            <form id="email_form" action="contact.php" method="post">
                <table>
                	<tr>
                    	<td class="field_title"><label for="fname">Name</label></td>
                        <td><input id="fname" type="text" name="name" size="45"  class="required lettersonly" maxlength="50"/></td>
                    </tr>
                    <tr>
                    	<td class="field_title"><label for="femail">Email Address</label></td>
                       <td><input id="femail" type="text" name="email" size="45" class="required email"  maxlength="50" /></td>
                    </tr>
                    <tr>
                    	<td class="field_title"><label for="fphone">Phone Number</label></td>
                        <td><input id="fphone" type="text" name="phone" maxlength="20" size="45" /></td>
                    </tr>
                    <tr>
                    	<td class="field_title"><label for="fsubject">Subject / Inquiry</label></td>
                        <td><input id="fsubject" type="text" name="subject" class="required" maxlength="100" size="45" /></td>
                    </tr>
                    <tr>
                    	<td class="field_title"><label for="fmsg">Messages</label></td>
                        <td><textarea id="fmsg" name="messages" class="required" rows="6" cols="50"></textarea></td>
                    </tr>
                </table>
               	<input id="btn_send" name="submit" type="image" src="images/btn_send.png" alt="submit" />
            </form>
        </div><!--END email-->
      
    </div><!--END content-->

	<?php include("footer.html") ?>
</div><!--END wrapper-->
</body>
</html>
