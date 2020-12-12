<?php

include "connection.php";

if (isset($_POST['saveProducts'])) {

    $productDescription = $_POST['productDescription'];
    $productCode = $_POST['productCode'];
    $productCategory = $_POST['productCategory'];


    $productStock = $_POST['productStock'];
    $buyingPrice = $_POST['buyingPrice'];
    $sellingPrice = $_POST['sellingPrice'];


    $query = "INSERT INTO `products`(`id_category`, `code`, `description`,  `stock`, `buying_price`, `selling_price`) 
              VALUES ('$productCategory', '$$productCode', '$productDescription', '$productStock', '$buyingPrice', '$sellingPrice')";
    $result = mysqli_query($conn, $query);

    if ($result) {

        ?>

        <script>

            swal({title: "Product add Successfully",
                icon: "success"}).then(function(){
                    javascript:history.go(-1)
                }
            );


        </script>

        <?php

    }
    else {
        ?>

        <script>
            swal({
                title: "Can't Add Product",
                icon: "error",
            });
        </script>

        <?php
    }

}

?>