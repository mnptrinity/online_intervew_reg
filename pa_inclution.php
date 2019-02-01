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
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
                            <h2>ID Updation</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--===================== Sending date to the back end....===============-->
        
       <?php
if(isset($_POST['change'])) {
    $id=$_POST['serial'];
    $empid=$_POST['empid'];
    $date=$_POST['joining'];
    $desig=$_POST['designation'];
    $sql="update `reg` set `empid`='$empid',joined='$date',designation='$desig' WHERE `id`='$id' ; ";
    $res=mysqli_query($con,$sql);
    if($res) {
        echo '<script>alert("Updation Successful !")</script>';
        echo '<script>window.location.href="pa_inclution.php";</script>';
    }else{
        echo '<script>alert("Try Again After Some time...")</script>';
       // header('Location: password_change.php');
    }
}
?>


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
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"> </h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        
                    </p>
                    <div class="contact-form">
                        <form  method="post" action="pa_inclution.php" role="form">
                
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Serial No." class="form-control" name="serial" required>
                            </div>
                             <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="User ID" class="form-control" name="empid" required>
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Designation" class="form-control" name="designation" required>
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                     <div>Joining Date</div>

                                         <div class="form-group">
                                                    <div class='input-group date' id='datepicker'>
                                                        <input type='date' class="form-control"  name="joining" required />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                        </div>
                            
                            <div style="display: inline-block;"  class="wow fadeInDown " data-wow-duration="500ms" data-wow-delay="0.9s">
                                
            <input type="submit" style="display: inline-block;" id="contact" class="btn btn-default btn-send" name="change" value="Update">
                
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script >
        $(function () {
            $('#datepicker').datepicker({
                format: "yyyy-mm-dd",
                autoclose: true,
                todayHighlight: true,
                showOtherMonths: true,
                selectOtherMonths: true,
                autoclose: true,
                changeMonth: true,
                changeYear: true,
                orientation: "button"
            });
        });
    </script>
    </body>
</html>

