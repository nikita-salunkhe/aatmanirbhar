
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <title>Abhyuday</title>
    <!-- Custom CSS -->
    <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
  body{
    margin:0;
    padding:0;
    position:relative;
  }

.jumboplay{

  text-align:center;
  background-image: url("navimg3.jpg");
  background-size:100% 100%;
  margin:0px auto;
}

#jumbobox{
  background-image: url("homepage.png");
  background-size:100% 100%;
  height:300px;

}

#user_image{
  float:left;
  height:120px;
  width:120px;
  border-radius:50%;
  background-image:url("auct_farmer.jpg");
  background-size: 100% 100%;
  margin-left:50px;
  opacity:75%;
}
.user_data{
  margin-top:90px;
}

#bidders{
  float:left;
  height:800px;
  width:250px;
  margin-top:300px;
  background-color: darkblue;
  opacity:20%;
}

</style>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon
                            <img src="../../assets/images/wd.png" alt="homepage" width="50" class="light-logo" />-->

                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <h2>Abhyuday</h2>

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">

                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="d-none d-md-block">Courses<i class="fa fa-angle-down"></i></span>
                             <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="courses.html">For Blind</a>
                                <a class="dropdown-item" href="#">For Deaf</a>

                                <a class="dropdown-item" href="#">For Dumd</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-home font-24"></i>
                            </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="courses.html" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-book-multiple-variant"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                             <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Couses for Deaf</h5>

                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top" href="courses.html">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Couses for Blind</h5>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Courses for Dump</h5>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Courses for Handicapped</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class ="fa fa-envelope"></i></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">

                              <a class="dropdown-item" href="javascript:void(0)">Bi-embedly suits acoording for bio</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="javascript:void(0)">excel suits for bio</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="javascript:void(0)">tata suits for bio</a>
                              <div class="dropdown-divider"></div>


                            </div>
                        </li>

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
            </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                      <div id="user_image"></div>

                      <div class="user_data"></div>
                      <div id="user_id"></div>
                      <br>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="indx.html" aria-expanded="false"><span class="hide-menu"></span></a></li>
                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="indx.html" aria-expanded="false"><span class="hide-menu">Rushikesh Kulkarni</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Home</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="quiz.html" aria-expanded="false"><i class="mdi  mdi-pen"></i><span class="hide-menu">Exams</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="jobs.html" aria-expanded="false"><i class="mdi mdi-laptop"></i><span class="hide-menu">Job Portal</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="personal.php" aria-expanded="false"><i class="ti-user m-r-5 m"></i><span class="hide-menu">Personal info</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="education.php" aria-expanded="false"><i class="mdi mdi-laptop"></i><span class="hide-menu">Education info</span></a></li>



                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h3 class="page-title">Dashboard</h3>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
              <br>
              <br>
              <br>
              <h2><span class="rounded-circle"><i class="fa  user-circle" aria-hidden="true"></i></span> My Enrolled Courses </h2>

              <hr>
              <br>
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                  <!-- Column -->
                  <div class="col-md-6 col-lg-4 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-cyan text-center"style="height: 20rem;">

                            <h3 class="text-white">Indian Sign Language</h3>
                            <hr style="background-color : white;">
                            <img src="https://static.wixstatic.com/media/903056_b835b08d2ca04e6e8ab4ec920f2df927~mv2.jpg/v1/fit/w_290,h_174,al_c,q_80/file.png" class="card-img-top" alt="...">
                            <div class="footer">


                                <br>
                                <br>
                                <a class="btn btn-info btn" href="play_video.php" name ="resume">Resume</a>


                            </div>
                        </div>

                      </div>
                  </div>
                  <!-- Column -->
                  <div class="col-md-6 col-lg-4 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-cyan text-center"style="height: 20rem;">

                            <h4 class="text-white">Course Name</h4>
                            <hr style="background-color : white;">
                            <div class="footer">
                                <center><span class="text-white">Launched on: April 14, 2019</span>
                                <br>
                                <br>
                                <a class="btn btn-info btn" href="play_video.php" name ="resume">Resume</a>
                              </center>

                            </div>
                        </div>
                      </div>
                  </div>
                  <!-- Column -->
                  <!-- Column -->

                </div>

                  <br>
                  <br>
                  <br>
                  <br>
                    <h2><span class="rounded-circle"><i class="fa  user-circle" aria-hidden="true"></i></span> My exams </h2>

                  <div class="row">
                   <!-- Column -->

                   <div class="col-md-6 col-lg-4 col-xlg-3">
                       <div class="card card-hover" >
                           <div class="box bg-cyan text-center"style="height: 20rem;">

                               <h3 class="text-white">Braille</h3>
                               <hr style="background-color : white;">
                               <img src="https://www.perkinselearning.org/sites/elearning.perkinsdev1.org/files/styles/scale_only_519x374/public/brailleblaster.jpg?itok=pEgLBrJ-" class="card-img-top" alt="...">

                                 <div class="footer">
                                   <br>
                                    <a class="btn btn-info btn" href="play_video.php" name ="resume">Resume</a>


                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- Column -->
                   <div class="col-md-6 col-lg-4 col-xlg-3">
                       <div class="card card-hover">
                         <div class="box bg-cyan text-center"style="height: 20rem;">

                             <h4 class="text-white">Python</h4>
                             <hr style="background-color : white;">
                             <img src="https://m.hindustantimes.com/rf/image_size_444x250/HT/p2/2020/06/30/Pictures/_867e0040-baa5-11ea-8df8-49382d26f353.jpg" class="card-img-top" alt="...">
                             <div class="footer">

                                 <br>
                                 <br>
                                  <a class="btn btn-info btn" href="play_video.php" name ="resume">Resume</a>
                               </center>

                             </div>
                         </div>
                       </div>
                   </div>
                    <!-- Column -->

                 </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="row">
                      <!-- Column -->
                      <div class="col-md-6 col-lg-4 col-xlg-3">
                          <div class="card card-hover">
                            <div class="box bg-cyan text-center"style="height: 20rem;">

                                <h3 class="text-white">Indian Sign Language</h3>
                                <hr style="background-color : white;">
                                <img src="https://static.wixstatic.com/media/903056_b835b08d2ca04e6e8ab4ec920f2df927~mv2.jpg/v1/fit/w_290,h_174,al_c,q_80/file.png" class="card-img-top" alt="...">
                                <div class="footer">


                                    <br>
                                    <br>
                                    <a class="btn btn-info btn" href="play_video.php" name ="resume">Resume</a>


                                </div>
                            </div>

                          </div>
                      </div>
                      <!-- Column -->
                      <div class="col-md-6 col-lg-4 col-xlg-3">
                          <div class="card card-hover">
                            <div class="box bg-cyan text-center"style="height: 20rem;">

                                <h4 class="text-white">Course Name</h4>
                                <hr style="background-color : white;">
                                <div class="footer">
                                    <center><span class="text-white">Launched on: April 14, 2019</span>
                                    <br>
                                    <br>
                                    <a class="btn btn-info btn" href="play_video.php" name ="resume">Resume</a>
                                  </center>

                                </div>
                            </div>
                          </div>
                      </div>
                      <!-- Column -->
                      <!-- Column -->

                    </div>
                    <!-- Column -->

                     <!-- Column -->

                    <!-- Column -->
                    <!-- card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-0">Progress Box</h4>
                            <div class="m-t-20">
                                <div class="d-flex no-block align-items-center">
                                    <span>81% Python</span>
                                    <div class="ml-auto">
                                        <span>125</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 81%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex no-block align-items-center m-t-25">
                                    <span>72% Braille Blaster</span>
                                    <div class="ml-auto">
                                        <span>120</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 72%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex no-block align-items-center m-t-25">
                                    <span>53% Indian Sign Language</span>
                                    <div class="ml-auto">
                                        <span>785</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 53%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex no-block align-items-center m-t-25">
                                    <span>3% Others</span>
                                    <div class="ml-auto">
                                        <span>8</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 3%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                </div>
                <br>
                <br>
                <br>
                </div>

          </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../../assets/libs/flot/excanvas.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>
