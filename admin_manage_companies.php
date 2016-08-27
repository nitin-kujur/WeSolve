<!DOCTYPE html>
<html lang="en">

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
      #page-wrapper{
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
        z-index: 9999;
        background: url(../images/Preloader_3.gif) center no-repeat #fff;
      }
      a, a:active, a:focus{
        outline: none !important;
        text-decoration: none !important;
      }
    </style>
</head>

<body>

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
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#company"><i class="fa fa-fw fa-arrows-v"></i> <i class="fa fa-building"></i> Companies <span><i class="fa fa-fw fa-caret-up pull-right"></i></span></a>
                        <ul id="company" class="collapse in">
                            <li>
                                <a href="admin_add_company.php"><i class="fa fa-fw fa-plus"></i> Add Company</a>
                            </li>
                            <li>
                                <a class="current-active" href="admin_manage_companies.php"><i class="fa fa-fw fa-gear"></i> Manage Companies</a>
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
                            Companies
                            <small>Manage Companies</small>
                        </h1>
                        <ol class="breadcrumb w3-card-1">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin_dashboard.php">Dashboard</a>
                            </li>
                            <li>
                                <i class="fa fa-tasks"></i>  Companies
                            </li>
                            <li class="active">
                                <i class="fa fa-gear"></i> Manage Companies
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row heading-->

                <!-- Page Body -->
                <div class="row text-center" style='color:gray; white-space: nowrap; display:block;'>
                    <form class="form-horizontal" role="form" method="POST">

                    <div class="col-lg-12" style='color:black;'>
                      <div class="row breadcrumb w3-card-11 margin-0" style="background-color:transparent;">
                         <div class="col-md-12">
                             <li><strong>Showing 10 of 50</strong></li>
                         </div>
                      </div>
                    </div>

                    <div class="col-lg-12" style='color:dark-gray;'>
                      <div class="row breadcrumb w3-card-1 margin-0">
                        <div class="col-md-1">
                          <li><strong>Sr. No.</strong></li>  
                        </div>
                        <div class="col-md-2">
                           <li><strong>Company Name</strong></li> 
                        </div>
                        <div class="col-md-2">
                           <li><strong>Company Location</strong></li> 
                        </div>
                        <div class="col-md-3">
                           <li><strong>Challenges Uploaded</strong></li> 
                        </div>
                        <div class="col-md-2">
                           <li><strong>Challenges Active</strong></li> 
                        </div>
                        <div class="col-md-2">
                           <li><strong>Action</strong></li> 
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="row breadcrumb w3-card-1 margin-0">
                        <div class="col-md-1">
                          <li>01.</li>  
                        </div>
                        <div class="col-md-2">
                           <li>Tesla Morters</li> 
                        </div>
                        <div class="col-md-2">
                           <li>San francisco, CA</li> 
                        </div>
                        <div class="col-md-3">
                           <li>10</li> 
                        </div>
                        <div class="col-md-2">
                           <li>05</li> 
                        </div>
                        <div class="col-md-2">
                           <li><a href="#">Edit</a> / <a href="#">Remove</a> / <a href="#">UnPublish</a></li> 
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="row breadcrumb w3-card-1 margin-0">
                        <div class="col-md-1">
                          <li>02.</li>  
                        </div>
                        <div class="col-md-2">
                           <li>Junc Foods</li> 
                        </div>
                        <div class="col-md-2">
                           <li>Corn City, IL</li> 
                        </div>
                        <div class="col-md-3">
                           <li>02</li> 
                        </div>
                        <div class="col-md-2">
                           <li>02</li> 
                        </div>
                        <div class="col-md-2">
                           <li><a href="#">Edit</a> / <a href="#">Remove</a> / <a href="#">Publish</a></li> 
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="row breadcrumb w3-card-1 margin-0">
                        <div class="col-md-1">
                          <li>03.</li>  
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-3">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="row breadcrumb w3-card-1 margin-0">
                        <div class="col-md-1">
                          <li>04.</li>  
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-3">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="row breadcrumb w3-card-1 margin-0">
                        <div class="col-md-1">
                          <li>05.</li>  
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-3">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="row breadcrumb w3-card-1 margin-0">
                        <div class="col-md-1">
                          <li>06.</li>  
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-3">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="row breadcrumb w3-card-1 margin-0">
                        <div class="col-md-1">
                          <li>07.</li>  
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-3">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="row breadcrumb w3-card-1 margin-0">
                        <div class="col-md-1">
                          <li>08.</li>  
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-3">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="row breadcrumb w3-card-1 margin-0">
                        <div class="col-md-1">
                          <li>09.</li>  
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-3">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="row breadcrumb w3-card-1 margin-0">
                        <div class="col-md-1">
                          <li>10.</li>  
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-3">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                        <div class="col-md-2">
                           <li></li> 
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="row breadcrumb1 w3-card-11 margin-0">
                         <ul class="pagination">
                          <li class="disabled"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
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

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script type="text/javascript">
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