
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
                                <td>

                                    <?php
                                        if($row['status'] == 1) {
                                            ?>
                                            <button class="btn btn-success btn-xs">Activated</button>
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <button class="btn btn-danger btn-xs">Deactivated</button>
                                            <?php
                                        }
                                    ?>


                                </td>
                                <td><?= $row['last_login'] ?></td>
                                <td>

                                    <div class="btn-group">

                                        <button class="btn btn-warning btnEditUser" data-toggle="modal" data-target="#modalEditUser-<?= $row['id'] ?>"><i class="fa fa-pen"></i></button>

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




<!--====================================================================================================-->
<!--                                        Modal Add User             -->
<!--==================================================================================================== -->

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





<!--====================================================================================================-->
<!--                                        Modal Edit User            -->
<!--==================================================================================================== -->


<?php

include "connection.php";

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);


while ($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $query = "SELECT * FROM users WHERE `id` = '$id'";
    $user_info = mysqli_query($conn, $query);
    $editUserInfo = mysqli_fetch_assoc($user_info);
?>


<!-- Modal -->
<div id="modalEditUser-<?= $row['id'] ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <!--            <form  method="post" action="" enctype="multipart/form-data"></form>-->

            <!--====================================================================================================-->
            <!--                                        Modal Header            -->
            <!--==================================================================================================== -->

            <div class="modal-header" style="background: #3c8dbc; color: white;">

                <h4 class="modal-title">Edit User</h4>

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
                                <input type="text" class="form-control input-lg" name="editName" value="<?= $editUserInfo['name'] ?>" required>
                                <input type="hidden" class="form-control" name="id"  value="<?= $editUserInfo['id'] ?>" required>    <!--HIDDEN ID PASS-->
                            </div>

                        </div>

                        <!--                    ENTRY FOR USER-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="text" class="form-control input-lg" name="editUser" value="<?= $editUserInfo['user'] ?>" required>
                            </div>

                        </div>

                        <!--                    ENTRY FOR PASSWORD-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control input-lg" name="editPassword" placeholder="Write a New Password" required>
                            </div>

                        </div>

                        <!--                    ENTRY FOR SELECT PROFILE-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-users"></i></span>
                                </div>
                                <select class="form-control input-lg" name="editProfile" >

                                    <option value="" id="editProfile"><?= $editUserInfo['profile'] ?></option>
                                    <option value="Adminastrator">Adminastrator</option>
                                    <option value="Special">Special</option>
                                    <option value="Seller">Seller</option>

                                </select>
                            </div>

                        </div>

                        <!--                    ENTRY FOR PICTURE-->

                        <div class="form-group">

                            <div class="panel">Upload Picture</div>

                            <input type="file" class="newPicture" name="editPicture">

                            <p class="help-block">Maximum picture size 200MB </p>

                            <img src="<?= $editUserInfo['picture'] ?>" class="img-thumbnail preview" width="100px">
                            <input type="hidden" name="currentPicture" id="currentPicture">

                        </div>




                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="updatetUser">Update User</button>
                        </div>

                    </form>
                </div>

            </div>



        </div>
    </div>
</div>

<?php

}


//<!--====================================================================================================-->
//            <!--                                        Update User          --
//--==================================================================================================== -->

//if (isset($_POST['updatetUser'])) {
//
//    include "connection.php";
//
//    $id = $_POST['id'];
//    $name = $_POST['editName'];
//    $user = $_POST['editUser'];
//    $password = $_POST['editPassword'];
//    $editPassword = password_hash($password, PASSWORD_DEFAULT);    // Encoding
//
//    $profile = $_POST['editProfile'];
//    $picture = $_POST['editPicture'];



//    if (isset($_FILES["editPicture"]["tmp_name"])) {
//        list($width, $height) = getimagesize($_FILES["editPicture"]["tmp_name"]);
//
//        $newHeight = 500;
//        $newWidth = 500;
//
//        $directori = "dist/img/users/" . $_POST["editUser"];
//
//        if(!empty($_POST['currentPicture'])) {
//            unlink($_POST['currentPicture']);
//        }
//
//        else{
//            mkdir($directori, 0755);
//        }


//
//        if ($_FILES["editPicture"]["type"] == "image/jpeg") {
//
//            $random = mt_rand(100, 999);
//
//            $route = "dist/img/users/" . $_POST["editUser"]. "/" . $random . ".jpg";
//
//            $origin = imagecreatefromjpeg($_FILES["editPicture"]["tmp_name"]);
//
//            $destiny = imagecreatetruecolor($newWidth, $newHeight);
//
//            imagecopyresized($destiny, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $height, $width);
//
//            imagejpeg($destiny, $route);
//
//        }
//
//        if ($_FILES["editPicture"]["type"] == "image/png") {
//
//            $random = mt_rand(100, 999);
//
//            $route = "dist/img/users/" . $_POST["editUser"]. "/" . $random . ".png";    // Image is here
//
//            $origin = imagecreatefrompng($_FILES["editPicture"]["tmp_name"]);
//
//            $destiny = imagecreatetruecolor($newWidth, $newHeight);
//
//            imagecopyresized($destiny, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $height, $width);
//
//            imagepng($destiny, $route);
//
//        }
//    }

//    $query= "UPDATE `users` SET `name`= '$name',`user`='$user',`password`='$editPassword', `profile`='$profile' WHERE `id`='$id'";
//
//    $result = mysqli_query($conn, $query);
//
//    if ($result) {
//
//        ?>
<!---->
<!--        <script>-->
<!---->
<!--            // swal({-->
<!--            //     title: "Add User Successfully",-->
<!--            //     icon: "success",-->
<!--            // });-->
<!---->
<!--            swal({title: "Update User Successfully",-->
<!--                icon: "success"}).then(function(){-->
<!--                    javascript:history.go(-1)-->
<!--                }-->
<!--            );-->
<!---->
<!---->
<!--        </script>-->
<!---->
<!--        --><?php
//
//    }
//    else {
//        ?>
<!---->
<!--        <script>-->
<!--            swal({-->
<!--                title: "Can't Update User",-->
<!--                icon: "error",-->
<!--            });-->
<!--        </script>-->
<!---->
<!--        --><?php
//    }
//
//}


?>


<!--====================================================================================================-->
<!--                                        Modal Edit User End             -->
<!--==================================================================================================== -->



<?php
include "footer.php";
?>



