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
        <div class="card">

            <form action="" method="post" name="">

            <div class="card-header">
            </div>

                <!--=======================================================================-->
                <!--                     This is for customer and date           -->
                <!--======================================================================= -->

            <div class="card-body">

<!--                <div class="col-md-6">-->
<!---->
<!--                    <div class="form-group">-->
<!--                        <label for="">Customer Name</label>-->
<!--                        <input type="text" class="form-control" id="txtCustomer" placeholder="Enter Customer Name" required>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="col-md-6">-->
<!---->
<!--                    <h2>Date</h2>-->
<!---->
<!--                </div>-->

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Customer Name</label>
                            <input type="text" class="form-control" id="txtCustomer" placeholder="Enter Customer Name" required>
                        </div>
                    </div>


                    <div class="col-md-6">

                        <div class="form-group">
                            <!-- Date -->
                            <div class="form-group">
                                <label>Date:</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>

                <!--=======================================================================-->
                <!--                     This is for table           -->
                <!--======================================================================= -->


                <div class="card-body"></div>

                <!--=======================================================================-->
                <!--                     This is for table           -->
                <!--======================================================================= -->

            <div class="card-body"></div>

        </div>

        </form>

    </section>

</div>


<?php
include "footer.php";
?>
c