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


    
    <meta name="description" content="Simple Online Quiz">
    <meta name="author" content="Val Okafor">   
    
 
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
 <style> 
        .container {
  position: relative;
  text-align: center;
  /* box-shadow: 0 0px 30px 0px rgba(0, 0, 0, 0.15); */
  
}

/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width:80%;
}

h1{
    font-family: Apple Chancery, cursive;
}
h3{
    font-family: Comic Sans MS, Comic Sans, cursive;
}

     </style>
  <body role="document">
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
 
 
 
<?php
include 'dbconfig.php';
$fetchqry = "SELECT * FROM `quiz`";
$result=mysqli_query($con,$fetchqry);
$num=mysqli_num_rows($result);
$i=1;
for($i;$i<=$num;$i++){
@$userselected = $_POST[$i];
$fetchqry2 = "UPDATE `quiz` SET `userans`='$userselected' WHERE `id`=$i"; 
mysqli_query($con,$fetchqry2);
} 
$qry3 = "SELECT `ans`, `userans` FROM `quiz`;";
$result3 = mysqli_query($con,$qry3);
while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
    if($row3['ans']==$row3['userans']){
	 @$_SESSION['score'] += 1 ;
 }
}
 
 ?> 
 
 <br>

 <div class="container">
  <img src="images/result.jpg"  style="width:60%; box-shadow: 0 0px 50px 0px rgba(2, 2, 2, 2);">
 
  <div class="centered">
  
  
  <div class="col-md-offset-2 col-md-10" style="margin-top:30px; margin-bottom:50px; color:white;  padding-right:150px; ">
   
 <h1><b>Result:</b></h1>
  <h3><span><b>No. of Correct Answer:</b>&nbsp;<?php  echo $no = @$_SESSION['score']; 
                                             //var_dump($_SESSION['ids']);
  //session_unset(); ?></span></h3>
  <h3><span><b>Your Score:</b>&nbsp<?php if(isset($no)) echo $no*2; ?></span></h3>
 </div>
 </div>
 


  </div>
</div>
 
</body>
<br>
<br>





<footer>
<?php include('D:\xampp\htdocs\StudPrep\includes\footer.php');?>
</footer>
</html>