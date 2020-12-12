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
                        <h2>Manage Products</h2>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i>Homepage</a></li>
                            <li class="breadcrumb-item active">Manage Products</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>





        <!-- Main content -->
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddProduct">
                        Add User
                    </button>
                </div>


                <div class="card-body">

                    <div class="box">

                        <table class="table table-bordered table-striped table-responsive-sm mydatatable">      <!-- dt resposinve is from datatable-->

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Code</th>
                                <th>description</th>
                                <th>Category</th>
                                <th>Stock</th>
                                <th>Buying Price</th>
                                <th>Sell Price</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>

                            <?php

                            include "connection.php";

                            //                        $query = "SELECT * FROM products";
                            $query = "SELECT products.code, products.image, products.buying_price, products.selling_price, products.date, products.stock, products.description, category.category FROM products
                                    LEFT JOIN category ON category.id = products.id_category ORDER BY products.id DESC";
                            $result = mysqli_query($conn, $query);

                            $count = 0;


                            while ($row = mysqli_fetch_assoc($result)){
                                $count++;
                                ?>

                                <tr>
                                    <td><?= $count ?></td>
                                    <td><img src="<?= $row['image'] ?>" alt="" class="img-thumbnail" width="50px"></td>
                                    <td><?= $row['code'] ?></td>
                                    <td><?= $row['description'] ?></td>
                                    <td><?= $row['category'] ?></td>
                                    <td><?= $row['stock'] ?></td>
                                    <td><?= $row['buying_price'] ?></td>
                                    <td><?= $row['selling_price'] ?></td>
                                    <!--                                <td>--><?//= $row['sales'] ?><!--</td>-->
                                    <td><?= $row['date'] ?></td>
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

                            <?php
                                include_once "controllers/addProduct.controller.php";
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
    <!--                                        Modal Add Products              -->
    <!--==================================================================================================== -->



    Modal
    <div id="modalAddProduct" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">


                <!--====================================================================================================-->
                <!--                                        Modal Header            -->
                <!--==================================================================================================== -->

                <div class="modal-header" style="background: #3c8dbc; color: white;">

                    <h4 class="modal-title">Add Products</h4>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!--====================================================================================================-->
                <!--                                        Modal Body          -->
                <!--==================================================================================================== -->

                <div class="modal-body">

                    <div class="box-body">
                        <form action="" method="post" enctype="multipart/form-data">



                            <!--                    ENTRY FOR Descripton-->

                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-product-hunt"></i></span>
                                    </div>
                                    <input type="text" class="form-control input-lg" name="productDescription" placeholder="Prouduct Description" required>
                                </div>

                            </div>


                            <!--                    ENTRY FOR CODE-->

                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-code"></i></span>
                                    </div>
                                    <input type="text" class="form-control input-lg" name="productCode" placeholder="Add Code" required>
                                </div>

                            </div>

                            <!--                    Check category-->

                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-th"></i></span>
                                    </div>
                                    <select class="form-control input-lg" name="productCategory" id="productCategoryfse" required>

                                        <option value="" >Select Category</option>

                                        <?php

                                            include_once "connection.php";

                                            $query = "SELECT * FROM category";
                                            $result = mysqli_query($conn, $query);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                     <option value="<?= $row['id'] ?>"><?= $row['category'] ?>

                                                         <?php

                                            }


                                        ?>


                                    </select>

                                </div>

                            </div>

                            <!--                    INPUT FOR STOCK-->

                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                    <input type="number" class="form-control input-lg" name="productStock" min="0" placeholder="Stock" required>
                                </div>

                            </div>

                            <!--                    INPUT FOR BUYING PRICE -->

                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                    <input type="number" class="form-control input-lg" name="buyingPrice" min="0" placeholder="Buying Price" required>
                                </div>

                            </div>

                            <!--                    INPUT FOR SELLING PRICE-->

                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                    <input type="number" class="form-control input-lg" name="sellingPrice" min="0" placeholder="Selling Price" required>
                                </div>

                            </div>


<!--                                        ENTRY FOR PICTURE-->

                            <div class="form-group">

                                <div class="panel">Upload Image</div>

                                <input type="file" id="newProductImage " name="newProductImage">

                                <p class="help-block">Maximum picture size 2MB </p>

                                <img src="dist/img/user/avatar.png" class="img-thumbnail" width="100px">

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="saveProducts">Save Products</button>
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