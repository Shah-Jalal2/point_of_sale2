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
                    <h2>Create Order</h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i>Homepage</a></li>
                        <li class="breadcrumb-item active">Create Order</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>



    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-success">

            <form action="" method="post" name="">

            <div class="card-header">
            </div>

                <!--=======================================================================-->
                <!--                     This is for customer and date           -->
                <!--======================================================================= -->

            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">

                        <!--=========================-->
                        <!--    Customer Name           -->
                        <!--=========================-->

                        <div class="form-group">

                            <label for="">Customer Name</label>

                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>

                                <input type="text" class="form-control" id="txtCustomer" placeholder="Enter Customer Name" required>
                            </div>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="form-group">
                            <!-- Date -->
<!--                            <div class="form-group">-->
                                <label>Date:</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
<!--                            </div>-->
                        </div>

                    </div>
                </div>

            </div>

                <!--=======================================================================-->
                <!--                     This is for table           -->
                <!--======================================================================= -->


                <div class="card-body">

                    <div class="col-md-12">

                        <table class="table  table-striped table-responsive-sm" id="productTable">      <!-- dt resposinve is from datatable-->

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Search</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Enter Quantity</th>
                                <th>Total</th>
                                <th>
                                    <button type="button" name="add" class="btn btn-success btn-sm btnAdd"><span class="fa fa-plus"></span></button>
                                </th>
                            </tr>
                            </thead>

                        </table>

                    </div>

                </div>

                <!--=======================================================================-->
                <!--                     This is for etc           -->
                <!--======================================================================= -->

            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">

                        <!--=========================-->
                        <!--    Subtotal           -->
                        <!--=========================-->

                        <div class="form-group">
                            <label for="">Subtotal</label>

                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                </div>

                            <input type="text" class="form-control" id="txtSubtotal" required>

                            </div>

                        </div>

                        <!--=========================-->
                        <!--    Tax           -->
                        <!--=========================-->

                        <div class="form-group">
                            <label for="">Tax (5%)</label>

                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                </div>

                            <input type="number" class="form-control" id="txtText" required>

                            </div>
                        </div>

                        <!--=========================-->
                        <!--    Discount           -->
                        <!--=========================-->

                        <div class="form-group">
                            <label for="">Discount</label>

                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                </div>

                            <input type="number" class="form-control" id="txtDiscount" required>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">

                        <!--=========================-->
                        <!--    Total           -->
                        <!--=========================-->

                        <div class="form-group">
                            <label for="">Total</label>
                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                </div>

                            <input type="text" class="form-control" id="txtTotal" required>

                            </div>
                        </div>

                        <!--=========================-->
                        <!--    Paid           -->
                        <!--=========================-->

                        <div class="form-group">
                            <label for="">Paid</label>

                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                </div>

                            <input type="number" class="form-control" id="txtPaid" required>

                            </div>
                        </div>

                        <!--=========================-->
                        <!--    Due           -->
                        <!--=========================-->

                        <div class="form-group">
                            <label for="">due</label>

                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                </div>

                            <input type="number" class="form-control" id="txtDue" required>

                            </div>
                        </div>

<!--                        <br>-->
                        <!-- radio -->

                        <label>Payement Method</label>
                        <div class="form-group clearfix">

                            <div class="icheck-danger d-inline">
                                <input type="radio" name="r2" checked id="radioDanger1">CASH
                                <label for="radioDanger1">
                                </label>
                            </div>
                            <div class="icheck-danger d-inline">
                                <input type="radio" name="r2" id="radioDanger2">CARD
                                <label for="radioDanger2">
                                </label>
                            </div>
                            <div class="icheck-danger d-inline">
                                <input type="radio" name="r2" id="radioDanger3"> CHECK
                                <label for="radioDanger3">
                                </label>
                            </div>
                        </div>

                    </div>


                </div>

        </div>

                <div class="form-group" align="center">
                    <button type="submit" class="btn btn-info" name="saveOrder" value="save order">Save Order</button>
                </div>

        </form>

    </section>

</div>


<?php
include "footer.php";
?>
c