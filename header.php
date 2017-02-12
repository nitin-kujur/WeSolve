<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>WeSolv | Connect. Engage. Solve. &nbsp;&nbsp;&nbsp;</title>
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <meta name="description" content="WeSolve">
		 <meta name="keywords" content="WeSolve">
		 <meta name="author" content="NITIN KUJUR">
		 <!-- Icons -->
		 <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
		 <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon.png">
		 <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon_152.png">
		 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		 <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
		 <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300ita‌​lic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
		 <link rel="stylesheet" href="css/owl.carousel.css">
		 <link rel="stylesheet" href="css/spinner.css">
		 <!-- <link rel="stylesheet" href="css/bootstrap20grid.min.css"> -->

		 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		 <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		 <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
		 <link rel="stylesheet" href="css/style.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		 <script src="js/jquery.stellar.min.js"></script>

		 <!--<link rel="stylesheet" href="css/bootstrap.css">
		 <link rel="stylesheet" href="css/w3.css">
		 <link rel="stylesheet" href="css/animate.css">
 	   <script src="js/jquery-1.11.2.min.js"></script>
	   <script src="js/bootstrap.js"></script>-->

		 <script type="text/javascript">

		 	$(document).ready(function(){
		 		$('select:not(#skills)').wrap('<div class="select-wrapper"></div>');
		 		$('.select-wrapper').append('<div class="next-icon"><i class="fa fa-angle-down"></i></div>');
		 	});


		 	$(window).load(function(argument) {
	         	$('#top-overlay').fadeOut('slow');
		    });

		 </script>
		 
	</head>
	<body>

		<div id="top-overlay" style="position:fixed; width:100%; height:100%; background:rgba(25,25,25,0.5); z-index:9999999;">
		  <div class="spinner"><img  src="images/favicon.ico" style="width:30px; height:30px; margin:15% auto;"></div>
		</div>

		<!-- -----------Nav-Bar------------ -->
			<nav id="navbar" class="navbar navbar-default navbar-fixed-top w3-card-2">
			  <div class="container-fluid">
				<div class="navbar-header">
					<span class="hidden-sm hidden-xs w3-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<a class="navbar-brand" href="index.php"><img src="images/wesolv_logo_bulb_white_BG.png" class="img-responsive"  alt="p" width="130px" height="40%" style="object-fit: contain;"></a>
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<!-- <h6><span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span></h6> -->
						<h6 class="w3-margin-0"><i class="fa fa-bars" style="font-size:24px"></i></h6>
				  </button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
					  <li id="li1"><a href="about.php"><h6 class="w3-text-dark-blue text-center">ABOUT</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;</li>
					  <li id="li2"><a href="companies_and_challenges2.php" data-toggle="collapse" data-target="#navbar-bottom" ><h6 class="w3-text-dark-blue text-center">COMPANIES & CHALLANGES</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;</li>
					  <!-- <li><a href="#"><h6 class="w3-text-dark-blue text-center">FOR STUDENTS</h6></a></li> -->
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;</li>
					  <li><a href="companies_and_challenges.php"><h6 class="text-center"><button class="w3-btn w3-round w3-card-2 w3-padding-large w3-light-gray w3-text-dark-blue w3-border-dark-blue nav-btn-top">FOR COMPANIES</button></h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<?php if(isset($_SESSION['LOG'])){ ?>
					  <li><a href="signin.php" class="w3-text-dark-blue text-center"><h6 class="w3-text-dark-blue text-center">PROFILE</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					  <li><a href="session_out.php" class="w3-text-dark-blue text-center"><h6 class="w3-text-dark-blue text-center">LOG OUT</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<?php } else { ?>
					  <li><a href="javascript:void(0);" class="w3-text-dark-blue text-center" data-toggle="modal" data-target="#signupModal"><h6 class="w3-text-dark-blue text-center">SIGN UP</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					  <li><a href="javascript:void(0);" class="w3-text-dark-blue text-center" data-toggle="modal" data-target="#loginModal"><h6 class="w3-text-dark-blue text-center">LOG IN</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<?php } ?>

					</ul>
				</div>
			  </div>
			</nav>
		<!-- -----------Nav-Bar------------ -->

		<script>
	       $.fn.extend({
	               animateCss: function (animationName) { 
	               var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	               $(this).addClass('animated ' + animationName).one(animationEnd, function() {
	               $(this).removeClass('animated ' + animationName);
	              });
	            }
			});

	       function goUp(){
            $('#goUpbtn').animateCss('bounceIn');
            jQuery("html, body").animate({
                  scrollTop: "0"
                }, 1000);
           }

	    </script>

		<a href="all_pages.php" class="w3-btn-small w3-round w3-card-2 w3-padding w3-orange w3-text-white" onmouseover="this.style.opacity = 1;" onmouseout="this.style.opacity = 0.3;" style="position:fixed; top:100px; right:20px; z-index:99; opacity:0.3;">SEE ALL PAGES</a>

		<div id="goUpbtn" class="w3-card-4 w3-hover-shadow w3-orange w3-text-white" onclick="goUp()" onmouseover="this.style.opacity = 1;" onmouseout="this.style.opacity = 0.3;" style="border-radius: 50%; opacity:0.3; z-index:99;
          text-align: center; 
          width: 48px; height: 48px; 
          position: fixed; 
          bottom: 10px; right: 10px; 
          font-size: 20px;
          cursor: pointer;"><i id="ficon" class="glyphicon glyphicon-circle-arrow-up" style="font-size:24px;
          position: relative;
          top: 50%;
          transform: translateY(-50%);
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);"></i>
		</div>