<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>Sakthi | HRPA</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="plugins/ionicons/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="plugins/animate-css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="plugins/slider/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>


        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.html" style="margin-top: -5px;">
                            <img src="images/logo.jpg" width="60px" height="60px" alt="">
                            <h  style="color: black; font-size:23px;">Sakthi Auto Components</h>
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">

                        <ul class="nav navbar-nav navbar-right">


                            <li>
                                <a href="home.php" >Home</a>
                            </li>
<!--==================================================
Ordinary Users
================================================== -->
             <?php if(isset($_SESSION['active'])==false){?>

                        <li><a href="index.php">Log In</a></li>

            <?php } ?>
<!--=========== EnD OF Ordinary Users =========-->

<!--==================================================
Hr Punes
================================================== -->
             <?php if(($_SESSION['active'])==1){?>

                <li><a href="about.php">Job Selection</a></li>
                <li><a href="contact.php">Clearence</a></li>
                <li><a href="pdfgenerator.php">PDF Generator</a></li>
                                <li><a href="pa_inclution.php">Updation</a></li>

<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome <span style="color: red;"><?php echo $_SESSION['name']; ?> </span><span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="password_change.php">Change Password</a></li>
                                        <li><a href="index.php">Log Out</a></li>
                                       <!-- <li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>-->
                                    </ul>
                                </div>
                            </li>
            <?php } ?>
<!--=========== EnD OF PUNE =========-->   

<!--<li><a href="index.php">LogOut &nbsp;<span style="color: red;"> <?php echo $_SESSION['name']; ?></span></a></li> -->

<!--==================================================
Pannel Members
================================================== -->
             <?php if(($_SESSION['active'])==2){?>

                <li><a href="about.php">Panel</a></li>
                <li><a href="contact.php">Clearence</a></li>
                <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome  <span class="caret"><?php echo $_SESSION['name']; ?></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="password_change.php">Change Password</a></li>
                                        <li><a href="index.php">Log Out</a></li>
                                       <!-- <li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>-->
                                    </ul>
                                </div>
                            </li>

            <?php } ?>
<!--=========== EnD OF Pannel Member =========-->
                           

<!--==================================================
Hr
================================================== -->
             <?php if(($_SESSION['active'])==4){?>
                        
            <li><a href="service.html">Job Selection</a></li>
            <li><a href="service.html">Panel</a></li>
            <li><a href="contact.php">Clearence</a></li>
<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome <span style="color: red;"><?php echo $_SESSION['name']; ?> </span><span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="password_change.php">Change Password</a></li>
                                        <li><a href="index.php">Log Out</a></li>
                                       <!-- <li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>-->
                                    </ul>
                                </div>
                            </li>
            <?php } ?>
<!--=========== EnD OF Hr =========-->      

                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>

        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Contact</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--===================== Sending date to the back end....===============-->
        
        <!--end jod_assign -->
             <!-- clearence php code--->
              <?php if(($_SESSION['active'])==1 ):?>
             
             <?php 
          if(isset($_POST['send']))
          {
            $clear=$_POST['empid'];
            
              $camera=mysqli_query($con,"Select * from reg where id='$clear' and working!='0' ");
              $trow=mysqli_num_rows($camera);
              if($trow>0)
              {
               $clearence12=mysqli_query($con,"insert into clearence(id,name,clear,behaviour) Select id,CandName,active,'ok' from reg where id='$clear';");
                 $_SESSION['cert']=$clear;
                  echo '<script>alert("Successfully Applied...")</script>';
                echo '<script>window.location.href="certificate_gene.php";</script>';
              }
              else
              {
                  echo '<script>alert("Employee Id Not Found!  :)")</script>';
              }
          }
              if(isset($_POST['order']))
          {
            $clear=$_POST['empid'];
            
                  $camera=mysqli_query($con,"Select * from reg where id='$clear' and working!='0'  ");
              $trow=mysqli_num_rows($camera);
              if($trow>0)
              {
               $clearence34=mysqli_query($con,"insert into clearence(id,name,behaviour) Select id,CandName,'Not' from reg where id='$clear';");
                                $_SESSION['cert']=$clear;
                 echo '<script>alert("Successfully Applied...")</script>';
                echo '<script>window.location.href="certificate_gene.php";</script>';
              }
              else
              {
                  echo '<script>alert("Employee Id Not Found!  :)")</script>';
              }
          }
      ?>
<?php endif; ?>


      <!--===================== Sending date to the back end....===============-->


<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact With Me</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        
                    </p>
                    <div class="contact-form">
                        <form  method="post" action="contact.php" role="form">
                
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Your ID" class="form-control" name="empid">
                            </div>
                            
                            
                            <div style="display: inline-block;"  class="wow fadeInDown " data-wow-duration="500ms" data-wow-delay="1.4s">
                                
            <input type="submit"  style="display: inline-block;" class="btn btn-default btn-send" name="send" value="Send Message">
            <input type="submit" style="display: inline-block;" id="contact" class="btn btn-default btn-send" name="order" value="Order">
                
                            </div>  

                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</section>  


            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> Design and Developed by <a  target="_blank">MNP TRINITY</a>. <br> 
                         #
                            <a  target="_blank">
                                <a class="copyright">N</a>atutally <a class="copyright">B</a>orn With <a class="copyright">P</a>ositive <a class="copyright">M</a>inds
                            </a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a  class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a  class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a  class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a  class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->


	<!-- Template Javascript Files
	================================================== -->
	<!-- jquery -->
	<script src="plugins/jQurey/jquery.min.js"></script>
	<!-- Form Validation -->
    <script src="plugins/form-validation/jquery.form.js"></script> 
    <script src="plugins/form-validation/jquery.validate.min.js"></script>
	<!-- owl carouserl js -->
	<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
	<!-- bootstrap js -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- wow js -->
	<script src="plugins/wow-js/wow.min.js"></script>
	<!-- slider js -->
	<script src="plugins/slider/slider.js"></script>
	<!-- Fancybox -->
	<script src="plugins/facncybox/jquery.fancybox.js"></script>
	<!-- template main js -->
	<script src="js/main.js"></script>
 	</body>
</html>

