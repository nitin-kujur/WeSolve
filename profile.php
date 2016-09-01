
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
<script type="text/javascript" src="js/croppie.min.js"></script>

<script type="text/javascript">
	style = '<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" /> <link rel="stylesheet" href="css/croppie.css">';
	

	$(document).ready(function() {
		$('head').append(style);

		<?php 

				$skills = ["'Business'","'Australia'", "'Bangladesh'", "'Denmark'", "'Hong Kong'", "'Indonesia'", "'Netherlands'", "'New Zealand'", "'South Africa'"];
				array_push($skills,"'Business'","'Designing'"); //to populate selected skills
				$skills = array_unique($skills);
				$skills = implode(',', $skills);

		?>
		var skills = <?php echo "[".$skills."]"; ?>;
		
		skills.sort();

		skills = $.unique(skills);
		$("#skills").select2({
			placeholder: "ADD SKILLS",
			multiple: true,
		  data: skills,
	    tags: true,
		  tokenSeparators: [','],
		  maximumSelectionLength: 6,
		  disabled: true,
		  allowClear: true,
		  
		  
		}).val(["Business","Designing"]).trigger("change");	

		skill_id = document.getElementById("skills").options[0];
		skill_id.selected;
		skill_id.disabled;

		// $('#skills').select2().val(["Business","Designing"]).trigger("change");	
		$('.select2-search__field').addClass('w3-padding-bottom');	
		// $('.select2-search__field').val("Business,Designing");


		 var $uploadCrop;

				function readFile(input) {
					$('#upload-demo,#crop').removeClass('w3-hide');
					$('#dp_div').addClass('w3-hide');

		 			if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            
			            reader.onload = function (e) {
			            	$uploadCrop.croppie('bind', {
			            		url: e.target.result
			            	});
			            	$('.upload-demo').addClass('ready');
			            }
			            
			            reader.readAsDataURL(input.files[0]);
			        }
			        else {
				        alert("Sorry - you're browser doesn't support the FileReader API");
				    }
				}

				$uploadCrop = $('#upload-demo').croppie({
					viewport: {
						width: 180,
						height: 180,
						type: 'circle'
					},
					boundary: {
						width: 210,
						height: 210
					},
					//exif: true
				});

				$('#upload').on('change', function () { readFile(this); });
				$('.upload-result').on('click', function (ev) { 
					$uploadCrop.croppie('result', {
						type: 'canvas',
						size: 'viewport'
					}).then(function (resp) {
						popupResult({
							src: resp
						});
					});
				});

	});

</script>


<div class="container-fluid container-main profile"><!-- main container start -->

