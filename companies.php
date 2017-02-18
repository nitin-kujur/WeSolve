<?php include('signin_header.php'); ?>

<script type="text/javascript">
	$("#li1").addClass("w3-light-grey");
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
							<div class="col-md-2 col-sm-12 col-xs-12 text-left w3-text-dark-blue">
								<h5><b>COMPANIES</b></h5>			
							</div>	
							<div class="col-md-2 hidden-sm hidden-xs text-right">
								<h6><b>Sort by:</b></h6>			
							</div>	
							<div class="visible-sm visible-xs col-sm-12 col-xs-12">
								<h6><b>Sort by:</b></h6>			
							</div>
							<div class="col-md-3 col-sm-12 col-xs-12 text-center w3-text-dark-blue btn w3-light-gray">
								<h6><b>NEWEST PROJECTS</b></h6>		
							</div>	
							<div class="col-md-2 col-sm-12 col-xs-12 text-center w3-text-dark-blue btn">
								<h6><b>INDUSTRY</b></h6>			
							</div>
							<div class="col-md-3 col-sm-12 col-xs-12 text-center w3-text-dark-blue btn">
								<h6><b>COMPANY NAME</b></h6>			
							</div>		
						</div>	
					</div>
				</div>
	    </div>

	    	<small class="visible-sm visible-xs">&nbsp;</small>

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
						<label>INDUSTRY</label>
						<div class="multiselect">
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="1" />Accounting</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="2" />Being Awsome</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="3" />Business</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="4" />Cats</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="5" />Eating Icecream</label>
						</div>
					</div>

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<label>SIZE</label>
						<div class="multiselect">
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="1" />< 15 Employees</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="2" />16-50 Employees</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="3" />51-100 Employees</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="4" />101-500 Employees</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="5" />501-1,000 Employees</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="5" />>1,000 Employees</label>
						</div>
					</div>		

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<label><i class="fa fa-map-marker w3-text-grey"></i>&nbsp;&nbsp;LOCATION</label>
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
						<!-- <label>TRAVEL</label> -->
						<div class="multiselect">
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="1" />SPONSORS INTERNATIONAL STUDENTS</label>
						    <!-- <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="2" />Not Required</label> -->
						</div>
					</div>	


					<div class="w3-transparent col-md-12 col-sm-12 col-xs-12 padding-15">
						<button class="w3-right w3-round-large w3-text-white w3-btn w3-orange">SEARCH</button>
					</div>					
						 
			</div>	<!-- col 4 end -->


			<div class="col-md-8 padding-25">  <!-- col 8 start -->

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row w3-padding-0">
							<div class="col-md-3 col-sm-3 col-xs-3">
								<label>TESLA MORTORS</label>	
								<h6>>1,000 Employees</h6>
								<img class="img-responsive" src="images/tesla_logo.png" style="width:150px; height:auto;">
							</div>	
							<div class="col-md-7 col-sm-7 col-xs-7">
								<label>Locations:</label> <span class="w3-margin-left">Good Times, IL</span><span class="w3-margin-left">Nowhere, NJ</span><span class="w3-margin-left">Palo Alto, CA</span>
								<br/>
								<label>RECENT PROJECTS</label>		
								<label><u>How do we price and segment the market for a 2017 luxury electric SUV ?</u></label>		
								<label><u>How do we price and segment the market for a 2017 luxury electric SUV ?</u></label>		
								<label><u>How do we price and segment the market for a 2017 luxury electric SUV ?</u></label>		
							</div>	
							<div class="col-md-2 col-sm-2 col-xs-2">
								<label>Automative</label>	
							</div>	
						</div>
					</div>	



					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row w3-padding-0">
							<div class="col-md-3 col-sm-3 col-xs-3">
								<label>JUNC FOODS</label>	
								<h6>501-1,000 Employees</h6>
								<img class="img-responsive" src="images/tesla_logo.png" style="width:150px; height:auto;">
							</div>	
							<div class="col-md-7 col-sm-7 col-xs-7">
								<label>Locations:</label> <span class="w3-margin-left">Corn City, IL</span><span class="w3-margin-left">Carrotville, MD</span>
								<br/>
								<label>RECENT PROJECTS</label>		
								<label><u>How do we operational efficiencies for distributin junk food product x ?</u></label>
								<label><u>How do we operational efficiencies for distributin junk food product x ?</u></label>
								<label><u>How do we operational efficiencies for distributin junk food product x ?</u></label>
							</div>	
							<div class="col-md-2 col-sm-2 col-xs-2">
								<label>Food & Beverages</label>	
							</div>
						</div>
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

<style type="text/css">
	.multiselect label{
		font-weight: normal !important;
	}
</style>

<?php include('footer.php'); ?>