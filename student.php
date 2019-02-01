<!DOCTYPE html>
<?php
include 'connect.php';

$hai=$_GET['hai'];
$row=("select * from reg where id='$hai';");
$result = $con->query($row);
if ($result->num_rows > 0) {
    // output data of each row
    while($h = $result->fetch_assoc()) 
    {
    	$a=$h['CandName'];
    	$a1=$h['Email'];
    	$a2=$h['Fathername'];
    	$a3=$h['photo'];
    	$a4=$h['Gender'];
    	$a5=$h['cadd1'];
    	$a6=$h['mobile1'];
    	$a7=$h['certificates'];
    	$a8=$h['un'];
    	$a10=$h['ma'];
    	$a11=$h['pdist'];
    	$a12=$h['Mstatus'];
    	$a13=$h['Interest'];
    }
    $words=explode(',',$a8);
    $word=explode(',',$a10);
}

?>
<html lang="en">
    
<!-- Mirrored from thebook.mutationmedia.net/?storefront=envato-elements by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:24:07 GMT -->
<head>
	
		 <!-- Metas -->
        <meta charset="utf-8">
        <title>Employee | Profile</title>
        <meta name="description" content="">
      	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta content="telephone=no" name="format-detection">

		<!-- Css -->
        <link href="css|profile/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="css|profile/base.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="css|profile/main.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css|profile/owl-carousel/owl.carousel.css" rel="stylesheet"  media="all">
		<link href="css|profile/owl-carousel/owl.theme.css" rel="stylesheet"  media="all">
		<link href="css|profile/magnific-popup.css" type="text/css" rel="stylesheet" media="all" />
		<link href="css|profile/fontello.css" rel="stylesheet" type="text/css"  media="all">
    </head>

    <body>
	
<!-- Preloader-->
<div class="loader">
		<!-- Preloader inner -->
  <div class="loader-inner">
	<div class="spinner">
	  <div class="dot1"></div>
	  <div class="dot2"></div>
	</div>
  </div>
<!--End preloader inner -->
</div>
<!--End preloader-->


