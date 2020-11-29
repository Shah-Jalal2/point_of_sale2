
<?php

include "header.php";

include "controllers/users.controller.php";


?>



<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
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
                            <th style="width: 10px">#</th>
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

                        <?php

                        include "connection.php";

                        $query = "SELECT * FROM users";
                        $result = mysqli_query($conn, $query);


                        while ($row = mysqli_fetch_assoc($result)){
                            ?>

                            <tr>
                                <td>1</td>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['user'] ?></td>
                                <td><img src="<?= $row['picture'] ?>" alt="" style="width: 50px; height: 50px;"></td>
                                <td><?= $row['profile'] ?></td>
                                <td><button class="btn btn-success btn-xs">Activated</button></td>
                                <td><?= $row['last_login'] ?></td>
                                <td>

                                    <div class="btn-group">

                                        <button class="btn btn-warning"><i class="fa fa-pen"></i></button>

                                        <button class="btn btn-danger"><i class="fa fa-times"></i></button>


                                    </div>

                                </td>
                            </tr>

                            <?php
                        }

                        ?>


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

            <!--            <form  method="post" action="" enctype="multipart/form-data"></form>-->

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

                    <form action="" method="post" enctype="multipart/form-data">


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

                            <input type="file" class="newPicture" name="newPicture">

                            <p class="help-block">Maximum picture size 200MB </p>

                            <img src="dist/img/user/avatar.png" class="img-thumbnail preview" width="100px">

                        </div>




                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="saveUser">Save User</button>
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



