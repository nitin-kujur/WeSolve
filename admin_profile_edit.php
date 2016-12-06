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
		 <link rel="stylesheet" type="text/css" href="js/scrollbar-plugin/jquery.mCustomScrollbar.min.css">
		 <!-- <link href="//malihu.github.io/custom-scrollbar/mCSB_buttons.png"> commented -->

		 <!-- <link rel="stylesheet" href="css/bootstrap.css">
		 <link rel="stylesheet" href="css/w3.css">
		 <link rel="stylesheet" href="css/animate.css">
 	     <script src="js/jquery-1.11.2.min.js"></script>
	     <script src="js/bootstrap.js"></script> -->

		 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		 <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		 <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
		 <link rel="stylesheet" href="css/style.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		 <script type="text/javascript" src="js/scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

		 
		 
		 <script type="text/javascript">

		 	$.fn.extend({
	               animateCss: function (animationName) { 
	               var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	               $(this).addClass('animated ' + animationName).one(animationEnd, function() {
	               $(this).removeClass('animated ' + animationName);
	              });
	            }
			});

		 	$(document).ready(function(){
			 	$('.loader-on').append('<div class="se-pre-con" style="display: none;"><div class="spinner spinner2"><img  src="images/favicon.ico" style="width:30px; height:30px; margin:15% auto; top:-50%;"></div></div>');
			 	$('select:not(#skills)').wrap('<div class="select-wrapper"></div>');
		 		$('.select-wrapper').append('<div class="next-icon"><i class="fa fa-angle-down"></i></div>');

		 		$.mCustomScrollbar.defaults.scrollButtons.enable=true; //enable scrolling buttons by default
				// $.mCustomScrollbar.defaults.axis="yx"; //enable 2 axis scrollbars by default
		 		$('.w3-wrapper').mCustomScrollbar({
				    theme:"dark-3",
				    scrollInertia: 0,
				    mouseWheelPixels: 50
				});
		 	});


		 	$(window).load(function(argument) {
	         	// $(".se-pre-con").delay(1000).fadeOut("slow");
		    });

		 </script>
	</head>
	</head>
	<body>
		<?php include 'profile.php';?>
	</body>
</html>