<!--Wrapper-->
<div id="wrapper" class="mt-60 mb-150">
	
	<!--Container-->
	<div class="container">
		
			<!--Row-->	
			<div class="row ">
		
		<!--Left content-->
		<div class="col-md-2 left-content pd-r0">
	
	<!--Header-->
	<header id="header">

					<!--Main header-->
					<div class="main-header">
					
					<!--Profile image-->
					<div class="img-profile "  >
						<!--<img src="img/profile.jpg" alt=""/>-->
						<img src="<?php echo($a3); ?>" alt=""/>
						<div class="name-profile t-center">
							<h5 class="uppercase"> </h5>
						</div>
						
					</div>
					<!--End profile image-->
									
					<!--Main navigation-->
						<nav id="main-nav" class="main-nav clearfix t-center uppercase tabbed">

						<ul class="clearfix ">
							<li><a  href="#about"><i class="icon-user"></i>About me<span>who am i</span></a></li>
							<li><a  href="#resume"><i class="icon-briefcase"></i>Resume<span>curriculum vita</span></a></li>
							<li><a  href="#blog"><i class="icon-chat"></i>Cerificatation<span>Achievements</span></a></li>
							<!--<li><a  href="#contact"><i class="icon-phone"></i>Contact<span>Say hello</span></a></li>-->
						</ul>

						</nav>
					<!--End main navigation-->
							
				</div>
				<!--End main header-->
				
		</header>
		<!--End  header-->
		
		
		</div>
		<!--End left content-->
		
		
				
			<!--Right content-->
			<div class="col-md-9 right-content pd-r0 pd-l0">

						<!--About Tab-->
					<section id="about" class="bg-white t-center">
						
						<!--About -->
						<div class="about">
									
						
						<!--Content-->	
						<div class="content">
							
							<!--Block content-->	
							<div class="block-content mb-100">
								
									<!--Row-->
									<div class="row">

									<div class="col-md-12  ">
								
								<div class="main-title profile">
	                                <h1 class="mb-20">
	                                	<caption><?php  echo $a; ?></caption></h1>
	                                <h3>Web Designer / Web Developer</h3>
										<div class="mt-40 col-md-8 col-md-offset-2">
											<!--<img src="img/profile.jpg" alt=""/>-->
					<!--		<img class="" src="data:image/jpeg;base64,<?php echo base64_encode($a3); ?>" alt=""/> -->
					<img class="" src="<?php echo($a3); ?>" alt=""/>
											<div class="name-profile t-center">
												<h5 class="uppercase"> </h5>
											</div>
											
										</div>

	                            </div>
									 </div>
								 </div>
								<!--End row-->

							</div>
							<!--End block content-->
														
								<!--Block content-->	
								<div class="block-content mb-20">

										<!--Row-->
											<div class="row">

										<div class="col-md-12  ">

											<div class="sub-title mb-20 mt-10">
				                                <h2 class="uppercase">About Me</h2>
				                            </div>

										 </div>
										 </div>
										<!--End row-->
		
		
								<p class="lead-intro">“ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse ! “</p>
									
								<img class="signature mt-20" src="" alt="">

								</div>
								<!--End block content-->								
								
									<!--Block content-->	
									<div class="block-content mb-100 pb-30">

											<!--Row-->
												<div class="row">

											<div class="col-md-12  ">

												<div class="sub-title mb-40">
					                                <h2 class="uppercase">Personal Info</h2>
					                            </div>

											 </div>
											 </div>
											<!--End row-->
			
			
											<div class="row">
										<div class="col-md-8 col-md-offset-3  col-sm-8 col-sm-offset-3 ">
																				
										<!--Listing-->	
										<div class="listing mt-40">
											
										<div class="listing-inner">
										<div class="listing-event">
											<ul class="data left">
												<li class="emph-1">Name</li>
												<li class="emph-1">Gender</li>
												<li class="emph-1">Date of Birth</li>
												<li class="emph-1">Father Name</li>
												<li class="emph-1">Marital Status</li>
												<li class="emph-1">Interest</li>
												<li class="emph-1">District</li>
												
											</ul>
											
											<ul class="data right">
												<li><?php echo $a ?></li>
												<li><?php echo $a4 ?></li>
												<li>1982.04.09 <span class="emph-1">(year/day/month)</span></li>
												<li><?php echo $a2 ?></li>
												<li><?php echo $a12 ?></li>
												<li><?php echo $a13 ?></li>
												<li><?php echo $a11 ?></li>
											</ul>
											
										</div>
										</div>
										
										</div>
										<!--End listing-->	
																				
									</div>
									
									</div>

									</div>
									<!--End block content-->
									
								<!--Block content-->	
								<div class="block-content mb-100  pb-30">

										<!--Row-->
											<div class="row">

										<div class="col-md-12  ">

											<div class="sub-title mb-40">
				                                <h2 class="uppercase">Contact Info</h2>
				                            </div>

										 </div>
										 </div>
										<!--End row-->										

										<!--Row-->
										<div class="row">
									<div class="col-md-8 col-md-offset-3  col-sm-8 col-sm-offset-3 ">

									<!--Listing-->	
									<div class="listing mt-40">
										
									<a class="uppercase emph-1 btn-1" href="#">Download my cv</a>
									<a class="uppercase emph-1 btn-2" href="#">Print My resume</a>
																		
									<div class="listing-inner">
									<div class="listing-event">
										<ul class="data left">
											<li><span class="emph-1">Address</span> :<br>
											<?php echo$a5?></li>
										</ul>

										<ul class="data right">
											<li><span class="emph-1">E-Mail</span> :<?php  echo $a1; ?></li>
											<li><span class="emph-1">Website</span> : www.carlosesmith.com</li>
											<li><span class="emph-1">Phone</span> : +91  <?php echo  $a6; ?></li>
											<li><span class="emph-1">Skype</span> : Carlose_Smith</li>
										</ul>

									</div>
									</div>

									</div>
									<!--End listing-->	

								</div>

								</div>
								<!--End row-->

								</div>
								<!--End block content-->
								
								<!--Block content->	
							<div class="block-content mb-100">

									<!-Row->
										<div class="row">

									<div class="col-md-12  ">

										<div class="sub-title mb-40">
			                                <h2 class="uppercase">Instagram</h2>
			                            </div>

									 </div>
									 </div>
									<!-End row->

									<!-Row->	
									<div class="row">
								<div class="col-md-12">
									<ul class="insta-Feed" id="instafeed"></ul>
								</div>
								
							</div>
							<!-End row->	
							</div>
							<!-End block content-->
						
						
						<!--Block content-->	
						<div class="block-content">

								<!--Row-->	
								<div class="row">
							<div class="col-md-12">
								<span class="page-number emph-1">- 1/3 -</span>
							</div>

						</div>
						<!--End row-->	
						</div>
						<!--End block content-->
						

					</div>
					<!--End content-->
						
						</div>
						<!--End about-->

					</section>
						<!--End about tab-->
						
						
						
							<!--Resume Tab-->
						<section id="resume" class="bg-white t-center">
													
								<!--Resume-->	
								<div class="resume">
						
							<!--Content-->	
							<div class="content">

								<!--Block content-->	
								<div class="block-content mb-100">

									
									<!--Row-->
										<div class="row">

									<div class="col-md-12  ">
									
									
									<div class="main-title">
		                                <h1 class="mb-20 uppercase" >Resume</h1>
		                                <h5 class="uppercase">Curriculum Vita</h5>
		                            </div>
		
									</div>
									 </div>
									<!--End row-->

								</div>
								<!--End block content-->
								
																
								<!--Block content>	
								<div class="block-content mb-100  pb-10">

										<!Row>
											<div class="row">

										<div class="col-md-12  ">

											<div class="sub-title mb-40">
				                                <h2 class="uppercase">Projects</h2>
				                            </div>

										 </div>
										 </div>
										<!End row>
		
		
									<!Row->
										<div class="row">
									<div class="col-md-12  ">
			
									<!-Timeline->
									<div class="timeline">
										<div class="timeline-inner">
											<div class="name">
												<span class="date">September 2016<em>Current</em></span>
												<h4>WebDesigner – Mutation Media </h4>
											</div>
											<div class="detail">
												<p>Ut enim ad minim veniam, quis nostrud exerc.
												Irure dolor in reprehend incididunt labore et dolore magna aliqua. </p>
											</div>
										</div>
										<div class="timeline-inner ">
											<div class="name switched">
												<span class="date">August 2015 - June 2016</span>
												<h4>Web Developer – Mutation Media </h4>
												
											</div>
											<div class="detail">
												<p>Ut enim ad minim veniam, quis nostrud exerc.
												Irure dolor in reprehend incididunt labore et dolore magna aliqua. </p>
											</div>
										</div>
										<div class="timeline-inner">
											<div class="name">
												<span class="date">Jannuary 2015 - March 2016</span>
												<h4>SDK Developer – Mutation Media </h4>
											</div>
											<div class="detail">
												<p>Ut enim ad minim veniam, quis nostrud exerc.
												Irure dolor in reprehend incididunt labore et dolore magna aliqua. </p>
											</div>
										</div>
									</div>

									<!-End timeline->
	
								</div>
								</div>
								<!-End row->
								
							</div>
							<!-End block content-->
							
						<!--Block content-->	
						<div class="block-content mb-30  pb-10">

								<!--Row-->
									<div class="row">

								<div class="col-md-12  ">

									<div class="sub-title mb-40">
		                                <h2 class="uppercase">Education</h2>
		                            </div>

								 </div>
								 </div>
								<!--End row-->
								
								
							<!--Row-->
						<div class="row">
							<div class="col-md-12  ">
								<!--<?php $arr;?>-->
						<?php $len=count($words);  ?>
								<div class="timeline">
						<?php for($i=0; $i<$len; $i++): ?>
								<!--Timeline-->
								
									<div class="timeline-inner">
										<div class="name">
											<span class="date">August 2015 - June 2016</span>
											<h4><?=$words[$i]?> </h4>
										</div>
										<div class="detail">
											<p><?=$word[$i]?> </p>
										</div>
									</div>
									<br>

						<?php endfor; ?>

							
								</div>

								<!--End timeline-->

							</div>
							</div>
							<!--End row-->
							

						</div>
						<!--End block content->		
																										
							<!-Block content->	
						<div class="block-content mb-100  pb-30">
							
							
						<!-Row->
							<div class="row">
								
						<div class="col-md-12  ">
										
							<div class="sub-title mb-40">
                                <h2 class="uppercase">skills</h2>
                            </div>

						 </div>
						 </div>
						<!-End row->
								
					<!-Row->
						<div class="row">
					<div class="col-md-12  ">

					<!-Listing->
					<div class="listing-large mt-40">
						
						<a class="uppercase emph-1 btn-1" href="#">Download my cv</a>
						<a class="uppercase emph-1 btn-2" href="#">Print My resume</a>
							<div class="listing-large-inner">
							<div class="listing-event">
							<ul class="data left clearfix">
								<li>
								<h5>Html</h5>
								<div class="rating">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span class="transparent"></span>
								<span class="transparent"></span>	
								</div>
								</li>
								
								<li>
								<h5>Css</h5>
								<div class="rating">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>	
								</div>
								</li>
								
								<li>
								<h5>Jquery</h5>
								<div class="rating">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>	
								</div>
								</li>
								
								<li>
								<h5>Php</h5>
								<div class="rating">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>	
								</div>
								</li>
								
								
								<li>
								<h5>Wordpress</h5>
								<div class="rating">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>	
								</div>
								</li>
								
								<li>
								<h5>Xcode</h5>
								<div class="rating">
								<span></span>
								<span></span>
								<span></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>	
								</div>
								</li>
								
					
								<li>
								<h5>Photoshop</h5>
								<div class="rating">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span class="transparent"></span>	
								</div>
								</li>

								<li>
								<h5>Indesign</h5>
								<div class="rating">
								<span></span>
								<span></span>
								<span></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>	
								</div>
								</li>


								<li>
								<h5>Fireworks</h5>
								<div class="rating">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>	
								</div>
								</li>

								<li>
								<h5>Illustrator</h5>
								<div class="rating">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span class="transparent"></span>
								<span class="transparent"></span>	
								</div>
								</li>
								
								
								<li>
								<h5>3dmax</h5>
								<div class="rating">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>
								<span class="transparent"></span>	
								</div>
								</li>
								
								
								<li>
								<h5>AfterEffects</h5>
								<div class="rating">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span class="transparent"></span>
								<span class="transparent" ></span>
								<span class="transparent"></span>	
								</div>
								</li>
							</ul>
																	
						<ul class="data right clearfix">
							<li>
								<h5>Assests</h5>
								<p class="emph-3">Responsible, Diligence, Labour, Rigor, Creative, Funny, Great Communicator, Flexible</p>
							</li>
							
							
							<li>
								<h5>Languages</h5>
								<ul>
									<li class="emph-1">English <span class="emph-4">(Advanced Speaking)</span></li>
									<li class="emph-1">Frensh <span class="emph-4">(fluent Speaking)</span></li>
									<li class="emph-1">German <span class="emph-4">(Basic Knowledge)</span></li>
									<li class="emph-1">Spanish <span class="emph-4">(Beginner)</span></li>
								</ul>
							</li>
							
							
							<li>
								<h5>Hobbies &amp; Interests</h5>
								<ul class="hb-list">
								 	<li>
									<span><i class="icon-music-4"></i></span>
									<h6>Music</h6>
									</li>
									
									<li>
									<span><i class="icon-star-7"></i></span>
									<h6>Gaming</h6>
									</li>
									
									<li>
									<span><i class="icon-globe-6"></i></span>
									<h6>Travel</h6>
									</li>
									
									<li>
									<span><i class="icon-food-1"></i></span>
									<h6>Cooking</h6>
									</li>

								</ul>																	
								
							</li>
							
						</ul>
					</div>
					</div>
				
				</div>

				<!-End listing->

					</div>
					</div>
					<!-End row->
				
							
						</div>
						<!-End block content-->	
						
														
						<!--Block content->	
					<div class="block-content mb-50  pb-30">

						<!-Row->
							<div class="row">

						<div class="col-md-12">

							<div class="sub-title mb-40">
		                              <h2 class="uppercase">Services</h2>
		                          </div>

						 </div>
						 </div>
						<!-End row->


						<!-Row->	
						<div class="row">
					
							<div class="col-md-12">
								<img alt="" src="img/service.jpg">
							</div>
					
							</div>
						<!-End row->	
					
					
					<!-Row->	
					<div class="row">
			
						<div class="col-md-12">
				
						<div class="services mt-30">
					
							<div class="block-service clearfix">

					
								<div class="col-sm-6 text-center">
								<div class="ico mb-15">
								<i class="icon-thumbs-up-5"></i>
								</div>

								<div class="det">
								<h5 class="mb-10">Great Support</h5>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
							</div>

							</div>	
						
																				
								<div class="col-sm-6 text-center">
								<div class="ico mb-15">
								<i class="icon-pencil-7"></i>
								</div>

								<div class="det">
								<h5 class="mb-10">Print &amp; Branding</h5>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
							</div>

							</div>		
							
					
							<div class="col-sm-6 text-center">
							<div class="ico mb-15">
							<i class="icon-megaphone-3"></i>
							</div>

							<div class="det">
							<h5 class="mb-10">Marketing</h5>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
						</div>

						</div>	
							
							<div class="col-sm-6 text-center">
							<div class="ico mb-15">
							<i class="icon-desktop-3"></i>
							</div>

							<div class="det">
							<h5 class="mb-10">Web Design</h5>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
						</div>

						</div>
						
							<div class="col-sm-6 text-center">
							<div class="ico mb-15">
							<i class="icon-params"></i>
							</div>

							<div class="det">
							<h5 class="mb-10">Development</h5>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
						</div>

						</div>	
					
																			
							<div class="col-sm-6 text-center">
							<div class="ico mb-15">
							<i class="icon-lightbulb-3"></i>
							</div>

							<div class="det">
							<h5 class="mb-10">Branding</h5>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
						</div>

						</div>

						</div>
					
							</div>	
						
							</div>
							<!-End row->	
					
						</div>

					</div>
					<!-End block content-->	

					<!--Block content-->	
				<div class="block-content mb-100 ">


