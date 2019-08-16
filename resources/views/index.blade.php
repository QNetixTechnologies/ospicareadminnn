@extends ("container")

@section("title","home")

@section('body')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Summary</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex no-block justify-content-end align-items-center">
                        <div class="m-r-10">
                            <div class="lastmonth"></div>
                        </div>
                        <div class=""><small>LAST MONTH</small>
                            <h4 class="text-info m-b-0 font-medium">N580256</h4></div>
                    </div>
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
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Sales Summary</h4>
                                    <h5 class="card-subtitle">Overview</h5>
                                </div>
                                <div class="ml-auto d-flex no-block align-items-center">
                                    <ul class="list-inline font-12 dl m-r-15 m-b-0">
                                        <li class="list-inline-item text-info"><i class="fa fa-circle"></i> Doctor</li>
                                        <li class="list-inline-item text-primary"><i class="fa fa-circle"></i> User</li>
                                    </ul>
                                    <!--<div class="dl">
                                        <select class="custom-select">
                                            <option value="0" selected>Monthly</option>
                                            <option value="1">Daily</option>
                                            <option value="2">Weekly</option>
                                            <option value="3">Yearly</option>
                                        </select>
                                    </div>-->
                                </div>
                            </div>
                            <div class="row">
                                <!-- column -->
                                <div class="col-lg-4">
                                    <h1 class="m-b-0 m-t-30">N69890.68</h1>
                                    <h6 class="font-light text-muted">Total Sales</h6>
                                    <h3 class="m-t-30 m-b-0">N1540</h3>
                                    <h6 class="font-light text-muted">Current Month Sales</h6>
                                    <a class="btn btn-info m-t-20 p-15 p-l-25 p-r-25 m-b-20" href="javascript:void(0)">View Detail Report</a>
                                </div>
                                <!-- column -->
                                <div class="col-lg-8">
                                    <div class="campaign ct-charts"></div>
                                </div>
                                <!-- column -->
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Info Box -->
                        <!-- ============================================================== -->
                        <div class="card-body border-top">
                            <div class="row m-b-0">
                                <!-- col -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10"><span class="text-orange display-5"><i class="mdi mdi-wallet"></i></span></div>
                                        <div><span>Today's Transaction</span>
                                            <h3 class="font-medium m-b-0">N398567.53</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <!-- col -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10"><span class="text-cyan display-5"><i class="mdi mdi-currency-ngn"></i></span></div>
                                        <div><span>Total Transaction</span>
                                            <h3 class="font-medium m-b-0">$769.08</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <!-- col -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10"><span class="text-info display-5"><i class="mdi mdi-currency-ngn"></i></span></div>
                                        <div><span>This Month's Transaction</span>
                                            <h3 class="font-medium m-b-0">N885489</h3></div>
                                    </div>
                                </div>
                                <!-- col -->
                                <!-- col -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10"><span class="text-primary display-5"><i class="mdi mdi-currency-ngn"></i></span></div>
                                        <div><span>Total Transaction</span>
                                            <h3 class="font-medium m-b-0">N394744</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Email campaign chart -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-8 col-xl-6">
                    <div class="card card-hover">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Payment Success Rate</h4>
                                    <h5 class="card-subtitle">Overview of Payment Rate</h5>
                                </div>

                            </div>
                            <!-- column -->
                            <div class="row m-t-40">
                                <!-- column -->
                                <div class="col-lg-6">
                                    <div id="visitor" style="height:290px; width:100%;" class="m-t-20"></div>
                                </div>
                                <!-- column -->
                                <div class="col-lg-6">
                                    <h1 class="display-6 m-b-0 font-medium">100%</h1>
                                    <span>Success Rate</span>
                                    <ul class="list-style-none">
                                        <li class="m-t-20"><i class="fas fa-circle m-r-5 text-cyan font-12"></i> Payment Success <span class="float-right">85%</span></li>
                                        <li class="m-t-20"><i class="fas fa-circle m-r-5 text-info font-12"></i> Payment Failure <span class="float-right">15%</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- column -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-6">
                    <div class="card card-hover">
                        <div class="card-body" style="background:url(../../assets/images/background/active-bg.png) no-repeat top center;">
                            <div class="p-t-20 text-center">
                                <i class="mdi mdi-account-multiple display-4 text-orange d-block"></i>
                                <span class="display-4 d-block font-medium">368</span>
                                <span>Total Users On Platform</span>
                                <!-- Progress -->
                                <div class="progress m-t-40" style="height:4px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-orange" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!-- Progress -->
                                <!-- row -->
                                <div class="row m-t-30 m-b-20">
                                    <!-- column -->
                                    <div class="col-6 border-right text-left">
                                        <h3 class="m-b-0 font-medium">123444</h3>Doctors</div>
                                    <!-- column -->
                                    <div class="col-6 border-right">
                                        <h3 class="m-b-0 font-medium">800000</h3>Users</div>

                                </div>
                                <a href="javascript:void(0)" class="waves-effect waves-light m-t-20 btn btn-lg btn-info accent-4 m-b-20">View More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Email campaign chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Ravenue - page-view-bounce rate -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Ravenue - page-view-bounce rate -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Table -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Table -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved. <a href="">Ospicare</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>






@endsection