<div class="jumbotron prof-jumbo">
	<div class="container w3-padding-64">
		<!-- <div class="row">

			<h6 class="text-center">Connect your Linkedin profile to automatically populate your profile.</h6>
			<div class="col-md-12 col-sm-12 col-xs-12 text-center center-block">
	    	<button type="submit" class="w3-orange w3-btn w3-text-white w3-round-large" style="padding-left:0px !important; padding-right: !important;"><span class="w3-padding-small w3-blue" style="padding-top:30px !important; padding-bottom:30px !important; height:24px; width:auto;"><i class="fa fa-linkedin"></i></span><span class="w3-padding">CONNECT LINKEDIN</span></button>	
	    </div>
	    <h6 class="text-center">(recomended)</h6> -->

			<div class="col-md-5 padding-25">
				<!-- <div class="row"> -->

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<br/>
						<img class="img-responsive center-block img-circle" src="images/Chauntell B.png" >	
						<h2 class="w3-text-dark-blue col-md-9  col-sm-9 col-xs-9">Stella Bobo</h2>	<a href="javascript:void(0);" data-toggle="modal" data-target="#profileModal" class="w3-text-grey w3-hover-text-blue text-right col-md-3 col-sm-3 col-xs-3"><h2><i class="fa fa-pencil" style="font-size:24px"></i></h2></a>		
						<h5 class="col-md-6  col-sm-6 col-xs-6 w3-text-dark-blue">Concentration 1</h5> <h5 class="col-md-6  col-sm-6 col-xs-6 w3-text-dark-blue">Concentration 2</h5>
						<h5 class="col-md-12 col-sm-12 col-xs-12 w3-text-dark-blue">Chikago, IL</h5>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="fa-container-pro w3-left w3-margin-right w3-margin-top text-center"><i class="fa ficon-pro fa-twitter"></i></div>
							<div class="fa-container-pro w3-left w3-margin-right w3-margin-top text-center"><i class="fa ficon-pro fa-linkedin"></i></div>
							<div class="fa-container-pro w3-left w3-margin-right w3-margin-top text-center"><i class="fa ficon-pro fa-envelope"></i></div>
						</div>
					</div>	

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<img class="img-responsive col-md-3 col-sm-3 col-xs-3" src="images/ic_skill.png" style="width:62px; height:auto;">
						<h6 class="w3-text-black col-md-6  col-sm-6 col-xs-6">SKILLS <span class="w3-tiny">(Max. 6)</span></h6><a href="javascript:skillEnable(true)" class="w3-text-grey w3-hover-text-blue text-right col-md-3 col-sm-3 col-xs-3 pull-right"><i class="fa fa-pencil" style="font-size:24px"></i></a>		
						<br/><br/>
						<div class="container-fluid w3-padding-0 text-center">
							<form role="form" id="skillForm">
							  <div class="form-group">
							  	<div class="col-md-12 col-sm-12 col-xs-12">
							  			<!-- <textarea class="form-control w3-text-black" id="skillEdit" resize="none" disabled>Business, Business, Business, Business, Business, Business</textarea> <br/> -->
							  			<select class="form-control" multiple="multiple" id="skills" name="skill" style="width:100% !important;">
												 
											</select>

							  	</div>
									<span class="col-md-2 col-sm-2 col-xs-3"></span>
									<button class="w3-orange w3-btn w3-small w3-round-large w3-text-white col-md-3 col-sm-3 col-xs-3 w3-margin pull-right">SAVE</button>
									<span class="col-md-4"></span>
									<a href="javascript:skillEnable(false);" class="w3-grey w3-btn w3-small w3-round-large w3-text-white col-md-3 col-sm-3 col-xs-3 w3-margin pull-right">CANCEL</a>
							  </div>
							</form>
						</div>
					</div>

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<h2 class="col-md-2 col-sm-2 col-xs-3"><span class="glyphicon glyphicon-thumbs-up" style="font-size:32px"></span></h2><h6 class="w3-text-black col-md-10 col-sm-10 colxs-10">ENDORSMENTS & RECOMENDATIONS</h6>
						<br/><br/>
						<h6><strong>School Name, Program</strong></h6>
						<h6 class="w3-margin-left">"Quoted recomendation from school or education"</h6>
						<br/>
						<h6><strong>School Name, Program</strong></h6>
						<h6 class="w3-margin-left">"Quoted recomendation from school or education"</h6>
					</div>		

					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<h2 class="col-md-2 col-sm-2 col-xs-3"><i class="fa fa-trophy" style="font-size:32px"></i></h2><h6 class="w3-text-black col-md-10 col-sm-10 colxs-10">PREVIOUS CHALLANGES</h6>
						<br/><br/><br/>
						<h6 class="col-md-6  col-sm-6 col-xs-6"><strong>Tesla SUV Project</strong><br/>Tesla Motors</h6>
						<h6 class="col-md-6  col-sm-6 col-xs-6 text-right">Winter '16<br/><i class="fa fa-star w3-text-orange" style="font-size:24px"></i> 2nd Place</h6>
						<br/><br/>
						<h6 class="col-md-6  col-sm-6 col-xs-6"><strong>Tesla SUV Project</strong><br/>Tesla Motors</h6>
						<h6 class="col-md-6  col-sm-6 col-xs-6 text-right">Winter '16<br/><i class="fa fa-star w3-text-orange" style="font-size:24px"></i> 2nd Place</h6>
					</div>					
				<!-- </div>	 -->
						 
			</div>	
			<div class="col-md-7 padding-25">
				<!-- <div class="row"> -->
					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<h2 class="col-md-2 col-sm-2 col-xs-3"><i class="fa fa-crosshairs" style="font-size:32px"></i></h2>
						<h6 class="w3-text-black col-md-7 col-sm-7 col-xs-7">SUMMARY</h6><span class="col-md-3 col-sm-3 col-xs-3"></span><!-- <a href="javascript:void(0);" class="w3-text-grey w3-hover-text-blue text-right w3-right col-md-3 col-sm-3 col-xs-3"><i class="fa fa-pencil" style="font-size:24px"></i></a> -->		
						<br/><br/>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
								<form role="form" class="" id="summaryForm">
								  <div class="form-group">
							      <textarea class="form-control" id="summaryEdit" placeholder="Enter Summary">loremIpsum loremIpsum loremIpsum loremIpsum loremIpsum loremIpsum loremIpsum loremIpsum loremIpsum loremIpsum loremIpsum loremIpsum loremIpsum.</textarea>
										<span class="col-md-6  col-sm-6 col-xs-6"></span>
										<button class="w3-orange w3-btn w3-small w3-round-large w3-text-white col-md-2 col-sm-2 col-xs-3 w3-margin pull-right">SAVE</button>
										<span class="col-md-2 col-sm-2 col-xs-3"></span>
										<a class="w3-grey w3-btn w3-small w3-round-large w3-text-white col-md-2 col-sm-2 col-xs-3 w3-margin pull-right">CANCEL</a>
								  </div>
								</form>
						</div>
					</div>	<!-- Summary end -->




					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<h2 class="col-md-2 col-sm-2 col-xs-3"><span class="glyphicon glyphicon-education" style="font-size:32px"></span></h2>
						<h6 class="w3-text-black col-md-7 col-sm-7 col-xs-6">EDUCATION</h6><a href="javascript:showThis('#educationForm')" class="w3-leftbar w3-border-grey w3-text-black w3-light-grey w3-small w3-padding-4 w3-hover-text-blue text-center w3-right col-md-3 col-sm-3 col-xs-3"><strong class="w3-medium">+</strong>&nbsp;ADD<span class="hidden-xs">&nbsp;EDUCATION</span></a>
						<br/><br/><br/>

						<div class="col-md-12 col-sm-12 col-xs-12 w3-light-grey padding-15 w3-hide w3-animate-opacity" id="educationForm">
								<form role="form">
							    <div class="form-group">
							      <label for="companyName">University Name</label>
							      <input type="text" class="form-control" id="companyName" placeholder="Enter Company Name">
							    </div>
							    <div class="form-group">
							      <label for="title">Title</label>
							      <input type="text" class="form-control" id="title" placeholder="Enter Title">
							    </div>
							    <label for="month">Time Period</label>
							    <div class="form-group">
							    	<div class="col-md-4 w3-padding-0" style="width:130px;">
								      <select class="form-control" id="month" name="option">
											  <option value="January">January</option>
											  <option value="February" selected>February</option>
											  <option value="March">March</option>
											  <option value="April">April</option>
											  <option value="May">May</option>
											  <option value="June">June</option>
											  <option value="July">July</option>
											  <option value="August">August</option>
											  <option value="September">September</option>
											  <option value="October">October</option>
											  <option value="November">November</option>
											  <option value="December">December</option>
											</select>
										</div>
										<span class="col-md-1 w3-padding-0" style="width:10px;"></span>
										<div class="col-md-2 col-sm-2 col-xs-3 w3-padding-0">
											<input type="text" class="form-control" id="yearStart" placeholder="Enter Title">
										</div>
										<span class="col-md-1 w3-padding-0" style="width:10px;">-</span>
										<div class="col-md-2 col-sm-2 col-xs-3 w3-padding-0">
											<input type="text" class="form-control" id="yearEnd" placeholder="Enter Title">
										</div>
										<div class="col-md-4">
											<!-- <div class="checkbox">
									      <label><input type="checkbox"> I&nbsp;currently&nbsp;work&nbsp;here</label>
									    </div> -->
								    </div>
							    </div>
							    <br/>
							    <div class="form-group">
							      <label for="description">Relevent Course Work</label>
							      <textarea class="form-control" id="description" placeholder="Enter Description"></textarea>
							    </div>
							    
							    <div class="form-group">
							    	
							    		<button class="w3-orange w3-btn w3-small w3-round-large w3-text-white col-md-2 col-sm-2 col-xs-3 w3-margin pull-right">SAVE</button>
											
											<a id="educationClsBtn" href="javascript:hideThis('#educationForm')" class="w3-grey w3-btn w3-small w3-round-large w3-text-white col-md-2 col-sm-2 col-xs-3 w3-margin pull-right">CANCEL</a>		
								    	<div class="w3-clear"></div>
								    	<div class="row w3-padding-0">
							    			<div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-6 text-center">
								    				<span class=""><a class="w3-text-blue" href="javascript:void(0);">Remove this position</a></span>	
							    			</div>
								    	</div>
							    	
							    </div>
							  </form>
						</div> <!-- Add Education form end -->

						<div class="w3-wrapper">
								<div class="container-fluid w3-padding-0 collapse in" id="education1">
								<a href="javascript:void(0);" title="" class="w3-text-grey w3-hover-text-blue text-right w3-right" data-toggle="popover" data-placement="bottom" data-trigger="click" title="" data-html="true" data-content="<a class='w3-hover-text-white' href=javascript:editAction('#educationForm','#education1','#educationClsBtn'); ><strong> EDIT </strong></a><hr style='margin:0px auto; color:lightgrey;'><a class='w3-hover-text-white' href='#'><strong> REMOVE </strong></a>"><i class="fa fa-pencil" style="font-size:12px"></i></a>	
								<div class="w3-clear"></div>
								<h6 class="col-md-6  col-sm-6 col-xs-6"><strong>University of Chicago</strong><br/>Booth School of business<br/>Entrepreneurship and Finance</h6>
								<h6 class="col-md-4 text-right">2017-2015</h6><img class="img-responsive col-md-2 col-sm-2 col-xs-3" src="">
						</div>

						
						<br/><br/>

						<div class="container-fluid w3-padding-0 collapse in" id="education2">
								<a href="javascript:void(0);" title="" class="w3-text-grey w3-hover-text-blue text-right w3-right" data-toggle="popover" data-placement="bottom" data-trigger="click" title="" data-html="true" data-content="<a class='w3-hover-text-white' href=javascript:editAction('#educationForm','#education2','#educationClsBtn'); ><strong> EDIT </strong></a><hr style='margin:0px auto; color:lightgrey;'><a class='w3-hover-text-white' href='#'><strong> REMOVE </strong></a>"><i class="fa fa-pencil" style="font-size:12px"></i></a>	
								<div class="w3-clear"></div>
								<h6 class="col-md-6  col-sm-6 col-xs-6"><strong>Loyola University of Chicago</strong><br/>Economics</h6>
								<h6 class="col-md-4 text-right">2009-2005</h6><img class="img-responsive col-md-2 col-sm-2 col-xs-3" src="">
						</div>
						
						<br/><br/>

						<div class="container-fluid w3-padding-0 collapse in" id="education3">
								<a href="javascript:void(0);" title="" class="w3-text-grey w3-hover-text-blue text-right w3-right" data-toggle="popover" data-placement="bottom" data-trigger="click" title="" data-html="true" data-content="<a class='w3-hover-text-white' href=javascript:editAction('#educationForm','#education3','#educationClsBtn'); ><strong> EDIT </strong></a><hr style='margin:0px auto; color:lightgrey;'><a class='w3-hover-text-white' href='#'><strong> REMOVE </strong></a>"><i class="fa fa-pencil" style="font-size:12px"></i></a>	
								<div class="w3-clear"></div>
								<h6 class="col-md-6  col-sm-6 col-xs-6"><strong>Loyola University of Chicago</strong><br/>Economics</h6>
								<h6 class="col-md-4 text-right">2009-2005</h6><img class="img-responsive col-md-2 col-sm-2 col-xs-3" src="">
						</div>
						
						<br/><br/>

						<div class="container-fluid w3-padding-0 collapse in" id="education4">
								<a href="javascript:void(0);" title="" class="w3-text-grey w3-hover-text-blue text-right w3-right" data-toggle="popover" data-placement="bottom" data-trigger="click" title="" data-html="true" data-content="<a class='w3-hover-text-white' href=javascript:editAction('#educationForm','#education4','#educationClsBtn'); ><strong> EDIT </strong></a><hr style='margin:0px auto; color:lightgrey;'><a class='w3-hover-text-white' href='#'><strong> REMOVE </strong></a>"><i class="fa fa-pencil" style="font-size:12px"></i></a>	
								<div class="w3-clear"></div>
								<h6 class="col-md-6  col-sm-6 col-xs-6"><strong>Loyola University of Chicago</strong><br/>Economics</h6>
								<h6 class="col-md-4 text-right">2009-2005</h6><img class="img-responsive col-md-2 col-sm-2 col-xs-3" src="">
						</div>
						
						<br/><br/>
						</div>
						
						
					</div>	<!-- Education end	 -->




					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<h2 class="col-md-2 col-sm-2 col-xs-3"><span class="glyphicon glyphicon-briefcase" style="font-size:32px"></span></h2>
						<h6 class="w3-text-black col-md-7 col-sm-7 col-xs-6">EXPERIENCE</h6><a href="javascript:showThis('#experienceForm')" class="w3-leftbar w3-border-grey w3-text-black w3-light-grey w3-small w3-padding-4 w3-hover-text-blue text-center w3-right col-md-3 col-sm-3 col-xs-3"><strong class="w3-medium">+</strong>&nbsp;ADD<span class="hidden-xs">&nbsp;COMPANY</span></a>
						<br/><br/>
						<div class="col-md-12 col-sm-12 col-xs-12 w3-light-grey padding-15 w3-hide w3-animate-opacity" id="experienceForm">
								<form role="form">
							    <div class="form-group">
							      <label for="companyName">Company Name</label>
							      <input type="text" class="form-control" id="companyName" placeholder="Enter Company Name">
							    </div>
							    <div class="form-group">
							      <label for="title">Title</label>
							      <input type="text" class="form-control" id="title" placeholder="Enter Title">
							    </div>
							    <div class="form-group">
							      <label for="location">Location</label>
							      <input type="text" class="form-control" id="location" placeholder="Enter Location">
							    </div>
							    <label for="month">Time Period</label>
							    <div class="form-group">
							    	<div class="col-md-4 w3-padding-0" style="width:130px;">
								      <select class="form-control" id="month" name="option">
											  <option value="January">January</option>
											  <option value="February" selected>February</option>
											  <option value="March">March</option>
											  <option value="April">April</option>
											  <option value="May">May</option>
											  <option value="June">June</option>
											  <option value="July">July</option>
											  <option value="August">August</option>
											  <option value="September">September</option>
											  <option value="October">October</option>
											  <option value="November">November</option>
											  <option value="December">December</option>
											</select>
										</div>
										<span class="col-md-1 w3-padding-0" style="width:10px;"></span>
										<div class="col-md-2 col-sm-2 col-xs-3 w3-padding-0">
											<input type="text" class="form-control" id="yearStart" placeholder="Enter Title">
										</div>
										<span class="col-md-1 w3-padding-0" style="width:10px;">-</span>
										<div class="col-md-2 col-sm-2 col-xs-3 w3-padding-0">
											<input type="text" class="form-control" id="yearEnd" placeholder="Enter Title">
										</div>
										<div class="col-md-4">
											<div class="checkbox">
									      <label><input type="checkbox"> I&nbsp;currently&nbsp;work&nbsp;here</label>
									    </div>
								    </div>
							    </div>
							    
							    <div class="form-group">
							      <label for="description">Description</label> <span>  (top three accomplishments)</span>
							      <textarea class="form-control" id="description" placeholder="Enter Description"></textarea>
							    </div>
							    
							    <div class="form-group">
							    	
							    		<button class="w3-orange w3-btn w3-small w3-round-large w3-text-white col-md-2 col-sm-2 col-xs-3 w3-margin pull-right">SAVE</button>
											
											<a id="experienceClsBtn" href="javascript:hideThis('#experienceForm')" class="w3-grey w3-btn w3-small w3-round-large w3-text-white col-md-2 col-sm-2 col-xs-3 w3-margin pull-right">CANCEL</a>		
								    	<div class="w3-clear"></div>
								    	<div class="row w3-padding-0">
							    			<div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-6 text-center">
								    				<span class=""><a class="w3-text-blue" href="javascript:void(0);">Remove this position</a></span>	
							    			</div>
								    	</div>
							    	
							    </div>
							  </form>
						</div> <!-- Add Experience form end -->

						<div class="container-fluid w3-padding-0 collapse in" id="experience1">
								<a href="javascript:void(0);" title="" class="w3-text-grey w3-hover-text-blue text-right w3-right" data-toggle="popover" data-placement="bottom" data-trigger="click" title="" data-html="true" data-content="<a class='w3-hover-text-white' href=javascript:editAction('#experienceForm','#experience1','#experienceClsBtn') ><strong> EDIT </strong></a><hr style='margin:0px auto; color:lightgrey;'><a class='w3-hover-text-white' href='#'><strong> REMOVE </strong></a>"><i class="fa fa-pencil" style="font-size:12px"></i></a>	
								<div class="w3-clear"></div>
								<h6 class="col-md-6  col-sm-6 col-xs-6"><strong>WeSolv</strong><br/>Associate Developer</h6>
								<h6 class="col-md-6  col-sm-6 col-xs-6 text-right">2010-2015</h6>
								<h6 class="col-md-12 col-sm-12 col-xs-12">LoremIpsum loremipsum loremipsum loremipsum loremipsum loremipsum loremipsum loremipsum.</h6>
						</div>
						
						<h6 class="col-md-6  col-sm-6 col-xs-6"><strong>Company Name</strong><br/>Title/Position</h6>
						<h6 class="col-md-6  col-sm-6 col-xs-6 text-right">YYYY-YYYY</h6>
						<h6 class="col-md-12 col-sm-12 col-xs-12">Things you did at this company.</h6>
						<br/><br/>						
					</div><!-- Experience end -->




					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15">
						<h2 class="col-md-2 col-sm-2 col-xs-3"><i class="fa fa-users" style="font-size:32px"></i></h2>
						<h6 class="w3-text-black col-md-7 col-sm-7 col-xs-6">ORGANISATIONS</h6><a href="javascript:showThis('#organisationForm')" class="w3-leftbar w3-border-grey w3-text-black w3-light-grey w3-small text-center w3-padding-4 w3-hover-text-blue w3-right col-md-3 col-sm-3 col-xs-3"><strong class="w3-medium">+</strong>&nbsp;ADD<span class="hidden-xs">&nbsp;ORGANISATION</span></a>		
						<br/><br/>

						<div class="col-md-12 col-sm-12 col-xs-12 w3-light-grey padding-15 w3-hide w3-animate-opacity" id="organisationForm">
								<form role="form">
							    <div class="form-group">
							      <label for="companyName">Company Name</label>
							      <input type="text" class="form-control" id="companyName" placeholder="Enter Company Name">
							    </div>
							    <div class="form-group">
							      <label for="title">Title</label>
							      <input type="text" class="form-control" id="title" placeholder="Enter Title">
							    </div>
							    <div class="form-group">
							      <label for="location">Location</label>
							      <input type="text" class="form-control" id="location" placeholder="Enter Location">
							    </div>
							    <label for="month">Time Period</label>
							    <div class="form-group">
							    	<div class="col-md-4 w3-padding-0" style="width:130px;">
								      <select class="form-control" id="month" name="option">
											  <option value="January">January</option>
											  <option value="February" selected>February</option>
											  <option value="March">March</option>
											  <option value="April">April</option>
											  <option value="May">May</option>
											  <option value="June">June</option>
											  <option value="July">July</option>
											  <option value="August">August</option>
											  <option value="September">September</option>
											  <option value="October">October</option>
											  <option value="November">November</option>
											  <option value="December">December</option>
											</select>
										</div>
										<span class="col-md-1 w3-padding-0" style="width:10px;"></span>
										<div class="col-md-2 col-sm-2 col-xs-3 w3-padding-0">
											<input type="text" class="form-control" id="yearStart" placeholder="Enter Title">
										</div>
										<span class="col-md-1 w3-padding-0" style="width:10px;">-</span>
										<div class="col-md-2 col-sm-2 col-xs-3 w3-padding-0">
											<input type="text" class="form-control" id="yearEnd" placeholder="Enter Title">
										</div>
										<div class="col-md-4">
											<div class="checkbox">
									      <label><input type="checkbox"> I&nbsp;currently&nbsp;work&nbsp;here</label>
									    </div>
								    </div>
							    </div>
							    
							    <div class="form-group">
							      <label for="description">Description</label> <span>  (top three accomplishments)</span>
							      <textarea class="form-control" id="description" placeholder="Enter Description"></textarea>
							    </div>
							    
							    <div class="form-group">
							    	
							    		<button class="w3-orange w3-btn w3-small w3-round-large w3-text-white col-md-2 col-sm-2 col-xs-3 w3-margin pull-right">SAVE</button>
											
											<a id="organisationClsBtn" href="javascript:hideThis('#organisationForm')" class="w3-grey w3-btn w3-small w3-round-large w3-text-white col-md-2 col-sm-2 col-xs-3 w3-margin pull-right" data-toggle="collapse" data-target="#experienceForm">CANCEL</a>		
								    	<div class="w3-clear"></div>
								    	<div class="row w3-padding-0">
							    			<div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-6 text-center">
								    				<span class=""><a class="w3-text-blue" href="javascript:void(0);">Remove this position</a></span>	
							    			</div>
								    	</div>
							    	
							    </div>
							  </form>
						</div> <!-- Add Organisation Form end -->


						<div class="container-fluid w3-padding-0 collapse in" id="organisation1">
								<a href="javascript:void(0);" title="" class="w3-text-grey w3-hover-text-blue text-right w3-right" data-toggle="popover" data-placement="bottom" data-trigger="click" title="" data-html="true" data-content="<a class='w3-hover-text-white' href=javascript:editAction('#organisationForm','#organisation1','#organisationClsBtn') ><strong> EDIT </strong></a><hr style='margin:0px auto; color:lightgrey;'><a class='w3-hover-text-white' href='#'><strong> REMOVE </strong></a>"><i class="fa fa-pencil" style="font-size:12px"></i></a>	
								<div class="w3-clear"></div>
								<h6 class="col-md-6  col-sm-6 col-xs-6"><strong>WeSolv</strong><br/>Associate Developer</h6>
								<h6 class="col-md-6  col-sm-6 col-xs-6 text-right">2010-2015</h6>
								<h6 class="col-md-12 col-sm-12 col-xs-12">LoremIpsum loremipsum loremipsum loremipsum loremipsum loremipsum loremipsum loremipsum.</h6>
						</div>
						

						<div class="container-fluid w3-padding-0 collapse in" id="organisation2">
								<a href="javascript:void(0);" title="" class="w3-text-grey w3-hover-text-blue text-right w3-right" data-toggle="popover" data-placement="bottom" data-trigger="click" title="" data-html="true" data-content="<a class='w3-hover-text-white' href=javascript:editAction('#organisationForm','#organisation2','#organisationClsBtn') ><strong> EDIT </strong></a><hr style='margin:0px auto; color:lightgrey;'><a class='w3-hover-text-white' href='#'><strong> REMOVE </strong></a>"><i class="fa fa-pencil" style="font-size:12px"></i></a>	
								<div class="w3-clear"></div>
								<h6 class="col-md-6  col-sm-6 col-xs-6"><strong>Company Name</strong><br/>Title/Position</h6>
								<h6 class="col-md-6  col-sm-6 col-xs-6 text-right">YYYY-YYYY</h6>
								<h6 class="col-md-12 col-sm-12 col-xs-12">Things you did at this company.</h6>
						</div>


					</div>	<!-- Organisation end -->





					<div class="w3-white col-md-12 col-sm-12 col-xs-12 w3-card-1 padding-15 w3-margin-0">
						<h2 class="col-md-2 col-sm-2 col-xs-3"><i class="ionicons ion-ribbon-b" style="font-size:32px"></i></h2>
						<h6 class="w3-text-black col-md-7 col-sm-7 col-xs-6">AWARDS</h6><a href="javascript:showThis('#awardsForm')" class="w3-leftbar w3-border-grey w3-text-black text-center w3-light-grey w3-small w3-padding-4 w3-hover-text-blue w3-right col-md-3 col-sm-3 col-xs-3"><strong class="w3-medium">+</strong>&nbsp;ADD<span class="hidden-xs">&nbsp;AWARDS</span></a>
						<br/><br/>

						<div class="col-md-12 col-sm-12 col-xs-12 w3-light-grey padding-15 w3-hide w3-animate-opacity" id="awardsForm">
								<form role="form">
							    <div class="form-group">
							      <label for="companyName">Organisation Name</label>
							      <input type="text" class="form-control" id="organisationName" placeholder="Enter Organisation Name">
							    </div>
							    <div class="form-group">
							      <label for="Award">Award</label>
							      <input type="text" class="form-control" id="award" placeholder="Award Name">
							    </div>
							    <div class="form-group">
							      <label for="location">Award For</label>
							      <input type="text" class="form-control" id="location" placeholder="Award For">
							    </div>
							    <label for="month">Year</label>
							    <div class="form-group">
										<input type="text" class="form-control" id="yearStart" placeholder="Enter Title" style="max-width:150px;">
							    </div>
							    
							    <div class="form-group">
							      <label for="description">Description</label> <span>  (top three accomplishments)</span>
							      <textarea class="form-control" id="description" placeholder="Enter Description"></textarea>
							    </div>
							    
							    <div class="form-group">
							    	
							    		<button class="w3-orange w3-btn w3-small w3-round-large w3-text-white col-md-2 col-sm-2 col-xs-3 w3-margin pull-right">SAVE</button>
											
											<a id="awardsClsBtn" href="javascript:hideThis('#awardsForm')" class="w3-grey w3-btn w3-small w3-round-large w3-text-white col-md-2 col-sm-2 col-xs-3 w3-margin pull-right" data-toggle="collapse" data-target="#awardsForm">CANCEL</a>		
								    	<div class="w3-clear"></div>
								    	<div class="row w3-padding-0">
							    			<div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-6 text-center">
								    				<span class=""><a class="w3-text-blue" href="javascript:void(0);">Remove this position</a></span>	
							    			</div>
								    	</div>
							    	
							    </div>
							  </form>
						</div>


						<div class="container-fluid w3-padding-0 collapse in" id="awards1">
								<a href="javascript:void(0);" title="" class="w3-text-grey w3-hover-text-blue text-right w3-right" data-toggle="popover" data-placement="bottom" data-trigger="click" title="" data-html="true" data-content="<a class='w3-hover-text-white' href=javascript:editAction('#awardsForm','#awards1','#awardsClsBtn') ><strong> EDIT </strong></a><hr style='margin:0px auto; color:lightgrey;'><a class='w3-hover-text-white' href='#'><strong> REMOVE </strong></a>"><i class="fa fa-pencil" style="font-size:12px"></i></a>	
								<div class="w3-clear"></div>
								<h6 class="col-md-6  col-sm-6 col-xs-6"><strong>Organisation Name</strong><br/>Awards</h6>
						<h6 class="col-md-6  col-sm-6 col-xs-6 text-right">YYYY</h6>
						<h6 class="col-md-12 col-sm-12 col-xs-12">The award was<br/>for.</h6>
						</div>
						

						<h6 class="col-md-6  col-sm-6 col-xs-6"><strong>Organisation Name</strong><br/>Awards</h6>
						<h6 class="col-md-6  col-sm-6 col-xs-6 text-right">YYYY</h6>
						<h6 class="col-md-12 col-sm-12 col-xs-12">The award was<br/>for.</h6>
						<br/><br/>						
					</div>	<!-- Awards end -->
				<!-- </div>			 -->
			</div>			
		</div>
	</div>
