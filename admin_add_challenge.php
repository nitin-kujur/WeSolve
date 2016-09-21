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
                <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp; Hi, Stella &nbsp;<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li> -->
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

                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#challenge"><i class="fa fa-fw fa-arrows-v"></i> <i class="fa fa-tasks"></i> Challenges <span><i class="fa fa-fw fa-caret-up pull-right"></i></span></a>
                        <ul id="challenge" class="collapse in">
                            <li class="current-active">
                                <a href="admin_add_challenge.php"><i class="fa fa-fw fa-plus"></i> Add Challenge</a>
                            </li>
                            <li>
                                <a href="admin_manage_challenges.php"><i class="fa fa-fw fa-gear"></i> Manage Challenges</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#student"><i class="fa fa-fw fa-arrows-v"></i> <i class="fa fa-users"></i> Students <span><i class="fa fa-fw fa-caret-up pull-right"></i></span></a>
                        <ul id="student" class="collapse in">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user-plus"></i> Add Student</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Manage Students</a>
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
                            Challenges
                            <small>Add Challenge</small>
                        </h1>
                        <ol class="breadcrumb w3-card-1">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin_dashboard.php">Dashboard</a>
                            </li>
                            <li>
                                <i class="fa fa-tasks"></i>  Challenges
                            </li>
                            <li class="active">
                                <i class="fa fa-plus"></i> Add Challenge
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row heading-->

                <!-- Page Body -->
                <div class="row">
                  <form class="form-horizontal" role="form" method="POST">

                    <div class="col-lg-12">
                      <div class="row breadcrumb w3-card-1 margin-0">
                        <label class="control-label col-sm-2" for="month">Select Company</label>
                        <div class="form-group col-sm-10" style="margin-bottom:0px;">
                          <div class="col-md-12" style="max-width:350px;">
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
                      </div>
                    </div>

                    <div class="col-lg-12">
                       <div class="row breadcrumb w3-card-1 margin-0">
                          <!-- <label class="w3-padding-0 col-sm-2 w3-margin-bottom" for="month"></label> -->
                          <label class="w3-padding-0 col-sm-2 w3-margin-bottom"><input class="w3-margin-right" type="radio" name="challenge">Case Challenges</label>&nbsp;&nbsp;&nbsp;&nbsp;<label class="w3-padding-left"><input class="w3-margin-right" type="radio" name="challenge">Quick fire Challenge</label>
                          <textarea class="form-control col-sm-10" id="caseChallenge" name="caseChallenge" placeholder="Enter Case Challenge or Quick fire Challenge"></textarea>
                       </div> 
                    </div>

                    <div class="col-lg-12">
                       <div class="row breadcrumb w3-card-1 margin-0">
                          <label class="w3-padding-0 col-sm-12 w3-margin-bottom" for="month">Upload Challenge Banner</label>
                          <div id="dp_div" class="text-center center-block w3-section w3-animate-opacity" style="display:block;">
                              <br/>
                              <img id="dp" class="img-responsive center-block w3-hover-shadow" src="images/tesla-6.jpgf" alt="&#x0D;&#x0A;&#x0D;&#x0A;&#xf1c5;&#x0D;&#x0A;No Challenge Banner" style="width:960px; height:422px; font-family:Arial, FontAwesome; font-size:32px; line-height:200%; white-space:pre; background:#4a90e2; color:white; text-shadow: #444 0 1px 1px;">
                              <br/>
                          </div>
                          <div id="upload-demo" class="text-center w3-hide w3-animate-opacity">
                              
                          </div>
                          <div class="form-group text-center">
                            <input id="upload" type="file" class="form-control" name="dp" accept="image/*" style="opacity:0; height:1px;">  
                            <button type="button" class="w3-btn w3-small w3-orange w3-round-large w3-text-white" onclick="this.previousElementSibling.click();">CHANGE CHALLENGE BANNER</button>
                            <button type="button" id="crop" class="upload-result w3-btn w3-small w3-orange w3-round-large w3-text-white w3-hide">CROP</button>
                          </div>
                       </div> 
                    </div>

                    <div class="row">
                        <div class="row-height">
                           <div class="col-lg-6 col-xs-12 col-height">
                              <div class="row breadcrumb w3-card-1 w3-margin-left w3-margin-right">
                                <label class="w3-padding-0 w3-margin-bottom" for="month">Prize Distribution</label>
                                <div class="row w3-margin-bottom">
                                   <div class="col-xs-5">
                                     <label class="w3-padding-0" for="month">First Prize</label>
                                   </div> 
                                   <div class="col-xs-7">
                                     <input type="text" class="form-control" id="FirstPrize" name="FirstPrize" placeholder="Enter First Prize">
                                   </div>
                                </div>
                                 <div class="row w3-margin-bottom">
                                   <div class="col-xs-5">
                                     <label class="w3-padding-0" for="month">Second Prize</label>
                                   </div> 
                                   <div class="col-xs-7">
                                     <input type="text" class="form-control" id="SecondPrize" name="SecondPrize" placeholder="Enter Second Prize">
                                   </div>
                                </div>
                                <div class="row">
                                   <div class="col-xs-5">
                                     <label class="w3-padding-0" for="month">Third Prize</label>
                                   </div> 
                                   <div class="col-xs-7">
                                     <input type="text" class="form-control" id="ThirdPrize" name="ThirdPrize" placeholder="Enter Third Prize">
                                   </div>
                                </div>
                              </div> 
                           </div>

                           <div class="col-lg-6 col-xs-12 col-height">
                              <div class="row breadcrumb w3-card-1 w3-margin-left w3-margin-right inherit-parent" style="height:90%;">
                                 <label class="w3-padding-0 col-sm-12 w3-margin-bottom" for="month">Project Skills(Max. 6)</label>
                                 <!-- <textarea class="form-control col-sm-12" id="caseChallenge" name="caseChallenge" placeholder="Enter Case Challenges"></textarea> -->
                                 <div class="w3-padding col-sm-12">
                                     <select class="form-control" multiple="multiple" id="skills" name="skill" style="width:100% !important;">
                         
                                     </select>
                                 </div>
                              </div> 
                           </div> 
                        </div>
                    </div>

                    <div class="row">
                       <div class="col-lg-12">
                          <div class="row breadcrumb w3-card-1 w3-margin-left w3-margin-right">
                            <div class="row">
                                <div class="w3-margin-bottom"></div>
                                <div class="col-lg-6">
                                   <div class="row w3-margin-bottom">
                                     <div class="col-xs-5">
                                       <label class="w3-padding-0" for="month">Total Teams</label>
                                     </div> 
                                     <div class="col-xs-7">
                                       <input type="text" class="form-control" name="ThirdPrize" placeholder="Enter Total Teams">
                                     </div>
                                   </div>
                                   <div class="row w3-margin-bottom">
                                     <div class="col-xs-5">
                                       <label class="w3-padding-0" for="month">Time Commitment</label>
                                     </div> 
                                     <div class="col-xs-7">
                                       <input type="text" class="form-control" name="ThirdPrize" placeholder="Enter Time Commitment">
                                     </div>
                                  </div>
                                  <div class="row w3-margin-bottom">
                                     <div class="col-xs-5">
                                       <label class="w3-padding-0" for="month">Functions</label>
                                     </div> 
                                     <div class="col-xs-7">
                                       <select class="form-control" id="company" name="company">
                                          <option value="Required" selected>Required</option>
                                          <option value="Not Required">Not Required</option>
                                          <option value="Required">Required</option>
                                          <option value="Not Required">Not Required</option>
                                        </select>
                                     </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                   <div class="row w3-margin-bottom">
                                     <div class="col-xs-5">
                                       <label class="w3-padding-0" for="month">Team Size</label>
                                     </div> 
                                     <div class="col-xs-7">
                                       <input type="text" class="form-control" name="ThirdPrize" placeholder="Enter Team Size">
                                     </div>
                                   </div>
                                   <div class="row w3-margin-bottom">
                                     <div class="col-xs-5">
                                       <label class="w3-padding-0" for="month">Travel</label>
                                     </div> 
                                     <div class="col-xs-7">
                                       <select class="form-control" id="company" name="company">
                                          <option value="Required" selected>Required</option>
                                          <option value="Not Required">Not Required</option>
                                        </select>
                                     </div>
                                  </div>
                                  <div class="row w3-margin-bottom">
                                     <div class="col-xs-5">
                                       <label class="w3-padding-0" for="month">Presentation / Deliverables</label>
                                     </div> 
                                     <div class="col-xs-7">
                                       <select class="form-control" id="company" name="company">
                                          <option value="Required" selected>In-Person</option>
                                          <option value="Not Required">Remote</option>
                                          <option value="Required">Both</option>
                                        </select>
                                     </div>
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
                                 <label class="w3-padding-0 col-sm-12 w3-margin-bottom" for="month">The Opprortunity</label>
                                 <textarea class="form-control col-sm-12" name="caseChallenge" placeholder="Enter Case Challenges"></textarea>
                              </div> 
                           </div> 

                           <div class="col-lg-6 col-height">
                              <div class="row breadcrumb w3-card-1 w3-margin-left w3-margin-right">
                                 <label class="w3-padding-0 col-sm-12 w3-margin-bottom" for="month">Considerations</label>
                                 <textarea class="form-control col-sm-12" name="caseChallenge" placeholder="Enter Case Challenges"></textarea>
                              </div> 
                           </div> 
                        </div>
                    </div>

                    <div class="row">
                       <div class="col-lg-12">
                          <div class="row breadcrumb w3-card-1 w3-margin-left w3-margin-right">
                            <label class="w3-padding-0 col-sm-12 w3-margin-bottom" for="month">Timeline</label>
                            <div class="row">
                                <div class="col-lg-6">
                                   <div class="row w3-margin-bottom">
                                     <div class="col-xs-5">
                                       <label class="w3-padding-0" for="month">Entry Deadline</label>
                                     </div> 
                                     <div class="col-xs-7">
                                       <input type="text" class="form-control" name="ThirdPrize" placeholder="Enter Entry Deadline">
                                     </div>
                                   </div>
                                   <div class="row w3-margin-bottom">
                                     <div class="col-xs-5">
                                       <label class="w3-padding-0" for="month">Start Date</label>
                                     </div> 
                                     <div class="col-xs-7">
                                       <input type="text" class="form-control" name="ThirdPrize" placeholder="Enter Start Date">
                                     </div>
                                   </div>
                                   <div class="row w3-margin-bottom">
                                     <div class="col-xs-5">
                                       <label class="w3-padding-0" for="month">Winner Selection</label>
                                     </div> 
                                     <div class="col-xs-7">
                                       <input type="text" class="form-control" name="ThirdPrize" placeholder="Enter Winner Selection">
                                     </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                   <div class="row w3-margin-bottom">
                                     <div class="col-xs-5">
                                       <label class="w3-padding-0" for="month">Application Notification</label>
                                     </div> 
                                     <div class="col-xs-7">
                                       <input type="text" class="form-control" name="ThirdPrize" placeholder="Enter Application Notification">
                                     </div>
                                   </div>
                                   <div class="row">
                                     <div class="col-xs-5">
                                       <label class="w3-padding-0" for="month">Due Date</label>
                                     </div> 
                                     <div class="col-xs-7">
                                       <input type="text" class="form-control" name="ThirdPrize" placeholder="Enter Due Date">
                                     </div>
                                  </div>
                                </div>
                            </div>
                          </div> 
                       </div>
                    </div>

                    <div class="col-lg-12">
                       <div class="row breadcrumb w3-card-1 margin-0">
                          <label class="w3-padding-0 col-sm-2 w3-margin-bottom" for="month">Deliverables</label>
                          <textarea class="form-control col-sm-10" name="caseChallenge" placeholder="Enter Deliverables"></textarea>
                       </div> 
                    </div>

                    <div class="col-lg-12">
                       <div class="row breadcrumb w3-card-1 margin-0">
                          <label class="w3-padding-0 col-sm-2 w3-margin-bottom" for="month">Supporting Materials</label>
                          <textarea class="form-control col-sm-10" name="caseChallenge" placeholder="Enter Supporting Materials"></textarea>
                       </div> 
                    </div>

                    <div class="col-lg-12">
                       <div class="row breadcrumb w3-card-1 margin-0">
                          <label class="w3-padding-0 col-sm-2 w3-margin-bottom" for="month">Requirements</label>
                          <textarea class="form-control col-sm-10" name="caseChallenge" placeholder="Enter Requirements"></textarea>
                       </div> 
                    </div>

                     <div class="col-lg-12">
                       <div class="row breadcrumb w3-card-1 margin-0">
                          <label class="w3-padding-0 w3-margin-bottom" for="month">Company Stakeholders</label>
                          <div class="" id="formContainer">
                             <div class="w3-light-grey w3-padding">
                                <label class="w3-padding-0 w3-margin-bottom" for="month">Stakeholder Details</label>
                                <div class="form-group">
                                   <div class="w3-row">
                                      <div class="col-xs-4 text-center">
                                         <div id="" class="stackDp_div w3-round text-center w3-section w3-animate-opacity" style="display:block;">
                                             <img class="img-responsive center-block img-circle w3-margin-bottom stackDp w3-text-white" src="" alt="&#x0D;&#x0A;&#x0D;&#x0A;No Pic" style="width:180px; height:180px; background:#4a90e2; white-space:pre;"> 
                                         </div>
                                         <!-- <input id="" type="file" class="stackPicUpload form-control" name="dp" accept="image/*" style="opacity:0; height:1px;">   -->
                                         <button type="button" class="w3-btn w3-small w3-orange w3-round-large w3-text-white" data-toggle="modal" data-target="#profileModal" onclick="uploadClick(this.previousElementSibling);">CHANGE PIC</button>
                                         <!-- <button id="" class="crop upload-result w3-btn w3-small w3-orange w3-round-large w3-text-white w3-hide">CROP</button> -->
                                      </div>
                                      <div class="col-xs-8">
                                         <div class="row w3-margin-bottom">
                                              <div class="col-xs-3">
                                                 <label class="w3-padding-0 text-right" for="month">First Name</label>
                                              </div> 
                                              <div class="col-xs-9">
                                                 <input type="text" class="form-control" name="ThirdPrize" placeholder="Enter First Name">
                                              </div>
                                         </div>
                                         <div class="row w3-margin-bottom">
                                              <div class="col-xs-3">
                                                 <label class="w3-padding-0 text-right" for="month">Last Name</label>
                                              </div> 
                                              <div class="col-xs-9">
                                                 <input type="text" class="form-control" name="ThirdPrize" placeholder="Enter Last Name">
                                              </div>
                                         </div>
                                         <div class="row w3-margin-bottom">
                                              <div class="col-xs-3">
                                                 <label class="w3-padding-0 text-right" for="month">Title</label>
                                              </div> 
                                              <div class="col-xs-9">
                                                 <input type="text" class="form-control" name="ThirdPrize" placeholder="Enter Title">
                                              </div>
                                         </div>
                                         <div class="row w3-margin-bottom">
                                              <div class="col-xs-3">
                                                 <label class="w3-padding-0 text-right" for="month">Business Unit</label>
                                              </div> 
                                              <div class="col-xs-9">
                                                 <input type="text" class="form-control" name="ThirdPrize" placeholder="Enter Business Unit">
                                              </div>
                                         </div>
                                       </div>
                                    </div> 
                                </div>
                              </div> 
                          </div>
                          <a href="javascript:appendForm();" class="w3-leftbar w3-border-grey w3-text-black w3-light-grey w3-small w3-padding-4 w3-hover-text-blue text-center w3-right col-md-3 col-sm-3 col-xs-3 w3-section"><strong class="w3-medium">+</strong>&nbsp;ADD<span class="hidden-xs">&nbsp;MORE STACKHOLDER</span></a>
                       </div> 
                    </div>

                    <div class="col-lg-12">
                       <div class="row breadcrumb w3-card-1 margin-0">
                          <label class="w3-padding-0 col-sm-2 w3-margin-bottom" for="month">Company Engagement</label>
                          <textarea class="form-control col-sm-10" name="caseChallenge" placeholder="Enter Company Engagement"></textarea>
                       </div> 
                    </div>

                    <div class="col-lg-12">
                       <div class="row breadcrumb1 1w3-card-1 w3-margin text-right w3-clear">
                        <div class="col-md-12">
                          <button class="w3-orange w3-btn w3-margin w3-round-large w3-text-white">CANCEL</button>
                          <!-- <button class="w3-orange w3-btn w3-margin w3-round-large w3-text-white">SAVE</button> -->
                          <button class="w3-orange w3-btn w3-margin w3-round-large w3-text-white">SAVE & PUBLISH</button> 
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

    <!-- profile Image Modal popup -->
            <div class="modal fade text-center" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModal" aria-hidden="true" style="position:fixed; z-index:999999999;">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background:transparent; box-shadow:0px 0px 0px 0px;">
                            <div class="modal-body w3-card-2 w3-blue" style="background:white; padding:0px; border-radius: 2px;"> 
                                <div>
                                    <div class="container-fluid" style="height:auto; padding:0px;">
                                            <div class="col-md-12 col-sm-12 col-xs-12 w3-blue text-center">
                                                <button type="button" class="close pull-left" data-dismiss="modal" aria-hidden="true"><p> </p>&times;</button>
                                                <div id="dp_div_stack" class="w3-round text-center w3-section w3-animate-opacity" style="display:block;">
                                                        <br/>
                                                        <img id="dp_stack" class="img-responsive img-circle center-block w3-text-black" src="" alt="&#x0D;&#x0A;&#x0D;&#x0A;No Pic" style="width:180px; height:180px; background:white; white-space:pre;">
                                                        <br/>
                                                </div>
                                                <div id="upload-demo_stack" class="text-center w3-hide w3-animate-opacity">
                                                        
                                                </div>
                                                <div class="form-group">
                                                    <input id="upload_stack" type="file" class="form-control" name="dp" accept="image/*" style="opacity:0; height:1px;">  
                                                    <button type="button" class="w3-btn w3-small w3-orange w3-round-large w3-text-white" onclick="this.previousElementSibling.click();">CHANGE PIC</button>
                                                    <button id="crop_stack" class="upload-result w3-btn w3-small w3-orange w3-round-large w3-text-white w3-hide">CROP</button>
                                                    <button id="done_stack" class="upload-result w3-btn w3-small w3-orange w3-round-large w3-text-white w3-hide" data-dismiss="modal" onclick="doneAct();">DONE</button>
                                                </div>

                                            </div>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>  
            <!-- profile Image Modal popup -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript" src="js/croppie.min.js"></script>

    <script type="text/javascript">

      var $curStack, $curStackSrc;

      $('#dp_id, .stackDp_id').on('change', function (e) { 
            var ext = this.value.match(/\.([^\.]+)$/)[1];
            switch(ext)
            {
                case 'jpeg':
                case 'jpg':
                case 'gif':
                case 'bmp':
                case 'png':
                case 'tif':
                    // alert('allowed');
                    break;
                default:
                    alert('invalid file type');
                    this.value='';
            }

      });

           
      function popupResult(result) {
        var html;
        if (result.html) {
          html = result.html; 
        }
        if (result.src) {
          html = '<img  src="' + result.src + '" />';
        }

        $('#dp').attr('src',result.src);
        $('#dp').removeClass('w3-hide');
        $('#upload-demo,#crop').addClass('w3-hide');
        $('#dp_div').removeClass('w3-hide');

      }

      function stack_popupResult(result) {
        var html;
        if (result.html) {
          html = result.html; 
        }
        if (result.src) {
          html = '<img  src="' + result.src + '" />';
        }

        $curStackSrc = result.src;
        $('#dp_stack').attr('src',result.src);
        $('#dp_stack, #done_stack').removeClass('w3-hide');
        $('#upload-demo_stack,#crop_stack').addClass('w3-hide');
        $('#dp_div_stack').removeClass('w3-hide');

      }

      style = '<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" /> <link rel="stylesheet" href="css/croppie.css">';


      $(document).ready(function(){
        $('head').append(style);


        var skills = ["Accounting", "Advertising", "Brand Strategy", "Business Development", "C-Level Presentations", "Change Management", "Consumer Banking", "Consumer Behavior", "Consumer Products & Goods", "Copy Writing", "CPA", "Creative Writing", "Customer Acquisition", "Data Analysis", "Ecommerce", "Economics", "Editing", "Engineering", "Equity Research", "Finance", "Financial Accounting", "Financial Modeling", "Financial Reporting", "Graphic Design", "Healthcare", "Hospitality", "HR Expertise", "International experience", "Lawyer", "Leadership", "Lean Manufacturing", "Litigation", "Luxury", "Management Consulting", "Manufacturing", "Marketing", "MD", "Microsoft Excel", "Microsoft PowerPoint", "Microsoft Word", "MPH", "Negotiations", "Non-Profit", "Operations", "Organizational Behavior", "Product Management", "Project Management", "Public Relations", "Public Speaking", "Quality Assurance", "R&D", "Real Estate", "Research", "Retail", "Sales", "Six SIgma", "Social Impact", "Social Media", "Software Development", "Start-ups", "Statistical Analysis", "Strategy", "Strategy/Consulting", "UX/UI", "Valuation", "Video/Editing", "Web Design", "Writing" ];
        
        skills.sort();

        skills = $.unique(skills);
        $("#skills").select2({
          placeholder: "ADD SKILLS",
          multiple: true,
          data: skills,
          tags: true,
          maximumSelectionLength: 6,
          allowClear: true,
          
          
          
        }).val(["Business Development","Accounting"]).trigger("change");

        $('select:not(#skills)').wrap('<div class="select-wrapper"></div>');
        $('.select-wrapper').append('<div class="next-icon"><i class="fa fa-angle-down"></i></div>');

         function alignModal(){
            var modalDialog = $(this).find(".modal-dialog");
            
                // Applying the top margin on modal dialog to align it vertically center
                modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
            }

            //Align modal when it is displayed
            $(".modal").on("shown.bs.modal", alignModal);

        var $uploadCrop, $uploadCrop4stack ;

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
            width: 960,
            height: 422,
            type: 'square'
          },
          boundary: {
            width: 960,
            height: 422
          },
          //exif: true
        });

        $('#upload').on('change', function () { readFile(this); });
        $('#crop').on('click', function (ev) { 
          $uploadCrop.croppie('result', {
            type: 'canvas',
            size: {
                width: 960,
                height: 422
            },
            format: 'jpeg'
          }).then(function (resp) {
            popupResult({
              src: resp
            });
          });
        });


      //for stackholder
      function stack_readFile(input) {
          $('#upload-demo_stack,#crop_stack').removeClass('w3-hide');
          $('#dp_div_stack').addClass('w3-hide');

          if (input.files && input.files[0]) {
                  var reader = new FileReader();
                  
                  reader.onload = function (e) {
                    $uploadCrop4stack.croppie('bind', {
                      url: e.target.result
                    });
                    $('.upload-demo_stack').addClass('ready');
                  }
                  
                  reader.readAsDataURL(input.files[0]);
              }
              else {
                alert("Sorry - you're browser doesn't support the FileReader API");
            }
        }

        $uploadCrop4stack = $('#upload-demo_stack').croppie({
          viewport: {
            width: 180,
            height: 180,
            type: 'circle'
          },
          boundary: {
            width: 250,
            height: 250
          },
          //exif: true
        });

        $('#upload_stack').on('change', function () { stack_readFile(this); });
        $('#crop_stack').on('click', function (ev) { 
          $uploadCrop4stack.croppie('result', {
            type: 'canvas',
            size: {
                width:450,
                height:450
            },
            format: 'jpeg'
          }).then(function (resp) {
            stack_popupResult({
              src: resp
            });
          });
        });

      }); //for stackholder
      

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

      function appendForm() {
          form = '<div class="w3-margin-top w3-animate-opacity w3-light-grey w3-padding"><label class="w3-padding-0 w3-margin-bottom" for="month">Stakeholder Details</label><a href="#" title="Remove This Stackholder" class="removeThis pull-right"><h4><i class="fa fa-times-circle"></i></h4></a><div class="form-group"><div class="w3-row"><div class="col-xs-4 text-center"><div id="" class="stackDp_div w3-round text-center w3-section w3-animate-opacity" style="display:block"><img class="img-responsive center-block img-circle w3-margin-bottom stackDp w3-text-white" src="" alt="&#x0D;&#x0A;&#x0D;&#x0A;No Pic" style="width:180px;height:180px;background:#4a90e2;white-space:pre"></div><button type="button" class="w3-btn w3-small w3-orange w3-round-large w3-text-white" data-toggle="modal" data-target="#profileModal" onclick="uploadClick(this.previousElementSibling)">CHANGE PIC</button></div><div class="col-xs-8"><div class="row w3-margin-bottom"><div class="col-xs-3"><label class="w3-padding-0 text-right" for="month">First Name</label></div><div class="col-xs-9"><input type="text" class="form-control" name="ThirdPrize" placeholder="Enter First Name"></div></div><div class="row w3-margin-bottom"><div class="col-xs-3"><label class="w3-padding-0 text-right" for="month">Last Name</label></div><div class="col-xs-9"><input type="text" class="form-control" name="ThirdPrize" placeholder="Enter Last Name"></div></div><div class="row w3-margin-bottom"><div class="col-xs-3"><label class="w3-padding-0 text-right" for="month">Title</label></div><div class="col-xs-9"><input type="text" class="form-control" name="ThirdPrize" placeholder="Enter Title"></div></div><div class="row w3-margin-bottom"><div class="col-xs-3"><label class="w3-padding-0 text-right" for="month">Business Unit</label></div><div class="col-xs-9"><input type="text" class="form-control" name="ThirdPrize" placeholder="Enter Business Unit"></div></div></div></div></div></div>';
         $('#formContainer').append(form); 
         $(".removeThis").off("click");
          $(".removeThis").on("click",function (e) {
              e.preventDefault();
              $(this).parent().remove();
          });
      }

      function uploadClick(argument) {
           $curStack = $(argument).find('.stackDp');
           $('#dp_stack').attr('src',$curStack.attr('src'));
      }

      function doneAct() {
           $curStack.attr('src',$curStackSrc);
           $('#done_stack').addClass('w3-hide');
      }
      // function removeThis(argument) {
      //   alert($(argument).parent().text());
      //   $(argument).parent().remove();
      // }

    </script>
</body>

</html>
