<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $xrow['title']; ?> | Blog | Urjagen Gasifier</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/slider-setting.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" id="jssDefault" href="css/custom/theme-2.css"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">
</head>
<body class="home layout_changer">
 <?php require_once('inc/header.php');?>
    <!--Sidebar Page-->
    <div class="sidebar-page-container with-right-sidebar gray-bg">
        <div class="auto-container">
            <div class="row clearfix">
				
                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <section class="blog-details">
						
                        <div class="news-style-two">
                            <div class="inner-box">
                                <div class="image-box"><figure class="image"><img src="images/blog/<?php echo $xrow['image']; ?>" alt=""></figure></div>
                                <div class="lower-box">
                                    <h2 style="text-transform:capitalize;"><a href="<?php echo $xrow['pegurl']; ?>"><?php echo $xrow['title']; ?></a></h2>
                                    <div class="post-meta">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fa fa-calendar"></span><?php echo $xrow['date']; ?></a></li>
                                            <li><a href="#"><span class="fa fa-user"></span> <?php echo $xrow['auther']; ?></a></li>
                                        </ul>
                                    </div>
                                    <div class="text">
                                   	<?php echo $xrow['pegcon']; ?>
                                    </div>
                                    
                                </div> 
                            </div>
                        </div>
                        
                        
                        
                        <div class="comments-area">
                        	<!--Comments Area-->
                        </div>
                       
                        
                    </section>


                </div>
                <!--Content Side-->
                
                <!--Sidebar-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <!-- Search Form -->
                       

                        <!-- Recent Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h3>Recent News</h3></div>
							<?php
							$hhg =mysql_query("select * from blog order by id desc");
							while($rr =mysql_fetch_array($hhg))
							{
							?>
                            <article class="post">
                            	<figure class="post-thumb"><a href="<?php echo $rr['pegurl']; ?>"><img src="images/blog/<?php echo $rr['image']; ?>" alt=""></a></figure>
                                <div class="text"><a href="<?php echo $rr['pegurl']; ?>"><?php echo $rr['title']; ?></a></div>
                                <ul class="post-meta clearfix">
                                	<li><a href="<?php echo $rr['pegurl']; ?>"><i class="fa fa-calendar"></i><?php echo $rr['date']; ?></a></li>  
                                </ul>
                            </article>
							<?php
							}
							?>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    
    <?php include('inc/footer.php'); ?>


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

<!-- Mirrored from html.tonatheme.com/2017/Factories/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2017 10:11:36 GMT -->
</html>