<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>StudPrep | Home</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css1/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css1/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css1/style.css">
 


  <link rel="stylesheet" href="styles.css">

<!-- Latest FA icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FA kit link -->
    <script src="https://kit.fontawesome.com/274287ca05.js" crossorigin="anonymous"></script>

    
<!-- 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->


    <link rel="shortcut icon" type="image/jpg" href="Images/favicon.png" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet"> -->
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>




<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css2/bootstrap.min.css"/>




<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
</head>
<style media="screen">
     
body{
    background: #fcfcfc;
    font-family: sans-serif;
}
footer{
    /* position: absolute; */
    bottom: 0;
    left: 0;
    right: 0;
    background: #111;
    height: auto;
    width: 98.8vw;

    padding-top: 40px;
    color: #fff;
}
.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    
}
.footer-content h3{
    font-size: 2.1rem;
    font-weight: 500;
    text-transform: capitalize;
    line-height: 3rem;
}
.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
    color: #cacdd2;
}
.socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}
.socials li{
    margin: 0 10px;
}
.socials a{
    text-decoration: none;
    color: #fff;
    border: 1.1px solid white;
    padding: 5px;

    border-radius: 50%;

}
.socials a i{
    font-size: 1.1rem;
    width: 20px;


    transition: color .4s ease;

}
.socials a:hover i{
    color: aqua;
}

.footer-bottom{
    background: #000;
    width: 98.8vw;
    padding: 20px;
padding-bottom: 40px;
    text-align: center;
}
.footer-bottom p{
float: center;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}
.footer-bottom p a{
  color:#44bae8;
  font-size: 16px;
  text-decoration: none;
}
.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}
.footer-menu{
  float: right;

}
.footer-menu ul{
  display: flex;
}
.footer-menu ul li{
padding-right: 10px;
display: block;
}
.footer-menu ul li a{
  color: #cfd2d6;
  text-decoration: none;
}
.footer-menu ul li a:hover{
  color: #27bcda;
}

@media (max-width:500px) {
.footer-menu ul{
  display: flex;
  margin-top: 10px;
  margin-bottom: 20px;
}
}



.feature {
	position:relative;
}

.feature + .feature  {
	margin-top:40px;
}

.feature .feature-icon {
	position:absolute;
	left:0;
	top:0;
	width:80px;
	height:80px;
	line-height:80px;
	text-align:center;
	border-radius: 50%;
	font-size:30px;
	border:4px solid #EBEBEB;
	color:#4257b3;
}

.feature-content {
	padding-left:100px;
}

/* -- About Img -- */
.about-img {
	margin-top:10px;
}

.about-img > img {
	width:100%;
}


h4 {
	margin-top: 12px;
	margin-bottom: 15px;
	font-weight: 600;
	color: #374050;
}


h2 {
	font-size:30px;
}

h4 {
	font-size:25px;
}


.section-header {
	margin-bottom:40px;
}

p{
  font-size: 18px !important;
}



    </style>
<body>
  
<?php include('includes/header.php');?>

  <!--/ Modal box-->
  <!--Banner-->
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h1 class="wow zoomIn animated animated"data-wow-delay=".5s" style="font-family:cursive; visibility: visible; animation-delay: 0.5s; animation-name: zoomIn; font-size: 50px;
	padding: 10px 20px;
    margin: 15px 0;
	text-transform: uppercase;
    color: #fff;"><b>Student Preparation</b></h1>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text" style="font-size:50px !important;">Learning Today . . . Leading Tomorrow.</p>
              
            </div>
            <a href="#footer" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
 <br><br>

  <div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
    <center>    <h1><b>Welcome to StudPrep</b></h1> 
  	<p class="lead">Users can prioritize tasks and work efficiently through the portal which will help to increase<br>
                productivity by tracking the tasks in progress record.</p>
  
  </center>
					<div class="col-md-6">
						<!-- <div class="section-header">
							
							
						</div> -->
<br><br>
						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-flask"></i>
							<div class="feature-content">
								<h4>Online Quizes </h4>
								<p>There are no secrets to success. It is the result of preparation, hard work, and learning from failure.</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-users"></i>
							<div class="feature-content">
								<h4>Self-learning</h4>
								<p>Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do.</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-comments"></i>
							<div class="feature-content">
								<h4>QnA</h4>
								<p>One of the most common causes of failure is quitting when one is overtaken by temporary defeat.</p>
							</div>
						</div>
						<!-- /feature -->

					</div>

					<div class="col-md-6">
						<div class="about-img">
							<img src="img1/about.png" alt="">
						</div>
					</div>

				</div>
				<!-- row -->

			</div>
			<!-- container -->
		</div>
		<!-- /About -->

  <!--/ Cta-->
  <!--work-shop-->
  <?php
