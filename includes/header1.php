<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!doctype html>
<html lang="en">
  <head>
   

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Main CSS -->
    
     <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    /> 
    <link rel="stylesheet" href="main2.css">
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='../../styles.css'>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../includes/styles.css"> -->
    <!--<link rel="stylesheet" type="text/css" href="util1.css">
    <link rel="stylesheet" href="main1.css">-->
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0288478d4c.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Animate.CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />






    <link rel="stylesheet" href="styles.css">

<!-- Latest FA icons -->

<!--.........................................................................-->

<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>StudPrep | Notes</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles.css'>
    <link rel="shortcut icon" type="image/jpg" href="D:\xampp\htdocs\StudPrep\favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FA kit link -->
    <script src="https://kit.fontawesome.com/274287ca05.js" crossorigin="anonymous"></script>








  </head>
  <body>
  <!-- <div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">Student<span>Prep</span></a>	
		</div>
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			
            
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div> -->

<!-- <div class="p-2 mb-1 customize-bg-dark text-white"></div> -->
    <!-- <div class="topNav"> -->
    <nav class="navbar navbar-expand-lg navbar-dark customize-bg-white" style=" box-shadow: 0 0px 30px 0px rgba(0, 0, 0, 2); padding:15px;">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" title="Home page" href="#"><i class="fa fa-home"></i></a> -->
            <a class="navbar-brand" title="StudPrep" href="../index.html"><img src="logo-demo.png"
                    width="50px"></a>

                    
			<h2 style="color:#3F84B1; font-family:Arial Narrow, sans-serif; margin:0px;"><b>Student<span style="color:#34AD00; font-family:Arial Narrow, sans-serif;">Prep</span></b></h2>	
		
            <!-- <a class="navbar-brand" title="StudPrep" href="#"><img src="Images/demo.jpeg"
                      width="100px"></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">

                            <br>
                            <!-- <small class="tagline"> section for mention tagline</small> -->
                        </a>

                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                  </li> -->
                </ul>
                <!-- <form class="d-flex mb-0">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-primary" type="submit"><i class="fa fa-search"></i></button>
              </form> -->
              <h4 style="font-family: cursive; !important; color:black;"><?php echo htmlentities($_SESSION['login']);?></h4>
            </div>
        </div>
    </nav>
</body>
</html>