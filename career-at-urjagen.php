<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Career | Urjagen Gorakhpur </title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/slider-setting.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" id="jssDefault" href="css/custom/theme-2.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">





</head>

<body class="home layout_changer">
    <?php require_once('inc/header.php');?>
     <section class="page-title" style="background-image:url(images/background/parallax2.jpg);">
        <div class="auto-container">
            <h1>INTERESTED IN WORKING WITH US ?</h1>
        	<div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                   
                    <li class="active" style="color:#FFFFFF;"> Our group of highly experienced, dedicated engineers and technocrats committed to developing <br>
Renewable Energy , 
Energy Efficient and Environmental Friendly Products.

</li><img src="">
                </ul>
            </div>
        </div>
    </section>
    
    <?php
	include('soft/gtl/config.php');
	if (isset($_POST['send']))
	{
	$name =mysql_real_escape_string($_POST['nm']);
	$email =mysql_real_escape_string($_POST['email']);
	$mbl =mysql_real_escape_string($_POST['mbl']);
	$post =mysql_real_escape_string($_POST['post']);
	$remarck =mysql_real_escape_string($_POST['mark']);
	$file =mysql_real_escape_string($_POST['file']);
	mysql_query("insert into career values('0','$name','$email','$mbl','$post','$remarck','$file')");
	?>
    <script>
	alert("Your Application is submitted successfully, we will contact you asap.!");
</script>

    <?php
	}
	
	
	
	?>
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">
                 <div class="col-md-4 col-sm-12 col-xs-12">  
                
                
                
           				<h1 class="text" style="font-size:30px;">Apply Now!</h1>
                        <hr/>
   <form action="" method="post">                          
<label>Name:</label>
<input class="form-control" type="text" name="nm" required>
<br>


<label>Email:</label>
<input class="form-control" type="email" name="email" >
<br>


<label>Mobile:</label>
<input class="form-control" type="number" name="mbl" required>
<br>

<label>Required Post:</label>

<select class="form-control" name="post" required> 
<option value=""> Select post...</option>
<option value="Sales & Marketing"> Sales & Marketing   </option>
<option value="Caller"> Caller  </option>
<option value="Technical Advisor"> Technical Advisor   </option>
<option value="Other "> Other  </option>


</select><br>

<label>Remarks :</label>
<textarea class="form-control" name="mark" rows="6" placeholder="Remarks"></textarea>
<br>

<label>Upload: (docx, pdf only)</label>
<input class="form-control" type="file" name="file">

<br>


    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                <button type="submit" name="send"  class="theme-btn btn-style-one" >Submit</button>
                  </div><br>
<br>
	   </form>


            </div>
                <div class="services-column col-md-4 col-sm-12 col-xs-12"><br>

      			</div>
                
              </div>  
        </div>     
    </section>
    
    <br>


<div class="container" style="">

	<div class="row">
    	
       
       <h3 style="color:#333333; font-family:Arial, Helvetica, sans-serif;">Our mission is to provide real energy solutions for businesses and home owners; solutions that provide effective cost savings with clever renewable energy technology.</h3>
       
       <p>
At Renewable Energy Devices we believe that every energy problem has a Renewable Energy Solution. Moreover, it is our responsibility and opportunity to develop and engage these solutions whenever and wherever we may find them. In this way, we are protecting our way of life for future generations; building a culture of sustainability and a secure energy future.</p>
       <br>
<br>
<br>

       
          
      <div class="col-md-4">
      
      <img src="images/Green-Evolution-329x173.jpg" class="img-responsive thumbnail">
      
      <h3 align="">We are Innovators</h3>
<p>We are constantly looking for better products and ideas, solutions which make sense and fit seamlessly into your businesses, homes and farms. 
</p>      
      </div>
      
      
          
      <div class="col-md-4">
      
      <img src="images/qld-electricity-prices.png" class="img-responsive thumbnail">
      <h3>We are Problem Solvers</h3>
      <p>We thrive on a challenge and constantly provide answers where others say it can’t be done. Our carefully selected products are designed to work together, maximising your return on investment.</p>
      </div>
      
      
          
      <div class="col-md-4">
      <img src="images/shutterstock_49617541-329x173.gif" align="" alt="" class="img-responsive thumbnail">
      <h3>We are Locals</h3>
<p>We are your neighbors, customers, and friends of friends, sharing this beautiful part of the world. We know what makes sense for North Queenlanders, the challenges, dangers and secret places we grew up with. We’re locals, just like you.
</p>      
      </div>
      
      
    
    </div>

</div>










    
    </div>
    
 <br>
<br>
<br>
<br>

    
 
    
   <?php include("inc/footer.php");?>
    
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
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
</body>
</html>