
<?php
	
	$data = file_get_contents('companies-list.json', true);
	$companiesArray = json_decode( $data, true);
	
	$d = var_export($companiesArray, true);
?>

<div class="row-height">
				<?php //var_dump($ca); ?>
				<?php $index = 1; foreach( $d['0'] as $company ){ ?>
				<?php if( $index++%2 != 0 ) { ?>
				<div class="col-md-5 col-sm-5 col-xs-12 padding-25 col-height">  <!-- col 4 start -->
					<div class="container w3-border-light-orrange w3-bottombar">
						<div class="row">
							<div class="col-xs-6">
								<img class="img-responsive" src="images/tesla_logo.png" style="width:200px; height:auto; margin-bottom: 25px;">	
								<h4><?php echo $company["name"]; ?></h4>
								<!-- <h4>Auto</h4>	 -->
							</div>
							<div class="col-xs-6">
								<?php foreach($company["office"] as $office){ ?>
								<h6 class=""><?php $office["city"]; ?></h6>
								<!-- <h6 class="">San Francisco, CA</h6>
								<h6 class="">New York Ciy, NY</h6>
								<h6 class="">Boston, MS</h6>
								<h6 class="">Miami, FL</h6>
								<h6 class="">Austin, TX</h6> -->
								<?php } ?>
							</div>
						</div>
						<div class="container text-center w3-section">
							<a class="w3-text-orange w3-large" data-toggle="modal" href="#signupModal"><u>Check out Challenge</u></a>						
						</div>
					</div>
							 
				</div>	<!-- col 6 end -->

				<div class="col-md-2 hidden-sm1 hidden-xs col-height text-center" style="">
					<label class="w3-border-light-orrange w3-leftbar" style="height:250px; margin-top:50px; margin-bottom:50px;">
						&nbsp;		
					</label>	
				</div>

				<?php } else { ?>

				<div class="col-md-5 col-sm-5 col-xs-12 padding-25 col-height">  <!-- col 8 start -->
					<div class="container w3-border-light-orrange w3-bottombar">
						<div class="row">
							<div class="col-xs-6">
								<img class="img-responsive" src="images/tesla_logo.png" style="width:200px; height:auto; margin-bottom: 25px;">	
								<h4><?php echo $company["name"]; ?></h4>
								<!-- <h4>Auto</h4>	 -->
							</div>
							<div class="col-xs-6">
								<?php foreach($company["office"] as $office){ ?>
								<h6 class=""><?php $office["city"]; ?></h6>
								<!-- <h6 class="">San Francisco, CA</h6>
								<h6 class="">New York Ciy, NY</h6>
								<h6 class="">Boston, MS</h6>
								<h6 class="">Miami, FL</h6>
								<h6 class="">Austin, TX</h6> -->
								<?php } ?>
							</div>
						</div>
						<div class="container text-center w3-section">
							<a class="w3-text-orange w3-large" data-toggle="modal" href="#signupModal"><u>Check out Challenge</u></a>						
						</div>
					</div>


				</div>	<!-- col 6 end	 -->	
				<?php } } ?>
			</div>

		</div>  <!-- row-end -->