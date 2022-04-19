<!DOCTYPE html>
<html>
<?php require 'dbconfig.php';
session_start(); ?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>StudPrep | Notes</title>
    <link rel="shortcut icon" type="image/png" href="yuva - Copy.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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




<!--..........................................................................................-->
    <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="description" content="Simple Online Quiz">
    <meta name="author" content="Val Okafor">   
    <!-- <title>Simple Quiz</title> -->
 
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/index.css">	
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
 
  <body role="document">
    <!-- Fixed navbar -->
   

   
        <!-- <div class="navbar-collapse collapse" class="toactive">
          <ul class="nav navbar-nav" class="list-inline">
            <li class="cli active"><a href="quizEn.php">Home</a></li>
             <li class="cli"><a href="add_quiz.php">Add Quiz</a></li> -->
         <!--   <li class="cli"><a href="result.php">View Result</a></li>
          </ul>
        </div>/.nav-collapse
      </div>
    </div> -->
 
 



    <div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">Student<span>Prep</span></a>	
		</div>
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			
            
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<head>
    
<title>Quiz</title>
</head>

<body onload="hidden();">
<center>
<div class="time" id="navbar">Time left :<span id="timer"></span></div>
<button class="button" id="mybut" onclick="myFunction()">START QUIZ</button>
</center>
<div id="myDIV" style="padding: 10px 30px;">
<form action="result.php" method="post" id="form">  				
<table><?php   $fetchqry = "SELECT * FROM `quiz`";
				$result=mysqli_query($con,$fetchqry);
				$num=mysqli_num_rows($result);
				
			   while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		  ?>
  <tr><td><h3><br><?php echo @$snr +=1;?>&nbsp;-&nbsp;<?php echo @$row['que'];?></h3></td></tr>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;a )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 1'];?>">&nbsp;<?php echo $row['option 1']; ?><br>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;b )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 2'];?>">&nbsp;<?php echo $row['option 2'];?></td></tr>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;c )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 3'];?>">&nbsp;<?php echo $row['option 3']; ?></td></tr>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;d )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 4'];?>">&nbsp;<?php echo $row['option 4']; ?><br><br><br></td></tr>
			    <?php  }
																	?> 
		<tr><td align="center"><button class="button3" name="click" >Submit Quiz</button></td></tr>
	</table>
  <form>
</div>
<script>
function myFunction() {
	var x = document.getElementById("myDIV");
    var b = document.getElementById("mybut");
    var x = document.getElementById("myDIV");
	if (x.style.display === "none") { 
	b.style.visibility = 'hidden';
	x.style.display = "block";
	startTimer();
}
}
window.onload = function() {
  document.getElementById('myDIV').style.display = 'none';
};
</script>
<?php			$fetchtime = "SELECT `timer` FROM `quiz` WHERE id=1";
				$fetched = mysqli_query($con,$fetchtime);
				$time = mysqli_fetch_array($fetched,MYSQLI_ASSOC);
				$settime = $time['timer'];		
						?>
 <script type="text/javascript">
 
document.getElementById('timer').innerHTML = '<?php echo $settime; ?>';
  //03 + ":" + 00 ;
 
 
function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m==0 && s==0){document.getElementById("form").submit();}
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}
 
function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
  if(sec == 0 && m == 0){ alert('stop it')};
}
</script>
 
<script>
window.onscroll = function() {myFun()};
 
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop -50;
 
function myFun() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

 
</body>
</html>