</div>

<!-- profile Image Modal popup -->
			<div class="modal fade text-center" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModal" aria-hidden="true" style="position:fixed;">
				    <div class="modal-dialog">
				        <div class="modal-content" style="background:transparent; box-shadow:0px 0px 0px 0px;">
				            <div class="modal-body w3-card-2 w3-blue" style="background:white; padding:0px; border-radius: 2px;"> 
				                <div>
				                    <div class="container-fluid" style="height:auto; padding:0px;">
				                    		<div class="col-md-6 col-sm-6 col-xs-12 w3-blue text-center">
				                    			<button type="button" class="close pull-left" data-dismiss="modal" aria-hidden="true"><p> </p>&times;</button>
				                    			<div id="dp_div" class="w3-round text-center w3-section w3-animate-opacity" style="display:block;">
				                    					<br/>
				                    					<img id="dp" class="img-responsive img-circle center-block" src="images/Chauntell B.png">
				                    					<br/>
				                    			</div>
				                    			<div id="upload-demo" class="text-center w3-hide w3-animate-opacity">
				                    					
				                    			</div>
				                    			<div class="form-group">
				                    				<input id="upload" type="file" class="form-control" name="dp" accept="image/*" style="opacity:0; height:1px;">	
				                    				<button type="button" class="w3-btn w3-small w3-orange w3-round-large w3-text-white" onclick="this.previousElementSibling.click();">CHANGE PROFOLE PIC</button>
				                    				<button id="crop" class="upload-result w3-btn w3-small w3-orange w3-round-large w3-text-white w3-hide">CROP</button>
				                    				<!-- <img id="dpfake" src="">
				                    				<a href="javascript:fake()">check</a> -->
				                    			</div>

				                    		</div>
				                    		<div class="col-md-6 col-sm-6 col-xs-12 w3-white" style="padding:0px !important;">
			                    					<!-- <button type="button" class="close pull-left visible-xs w3-margin-left" data-dismiss="modal" aria-hidden="true"><p> </p>&times;</button> -->
		                    						<div class="w3-container w3-section">
																		 	<form rule="form">
																		 		<div class="form-group w3-margin-bottom text-left">
																				 	 <br/>
																			 		 <label for="">Concentration 1:</label>
																				 	 <div class="col-md-12 w3-padding-0">
																				      <select class="form-control" id="month" name="option">
																							  <option value="January">January</option>
																							  <option value="February" selected>February</option>
																							  <option value="March">March</option>
																							  <option value="April">April</option>
																							  <option value="May">May</option>
																							  <option value="June">June</option>
																							  <option value="July">July</option>
																							  <option value="August">August</option>
																							  <option value="September">September</option>
																							  <option value="October">October</option>
																							  <option value="November">November</option>
																							  <option value="December">December</option>
																							</select>
																						</div>		
																				 	</div> 

																				 	<div class="form-group w3-margin-bottom text-left">
																				 	 <br/>
																			 		 <label for="">Concentration 2:</label>
																				 	 <div class="col-md-12 w3-padding-0">
																				      <select class="form-control" id="month" name="option">
																							  <option value="January">January</option>
																							  <option value="February" selected>February</option>
																							  <option value="March">March</option>
																							  <option value="April">April</option>
																							  <option value="May">May</option>
																							  <option value="June">June</option>
																							  <option value="July">July</option>
																							  <option value="August">August</option>
																							  <option value="September">September</option>
																							  <option value="October">October</option>
																							  <option value="November">November</option>
																							  <option value="December">December</option>
																							</select>
																						</div>		
																				 	</div> 

																				 	<div class="form-group text-left">
																				 	 <br/>
																				 	 <div class="col-md-6 w3-padding-0 w3-padding-right">
																				 	 		<label for="">State:</label>
																				      <select class="form-control" id="month" name="option">
																							  <option value="January">January</option>
																							  <option value="February" selected>February</option>
																							  <option value="March">March</option>
																							  <option value="April">April</option>
																							  <option value="May">May</option>
																							  <option value="June">June</option>
																							  <option value="July">July</option>
																							  <option value="August">August</option>
																							  <option value="September">September</option>
																							  <option value="October">October</option>
																							  <option value="November">November</option>
																							  <option value="December">December</option>
																							</select>
																						</div>	

																					 	<div class="col-md-6 w3-padding-0 w3-padding-left">
																				 	 		<label for="">Country:</label>
																				      <select class="form-control" id="month" name="option">
																							  <option value="January">January</option>
																							  <option value="February" selected>February</option>
																							  <option value="March">March</option>
																							  <option value="April">April</option>
																							  <option value="May">May</option>
																							  <option value="June">June</option>
																							  <option value="July">July</option>
																							  <option value="August">August</option>
																							  <option value="September">September</option>
																							  <option value="October">October</option>
																							  <option value="November">November</option>
																							  <option value="December">December</option>
																							</select>
																						</div>		
																				 	</div> 

																				 	<div class="form-group">
																				 		<p class="w3-section w3-tiny">&nbsp;</p>
																				 		<div class="row w3-padding">
																				 			<div class="col-md-6 col-sm-6 col-xs-6 text-center">
																				 				<button class="w3-grey w3-btn w3-small w3-round-large w3-text-white col-md-12 col-sm-12 col-xs-12" data-dismiss="modal">CANCEL</button>	
																				 			</div>
																				 			<div class="col-md-6 col-sm-6 col-xs-6 text-center">
																				 				<button class="w3-orange w3-btn w3-small w3-round-large w3-text-white col-md-12 col-sm-12 col-xs-12">SAVE</button>	
																				 			</div>
																				 		</div>
																				 		<br/>
																				  </div>
																		 	</form>

				                    				</div>
				                    		</div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
					</div>	
			<!-- profile Image Modal popup -->

