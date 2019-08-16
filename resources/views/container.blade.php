
<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/images/favicon.png")}}">
    <title>Ospicare</title>
    <!-- Custom CSS -->
    <link href="{{asset("assets/libs/chartist/dist/chartist.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/extra-libs/c3/c3.min.css")}}" rel="stylesheet">


    <link href="{{asset("editor/editor.css")}}" type="text/css" rel="stylesheet"/>


    <link href="{{asset("assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css")}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset("dist/css/style.min.css")}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="index.html">
                    <!--<b class="logo-icon">
                        <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                        <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                    </b>-->
                    <span class="logo-text">
                             <!--<img src="../../assets/images/logo-text.png" alt="Retopa" class="dark-logo" />
                             <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="Retopa" />-->
                             <h3>Ospicare</h3>
                        </span>
                </a>
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->

                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset("assets/images/users/1.jpg")}}" alt="user" class="rounded-circle" width="31"></a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <span class="with-arrow"><span class="bg-primary"></span></span>
                            <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                <div class=""><img src="{{asset("assets/images/users/1.jpg")}}" alt="user" class="img-circle" width="60"></div>
                                <div class="m-l-10">
                                    <h4 class="m-b-0">Steave Jobs</h4>
                                    <p class=" m-b-0">varun@gmail.com</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-lock m-r-5 m-l-5"></i>  Change Password</a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
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
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
                    <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Personal</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{url("index")}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Summary </span></a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Admin</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link two-column has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Admin </span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="{{url("admin/list")}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Admin List </span></a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap"><i class="mdi mdi-account-multiple"></i> <span class="hide-menu">Users</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Users </span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"><a href="{{url("/user/list")}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> All Users</span></a></li>
                            <li class="sidebar-item"><a href="{{url("doctor/list")}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Doctors</span></a></li>
                            <li class="sidebar-item"><a href="{{url("")}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Search</span></a></li>
                        </ul>
                    </li>


                    <li class="nav-small-cap"><i class="mdi mdi-message"></i> <span class="hide-menu">Message</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-message"></i><span class="hide-menu"> Message</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url("/message/post")}}" aria-expanded="false"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Send Message</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/message/show')}}" aria-expanded="false"><i class="mdi mdi-adjust"></i><span class="hide-menu">Show Messages</span></a></li>

                        </ul>
                    </li>

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
@section('body')
@show
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- customizer Panel -->
<!-- ============================================================== -->

<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset("assets/libs/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset("assets/libs/popper.js/dist/umd/popper.min.js")}}"></script>
<script src="{{asset("assets/libs/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<!-- apps -->
<script src="{{asset("dist/js/app.min.js")}}"></script>
<script src="{{asset("dist/js/app.init.horizontal-fullwidth.js")}}"></script>
<script src="{{asset("dist/js/app-style-switcher.horizontal.js")}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset("assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js")}}"></script>
<script src="{{asset("assets/extra-libs/sparkline/sparkline.js")}}"></script>
<!--Wave Effects -->
<script src="{{asset("dist/js/waves.js")}}"></script>
<!--Menu sidebar -->
<script src="{{asset("dist/js/sidebarmenu.js")}}"></script>
<!--Custom JavaScript -->
<script src="{{asset("dist/js/custom.min.js")}}"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="{{asset("assets/libs/chartist/dist/chartist.min.js")}}"></script>
<script src="{{asset("assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js")}}"></script>
<!--c3 charts -->
<script src="{{asset("assets/extra-libs/c3/d3.min.js")}}"></script>
<script src="{{asset("assets/extra-libs/c3/c3.min.js")}}"></script>
<!--chartjs -->
<script src="{{asset("assets/libs/chart.js/dist/Chart.min.html")}}"></script>
<script src="{{asset("dist/js/pages/dashboards/dashboard1.js")}}"></script>

<!--This page plugins -->
<script src="{{asset("assets/extra-libs/DataTables/datatables.min.js")}}"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="{{asset("dist/js/pages/datatable/datatable-advanced.init.js")}}"></script>
<script src="{{asset("editor/editor.js")}}"></script>

</body>


</html>