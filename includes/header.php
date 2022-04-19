<?php if($_SESSION['login'])
{?>
<div class="top-header" style=" color:black !important;  ">
	<div class="container" style="">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.html" style=" color:black !important; font-family: cursive; !important;"><h3 style="font-family: cursive !important;"><i class="fa fa-home"></i></h3></a></li>
			<li class="prnt"><a href="profile.php" style=" color:black !important; font-family: cursive; !important;"><h3 style="font-family: cursive !important;">My Profile |</h3></a></li>
				<li class="prnt"><a href="change-password.php" style=" color:black !important; font-family: cursive; !important;"><h3 style="font-family: cursive !important;">Change Password</h3></a></li>
			<!-- <li class="prnt"><a href="tour-history.php">My Tour History</a></li>
			<li class="prnt"><a href="issuetickets.php">Issue Tickets</a></li> -->
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol" style=" font-family: Verdana, Arial, Helvetica, sans-serif !important;"><h3  style="font-family: cursive !important; color:black !important; margin-right:0px;">Welcome :</h3></li>				
			<li class="sig" style=" color:black !important; font-family: cursive; !important;"><h3 style="font-family: cursive; !important;"><?php echo htmlentities($_SESSION['login']);?></h3></li> 
			<li class="sigi"><a href="logout.php" style=" color:black !important; font-family: cursive; !important;"><h3 style="font-family: cursive !important;"> / Logout</h3></a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><h3><i class="fa fa-home"></i></h3></a></li>
				<li class="hm"><a href="admin/index.php" style=" color:black !important; font-weight:10px !important; font-family: Verdana, Arial, Helvetica, sans-serif !important;"><h3 style="font-family: cursive !important;">Admin Login</h3></a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s" > 
						
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" style=" color:black !important; font-family: Verdana, Arial, Helvetica, sans-serif !important;"><h3 style="font-family: cursive !important;">Sign Up</h3></a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" style=" color:black !important;  font-family: Verdana, Arial, Helvetica, sans-serif !important;"><h3 style="font-family: cursive !important;">/ Sign In</h3></a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>
<!--- /top-header ---->
<!--- header ---->
<!-- 
<div class="header" style="margin-left:0px !important;margin-right:0px !important;">
	<div class="container" >
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">Student<span>Prep</span></a>	
		</div>
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			
            
			<div class="clearfix"></div>
		</div> -->
		<!-- <div class="clearfix"></div>
	</div> -->
<!-- </div> -->
<!--- /header ---->
<!--- footer-btm ---->
<!-- <div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default"> -->
				<!-- Brand and toggle get grouped for better mobile display -->
				<!-- <div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div> -->
				<!-- Collect the nav links, forms, and other content for toggling -->
				<!-- <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="page.php?type=aboutus">About</a></li>
								<li><a href="">Tour Packages</a></li>
								<li><a href="page.php?type=privacy">Privacy Policy</a></li>
								<li><a href="page.php?type=terms">Terms of Use</a></li>
								<li><a href="page.php?type=contact">Contact Us</a></li>
								<?php if($_SESSION['login'])
{?>
								<li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a>  </li>
								<?php } else { ?>
								<li><a href="enquiry.php"> Enquiry </a>  </li>
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div>/.navbar-collapse	 -->
			<!-- </nav>
		</div> -->
		
		<div class="clearfix"></div>
	</div>
</div>