<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!doctype html>
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
<?php include('includes/header1.php');?>
  
    <section class="mt-3" id="work">
        <div class="work">
            <div class="container" >
           
                <div class="section-title text-center">
                    <h1>Notes</h1>
                    <br>
                    <p >
                  
                    Users can prioritize tasks and work efficiently through the portal which will help to increase<br> productivity by tracking the tasks in progress record.
                    </p>
                </div>
                <br>
                <!---->
                <div class="row">
                    <div class="col-md-3">
                    <a class="remove-anchor-style" href="../StudPrep/Notes/entc1.php">
                        <div class="work-box overlay shadow">
                       
                            <div class="work-icon">
                                <i class="fas fa-book-reader"></i>
                            </div>
                            
                            <h2>ENTC</h2>
                            
                            <p>
                            Users can prioritize tasks and work efficiently through the portal which will help to increase productivity by tracking the tasks in progress record.
                            </p>
                        </div>
</a>
                    </div>
                    <!---->
                <div class="col-md-3">
                <a class="remove-anchor-style" href="../StudPrep/Notes/IT.php">
                    <div class="work-box overlay shadow">
                        
                        <div class="work-icon">
                            <i class="fas fa-book-reader"></i>
                        </div>
                        <h2>IT</h2>
                        <p>
                      
                        Users can prioritize tasks and work efficiently through the portal which will help to increase productivity by tracking the tasks in progress record.
                        </p>
                    </div>
</a>
                </div>
                    <!---->
                <div class="col-md-3">
                <a class="remove-anchor-style" href="../StudPrep/Notes/mca.php">
                    <div class="work-box overlay shadow">
                        <div class="work-icon">
                            <i class="fas fa-book-reader"></i>
                        </div>
                        <h2>MCA</h2>
                        <p>
                        Users can prioritize tasks and work efficiently through the portal which will help to increase productivity by tracking the tasks in progress record.
                        </p>
                    </div>
</a>
                </div>
                <!---->
                
                    <div class="col-md-3">
                    <a class="remove-anchor-style" href="../StudPrep/Notes/electrical.php">

                        <div class="work-box overlay shadow">
                            <div class="work-icon">
                                <i class="fas fa-book-reader"></i>
                            </div>
                            <h2>ELECTRICAL</h2>
                            <p>
                            Users can prioritize tasks and work efficiently through the portal which will help to increase productivity by tracking the tasks in progress record.
                            </p>
                        </div>
</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <br>
    <br>
   
    
  
  <script type="text/javascript" src="../Notes/notes.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="table.js"></script>
    <script src="tab.js"></script>


    <?php include('includes/footer.php');?>
<!-- signup -->
		
	
  </body>
</html>