<?php
include 'connect.php';
$y=1;
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>Sakthi | Job Allotment</title>
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


  <!-- include your less or built css files  -->
  <!-- 
  bootstrap-datetimepicker-build.less will pull in "../bootstrap/variables.less" and "bootstrap-datetimepicker.less";
  or
  <link rel="stylesheet" href="/Content/bootstrap-datetimepicker.css" />-->
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
Hr Pune
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



<!--==================================================
Pannel Members
================================================== -->
             <?php if(($_SESSION['active'])==2){?>

                <li><a href="pannel.php">Panel</a></li>
                <li><a href="contact.php">Clearence</a></li>
                <li><a href="index.php">LogOut &nbsp;<span style="color: red;"> <?php echo $_SESSION['name']; ?></span></a></li>

            <?php } ?>
<!--=========== EnD OF Pannel Member =========-->


<!--==================================================
Hr
================================================== -->
             <?php if(($_SESSION['active'])==4){?>
                        
            <li><a href="service.html">Job Selection</a></li>
            <li><a href="service.html">Panel</a></li>
            <li><a href="contact.php">Clearence</a></li>
            <li><a href="index.php">LogOut &nbsp;<span style="color: red;"> <?php echo $_SESSION['name']; ?></span></a></li>

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
                    <form action="" >
                    <div class="col-md-12">
                                    <div class="container">
                                    <div class="col-sm-12" style="height:75px;">
                                    <div class="col-md-3">
                                     <div>Start Date</div>

                                        <div class="form-group">
                                                    <div class='input-group date' id='datepicker'>
                                                        <input type='date' class="form-control" name="start" />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                     <div>End Date</div>

                                        <div class="form-group">
                                                    <div class='input-group date' id='datepicker12'>
                                                        <input type='date' class="form-control"  name="end" />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                           
                            <div class="form-group" style="margin-top: 15px;">
                                 <input type="submit" value="submit" class="btn btn-success btn-lg" name="retreve">
                                </div>
                                
                                    </div>
                                </div>
                            </div>
                         </form>

                            </div>
                            </div>
                       

        </section>

        

<!-- 
================================================== 
    Company Description Section Start
================================================== -->
<section class="company-description">
    <div class="column col3">
        <div class="container" style="margin-top: 60px;">
      <form action="Mail/send_mail.php" method="post">

         <div class="col-md-3">
                                     <div>Interview Date</div>

                                         <div class="form-group">
                                                    <div class='input-group date' id='datepicker13'>
                                                        <input type='date' class="form-control"  name="interview" required />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                        </div>
        <div class="column col3">
        <div class="container" style="margin-top: 60px;">
      <form action="Mail/send_mail.php" method="post">
        <table class="table ">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Email Id</th>
          <th scope="col">Display</th>
          <th scope="col"><center>Check To Send Mail</center></th>
        </tr>
      </thead>
      <tbody>
         <?php
          if(isset($_GET['retreve']))
          {
          $d1=$_GET['start'];
         $d2=$_GET['end'];
           //   $d3=$_GET['interview'];
           $full=mysqli_query($con,"select * from reg where active='1' and apply_date between '$d1' and '$d2' and email_ver='0' ");
          while($row4 = mysqli_fetch_assoc($full)) { ?>
        <tr>
          <th scope="row"><?=$y?></th>
          <td><?=$row4['CandName'];?></td>
          <td><?=$row4['Fathername']?></td>
          <td><?=$row4['Email']?></td>
           <td><a href="student.php?hai=<?=$row4['id']?>" class="btn btn-success ">View</a></td>
           <td><center><input type="checkbox" value="<?=$row4['id']?>" name="check[]"/></center></td>
            <?php  
                 // $_SESSION['fixed']=$d3;
              ?>
           <?php $y+=1; ?>
            </tr>
          <?php 
               }
          }
              ?>
        
        </tbody>
    </table>
              <center><input type="submit" class="btn btn-warning" name="Send Mail" value="Send Mail"></center>

    </form>
                </div>
         
        </div>
         
        </div>
</section>


       
            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action" style="margin-top: 30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms"></h1>
                                <p class="wow fadeInDown" style="font-size: 20px;" data-wow-delay=".5s" data-wow-duration="500ms">The job of <u><b>Automobile manufactures</b></u> is to passionately build something that others <br><br><b>Love to own</b></p>
                                
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
        $(function () {
            $('#datepicker12').datepicker({
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
        $(function () {
            $('#datepicker13').datepicker({
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