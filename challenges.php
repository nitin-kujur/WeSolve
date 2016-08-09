<?php include('signin_header.php'); ?>

<script type="text/javascript">
	$("#li2").addClass("w3-light-grey");
</script>

<div class="container-fluid container-main profile"><!-- main container start -->

<div class="jumbotron prof-jumbo">
	<div class="container-fluid w3-padding-64">
		<div class="row w3-padding-0">

			<div class="col-md-12 col-sm-12 col-xs-12 text-center center-block">
				<div class="row w3-padding-0">
					<div class="col-md-4"></div>	
					<div class="col-md-8">
						<div class="row w3-padding-0">
							<div class="col-md-3 col-sm-3 col-xs-3 text-left w3-text-dark-blue">
								<br/>
								<h5><b>CHALLANGES</b></h5>			
							</div>	
							<div class="col-md-3 col-sm-3 col-xs-3 text-right">
								<br/>
								<h6><b>Sort by:</b></h6>			
							</div>	
							<div class="col-md-3 col-sm-3 col-xs-3 text-center w3-text-dark-blue btn w3-light-gray">
								<h6><b>MOST RECENT</b></h6> <h6><b>START DATE</b></h6>			
							</div>	
							<div class="col-md-3 col-sm-3 col-xs-3 text-center w3-text-dark-blue btn">
								<br/>
								<h6><b>COMPANY NAME</b></h6>			
							</div>		
						</div>	
					</div>
				</div>
	    </div>

			<div class="col-md-4 padding-25">  <!-- col 4 start -->

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<form class="text-center" role="form">
			          <div class="input-group">
			            <input class="form-control" placeholder="KEYWORD" name="keyword" id="keyword" type="text" style="outline: none !important;">
			            <div class="input-group-btn">
			              <button id="searchBtn" class="btn btn-default w3-left" type="submit" name="keySearch"><i class="glyphicon glyphicon-search"></i>&nbsp;</button>
			            </div>
			          </div>
			      </form>
						
					</div>	

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<label>FUNCTION</label>
						<div class="multiselect">
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="1" />Accounting</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="2" />Being Awsome</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="3" />Business</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="4" />Cats</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="5" />Eating Icecream</label>
						</div>
					</div>

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<label>PROJECT SKILLS</label>
						<div class="multiselect">
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="1" />Accounting</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="2" />Being Awsome</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="3" />Business</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="4" />Cats</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="5" />Eating Icecream</label>
						</div>
					</div>		

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<label>PROJECT LENGTH</label>
						<div class="multiselect">
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="1" />Accounting</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="2" />Being Awsome</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="3" />Business</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="4" />Cats</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="5" />Eating Icecream</label>
						</div>
					</div>

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<label><i class="fa fa-map-marker w3-text-grey"></i>&nbsp;&nbsp;COMPANY LOCATION</label>
						<div class="multiselect">
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="1" />City 1</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="2" />City 2</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="3" />City 3</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="4" />City 4</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="5" />City 5</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="5" />City 6</label>
						</div>
					</div>

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<label>PRESENTATION / DELIVERABLES</label>
						<div class="multiselect">
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="1" />On-site</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="2" />Remote</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="3" />Both</label>
						</div>
					</div>		

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<label>TRAVEL</label>
						<div class="multiselect">
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="1" />Required</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="2" />Not Required</label>
						</div>
					</div>		

					<div class="w3-transparent col-md-12 col-sm-12 col-xs-12 padding-15">
						<button class="w3-right w3-round-large w3-text-white w3-btn w3-orange">SEARCH</button>
					</div>				
						 
			</div>	<!-- col 4 end -->


			<div class="col-md-8 padding-25">  <!-- col 8 start -->

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row w3-padding-0">
							<div class="col-md-3 col-sm-3 col-xs-3 w3-padding-0">
								<label>TESLA MORTORS</label>	
								<h6>Good Times, IL</h6>
								<img class="img-responsive" src="images/tesla_logo.png" style="width:150px; height:150px;">
							</div>	
							<div class="col-md-9 col-sm-9 col-xs-9 w3-padding-0">
								<label><a href="challenge_detail.php"><u>How do we price and segment the market for a 2017 luxury electric SUV ?</u></a></label>		
								<h6>Marketing, Strategy</h6>
								<h6><b>Entry Deadline:</b> 6/15/2016</h6>
								<h6><b>Start Date:</b> 6/15/2016</h6>
								<h6><b>Due Date:</b> 6/15/2016</h6>
								<h6><b>Project Skills:</b><span class="w3-margin-left">Price Modelling</span><span class="w3-margin-left">Competitive Analysis</span></h6>								
							</div>	
						</div>
						<div class="w3-right">
							<div class="text-center w3-left w3-margin-right">
								<a href="#"><i class="fa fa-share-square-o w3-xlarge"></i><h6><b>Share</b></h6></a>
							</div>	
							<!-- <div class="text-center w3-left w3-margin-left w3-margin-right">
								<a href="#" style="display:inline;"><i class="fa fa-floppy-o w3-xlarge"></i><h6><b>Save</b></h6></a>
							</div>	 -->
						</div>
						<div class="w3-clear"></div>
					</div>	



					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row w3-padding-0">
							<div class="col-md-3 col-sm-3 col-xs-3 w3-padding-0">
								<label>JUNC FOODS</label>	
								<h6>Corn City, IL</h6>
								<img class="img-responsive" src="images/tesla_logo.png" style="width:150px; height:150px;">
							</div>	
							<div class="col-md-9 col-sm-9 col-xs-9 w3-padding-0">
								<label><u>How do we operational efficiencies for distributin junk food product x ?</u></label>		
								<h6>Operations, Logistics</h6>
								<h6><b>Entry Deadline:</b> 6/15/2016</h6>
								<h6><b>Start Date:</b> 6/15/2016</h6>
								<h6><b>Due Date:</b> 6/15/2016</h6>
								<h6><b>Project Skills:</b> Supply Chain Management</h6>
							</div>	
						</div>
						<div class="w3-right">
							<div class="text-center w3-left w3-margin-right">
								<a href="#"><i class="fa fa-share-square-o w3-xlarge"></i><h6><b>Share</b></h6></a>
							</div>	
							<!-- <div class="text-center w3-left w3-margin-left w3-margin-right">
								<a href="#" style="display:inline;"><i class="fa fa-floppy-o w3-xlarge"></i><h6><b>Save</b></h6></a>
							</div>	 -->
						</div>
						<div class="w3-clear"></div>
					</div>	


			</div>		<!-- col 8 end	 -->

		</div>
	</div>
</div>



<script type="text/javascript">
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
</script>

<?php include('footer.php'); ?>