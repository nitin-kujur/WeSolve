<?php include('header.php'); ?>

<script type="text/javascript">
	$("#li2").addClass("w3-light-grey");
</script>

<div class="container-fluid container-main profile"><!-- main container start -->

<br><br>
<div class="jumbotron w3-padding-0 w3-margin-top w3-blue1" style="position:relative; background-color: rgba(0, 0, 0, 0.1);">
	<div class="" style="display: inline-block; width:100%;">
		<img class="img-responsive" src="images/cac-01.jpg" style="z-index:-1; position:relative;">	
	</div>
	
	<div class="container-fluid w3-padding-0 w3-text-white" style="position:absolute; top:50px;">

		<h1 id="header-title" class="text-center" style="margin-top: 50px; margin-bottom: 50px; text-shadow: #444 0 1px 1px;">Companies & Challenges</h1> 
 		
 		<div class="col-md-8 col-md-offset-2">
			<h3 id="header-text" class="justify " style="margin-top:50px; text-shadow: #444 0 1px 1px;">
				 WeSolv brings the top Companies and Challenges to provide you with 
				 real experience and recruiting opportunities to land your dream job. 
				 Sign up for free to see our full list of companies and challenges. 
	        </h3>
	        <div class="w3-section text-center container">
	        	<button id="signup-btn" data-toggle="modal" data-target="#signupModal" class="center-block w3-btn w3-xlarge w3-round w3-card-2 w3-padding-medium w3-orange w3-text-white" style="margin-top: 50px; margin-bottom: 50px;"><span style="margin-left:70px; margin-right:70px;">SIGN UP</span></button>									
	        </div>
		</div>
        
        <div class="col-md-2"></div> 	
	</div>
	<br>
</div>

<div class="jumbotron prof-jumbo w3-blue" style="position: ;">
	<div class="container-fluid w3-padding-64">

		

		<?php include('companies_and_challenges-data.php'); ?>



		<div class="w3-section text-center container">
	    	<button id="signup-btn" data-toggle="modal" data-target="#signupModal" class="center-block w3-btn w3-xlarge w3-round w3-card-2 w3-padding-medium w3-orange w3-text-white" style="margin-top: 50px; margin-bottom: 50px;"><span style="margin-left:70px; margin-right:70px;">SIGN UP</span></button>									
	    </div>

	</div>  <!-- container-fluid-64 end -->
</div>


<?php include('footer.php'); ?>

<style type="text/css">
	body{ background: transparent; }
</style>

<script type="text/javascript">
	// media query event handler
  if (matchMedia) {
    var mq = window.matchMedia("(min-width: 766px)");
    mq.addListener(WidthChange);
    WidthChange(mq);
  }

  // media query change
  function WidthChange(mq) {
    if (mq.matches) {
      // window width is at least 600px
      $('.row-height1').addClass('row-height').removeClass('row-height1');
      $('.col-height1').addClass('col-height').removeClass('col-height1');
      $('#header-title').addClass('w3-jumbo').removeClass('w3-xlarge').css({'margin-top':'50px', 'margin-bottom':'50px'});
      $('#header-text').addClass('w3-xlarge').removeClass('w3-medium').css('margin-top','50px');
      $('#signup-btn').addClass('w3-xlarge').removeClass('w3-medium').css({'margin-top':'50px', 'margin-bottom':'50px'});;
    } else {
      // window width is less than 600px
      $('.row-height').addClass('row-height1').removeClass('row-height');
      $('.col-height').addClass('col-height1').removeClass('col-height');
      $('#header-title').addClass('w3-xlarge').removeClass('w3-jumbo').css({'margin-top':'20px', 'margin-bottom':'20px'});
      $('#header-text').addClass('w3-medium').removeClass('w3-xlarge').css('margin-top','20px');
      $('#signup-btn').addClass('w3-medium').removeClass('w3-xlarge').css({'margin-top':'20px', 'margin-bottom':'20px'});;
    }

  }
</script>