<script type="text/javascript">

	dp_id = document.getElementById("dp");

	dp_id.onchange = function(e){
		    var ext = this.value.match(/\.([^\.]+)$/)[1];
		    switch(ext)
		    {
		        case 'jpeg':
		        case 'jpg':
		        case 'gif':
		        case 'bmp':
		        case 'png':
		        case 'tif':
		            alert('allowed');
		            break;
		        default:
		            alert('invalid file type');
		            this.value='';
		    }

	};

		   
	function popupResult(result) {
		var html;
		if (result.html) {
			html = result.html; 
		}
		if (result.src) {
			html = '<img  src="' + result.src + '" />';
		}
		// swal({
		// 	title: '',
		// 	html: true,
		// 	text: html,
		// 	allowOutsideClick: true
		// });
		// setTimeout(function(){
		// 	$('.sweet-alert').css('margin', function() {
		// 		var top = -1 * ($(this).height() / 2),
		// 			left = -1 * ($(this).width() / 2);

		// 		return top + 'px 0 0 ' + left + 'px';
		// 	});
		// }, 1); 

		$('#dp').attr('src',result.src);
		$('#dp').removeClass('w3-hide');
		$('#upload-demo,#crop').addClass('w3-hide');
		$('#dp_div').removeClass('w3-hide');

  }

  // function fake () {
  // 	 file = document.getElementById('upload').files[0];
  //   path=URL.createObjectURL(file);
  //   $('#dpfake').attr('src',path);

  // }

		$("[data-toggle='popover']").on('shown.bs.popover', function(){
        $('html').click(function () {
	            $('.popover').delay(500).fadeOut('slow');
	            $('html').off('click');
  			});
        	
  	});

  	function skillEnable(bool){ 
			if(bool == true) $("#skills").prop("disabled", false) ;
			else $("#skills").prop("disabled", true) ;
		}

	 	

	 	function showThis (argument) {
	 		 $(argument).removeClass('w3-hide');  
	 	}

	 	function hideThis (argument) {
	 		 $(argument).addClass('w3-hide');  
	 	}

	 	function editAction (arg1, arg2, arg3) {
	 		$(arg1).addClass('w3-hide');
	 		$(arg2).addClass('w3-hide');
	 		//query to populate form
	 		showThis(arg1);
	 		$(arg3).attr('onclick',"showThis('"+arg2+"')");
	 	}
	// function getFocus(){
	// 	$('#sudoInput').focus();
	// }

	// $(document).ready(function(){
	// 	$('#sudoInput').keyup(function(){
	// 		text_len = $('#sudoInput').val().length;
	// 		if(text_len > 0){
	// 			$('#add').removeClass('w3-hide');
	// 				$("[data-toggle='tooltip']").tooltip('show');
	// 		}
	// 		else{
	// 			$('#add').addClass('w3-hide');
	// 			$("[data-toggle='tooltip']").tooltip('hide');
	// 		}
		

	// 	});

		
	// });

	// function addSkill(){
	// 	txt = $('#sudoInput').val();
	// 	if(txt != "" && txt != " "){
	// 		span = '<span contenteditable="false" class="span w3-light-grey w3-padding-4 w3-padding-left w3-padding-right w3-round w3-margin-left w3-small" style="position:relative; line-height:30px;">'+txt+'<a href="javascript:void(0)"> <i class="fa fa-times-circle"></i></a></span>';
	// 		$('#sudoInput').before(span);
	// 		$('#sudoInput').val('');
	// 		$('#add').addClass('w3-hide');
	// 		$('#skills').val($('#skills').val()+"&nbsp;&nbsp;&nbsp;"+txt);
	// 	}
	// 	getFocus();
	// 	$(".span > a").off("click");
	// 	$(".span > a").on("click",function (e) {
 //        e.preventDefault();
 //        $(this).parent().remove();
 //        getFocus();
 //    });
	// }

	// function resizeInput() {
 //    $(this).attr('size', $(this).val().length);
	// }

	// $('#sudoInput')
 //    .keyup(resizeInput);
    
</script>