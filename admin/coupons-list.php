<?php 

require_once "helper.php";

 ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <?php include_once ("Includes/MetaTag.php");?>

    <title>::POS:: Coupons Code </title>
    <!--    GENERAL SCRIPT-->
    <?php include_once ("Includes/HeaderGeneralScript.php");?>
    <!-- sidebar -->
    <?php include_once ("Includes/SideBar.php")?>
    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">
        <!-- Body: Header -->
        <?php include_once ("Includes/HeaderNavBar.php")?>

            <!-- Body: Body -->       
            <div class="body d-flex py-lg-3 py-md-2">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Promo Codes</h3>
                                <div class="col-auto d-flex w-sm-100">
                                    <a href="coupon-add" class="btn btn-primary btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i>Add Coupon</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row clearfix g-3">
                    <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Coupon Code</th>
                                                <th>Type</th> 
                                                <th>Discount</th>
                                                <th>Start Date</th>
                                                <th>End Date</th> 
                                                <th>Status</th> 
                                                <th>Discount Product</th>
                                                <th>Actions</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td><span class="fw-bold ms-1">DTZQT-8547</span></td>
                                            <td>Fixed Amount</td>
                                            <td>$12.6</td>
                                            <td>18/08/2021</td>
                                            <td>06/09/2021</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>Clothes</td>
                                            <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="coupon-edit.php" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    </div><!-- Row End -->
                </div>
            </div>
            
            <!-- Modal Custom Settings-->

        </div>     
    </div>
    
    <!-- Jquery Core Js -->
    <?php include_once ("Includes/FooterGeneralScript.php");?>
    <script>
        // project data table
        $(document).ready(function() {
            $('#myProjectTable')
            .addClass( 'nowrap' )
            .dataTable( {
                responsive: true,
                columnDefs: [
                    { targets: [-1, -3], className: 'dt-body-right' }
                ]
            });
            $('.deleterow').on('click',function(){
            var tablename = $(this).closest('table').DataTable();  
            tablename
                    .row( $(this)
                    .parents('tr') )
                    .remove()
                    .draw();

            } );
        });
    </script>
</body>

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/coupons-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 21:41:01 GMT -->
</html>