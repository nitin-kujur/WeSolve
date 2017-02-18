<?php include('signin_header.php'); ?>

<script type="text/javascript">
	$("#li3").addClass("w3-light-grey");
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
								<h5><b>WeSOLVERS</b></h5>
								<p class="w3-medium w3-text-black"><b>Showing 1-10 of 70</b></p>			
							</div>	
							<div class="col-md-3 col-sm-3 col-xs-3 text-right">
								<br/>
								<h6><b>Sort by:</b></h6>			
							</div>	
							<div class="col-md-3 col-sm-3 col-xs-3 text-center w3-text-dark-blue btn w3-light-gray">
								<h6><b>NAME</b></h6> <h6><b>START DATE</b></h6>			
							</div>	
							<div class="col-md-3 col-sm-3 col-xs-3 text-center w3-text-dark-blue btn">
								<br/>
								<h6><b>SCHOOL</b></h6>			
							</div>		
						</div>	
					</div>
				</div>
	    </div>

			<div class="col-md-4 padding-25">  <!-- col 4 start -->

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<form class="text-center" role="form">
			          <div class="input-group">
			            <input class="form-control" placeholder="NAME" name="keyword" id="keyword" type="text" style="outline: none !important;">
			            <div class="input-group-btn">
			              <button id="searchBtn" class="btn btn-default w3-left" type="submit" name="keySearch"><i class="glyphicon glyphicon-search"></i>&nbsp;</button>
			            </div>
			          </div>
			      </form>
						
					</div>	

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<label>MBA PROGRAM</label>
						<div class="multiselect">
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="1" />Booth School of Business</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="2" />David Eccles School of Business</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="3" />Kellogg School of Management</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="4" />Kellstadt Graduate School of Business</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="5" />UIUC College of Business</label>
						</div>
					</div>

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<label>CONCENTRATION</label>
						<div class="multiselect">
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="1" />Analytics Management</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="2" />Brand Management</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="3" />Capital Markets</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="4" />Digital Marketing</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="5" />Econometrics and Statistics</label>
						</div>
					</div>		

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<label>SKILLS</label>
						<div class="multiselect">
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="1" />Skill</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="2" />Skill</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="3" />Skill</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="4" />Skill</label>
						    <label class="w3-padding-left"><input class="w3-margin-right" type="checkbox" name="option[]" value="5" />Skill</label>
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


					<div class="w3-transparent col-md-12 col-sm-12 col-xs-12 padding-15">
						<button class="w3-right w3-small w3-round-large w3-text-white w3-btn w3-orange">SEARCH</button>
					</div>				
						 
			</div>	<!-- col 4 end -->


			<div class="col-md-8 padding-25">  <!-- col 8 start -->

				<div class="col-md-12 col-sm-12 col-xs-12 text-center" style="margin-top:; margin-bottom:40px;">
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

				<!-- <div class="col-md-12 col-sm-12 col-xs-12 w3-padding-0 w3-wrapper"> -->

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<img class="img-responsive img-circle img-thumbnail center-block" src="images/Chauntell B.png" style="max-width:150px; height:height">
							</div>	
							<div class="col-md-8 col-sm-6 col-xs-12 w3-text-dark-blue">
								<h4><b>Stella Bobo</b></h4>
								<h6><b>UCLA Anderson School of Management</b></h6>
								<h6><b>Part Time MBA</b></h6>
								<div class="row w3-padding-0">
									<div class="col-md-6 w3-padding-0">
										<h6><b>Entreprenureship</b></h6>		
									</div>
									<div class="col-md-6 w3-padding-0">
										<h6><b>Economics</b></h6>		
									</div>	
								</div>
							</div>	
						</div>
					</div>	


					

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<img class="img-responsive img-circle img-thumbnail center-block" src="images/Chauntell B.png" style="max-width:150px; height:height">
							</div>	
							<div class="col-md-8 col-sm-6 col-xs-12 w3-text-dark-blue">
								<h4><b>Stella Bobo</b></h4>
								<h6><b>UCLA Anderson School of Management</b></h6>
								<h6><b>Part Time MBA</b></h6>
								<div class="row w3-padding-0">
									<div class="col-md-6 w3-padding-0">
										<h6><b>Entreprenureship</b></h6>		
									</div>
									<div class="col-md-6 w3-padding-0">
										<h6><b>Economics</b></h6>		
									</div>	
								</div>
							</div>	
						</div>
					</div>	

					

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<img class="img-responsive img-circle img-thumbnail center-block" src="images/Chauntell B.png" style="max-width:150px; height:height">
							</div>	
							<div class="col-md-8 col-sm-6 col-xs-12 w3-text-dark-blue">
								<h4><b>Stella Bobo</b></h4>
								<h6><b>UCLA Anderson School of Management</b></h6>
								<h6><b>Part Time MBA</b></h6>
								<div class="row w3-padding-0">
									<div class="col-md-6 w3-padding-0">
										<h6><b>Entreprenureship</b></h6>		
									</div>
									<div class="col-md-6 w3-padding-0">
										<h6><b>Economics</b></h6>		
									</div>	
								</div>
							</div>	
						</div>
					</div>	



					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<img class="img-responsive img-circle img-thumbnail center-block" src="images/Chauntell B.png" style="max-width:150px; height:height">
							</div>	
							<div class="col-md-8 col-sm-6 col-xs-12 w3-text-dark-blue">
								<h4><b>Stella Bobo</b></h4>
								<h6><b>UCLA Anderson School of Management</b></h6>
								<h6><b>Part Time MBA</b></h6>
								<div class="row w3-padding-0">
									<div class="col-md-6 w3-padding-0">
										<h6><b>Entreprenureship</b></h6>		
									</div>
									<div class="col-md-6 w3-padding-0">
										<h6><b>Economics</b></h6>		
									</div>	
								</div>
							</div>	
						</div>
					</div>	



					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<img class="img-responsive img-circle img-thumbnail center-block" src="images/Chauntell B.png" style="max-width:150px; height:height">
							</div>	
							<div class="col-md-8 col-sm-6 col-xs-12 w3-text-dark-blue">
								<h4><b>Stella Bobo</b></h4>
								<h6><b>UCLA Anderson School of Management</b></h6>
								<h6><b>Part Time MBA</b></h6>
								<div class="row w3-padding-0">
									<div class="col-md-6 w3-padding-0">
										<h6><b>Entreprenureship</b></h6>		
									</div>
									<div class="col-md-6 w3-padding-0">
										<h6><b>Economics</b></h6>		
									</div>	
								</div>
							</div>	
						</div>
					</div>	


					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<img class="img-responsive img-circle img-thumbnail center-block" src="images/Chauntell B.png" style="max-width:150px; height:height">
							</div>	
							<div class="col-md-8 col-sm-6 col-xs-12 w3-text-dark-blue">
								<h4><b>Stella Bobo</b></h4>
								<h6><b>UCLA Anderson School of Management</b></h6>
								<h6><b>Part Time MBA</b></h6>
								<div class="row w3-padding-0">
									<div class="col-md-6 w3-padding-0">
										<h6><b>Entreprenureship</b></h6>		
									</div>
									<div class="col-md-6 w3-padding-0">
										<h6><b>Economics</b></h6>		
									</div>	
								</div>
							</div>	
						</div>
					</div>	


					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<img class="img-responsive img-circle img-thumbnail center-block" src="images/Chauntell B.png" style="max-width:150px; height:height">
							</div>	
							<div class="col-md-8 col-sm-6 col-xs-12 w3-text-dark-blue">
								<h4><b>Stella Bobo</b></h4>
								<h6><b>UCLA Anderson School of Management</b></h6>
								<h6><b>Part Time MBA</b></h6>
								<div class="row w3-padding-0">
									<div class="col-md-6 w3-padding-0">
										<h6><b>Entreprenureship</b></h6>		
									</div>
									<div class="col-md-6 w3-padding-0">
										<h6><b>Economics</b></h6>		
									</div>	
								</div>
							</div>	
						</div>
					</div>	


					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<img class="img-responsive img-circle img-thumbnail center-block" src="images/Chauntell B.png" style="max-width:150px; height:height">
							</div>	
							<div class="col-md-8 col-sm-6 col-xs-12 w3-text-dark-blue">
								<h4><b>Stella Bobo</b></h4>
								<h6><b>UCLA Anderson School of Management</b></h6>
								<h6><b>Part Time MBA</b></h6>
								<div class="row w3-padding-0">
									<div class="col-md-6 w3-padding-0">
										<h6><b>Entreprenureship</b></h6>		
									</div>
									<div class="col-md-6 w3-padding-0">
										<h6><b>Economics</b></h6>		
									</div>	
								</div>
							</div>	
						</div>
					</div>	


					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<img class="img-responsive img-circle img-thumbnail center-block" src="images/Chauntell B.png" style="max-width:150px; height:height">
							</div>	
							<div class="col-md-8 col-sm-6 col-xs-12 w3-text-dark-blue">
								<h4><b>Stella Bobo</b></h4>
								<h6><b>UCLA Anderson School of Management</b></h6>
								<h6><b>Part Time MBA</b></h6>
								<div class="row w3-padding-0">
									<div class="col-md-6 w3-padding-0">
										<h6><b>Entreprenureship</b></h6>		
									</div>
									<div class="col-md-6 w3-padding-0">
										<h6><b>Economics</b></h6>		
									</div>	
								</div>
							</div>	
						</div>
					</div>	


					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<img class="img-responsive img-circle img-thumbnail center-block" src="images/Chauntell B.png" style="max-width:150px; height:height">
							</div>	
							<div class="col-md-8 col-sm-6 col-xs-12 w3-text-dark-blue">
								<h4><b>Stella Bobo</b></h4>
								<h6><b>UCLA Anderson School of Management</b></h6>
								<h6><b>Part Time MBA</b></h6>
								<div class="row w3-padding-0">
									<div class="col-md-6 w3-padding-0">
										<h6><b>Entreprenureship</b></h6>		
									</div>
									<div class="col-md-6 w3-padding-0">
										<h6><b>Economics</b></h6>		
									</div>	
								</div>
							</div>	
						</div>
					</div>	



				<!-- </div> -->

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

<style type="text/css">
	.w3-wrapper{
		max-height: 960px !important;
		overflow: hidden;
	}

	.disabled{
		cursor: not-allowed;
		background: transparent;
	}
</style>

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