if(strlen($_SESSION['login'])==0)
	{	
header('location:signin.php');
}
else{
?>
  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h1><b>Resources</b></h1><br>
          <p>Users can prioritize tasks and work efficiently through the portal which will help to increase<br>
                productivity by tracking the tasks in progress record.</p>
          <hr class="bottom-line">
        </div>
      
        <div class="col-md-4 col-sm-6" >
          <div class="service-box text-center" style="box-shadow:  0px 10px 15px 0px rgba(0,0,0,0.3),0px 10px 15px 0px rgba(0,0,0,0.3);border-radius: 5%;background-color:white;">
        
          <a  class="remove-anchor-style" href="index3.php">
            <div class="icon-box">
            <img src="Images/focus-img.png" height="200px" class="card-img-top p-1" alt="focus-img">
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Focus Mode</h4><br>
              <p class="justify-content-center">Focus mode will help you to become more productive and
                                    efficient by tracking time.</p>
            </div>
</a>
          </div>
        </div>
       
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center" style="box-shadow:  0px 10px 15px 0px rgba(0,0,0,0.3),0px 10px 15px 0px rgba(0,0,0,0.3);border-radius: 5%;background-color:white;">
          <a class="remove-anchor-style" href="../StudPrep/All-Resources/all-resources.php">
          <div class="icon-box">
          <img src="Images/resources-icon.png" height="200px" class="card-img-top p-1"
                                    alt="resources-img">
            </div>
            <div class="icon-text">
              <h4 class="ser-text">All Resources</h4><br>
              <p class="justify-content-center">Every material is stored inside one platform to avoid
                                    scattering and save your time.</p>
            </div>
</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center" style="box-shadow:  0px 10px 15px 0px rgba(0,0,0,0.3),0px 10px 15px 0px rgba(0,0,0,0.3);border-radius: 5%;background-color:white;">
          <a class="remove-anchor-style" href="../StudPrep/index1.php">
          <div class="icon-box">
          <img src="Images/relax-zone.png" height="200px" class="card-img-top p-1"
                                    alt="relax-zone-img">
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Relax Zone</h4><br>
              <p class="justify-content-center">Relax zone will help at break time to become
                                    re-energize
                                    your mind.</p>
                                    <br>
            </div>
</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php } ?>
  <!--/ work-shop-->
  <!--Faculity member-->
  
  <!--/ Faculity member-->
  <!--Testimonial-->
 
  <!--/ Testimonial-->
  <!--Courses-->
 
  <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h1><b>Courses</b></h1><br>
          <p>Users can prioritize tasks and work efficiently through the portal which will help to increase<br>
                productivity by tracking the tasks in progress record.</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img1/entc1.jfif" class="img-responsive" style="width: 400px;height: 239px;">
            <figcaption>
              <h2 style="color:black !important;"><b>Electronics and Telecommunication</b></h2>
              <p style="color:darkblue !important;">“When you have a dream, you’ve got to grab it and never let go.”<br>
— Carol Burnett</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img1/electrical1.jfif" class="img-responsive" style="width: 400px;height: 239px;">
            <figcaption>
              <h2 style="color:black !important;"><b>Electrical</b></h2>
              <p style="color:darkblue !important;">“Nothing is impossible. The word itself says ‘I’m possible!'”<br>
— Audrey Hepburn</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img1/mca2.jfif" class="img-responsive" style="width: 400px;height: 239px;">
            <figcaption>
            <h2 style="color:black !important;"><b>MCA</b></h2>
              <p style="color:darkblue !important;">“There is nothing impossible to they who will try.”<br>
— Alexander the Great</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img1/it2.jfif" class="img-responsive" style="width: 400px;height: 239px;">
            <figcaption>
            <h2 style="color:black !important;"><b>Information Technology</b></h2>
              <p style="color:darkblue !important;">“The bad news is time flies. The good news is you’re the pilot.”<br>
— Michael Altshuler</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img1/mech.jfif" class="img-responsive" style="width: 400px;height: 239px;">
            <figcaption>
            <h2 style="color:black !important;"><b>Mechanical</b></h2>
              <p style="color:darkblue !important;">“Life has got all those twists and turns. You’ve got to hold on tight and off you go.”<br>
— Nicole Kidman</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img1/civil.jfif" class="img-responsive" style="width: 400px;height: 239px;">
            <figcaption>
            <h2 style="color:black !important;"><b>Civil</b></h2>
              <p style="color:darkblue !important;">“Keep your face always toward the sunshine, and shadows will fall behind you.”<br>
— Walt Whitman</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!--/ Courses-->
  
 
  <footer id="footer">
      <div class="footer-content">
      <div class="row" style="margin-left:300px;">
      <div class="col-md-4">
            <h3 >StudPrep</h3>
            <p>Users can prioritize tasks and work efficiently through the portal which will help to increase
                productivity by tracking the tasks in progress record.</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
</div>
<div class="col-md-4">
            <iframe src='https://webchat.botframework.com/embed/qna160711-bot?s=mPVIQZ85H78.A765zJYazFMAmNN0NxEr0seG5ITje1AwUYkNPBbxnRM'  style='min-width: 300px; width: 30%; min-height: 250px; float:right !important; margin-left:600px;'></iframe>
            </div>
        </div>
            </div>
       <div class="footer-bottom">
      
        <p>copyright &copy; <a href="#">StudPrep</a>  </p>
                    
        </div>


    </footer>
 

    <script src="js1/jquery.min.js"></script>
  <script src="js1/jquery.easing.min.js"></script>
  <script src="js1/bootstrap.min.js"></script>
  <script src="js1/custom.js"></script>
  <script src="contactform/contactform.js"></script>


  
  <?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>	
</body>

</html>
