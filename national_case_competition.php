<?php include('signin_header.php'); ?>

<script type="text/javascript">
	// $("#li2").addClass("w3-light-grey");
</script>

<div class="container-fluid container-main profile"><!-- main container start -->

<br><br>
<div class="jumbotron w3-padding-0 w3-margin-top">
	<div class="container-fluid w3-padding-0 w3-text-white">
		<!--begin bg-carousel-->
		<div id="bg-fade-carousel" class="carousel slide carousel-fade" data-ride="carousel" style="position: relative;">
		<!-- Wrapper for slides -->
		    <div class="carousel-inner">
		        <div class="item active">
		            <div class="slide1"></div>
		        </div>
		        <div class="item">
		            <div class="slide2"></div>
		        </div>
		        <!-- <div class="item">
		            <div class="slide3"></div>
		        </div> -->
		    </div><!-- .carousel-inner --> 

		    <div class="custom-overlay" style="width:100%; position: absolute; top: 0px; bottom: 0px; left: 0px; right: 0px; background-color: rgba(74,144,226,0.3);">
		    		
		    </div>

		    <div class="container carousel-overlay">
				<h1 class="w3-section text-center" style="text-shadow: #444 0 1px 1px;">National Case Competition</h1>
				<div class="col-md-8 col-md-offset-2">
					<h3 id="hero-text" class="justify" style="margin-top:250px; text-shadow: #444 0 1px 1px;">
						 We at WeSolve believe that experiential learning is a key to any MBA 
						 student's education and that performance in real-life case challenges 
						 is a better indicator of a candidate's capabilities than the outdated 
						 hiring methods of resumes and behavioral interviews. <br><br>
						 While we are committed to hosting the top challenges on our 
						 platform, here is a comprehensive list of the other top competitions 
						 for MBA students. 
			        </h3>										
				</div>
		        
		        <div class="col-md-2"></div>
		        
		    </div>
		    <ol class="carousel-indicators">
		      <li class="item1 active"></li>
		      <li class="item2"></li>
		      <!-- <li class="item3"></li> -->
		      <!-- <li class="item4"></li> -->
		    </ol>
		</div><!-- .carousel --> 
		<!--end bg-carousel-->	
	</div>
</div>

<div class="jumbotron prof-jumbo">
	<div class="container-fluid w3-padding-64">
		<div class="row w3-padding-0">

			<div class="col-md-12 col-sm-12 col-xs-12 text-center center-block">
				<div class="row w3-padding-0">
					<div class="col-md-4"></div>	
					<div class="col-md-8">
						<div class="row w3-padding-0">
							<div class="col-md-4 col-sm-12 col-xs-12 text-left w3-text-dark-blue">
								<br/>
								<h5><b>CASE COMPETITION</b></h5>			
							</div>	
							<div class="col-md-2 hidden-sm hidden-xs text-right hidden1">
								<br/>
								<h6><b>Sort by:</b></h6>			
							</div>	
							<div class="visible-sm visible-xs col-sm-12 col-xs-12 hidden1">
								<br/>
								<h6><b>Sort by:</b></h6>			
							</div>	
							<div class="col-md-3 col-sm-12 col-xs-12 text-center w3-text-dark-blue btn w3-light-gray">
								<h6><b>MOST RECENT</b></h6> <h6><b>APPLICATION DATE</b></h6>			
							</div>	
							<div class="col-md-3 col-sm-12 col-xs-12 text-center w3-text-dark-blue btn">
								<small><br/></small>
								<h6><b>COMPETITION NAME</b></h6>
								<small class="visible-sm1 visible-xs1 w3-tiny" ><br/></small>			
							</div>		
						</div>	
					</div>
				</div>
	    </div>

	        <small class="visible-sm visible-xs ">&nbsp;</small>

			<div class="col-md-4 padding-25">  <!-- col 4 start -->

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<form class="text-center" role="form">
			          <div class="input-group">
			            <input class="form-control" placeholder="KEYWORD" name="keyword" id="keyword" type="text" style="outline: none !important; z-index:1;">
			            <div class="input-group-btn">
			              <button id="searchBtn" class="btn btn-default w3-left" type="submit" style="z-index:1;" name="keySearch"><i class="glyphicon glyphicon-search"></i>&nbsp;</button>
			            </div>
			          </div>
			      </form>
						
					</div>	

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<label>APPLICATION</label>
						<div class="container-fluid w3-padding-0">
						   <div class="row">
					    	<div class="col-xs-6 w3-padding-0 w3-padding-right">
					    		<div class="input-group">
						            <input type="text" name="startDate" placeholder="From" class="form-control datepicker w3-light-grey w3-text-dark-grey" />			
						            <div class="input-group-addon">
						              <span><i class="fa fa-calendar"></i></span>
						            </div>
						        </div>
					    	</div>
					    	<div class="col-xs-6 w3-padding-0 w3-padding-left">
					    		<div class="input-group">
						            <input type="text" name="endDate" placeholder="To" class="form-control datepicker w3-light-grey w3-text-dark-grey" />			
						            <div class="input-group-addon">
						              <span><i class="fa fa-calendar"></i></span>
						            </div>
						        </div>
					    	</div>	
			    		   </div> 
						</div>
					</div>

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<label>FUNCTION</label>
						<div class="multiselect">
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="1" />Accounting</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="2" />Analytics</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="3" />Finance</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="4" />HR / Human Capical</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="5" />Marketing</label>
						</div>
					</div>

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<label>LOCATION</label>
						<div class="multiselect">
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="1" />Chicago, IL</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="2" />Los Angeles, CA</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="3" />Washington, DC</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="4" />New YorkCity,NY</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="5" />San Fransisco, CA</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="5" />Denver, CO</label>
						</div>
					</div>


					<div class="w3-transparent col-md-12 col-sm-12 col-xs-12 padding-15">
						<button class="w3-right w3-round-large w3-text-white w3-btn w3-orange">SEARCH</button>
					</div>				
						 
			</div>	<!-- col 4 end -->


			<div class="col-md-8 padding-25">  <!-- col 8 start -->

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row w3-padding-0">
							<div class="col-md-12 col-sm-12 col-xs-12 w3-padding-0">
								<h4><a href="challenge_detail.php"><b>Tesla SUV Competition 2017</b></a></h4>		
								<h6><b>$5,000 Prize</b></h6>
								<h6 class="w3-small">HR / Human Capital</h6>
								<h6 class="w3-small">Chicago, IL</h6>
								<h6><b>Apply by March 1, 2017</b></h6>
							</div>	
						</div>
					</div>	



					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row w3-padding-0">
							<div class="col-md-12 col-sm-12 col-xs-12 w3-padding-0">
								<h4><a href="challenge_detail.php"><b>Deloitte Accounting Competition 2017</b></a></h4>		
								<h6><b>$8,000 Prize</b></h6>
								<h6 class="w3-small">Accounting</h6>
								<h6 class="w3-small">Chicago, IL</h6>
								<h6><b>Apply by February 1, 2017</b></h6>
							</div>	
						</div>
					</div>	

					<div class="col-md-12 col-sm-12 col-xs-12 w3-padding-4 text-center">
						<ul class="pagination">
						  <li><a class="disabled" href="javascript:;"><i class="fa fa-angle-left"></i>&nbsp;Previous</a></li>
	                      <li class="disabled1 active"><a href="#">1</a></li>
	                      <li><a href="#">2</a></li>
	                      <li><a href="#">3</a></li>
	                      <li><a href="#">4</a></li>
	                      <li><a href="#">5</a></li>
	                      <li><a href="#">6</a></li>
	                      <li><a href="#">...</a></li>
	                      <li><a href="#">Next&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
	                    </ul>
					</div>


			</div>		<!-- col 8 end	 -->

		</div>
	</div>
