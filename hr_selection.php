<?php
include 'connect.php';
$y1=1;
$today=date("Y-m-d");
error_reporting(0);
ini_set('display_errors', 0);
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>HR | Selection Process</title>
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
                                <a href="home.php">Home</a>
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
                <li><a href="index.php">LogOut &nbsp;<span style="color: red;"> <?php echo $_SESSION['name']; ?></span></a></li>

            <?php } ?>
<!--=========== EnD OF PUNE =========-->   



<!--==================================================
Pannel Members
================================================== -->
             <?php if(($_SESSION['active'])==2){?>
                <li><a href="pannel.php">Panel</a></li>
                <li><a href="pannelmember_clear.php">Clearence</a></li>
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
<!--=========== EnD OF Pannel Member =========-->


<!--==================================================
Hr
================================================== -->
             <?php if(($_SESSION['active'])==4){?>
                        
            <li><a href="hr_selection.php">Job Selection</a></li>
            <li><a href="hr_pannel_select.php">Panel</a></li>
            <li><a href="clearence.php">Clearence</a></li>
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
                    <form action="hr_selection.php" method="post">
                            <h2 style="font-size: 24px;">Select The Date</h2>
                                        <div class="form-group col-md-4 col-md-offset-4">
                                                    <div class='input-group date' id='datepicker'>
                                                        <input type='date' class="form-control" name="date" />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                       <div class="form-group col-md-offset-3" style="margin-top: 12px; margin-left: 50px;">
                                       <input type="submit" value="submit" class="btn btn-danger " name="Submitver">
                                      </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--==================== Pannel Marks=============-->
 <section class="company-description">
    <div class="column col3">       
        <div class="column col3">
            <?php $_SESSION['nam']=0; ?>
        <div class="container" style="margin-top: 60px;">
      <form action="hr_conformation.php" method="post">
        <table class="table ">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Email Id</th>
          <th scope="col">Display</th>
          <?php 
           $a="";
           $msg="";
               if(isset($_POST['Submitver']))
               {
               
                $d1=$_POST['date'];
                $query=("select admin from staff where active='2' and permission='$d1'");
                $request=mysqli_query($con,$query);
                while($row1=mysqli_fetch_assoc($request))
                {   
                         if($a=="")
                            {
                             $a=$row1['admin'];
                            }
                        else
                            {
                             $a.=",".$row1['admin'];
                            }

                   ?>      
                  <th scope="col"><?=$row1['admin'];?></th>
                <?php }
             }
        ?>
          <th scope="col"><center>Conformation</center></th>
        </tr>
      </thead>
      <tbody>
         <?php
          if(isset($_POST['date']))
          {
         // $d1=$_POST['date'];
           $full=mysqli_query($con,"select id,CandName,Fathername,Email,$a from reg where active='1' and fixed='$d1' and working!='1' and email_ver!='0' ");
          while($row = mysqli_fetch_assoc($full)) { ?>
        <tr>
          <th scope="row"><?=$y1?></th>
          <td><?=$row['CandName'];?></td>
          <td><?=$row['Fathername']?></td>
          <td><?=$row['Email']?></td>
          <?php $msg="Employee is Present..."; ?>
          <td><a href="student.php?hai=<?=$row['id']?>" class="btn btn-success ">View</a></td>
      <?php   if($row['p1']==true) { ?>
          <td><?=$row['p1']?></td>
          <?php } ?>
    <?php   if($row['p2']==true) { ?>
          <td><?=$row['p2']?></td>
     <?php } ?> 

            <?php 
             
              $_SESSION['nam']=$_SESSION['nam']+1;
            
            ?>
 <td><center><input type="checkbox" value="<?=$row['id']?>" name="check[]"/></center></td>       
           <?php $y1+=1; ?>
            </tr>
          <?php 
               }
          }
              ?>
        
        </tbody>
    </table>
              <center><input type="submit" class="btn btn-danger" name="Send" value="Send Mail"></center>
<center  style="margin-top:20px;color: red; " ><?php if($msg=="") echo "No Employee Is Present...";?></center></section>
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
                        <p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> Design and Developed by <a href="http://www.Themefisher.com" target="_blank">MNP Creation</a>. <br> 
                            Get More 
                            <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">
                                Free 
                            </a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Google Plus">
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