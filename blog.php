<?php
include('soft/gtl/config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Our Latest Blog | Urjagen Gasifiers</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/slider-setting.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" id="jssDefault" href="css/custom/theme-2.css"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
</head>
<body class="home layout_changer">
 <?php require_once('inc/header.php');?>
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg); height:150px;">
        <div class="auto-container">
            <h1 style="margin-top:-40px;">Our Latest Blog</h1>
        	<div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                </ul>
            </div>
        </div>
</section>
    
    
    <!--Sidebar Page-->
    <div class="sidebar-page-container with-right-sidebar gray-bg">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <section class="news-section no-padd">
                        <div class="row clearfix">
                        <?php
									$hhg =mysql_query("select * from blog order by id desc");
									while($rr =mysql_fetch_array($hhg))
									{
										?>
                            <div class="news-style-two col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                                    <div class="image-box"><figure class="image"><img src="images/blog/<?php echo $rr['image']; ?>" alt="" class="img-responsive"></figure><div class="overlay-box"><a class="link-box" href="<?php echo $rr['pegurl']; ?>"><span class="fa fa-link"></span></a></div></div>
                                    <div class="lower-box">
                                        <div class="post-meta">
                                            <ul class="clearfix">
                                                <li><a href="#"><span class="fa fa-user"></span> By <?php echo $rr['auther']; ?></a></li>
                                                <li><a href="#"><span class="fa fa-calendar"></span> <?php echo $rr['date']; ?></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="<?php echo $rr['pegurl']; ?>"><?php echo $rr['title']; ?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <?php
							}
							?>
                        </div>                        
                    </section>
                </div>
            </div>
        </div>
    </div>
    
       <?php include('inc/footer.php'); ?>
</div>
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