</div>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">

	style = '<link href="css/datepicker-bootstrap.css" rel="stylesheet">';

	$(document).ready(function(){

		$('head').append(style);

	    // Activate Carousel
	    $("#bg-fade-carousel").carousel();
	    
	    // Enable Carousel Indicators
	    $(".item1").click(function(){
	        $("#bg-fade-carousel").carousel(0);
	    });
	    $(".item2").click(function(){
	        $("#bg-fade-carousel").carousel(1);
	    });
	    $(".item3").click(function(){
	        $("#bg-fade-carousel").carousel(2);
	    });
	    $(".item4").click(function(){
	        $("#bg-fade-carousel").carousel(3);
	    });
	    
	    // Enable Carousel Controls
	    $(".left").click(function(){
	        $("#bg-fade-carousel").carousel("prev");
	    });
	    $(".right").click(function(){
	        $("#bg-fade-carousel").carousel("next");
	    });

	    $('.datepicker').datepicker({
            showAnim: "drop",
            dateFormat: "dd-mm-yy",
            // inline: true,
            showOtherMonths: true
        });
	});


	jQuery.fn.multiselect = function() {
	    $(this).each(function() {
	        var checkboxes = $(this).find("input:checkbox");
	        checkboxes.each(function() {
	            var checkbox = $(this);
	            // Highlight pre-selected checkboxes
	            if (checkbox.prop("checked"))
	                checkbox.parent().addClass("multiselect-on");
	 
	            // Highlight checkboxes that the user selects
	            checkbox.click(function() {
	                if (checkbox.prop("checked"))
	                    checkbox.parent().addClass("multiselect-on");
	                else
	                    checkbox.parent().removeClass("multiselect-on");
	            });
	        });
	    });
	};
	
  $(function() {
	     $(".multiselect").multiselect();
	});  

  if (matchMedia) {
    var mq = window.matchMedia("(min-width: 500px)");
    mq.addListener(WidthChange);
    WidthChange(mq);
  }

  // media query change
  function WidthChange(mq) {
    if (mq.matches) {
      // window width is at least 500px
      $('#hero-text').removeClass('w3-large');
    } else {
      // window width is less than 500px
      $('#hero-text').addClass('w3-large');
    }

  }

</script>

<style type="text/css">
	.multiselect label{
		font-weight: normal !important;
	}
</style>

<style type="text/css">
	.slide1, .slide2, .slide3 {
		min-height: 860px; /* Must have a height or min-height set due to use of background images */
		background-size: cover !important;
		background-position: center center;
	}
	.slide1 {
		background-image: url(images/ncc-1.jpg);
	}
	.slide2 {
		background-image: url(images/ncc-2.jpg);
	}
	/*.slide3 {
		background-image: url(http://placekitten.com/1200/300);
	}*/
	/* Carousel Fade Effect */
	.carousel.carousel-fade .item {
		-webkit-transition: opacity 1s linear;
		-moz-transition: opacity 1s linear;
		-ms-transition: opacity 1s linear;
		-o-transition: opacity 1s linear;
		transition: opacity 1s linear;
		opacity: .5;
	}
	.carousel.carousel-fade .active.item {
		opacity: 1;
	}
	.carousel.carousel-fade .active.left,
	.carousel.carousel-fade .active.right {
		left: 0;
		z-index: 2;
		opacity: 0;
		filter: alpha(opacity=0);
	}
	/* Carousel Overlay */
	.carousel-overlay {
		position: absolute;
		top: 70px;
		right: 0;
		left: 0;
	}
</style>

<?php include('footer.php'); ?>