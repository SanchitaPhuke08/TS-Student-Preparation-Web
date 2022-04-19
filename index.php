<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>
        StudPrep | Home
    </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link rel="stylesheet" href="styles.css">

<!-- Latest FA icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FA kit link -->
    <script src="https://kit.fontawesome.com/274287ca05.js" crossorigin="anonymous"></script>

    

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="shortcut icon" type="image/jpg" href="Images/favicon.png" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<style>
    body {
  /* background-image: linear-gradient(
      rgba(194, 194, 194, 0.6),
      rgba(194, 194, 194, 0.6)
    ),
    url(Images/bg-img-1.jpg)!important; */
  display: block;
  margin: 0px 0px 0px 0px;
  background-color:white;
}
.customize-card{
    background-color: #F5F5F5!important;
}

    </style>
<body>
<?php include('includes/header.php');?>


<div class="card" style="width: 94.8rem;" >
  <img class="card-img-top p-1" src="img2.jpg" alt="Card image cap" style="height: 300px;">
  <div class="card-body">
    <p class="card-text">In today's era students are losing their focus. Sometimes, they are not able to
                gather and organize all things at a time and consistency is decreasing day by day. So, to reduce these
                problems, we are designing a website where students can get the subject-wise material in one place.
                Users can also monitor the growth of their own study pace.
                Users can prioritize tasks and work efficiently through the portal which will help to increase
                productivity by tracking the tasks in progress record.</p>
  </div>
</div>

<!-- <div class="info-wrapper jumbotron jumbotron-fluid alert-primary">
        <div class="container">
            <h3>About StudPrep</h3>
            <div class="info-content">In today's era students are losing their focus. Sometimes, they are not able to
                gather and organize all things at a time and consistency is decreasing day by day. So, to reduce these
                problems, we are designing a website where students can get the subject-wise material in one place.
                Users can also monitor the growth of their own study pace.
                Users can prioritize tasks and work efficiently through the portal which will help to increase
                productivity by tracking the tasks in progress record.
            </div>
        </div>
    </div> -->
    <div class="main-wrapper">
        <div class="cards-wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 px-4">
                    <div class="card customize-card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2);border-radius: 5%; background-color:whitesmoke;">
                        <a class="remove-anchor-style" href="index3.php">
                            <div class="mt-2 text-center">
                                <img src="Images/focus-img.png" height="200px" class="card-img-top p-1" alt="focus-img">
                            </div>
                            <div class="card-body">
                                <p class="card-text text-center fw-bold">Focus Mode</p>
                                <p class="justify-content-center">Focus mode will help you to become more productive and
                                    efficient by tracking time.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 px-4">
                    <div class="card customize-card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2);border-radius: 5%;background-color:whitesmoke;">
                        <a class="remove-anchor-style" href="../StudPrep/All-Resources/all-resources.php">
                            <div class="mt-2 text-center">
                                <img src="Images/resources-icon.png" height="200px" class="card-img-top p-1"
                                    alt="resources-img">
                            </div>
                            <div class="card-body">
                                <p class="card-text text-center fw-bold">All Resources</p>
                                <p class="justify-content-center">Every material is stored inside one platform to avoid
                                    scattering and save your time.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 px-4">
                    <div class="card customize-card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2);border-radius: 5%; background-color:whitesmoke;">
                        <!-- <a class="remove-anchor-style" href="../StudPrep/Relax-Zone/relax-zone.html"> -->
                        <a class="remove-anchor-style" href="../StudPrep/index1.php">
                            <div class="mt-2 text-center">
                                <img src="Images/relax-zone.png" height="200px" class="card-img-top p-1"
                                    alt="relax-zone-img">
                            </div>
                            <div class="card-body">
                                <p class="card-text text-center fw-bold">Relax Zone</p>
                                <p class="justify-content-center">Relax zone will help at break time to become
                                    re-energize
                                    your mind.</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- <div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TMS - Tourism Management System</h1>
	</div>
</div> -->


<!--- rupes ---->
<!-- <div class="container">
	<div class="rupes">
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-usd"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>UP TO USD. 50 OFF</h3>
				<h4><a href="offers.html">TRAVEL SMART</a></h4>
				
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-h-square"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>UP TO 70% OFF</h3>
				<h4><a href="offers.html">ON HOTELS ACROSS WORLD</a></h4>
				
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-mobile"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>FLAT USD. 50 OFF</h3>
				<h4><a href="offers.html">US APP OFFER</a></h4>
			
			</div>
				<div class="clearfix"></div>
		</div>
	
	</div>
</div> -->
<!--- /rupes ---->




<!---holiday---->
<!-- <div class="container">
	<div class="holiday">
	



	
	<h3>Package List</h3>

					
<?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
					<h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
					<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>USD <?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>
			
		
<div><a href="package-list.php" class="view">View More Packages</a></div>
</div>
			<div class="clearfix"></div>
	</div> -->



<!--- routes ---->
<!-- <div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="glyphicon glyphicon-list-alt"></i></a>
			</div>
			<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
				<h3>80000</h3>
				<p>Enquiries</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>1900</h3>
				<p>Regestered users</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>7,00,00,000+</h3>
				<p>Booking</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div> -->

<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>