<div class="embed-responsive" style="padding-bottom: 150%">
			<object  data="<?php echo$a7; ?>" width="100%" height="90%"></object> 
</div>
					<!--Row->
						<div class="row">
						
					<div class="col-md-12  ">
								
						<div class="sub-title mb-40">
	                              <h2 class="uppercase">testimonials</h2>
	                          </div>

					 </div>
					 </div>
					<!-End row->


					<!-Row->	
					<div class="row">

						<div class="col-md-12">
					
					
						<div class="col-md-10 col-md-offset-1">	
						
							<!-Slider->
						<div class="testi clearfix ">


							<ul id="testimonial-carousel">
							<li>

								<div class="block-quote t-left">
								<blockquote>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									 Duis aute irure dolor in reprehenderit in voluptate velit esse.” </blockquote>
									<h6 class="block-profile mt-20">Carlose Anderson   <span>Mutation Media CEO</span></h6>
								</div>
							
								<div class="block-img"><img alt="" src="img/testimonial/1.png"></div>
							 </li>
						
						
							<li>
								<div class="block-quote t-left">
										<blockquote>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
											 Duis aute irure dolor in reprehenderit in voluptate velit esse.” </blockquote>
									<h6 class="block-profile mt-20">Jonathan Anderson<span> Mutation Media CEO</span></h6>
								</div>
								<div class="block-img"><img alt="" src="img/testimonial/2.png"></div>
							</li>	


							</ul>	

								</div>
						<!-End  slider->
																
							</div>
							</div>

							</div>
						<!-End row-->

						</div>
						<!--End block content-->
							
							
										

						<!--Block content-->	
					<div class="block-content">

							<!--Row-->	
							<div class="row">
						<div class="col-md-12">
							<span class="page-number emph-1">- 2/3 -</span>
						</div>

					</div>
					<!--End row-->	
					</div>
					<!--End block content-->

					</div>
					<!--End content-->
					
				</div>
				<!--End resume-->	
		
			</section>
			<!--End resume tab-->
							
							
							
				
							
				
					
						
							<!--Blog Tab-->
						<section id="blog" class="bg-white t-center">
							
							
							<!--Blog-->
							<div class="blog">
							
								<!--Content-->
									<div class="content">

								<!--Block content-->	
								<div class="block-content mb-100">
									
										<!--Row-->	
										<div class="row">

										<div class="col-md-12">


									<div class="main-title ">
		                                <h1 class="mb-20">Certificates</h1>
		                                <h5 class="uppercase"></h5>
		                            </div>

											</div>

										</div>
										<!--End row-->

								</div>
								<!--End block content-->
								
																
								<!--Block content>	
								<div class="block-content mb-100">
								
										<!Row>	
										<div class="row">
									<div class="col-md-12">
										
										<div class="col-md-8 col-md-offset-2">
											
											<!Search form>
											<div class="search-header">
													<form class="search-form" action="#">
											        <input type="text" title="Search for:" name="s" value="" placeholder="Search…">
											        <input type="submit" value="">
													<i class="icon-search-7"></i>
											      </form>
											</div>
											<!End search form>
										</div>
										</div>
									
									</div>
									<!End row>

								</div>
								<!End block content->
		
								
									<!-Block content->	
									<div class="block-content mb-100">

											<!-Row->	
											<div class="row">
										<div class="col-md-12">
										
										
										<!-Block posts->			
										<div class="block-posts ">		
											
										
								<!-Block post->			
								<div class="block-post mb-100">			
									

										<div class="post-title mb-10">
	                                    <a href="blog_single.html">
	                                        <h4>Which design layout solution should you use </h4>
	                                    </a>
	                                </div>


									<ul class="post-meta mb-30">
	                                    <li>
	                                        <span class="entry-date">
											     April 13, 2015
										</span>
	                                    </li>
	
										<li>
										<span class="entry-cat">
										          <a  href="#">Web design</a>
										</span>
										</li>
	                                    

	                                </ul>-->
	
						<div class="post-media mb-30">
									<div class="embed-responsive" style="padding-bottom: 150%">
											<object  data="<?php echo$a7; ?>" width="100%" height="100%"></object> 
										</div>
						</div>

									
									<!--	<div class="entry-content">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										 laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi 
										architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit 
										aspernatur aut odit aut fugit,
										 sed quia consequuntur magni dolores eos. </p>
									</div>

										<a class="but" href="blog_single.html">Read More</a>
																								
																		
								</div>
								<!-End block post->		

								<!-Block post->			
								<div class="block-post mb-100 ">			
									

										<div class="post-title mb-10">
	                                    <a href="blog_single.html">
	                                        <h4>Standar blog post without image</h4>
	                                    </a>
	                                </div>


									<ul class="post-meta mb-30">
	                                    <li>
	                                        <span class="entry-date">
											     April 13, 2015
										</span>
	                                    </li>
	
										<li>
										<span class="entry-cat">
										          <a href="#">Blogging</a>
										</span>
										</li>
	                                    

	                                </ul>

									
										<div class="entry-content">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										 laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi 
										architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit 
										aspernatur aut odit aut fugit,
										 sed quia consequuntur magni dolores eos. </p>
									</div>

										<a class="but" href="blog_single.html">Read More</a>													
																		
								</div>
								<!-End block post-->			
											
								<!--Block post->			
								<div class="block-post mb-100 ">			


										<div class="post-title mb-10">
	                                    <a href="blog_single.html">
	                                        <h4>A blockquote blog post style</h4>
	                                    </a>
	                                </div>


									<ul class="post-meta mb-30">
	                                    <li>
	                                        <span class="entry-date">
											    April 13, 2015
										</span>
	                                    </li>

										<li>
										<span class="entry-cat">
										          <a href="#">Various</a>
										</span>
										</li>


	                                </ul>


										<div class="entry-content">
											<div class="block-quote blog t-left">
										<blockquote>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										 Duis aute irure dolor in reprehenderit in voluptate velit esse.” </blockquote>
										<h3 class="block-profile mt-20">Benaissa Ghrib<span> Mutation Media CEO</span></h3>
									</div>
									</div>


								</div>
								<!End block post->
						
						
							<a class="but" href="blog.html">View All Blog Posts<span class="right-arr">&rarr;</span></a>		
						
					
						</div>
						<!-End block posts->		
					
										
										</div>

										</div>
										<!-End row->

									</div>
									<!-End block content-->
									
																	
											<!--Block content-->	
										<div class="block-content">

												<!--Row-->	
												<div class="row">
											<div class="col-md-12">
												<span class="page-number emph-1">- 3/3 -</span>
											</div>

										</div>
										<!--End row-->	
										</div>
										<!--End block content-->
								

									</div>
									<!--End content-->

								</div>
								 <!--End blog-->
					
					
						</section>
						<!--End blog tab-->
						
						
							<!--Contact Tab->
						<section id="contact" class="bg-white t-center">
					
					
								<!-Contact->
								<div class="contact">

									<!-Content->
										<div class="content">

									<!-Block content->	
									<div class="block-content mb-100">

											<!Row->	
											<div class="row">

											<div class="col-md-12">


										<div class="main-title">
			                                <h1 class="mb-20">Contact</h1>
			                                <h5 class="uppercase">Say Hello</h5>
			                            </div>


												</div>

											</div>
											<!-End row->

									</div>
									<!-End block content->
									
										<!-Block content->	
									<div class="block-content mb-100 ">

										<!-Row->
											<div class="row">

										<div class="col-md-12  ">

											<div class="sub-title mb-40">
				                                <h2 class="uppercase">map location</h2>
				                            </div>

										 </div>
										 </div>
										<!-End row->


										<!-Row->	
										<div class="row">

										<div class="col-md-12">
												<!-Map->
										<div class="block-map">

											<div id="map"></div>

										</div>
										<!-End map->
	                            		</div>
											

										</div>
									<!-End row->

									</div>
									<!-End block content->
							
							
									<!-Block content->	
								<div class="block-content mb-100 ">

									<!-Row->
										<div class="row">

									<div class="col-md-12  ">

										<div class="sub-title mb-40">
			                                <h2 class="uppercase">Personal Info</h2>
			                            </div>

									 </div>
									 </div>
									<!-End row->


									<!-Row->	
									<div class="row">

											<!-Info->
									<div class="block-info ">

										<div class="col-md-4">
											<div class="info">
											<div class="ico mb-20">
											<i class="icon-location-7"></i>
											</div>
											<h5 class="mb-20">Drop on in</h5>
											<p>
					                        Carlose Smith 1234  
					                        <br> Street Road, Chicago
					                        <br> IN 567 890 United States
					                    </p>
											</div>
										</div>
										
										
										<div class="col-md-4 ">
											<div class="info">
											<div class="ico mb-20">
											<i class="icon-mobile-6"></i>
											</div>
											<h5 class="mb-20">Give me a call</h5>
											<p>
					                        Office : + 123 596 789 908 
					                        <br> Fax : + 123 456 789 456 <br>
											Mobile : + 423 346 789 456 
					                    </p>
											</div>
										</div>
										
										
										<div class="col-md-4">
											<div class="info">
												<div class="ico mb-20">
												<i class="icon-paper-plane-3"></i>
												</div>
											<h5 class=" mb-20">Let's connect</h5>
											<p>
					                        Email:
					                        <a href="#"><?php  echo $a2; ?></a>
					                        <br> Twitter :
					                        <a href="#">@carlossmith</a>
											<br> Skype :
					                        <a href="#">carlos_smith</a>
					                    </p>
											</div>
										</div>
										
										
									</div>
									<!-End info->


									</div>
								<!-End row->

								</div>
								<!-End block content->
								
													
							<!-Block content->	
						<div class="block-content mb-100 ">

							<!-Row->
								<div class="row">

							<div class="col-md-12  ">

								<div class="sub-title mb-40">
	                                <h2 class="uppercase">Reach Me here</h2>
	                            </div>

							 </div>
							 </div>
							<!-End row->


							<!-Row->	
							<div class="row">

							<div class="col-md-12">
									<!-Reach->
							<div class="block-reach">

								<form class="contact-form" method="post" action="http://thebook.mutationmedia.net/send.php">

								<!-Input columns->
								<div class="input-columns clearfix">

								<div class="column1">
									<div class="column-inner">
								<input type="text" placeholder="Name" value="" id="name" name="name">
								</div>
								</div>

								<!-Column->
								<div class="column2">
									<div class="column-inner">
								<input type="text" placeholder="Email" value="" id="email" name="email">
								</div>
								</div>
								<!-End column->

								</div>
								<!-End input columns->

								<input type="text" placeholder="Subject" value="" id="subject" name="subject">
							<textarea name="message" placeholder="Message" id="message" cols="45" rows="7"></textarea>
							<input type="submit" value="Submit Form" class="but opc submit">
							</form>

							</div>
							<!-End reach->
                          		</div>


							</div>
						<!-End row->

						</div>
						<!-End block content->
						
									
						<!-Block content->	
					<div class="block-content">

							<!-Row->	
							<div class="row">
						<div class="col-md-12">
							<span class="page-number emph-1">- 5/5 -</span>
						</div>

					</div>
					<-End row->	
					</div>
					<!-End block content->

						</div>
						<!-End content->

					</div>
					 <!-End contact->							
		
			</section>
			<!-End contact tab->

		</div>
		<!-End right content-->
		
		
				<!--Footer
				<footer class="footer ">

					<div class="col-md-1 pd-l0">
		
					<!-Social					
					<ul class="social">
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-gplus"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
					</ul>
					<!-End social	
					
					<!-Copyrigh		
					<div class="copyright">
					<p>© 2016 Mutationthemes.</p>
					</div>
					<!-End copyright		
		
				</div>
				
				</footer>
				<!-End footer-->
				
				
		</div>
		<!--End row-->
		
		
		</div>
		<!--End  container-->
		
