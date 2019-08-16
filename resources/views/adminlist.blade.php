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
                    <h4 class="page-title">Administrators List</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Administrators</li>
                            </ol>
                        </nav>
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
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-12 col-xl-9 col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center m-b-30">
                                <h4 class="card-title">All Administrators</h4>
                                <div class="ml-auto">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#createmodel">
                                            Create New Admin
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="file_export" class="table table-bordered nowrap display">
                                    <thead>
                                    <tr>
                                        <th>Names</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Role</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($admin as $item)

                                        <tr>
                                            <td> <img src="{{asset("assets/images/users/1.jpg")}}" alt="user" class="rounded-circle" width="30" /> {{$item->full_names}} </td>
                                            <td> {{$item->email}} </td>
                                            <td> {{$item->status}} </td>
                                            <td> {{$item->role}} </td>
                                            <td> {{$item->created_at}} </td>
                                            <td>


                                                <a href="#" class="edit-modal btn btn-warning btn-sm" data-toggle="modal" data-target="#edit" data-id="{{$item->id}}" data-name="{{$item->full_names}}"  data-email="{{$item->email}}"   data-created="{{$item->created_at}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#" class="delete-modal btn btn-danger btn-sm" data-toggle="modal" data-target="#delete" data-id="{{$item->id}}">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    @endforeach




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <!-- Column -->
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- Share Modal -->
        <div class="modal fade" id="Sharemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-auto-fix m-r-10"></i> Share With</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
                                <input type="text" class="form-control" placeholder="Enter Name Here" aria-label="Username">
                            </div>
                            <div class="row">
                                <div class="col-3 text-center">
                                    <a href="#Whatsapp" class="text-success">
                                        <i class="display-6 mdi mdi-whatsapp"></i><br><span class="text-muted">Whatsapp</span>
                                    </a>
                                </div>
                                <div class="col-3 text-center">
                                    <a href="#Facebook" class="text-info">
                                        <i class="display-6 mdi mdi-facebook"></i><br><span class="text-muted">Facebook</span>
                                    </a>
                                </div>
                                <div class="col-3 text-center">
                                    <a href="#Instagram" class="text-danger">
                                        <i class="display-6 mdi mdi-instagram"></i><br><span class="text-muted">Instagram</span>
                                    </a>
                                </div>
                                <div class="col-3 text-center">
                                    <a href="#Skype" class="text-cyan">
                                        <i class="display-6 mdi mdi-skype"></i><br><span class="text-muted">Skype</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Create Modal -->
        <div class="modal fade" id="createmodel" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="POST" action="{{url("/admin/add")}}">

                        {{ csrf_field() }}

                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel"><i class="ti-marker-alt m-r-10"></i> Create New Administrator</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
                                <input type="text" name="fullnames" class="form-control" placeholder="Enter Name Here" aria-label="name" required>
                            </div>
                            <div class="input-group mb-3">
                                <button type="button" class="btn btn-info"><i class="ti-email text-white"></i></button>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email Here" aria-label="no" required>
                            </div>
                            <div class="input-group mb-3">
                                <button type="button" class="btn btn-info"><i class="ti-lock text-white"></i></button>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password Here" aria-label="no" required>
                            </div>
                            <div class="input-group mb-3">
                                <button type="button" class="btn btn-info"><i class="ti-more text-white"></i></button>
                                <select name="status" class="form-control" id="exampleFormControlSelect1" required>
                                    <option value="enable">Enable</option>
                                    <option value="disable">Disable</option>
                                </select>


                            </div>
                            <div class="input-group mb-3">
                                <button type="button" class="btn btn-info"><i class="ti-more text-white"></i></button>
                                <select name="role" class="form-control" id="exampleFormControlSelect1" required>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>


                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success"><i class="ti-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="POST" action="{{url("/admin/edit")}}">

                        {{ csrf_field() }}

                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel"><i class="ti-marker-alt m-r-10"></i> Edit Info</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <input type="hidden" id="editid" name="editid"/>

                            <div class="input-group mb-3">
                                <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
                                <input type="text" id="editfullnames" name="editfullnames" class="form-control" placeholder="Enter Name Here" aria-label="name" required>
                            </div>
                            <div class="input-group mb-3">
                                <button type="button" class="btn btn-info"><i class="ti-email text-white"></i></button>
                                <input type="email" id="editemail" name="editemail" class="form-control" placeholder="Enter Email Here" aria-label="no" required>
                            </div>

                            <div class="input-group mb-3">
                                <button type="button" class="btn btn-info"><i class="ti-more text-white"></i></button>
                                <select id="editstatus" name="editstatus" class="form-control" id="exampleFormControlSelect1" required>
                                    <option value="enable">Enable</option>
                                    <option value="disable">Disable</option>
                                </select>


                            </div>
                            <div class="input-group mb-3">
                                <button type="button" class="btn btn-info"><i class="ti-more text-white"></i></button>
                                <select id="editrole" name="editrole" class="form-control" id="exampleFormControlSelect1" required>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>


                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success"><i class="ti-save"></i> Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="POST" action="{{url("/admin/delete")}}">

                        {{ csrf_field() }}

                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel"><i class="ti-marker-alt m-r-10"></i> </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <h3>Are you sure you want to delete?</h3>

                            <input type="hidden" id="deleteid" name="deleteid"/>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success"> Delete</button>
                        </div>
                    </form>
                </div>
            </div>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">


        $(document).on('click', '.edit-modal', function() {

            $('#editid').val($(this).data('id'));
            $('#editfullnames').val($(this).data('name'));
            $('#editemail').val($(this).data('email'));

        });

        // form Delete function
        $(document).on('click', '.delete-modal', function() {

            $('#fd').val($(this).data('id'));
            $('#deleteid').val($(this).data('id'));

        });


    </script>

    @include('vendor.sweetalert.cdn')
    @include('vendor.sweetalert.view')


@endsection