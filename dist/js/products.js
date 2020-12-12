// <!--====================================================================================================-->
//     <!--                                        DYANAMIC TABLE      -->
// <!--==================================================================================================== -->

$.ajax({

    url: "ajax/datatable-products.ajax.php",
    success:function(answer) {

        console.log("answer", answer);

    }

})

$('.productsTabled').DataTable( {
    "ajax": "ajax/datatable-products.ajax.php"
} );