</div>
</div>

<!--End wrapper-->
	
<!--Javascript-->	
<script src="js|profile/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js|profile/owl.carousel.js" type="text/javascript"></script>
<script src="js|profile/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="js|profile/jquery.easytabs.min.js" type="text/javascript"></script>
<script src="js|profile/instafeed.min.js" type="text/javascript"></script>
<script src="js|profile/placeholders.min.js" type="text/javascript"></script>
<script src="js|profile/script.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>


<script>

(function($) {
  "use strict";


// Easytab setup	

$('#wrapper').easytabs({
	animate			: true,
	updateHash		: false,
	transitionIn	:'fadeIn',
	transitionOut	:'fadeOut',
	animationSpeed	:100,
	tabActiveClass	:'active',
	tabs            :' #main-nav.tabbed > ul > li ',
	transitionInEasing: 'linear',
 	transitionOutEasing: 'linear'	

});

// Instagram feed setup

var instaFeed = new Instafeed({
        get: 'user',
        userId: '8622487563',
        accessToken: '8622487563.239aaa2.9a0babde2b4247bfbcaf2fe06a55622e',
        resolution :'standard_resolution',
		limit: 5,
		template: '<li><a href="{{link}}"><img src="{{image}}"/></a></li>'
    });
instaFeed.run();

// Google map location

$('#wrapper').bind('easytabs:after', function() {
		
	var styles = [
		        {
		            stylers: [
		                { saturation: -100 }

		            ]
		        },{
		            featureType: 'road',
		            elementType: 'geometry',
		            stylers: [
		                { hue: "#74b7b0" },
		                { visibility: 'simplified' }
		            ]
		        },{
		            featureType: 'road',
		            elementType: 'labels',
		            stylers: [
		                { visibility: 'on' }
		            ]
		        }
		      ],

		       lat = -33.867487,
		       lng = 151.20699,

			  customMap = new google.maps.StyledMapType(styles,
	          {name: 'Styled Map'}),


	      mapOptions = {
	          zoom: 14,
			scrollwheel: false,
			disableDefaultUI: true,
	          center: new google.maps.LatLng( lat, lng ),
	          mapTypeControlOptions: {
	              mapTypeIds: [google.maps.MapTypeId.ROADMAP]
	          }
	      },
	      map = new google.maps.Map(document.getElementById('map'), mapOptions),
	      myLatlng = new google.maps.LatLng( lat, lng ),

	      marker = new google.maps.Marker({
	        position: myLatlng,
	        map: map,
			icon: {
			            url: 'img/marker.png',
			            scaledSize: new google.maps.Size(35, 45)
			        }
	      });

	      map.mapTypes.set('map_style', customMap);
	      map.setMapTypeId('map_style');
	});

})(jQuery);


</script>


<!-- Google analytics -->


<!-- End google analytics -->


    </body>

<!-- Mirrored from thebook.mutationmedia.net/?storefront=envato-elements by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:25:43 GMT -->
</html>
