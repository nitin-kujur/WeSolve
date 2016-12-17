<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WeSolv Admin - Dashboard</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon_152.png">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link href="css/datepicker-bootstrap.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <!-- Bootstrap Core CSS -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      .navbar-fixed-top{
        z-index: 9999999 !important;
      }

      #page-wrapper, .w3-gray{
        background: #f5f5f5;
      }

      .breadcrumb{
        background: #fff;
      }

      .w3-card-1{
          background: #fff;
          box-shadow: 0px 0px 2px 1px lightgray;
      }

      .margin-0{
        margin-left: 0px !important;
        margin-right: 0px !important;
      }

      .row-height {
        display: table;
        table-layout: fixed;
        height: 100%;
        width: 100%;
      }
      .col-height {
        display: table-cell;
        float: none;
        height: 100%;
      }
      .w3-orange{
          background: #f46d19 !important;
      }
      .current-active{
          position: relative !important;
      }
      .current-active:after{
          content:"";
          display:block;
          width:0;
          border:10px solid #f5f5f5;
          border-color:transparent #f5f5f5 transparent transparent;
          position:absolute;
          top:25%;
          right:0%;
          margin-left:-10px;
      }
      .active:after{
          /*top:11%;*/
      }
      .no-js #loader { display: none;  }
      .js #loader { display: block; position: absolute; left: 100px; top: 0; }
      .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 999999999;
        background: url(images/Preloader_3.gif) center no-repeat #fff;
      }
      a, a:active, a:focus{
        outline: none !important;
        text-decoration: none !important;
      }

      .next-select, select:not(#skills) {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: transparent none repeat scroll 0 0;
            border: 0 none;
            box-sizing: border-box;
            display: block;
            font-size: 1.4286rem;
            font-weight: 400;
            height: auto;
            letter-spacing: initial;
            line-height: 1.71429rem;
            max-width: none;
            padding: 5px 32px 5px 10px;
            text-transform: initial;
            width: 100%;
            color:#808080;
        }

        .select-wrapper {
            background: #ffffff none repeat scroll 0 0;
            border: 1px solid #d3dbe2;
            border-radius: 3px;
            box-sizing: border-box;
            overflow: hidden;
            position: relative;
            vertical-align: bottom;
        }

        .next-icon {
            cursor: pointer;
            display: block;
            fill: #798c9c;
            margin-top: -6px;
            pointer-events: none;
            position: absolute;
            right: 10px;
            top: 40%;
            height: 12px;
            width: 12px;
        }

        .croppie-container .cr-boundary{
          margin: auto !important;
          border: 2px black solid;
          padding: 0;
        }

        input[type = radio]{
          outline: none !important;
        }

        .modal.modal-wide .modal-dialog {
              width: 70%;
            }
            /***** MODAL PROPERTIES *****/
            .modal-content {
                -webkit-box-shadow: none;
                box-shadow: none;
                background:transparent;
                border:none;
                outline:none;
            }
           
            /***** MEDIA QUERIES *****/
             @media only screen and (max-width: 768px) {  /*641*/
                /***** MODAL PROPERTIES *****/
                .modal-body {
                    height:100px;
                    padding:0;
                    margin: 0;
                }
                .modal-content {
                    padding:0;
                    margin: 0;
                }
                .modal-dialog {
                    position: relative;
                    width: auto;
                    margin: 0px 15px;
                }

                .modal.modal-wide .modal-dialog {
                      width: 100%;
                      top:20px;
                    }
            }

            .ellipsis{
              white-space: nowrap; 
              overflow: hidden;
              text-overflow: ellipsis;
            }

            li{ cursor: default !important; }

            *[my-title]{
                position:relative;
                cursor: default !important;
            }
            *[my-title]:hover:after{
                content: attr(my-title);
                padding: 20px 20px;
                color: #146db5;
                position: absolute;
                left: 0px;
                top: 110%;
                /*white-space: nowrap;*/
                z-index: 2000;
                -moz-border-radius: 3px;
                -webkit-border-radius: 3px;
                border-radius: 3px;
                -moz-box-shadow: 0px 0px 4px #222;
                -webkit-box-shadow: 0px 0px 4px #222;
                box-shadow: 0px 0px 4px #222;
                background-image: -moz-linear-gradient(top, #ffffff, #ffffff);
                background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #ffffff),color-stop(1, #ffffff));
                background-image: -webkit-linear-gradient(top, #ffffff, #ffffff);
                background-image: -moz-linear-gradient(top, #ffffff, #ffffff);
                background-image: -ms-linear-gradient(top, #eeeeee, #cccccc);
                background-image: -o-linear-gradient(top, #eeeeee, #cccccc);  
            }       
    </style>
    <script type="text/javascript">
      
    </script>
</head>

<body><div class="se-pre-con"></div>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/wesolv_logo_bulb_white_BG.png" class="img-responsive nav-btn"  alt="p" width="100" height="10" style="object-fit: contain; display:inline;"> Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp; Hi, Stella &nbsp;<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="admin_dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#company"><i class="fa fa-fw fa-arrows-v"></i> <i class="fa fa-building"></i> Companies <span><i class="fa fa-fw fa-caret-up pull-right"></i></span></a>
                        <ul id="company" class="collapse in">
                            <li>
                                <a href="admin_add_company.php"><i class="fa fa-fw fa-plus"></i> Add Company</a>
                            </li>
                            <li>
                                <a href="admin_manage_companies.php"><i class="fa fa-fw fa-gear"></i> Manage Companies</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#challenge"><i class="fa fa-fw fa-arrows-v"></i> <i class="fa fa-tasks"></i> Challenges <span><i class="fa fa-fw fa-caret-up pull-right"></i></span></a>
                        <ul id="challenge" class="collapse in">
                            <li>
                                <a href="admin_add_challenge.php"><i class="fa fa-fw fa-plus"></i> Add Challenge</a>
                            </li>
                            <li>
                                <a href="admin_manage_challenges.php"><i class="fa fa-fw fa-gear"></i> Manage Challenges</a>
                            </li>
                        </ul>
                    </li>

                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#student"><i class="fa fa-fw fa-arrows-v"></i> <i class="fa fa-users"></i> Students <span><i class="fa fa-fw fa-caret-up pull-right"></i></span></a>
                        <ul id="student" class="collapse in">
                            <!-- <li>
                                <a href="#"><i class="fa fa-fw fa-user-plus"></i> Add Student</a>
                            </li> -->
                            <li class="current-active">
                                <a href="admin_manage_students.php"><i class="fa fa-fw fa-gear"></i> Manage Students</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <div class="w3-clear"></div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                             Edit Student
                            <small>Stella Bobo</small>
                        </h1>
                        <ol class="breadcrumb w3-card-1">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin_dashboard.php">Dashboard</a>
                            </li>
                            <li>
                                <i class="fa fa-tasks"></i>  Student
                            </li>
                            <li class="active">
                                <i class="fa fa-plus"></i> Edit Student
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row heading-->

                <!-- Page Body -->
                <div class="row">
                  <form class="form-horizontal" role="form" method="POST">

                    <div class="row">
                        <div class="row-height">
                           <div class="col-lg-6 col-xs-12 col-height">
                              <div class="row breadcrumb w3-card-1 w3-margin-left w3-margin-right">
                                <label class="w3-padding-0">Add University Recognition/Endorsements</label>
                                <hr class="w3-margin-0 w3-margin-top1 w3-margin-bottom">

                                <div class="row w3-margin-bottom">

                                   <div class="col-xs-3">
                                    <label for="school">School</label>
                                   </div>
                                   <div class="col-xs-9 w3-margin-bottom">
                                     <input class="form-control" id="school" name="" placeholder="Enter School" />
                                   </div>

                                   <div class="col-xs-3">
                                    <label for="programme">Programme</label>
                                   </div>
                                   <div class="col-xs-9 w3-margin-bottom">
                                     <input class="form-control" id="programme" name="" placeholder="Enter Programme" />
                                   </div>

                                   <div class="col-xs-3">
                                    <label for="infoText">Add Info.</label>
                                   </div>
                                   <div class="col-xs-9 w3-margin-bottom">
                                     <textarea class="form-control" id="infoText" name="" placeholder="Add info"></textarea>
                                   </div> 

                                   <div class="col-xs-12">
                                     <button class="w3-btn pull-right w3-orange w3-small w3-round w3-text-white">ADD</button>
                                   </div>
                                </div>
                                <hr>
                                 <div class="row w3-margin-bottom">
                                   <div class="col-xs-12">
                                    <label class="w3-padding-0 w3-margin-bottom">Previous Recognition/Endorsements</label>
                                     
                                      <?php $n = 1; while ($n  <= 3) { ?>
                                        <div class="row">
                                          <div class="col-xs-1">
                                            <b><?php echo $n++; ?>.</b>
                                          </div>
                                          <div class="col-xs-8" my-title="Recognition Recognition Recognition Recognition Recognition Recognition">
                                            <b>SchoolName, Programme</b>
                                            <p  class="ellipsis">Recognition Recognition Recognition Recognition Recognition Recognition</p>
                                          </div>
                                          <div class="col-xs-1">
                                            <a title="Edit this" class="col-xs-2" href="#"><i class="fa fa-pencil"></i></a>
                                          </div>
                                          <div class="col-xs-1 w3-margin-right">
                                            <a title="Remove this" class="col-xs-2" href="#"><i class="fa fa-times"></i></a>
                                          </div>
                                        </div>
                                      <?php }  ?>
                                        
                                   </div> 
                                </div>
                              </div> 
                           </div>

                           <div class="col-lg-6 col-xs-12 col-height">
                              <div class="row breadcrumb w3-card-1 w3-margin-left w3-margin-right inherit-parent" style="height:90%;">
                                 <label class="w3-padding-0">Designate previous challenges</label>
                                 <hr class="w3-margin-0 w3-margin-top1 w3-margin-bottom">
                                 <div class="w3-padding-0 row">
                                     <div class="col-xs-4">
                                       <label class="w3-padding-0" for="month">Select Challenge</label>
                                     </div> 
                                     <div class="col-xs-8 w3-margin-bottom">
                                       <select class="form-control" id="company" name="company">
                                        <option value="January">January</option>
                                        <option value="February" selected>Tesla Morters</option>
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

                                     <div class="col-xs-4">
                                       <label class="w3-padding-0" for="month">Select Company</label>
                                     </div> 
                                     <div class="col-xs-8 w3-margin-bottom">
                                       <select class="form-control" id="company" name="company">
                                        <option value="January">January</option>
                                        <option value="February" selected>Tesla Morters</option>
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

                                     <div class="col-xs-4">
                                       <label class="w3-padding-0" for="month">Select Position</label>
                                     </div> 
                                     <div class="col-xs-8 w3-margin-bottom">
                                       <select class="form-control" id="company" name="company">
                                        <option value="" selected disabled>Select Position</t Position< t Position< t Position< t Position< t Position<ption>
                                        <option value="1">1st Position</option>
                                        <option value="2">2nd Position</option>
                                        <option value="3">3rd Position</option>
                                        <option value="4">none</option>
                                      </select>
                                     </div>

                                     <div class="col-xs-4">
                                       <label class="w3-padding-0" for="month">Select Season</label>
                                     </div> 
                                     <div class="col-xs-8 w3-margin-bottom">
                                       <select class="form-control" id="company" name="company">
                                        <option value="January">January</option>
                                        <option value="February" selected>Tesla Morters</option>
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
                                 <div class="row"><div class="col-xs-12"><button class="pull-right w3-btn w3-orange w3-small w3-round w3-text-white" >ADD</button></div></div>
                                 <hr>
                                 <div class="row w3-margin-bottom">
                                  <div class="col-xs-12 w3-margin-bottom">
                                    <label class="w3-padding-0 w3-margin-bottom">Previous challenges</label>
                                     
                                    <?php $n = 1; while ($n  <= 3) { ?>
                                      <div class="row">
                                        <div class="col-xs-1">
                                          <b><?php echo $n++; ?>.</b>
                                        </div>
                                        <div class="col-xs-4">
                                          <b>Tesla SUV Project</b>
                                          <p  class="">Tesla Motors</p>
                                        </div>
                                        <div class="col-xs-4 w3-text-right">
                                          <span>Winter '16</span>
                                          <p  class=""><i class="fa fa-star w3-text-orange" style="font-size:15px"></i> 2nd Place</p>
                                        </div>
                                        <div class="col-xs-1">
                                          <a title="Edit this" class="col-xs-2" href="#"><i class="fa fa-pencil"></i></a>
                                        </div>
                                        <div class="col-xs-1 w3-margin-right">
                                          <a title="Remove this" class="col-xs-2" href="#"><i class="fa fa-times"></i></a>
                                        </div>
                                      </div>
                                    <?php }  ?>

                                   </div> 
                                 </div> 
                              </div> 
                           </div> 
                        </div>
                    </div>


                    <div class="row">
                        <div class="row-height">
                           <div class="col-lg-6 col-height">
                              <div class="row breadcrumb w3-card-1 w3-margin-left w3-margin-right">
                                 <label class="w3-padding-0">Edit student Profile</label>
                                 <hr class="w3-margin-0 w3-margin-top1 w3-margin-bottom" >

                                 <div class="row w3-margin-bottom">
                                   <div class="col-xs-3">
                                    <label for="firstName">First Name</label>
                                   </div>
                                   <div class="col-xs-9 w3-margin-bottom">
                                     <input class="form-control" id="firstName" name="" placeholder="Enter First Name" value="Stella" />
                                   </div>

                                   <div class="col-xs-3">
                                    <label for="lastName">Programme</label>
                                   </div>
                                   <div class="col-xs-9 w3-margin-bottom">
                                     <input class="form-control" id="lastName" name="" placeholder="Enter Last Name" value="Bobo" />
                                   </div>

                                   <div class="col-xs-3">
                                     <label class="w3-padding-0" for="month">Concentration 1</label>
                                   </div> 
                                   <div class="col-xs-9">
                                     <select class="form-control" id="company" name="company">
                                      <option value="January">January</option>
                                      <option value="February" selected>Tesla Morters</option>
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

                                 <div class="row w3-margin-bottom">
                                   <div class="col-xs-3">
                                     <label class="w3-padding-0" for="month">Concentration 2</label>
                                   </div> 
                                   <div class="col-xs-9">
                                     <select class="form-control" id="company" name="company">
                                      <option value="" selected disabled>Select Position</t Position< t Position< t Position< t Position< t Position<ption>
                                      <option value="1">1st Position</option>
                                      <option value="2">2nd Position</option>
                                      <option value="3">3rd Position</option>
                                    </select>
                                   </div>
                                   
                                </div>

                                <div class="row"><div class="col-xs-12"><button class="pull-right w3-margin-top w3-margin-bottom w3-btn w3-orange w3-small w3-round w3-text-white" >UPDATE</button></div></div>
                                
                              </div> 
                           </div> 

                           <!-- <div class="col-lg-6 col-height">
                              <div class="row breadcrumb w3-card-1 w3-margin-left w3-margin-right">
                                 <label class="w3-padding-0 col-sm-12 w3-margin-bottom" for="month">Edit Students Profile</label>
                                 <button type="button" class="w3-orange w3-btn w3-margin w3-round w3-text-white" data-toggle="modal" data-target="#profileModal">Edit Profile of Stella Bobo</button>
                              </div> 
                           </div>  -->

                        </div>
                    </div>


                    <div class="col-lg-12">
                       <div class="row breadcrumb1 1w3-card-1 w3-margin w3-clear">
                        <div class="col-md-12">
                          <button type="button" class="w3-orange pull-right w3-btn  w3-round-large w3-text-white" onclick="window.location.assign('admin_manage_students.php');">Back</button>
                          <!-- <button class="w3-orange w3-btn w3-margin w3-round-large w3-text-white">SAVE</button> -->
                          <!-- <button class="w3-orange w3-btn w3-margin w3-round-large w3-text-white">SAVE & PUBLISH</button>  if (window.location.hostname == '')-->
                        </div>
                       </div> 
                    </div>

                  </form>
                </div>
                <!-- /.row body-->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- profile Edit Modal popup -->
            <!-- <div class="modal modal-wide fade text-center" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModal" aria-hidden="true" style="position:fixed; z-index:999999999;">
                <div class="modal-dialog" style="width:95%;">
                    <div class="modal-content" style="background:transparent; box-shadow:0px 0px 0px 0px;">
                        <div class="modal-body w3-card-2 w3-white" style="background:white; padding:0px; border-radius: 2px;"> 
                            <div>
                                <div class="container-fluid" style="height:auto; padding:0px;">
                                        <div class="col-md-12 col-sm-12 col-xs-12 w3-blue1 text-center">
                                            <button type="button" class="close pull-left" data-dismiss="modal" aria-hidden="true"><p> </p>&times;</button>
                                            
                                            <iframe class="border:none;" frameborder="0" width="100%" height="520px" src="admin_profile_edit.php"></iframe>

                                        </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  --> 
    <!-- profile Edit Modal popup -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script type="text/javascript">

      $(document).ready(function(){

        $('select:not(#skills)').wrap('<div class="select-wrapper"></div>');
        $('.select-wrapper').append('<div class="next-icon"><i class="fa fa-angle-down"></i></div>');

         function alignModal(){
            var modalDialog = $(this).find(".modal-dialog");
            
                // Applying the top margin on modal dialog to align it vertically center
                modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
            }

            //Align modal when it is displayed
            $(".modal").on("shown.bs.modal", alignModal);

      }); 
      

      $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");
      });

      $(".collapse").on("shown.bs.collapse", arrowdown);
      $(".collapse").on("hidden.bs.collapse", arrowup);

      function arrowdown(){
      anchor = $(this).prev('a');
      span = anchor.find('span');
      span.html('<i class="fa fa-fw fa-caret-up pull-right"></i>');
      }

      function arrowup(){
      anchor = $(this).prev('a');
      span = anchor.find('span');
      span.html('<i class="fa fa-fw fa-caret-down pull-right"></i>');
      }

    </script>
</body>

</html>
