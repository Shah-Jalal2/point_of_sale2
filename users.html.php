<?php
include "header.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>Manage Users</h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i>Homepage</a></li>
                        <li class="breadcrumb-item active">Manage Users</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>





    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddUser">
                    Add User
                </button>
            </div>


            <div class="card-body">

                <div class="box">

                    <table class="table table-bordered table-striped table-responsive-sm mydatatable">      <!-- dt resposinve is from datatable-->

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>User</th>
                            <th>Picture</th>
                            <th>Profile</th>
                            <th>Status</th>
                            <th>Last Login</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Admin User</td>
                            <td>Admin</td>
                            <td><img src="" alt="admin image"></td>
                            <td>Adminastrator</td>
                            <td><button class="btn btn-success btn-xs">Activated</button></td>
                            <td>2020-11-25 12:05:32</td>
                            <td>

                                <div class="btn-group">

                                    <button class="btn btn-warning"><i class="fa fa-pen"></i></button>

                                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>


                                </div>

                            </td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>special User</td>
                            <td>Admin</td>
                            <td><img src="" alt="admin image"></td>
                            <td>Adminastrator</td>
                            <td><button class="btn btn-success btn-xs">Activated</button></td>
                            <td>2020-11-25 12:05:32</td>
                            <td>

                                <div class="btn-group">

                                    <button class="btn btn-warning"><i class="fa fa-pen"></i></button>

                                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>


                                </div>

                            </td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>seller User</td>
                            <td>Admin</td>
                            <td><img src="" alt="admin image"></td>
                            <td>Adminastrator</td>
                            <td><button class="btn btn-success btn-xs">Activated</button></td>
                            <td>2020-11-25 12:05:32</td>
                            <td>

                                <div class="btn-group">

                                    <button class="btn btn-warning"><i class="fa fa-pen"></i></button>

                                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>


                                </div>

                            </td>
                        </tr>
                        </tbody>

                    </table>


                </div>

            </div>

        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!-- Modal -->
<!-- Modal -->
<div id="modalAddUser" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <form role="form" method="post"enctype="multipart/form-data"></form>

            <!--====================================================================================================-->
            <!--                                        Modal Header            -->
            <!--==================================================================================================== -->

            <div class="modal-header" style="background: #3c8dbc; color: white;">

                <h4 class="modal-title">Add User</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!--====================================================================================================-->
            <!--                                        Modal Body          -->
            <!--==================================================================================================== -->

            <div class="modal-body">

                <div class="box-body">

                    <!--                    ENTRY FOR NAME-->

                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control input-lg" name="newName" placeholder="New Name" required>
                        </div>

                    </div>

                    <!--                    ENTRY FOR USER-->

                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="text" class="form-control input-lg" name="newUser" placeholder="New User" required>
                        </div>

                    </div>

                    <!--                    ENTRY FOR PASSWORD-->

                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control input-lg" name="newPassword" placeholder="New Password" required>
                        </div>

                    </div>

                    <!--                    ENTRY FOR SELECT PROFILE-->

                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                            </div>
                            <select class="form-control input-lg" name="newProfile">

                                <option value="">Select Profile</option>
                                <option value="Adminastrator">Adminastrator</option>
                                <option value="Special">Special</option>
                                <option value="Seller">Seller</option>

                            </select>
                        </div>

                    </div>

                    <!--                    ENTRY FOR PICTURE-->

                    <div class="form-group">

                        <div class="panel">Upload Picture</div>

                        <input type="file" id="newPicture" name="newPicture">

                        <p class="help-block">Maximum picture size 200MB </p>

                        <img src="dist/img/user/avatar.png" class="img-thumbnail" width="100px">

                    </div>

                </div>

            </div>

            <!--====================================================================================================-->
            <!--                                        Modal Footer            -->
            <!--==================================================================================================== -->

            <div class="modal-footer">

                <!--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->

                <button type="submit" class="btn btn-primary float-right">Save Changes</button>


            </div>

        </div>

    </div>
</div>





<!--====================================================================================================-->
<!--                                        Modal Add User End             -->
<!--==================================================================================================== -->










</div>

</form>



</div>

</div>


</div>

</div>
</div>





<!--====================================================================================================-->
<!--                                        Modal Add User End             -->
<!--==================================================================================================== -->



<?php
include "footer.php";
?>




