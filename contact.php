<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Contact us | Urjagen Gorakhpur </title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/slider-setting.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" id="jssDefault" href="css/custom/theme-2.css"/>

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">



<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">





</head>

<body class="home layout_changer">

        <!-- ==================== Style Switcher ==================== -->
       


        <!-- ==================== Style Switcher ==================== -->

<div class="page-wrapper body_wrapper">
    
    <!-- Preloader -->
   <?php include('inc/header.php');?>
    

    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
        </div>
    </section>
    
   

    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	
            
        	<div class="row clearfix">
            
                <!--Form Container-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                
                    <h2>Contact Us</h2>
                    
                    <!--Contact Form-->
                    <div class="default-form contact-form">
                        <form method="post" action="">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                	<div class="form-group">
                                        <input type="text" name="nm" value="" placeholder="Name" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Email" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="subject" value="" placeholder="Subject">
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                	<div class="form-group">
                                        <textarea name="sms" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" name="send"  class="theme-btn btn-style-one" >send Message</button>
                                </div>
                                 <?php 

if (isset($_POST['send']))
{
	include('soft/gtl/config.php');
	$to = "info@urjagen.co.in";
	$subject =$_POST['subject'];
	$txt ="Name : ".$_POST['nm']."\nEmail : ".$_POST['email']."\nMessage : ".$_POST['sms'];
	$headers = "From: info@urjagen.co.in";
	mail($to,$subject,$txt,$headers);
	
	
	$nm=$_POST['nm'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$sms=$_POST['sms'];
		mysql_query("insert into contact values('0','$nm','$email','$subject','$sms')") or die(mysql_error());

	?>
    <script>
	alert("Your Application is submitted successfully, we will contact you asap.!");
</script>

    <?php
	
}


 ?>
                                
                            </div>
                        </form>
                    </div><!--End Contact Form-->
                    
                </div>
                
            	<!--Info Column-->
                <div class="info-column col-md-4 col-sm-12 col-xs-12">
                	<h2>Get in Touch with us</h2>
                    <div class="text">Let's build great things together. Brief us your requirements, and let's connect</div>
                    
                    <ul class="contact-info">
                        <li><div class="icon-box"><span class="fa fa-phone"></span></div>+91 9559818181</li>
                        <li><div class="icon-box"><span class="fa fa-envelope-o"></span></div>info@urjagen.co.in</li>
                    	<li><div class="icon-box"><span class="fa fa-map-marker"></span></div>M.G College Road Gorakhpur 273001 (U.P)</li>
                    </ul>
                    
                </div>
                
            </div>




        </div>
    </section>

   <?php /*?> <section class="map-area">
        <!--Map Box-->
            <div class="map-box">
                <div class="map-outer">
                
                    <!--Map Canvas-->
                    <div class="map-canvas"
                        data-zoom="8"
                        data-lat="-37.817085"
                        data-lng="144.955631"
                        data-type="roadmap"
                        data-hue="#ffc400"
                        data-title="Envato"
                        data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"
                        style="height:430px;">
                    </div>
        
                </div>
            </div>
    </section><?php */?>
    
   <?php include('inc/footer.php'); ?>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jQuery.style.switcher.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/script.js"></script>

<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="js/map-script.js"></script>

</body>

</html>