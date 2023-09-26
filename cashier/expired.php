<?php 

require_once "helper.php";

 ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <?php include_once ("Includes/MetaTag.php");?>

    <title>::POS:: Stores </title>
    <!--    GENERAL SCRIPT-->
    <?php include_once ("Includes/HeaderGeneralScript.php");?>
        
        <!-- sidebar -->
        <?php include_once ("Includes/SideBar.php");?>

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">

            <!-- Body: Header -->
            <?php include_once ("Includes/HeaderNavBar.php");?>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0 text-danger">Production Expiration Notification</h3>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                        <div class="col">
                            <div class="alert-danger alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-danger text-light"><i class="icofont-cart-alt fs-5"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Expires Today</div>
                                        <span class="small"><?php echo $Controller->getCountedWarehouses('Open') ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-danger alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-danger text-light"><i class="icofont-star-alt-1 fs-5"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Expires in 7 Days </div>
                                        <span class="small"><?php echo $Controller->getCountedWarehouses('Closed') ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-warning alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-warning text-light"><i class="icofont-spinner-alt-5 fs-5"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Expires In 3 Month Time</div>
                                        <span class="small"><?php echo $Controller->count_Warehouses();?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col">
                            <div class="alert-warning alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-info text-light"><i class="icofont-verification-check fs-5"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Expires in 6 Month</div>
                                        <span class="small">2000</span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div> <!-- Row end  -->
                   
                   
                    <div class="row g-3 mb-3">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Expiration Details</h6>
                                   
                                </div>
                                <div class="card-body">
                                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">  
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Stock Qty</th>
                                                <th>Supplier</th>
                                                <th>Expiry Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php 

                                            // $AllExpired = $Controller->showAllExpiredProduct();
                                            $AllExpired = $Controller->showAllExpiredProduct();
                                            if ($AllExpired !="") {
                                                foreach ($AllExpired as $expired) {
                                            $supplier_data = $Controller->searchSupplier("id",$expired->supId);
                                                    ?>
                                            <tr>
                                                <td><?php echo $expired->name;?></td>
                                                <td><?php echo $expired->qty;?></td>
                                                <td><?php echo $supplier_data->fullname;?></td>
                                                <td><span class="text-bold text-center text-danger"><strong><?php echo date("Y-m-d",strtotime($expired->expiry_date));?></strong></span></td>
                                            <td><?php echo date("Y-m-d",strtotime($expired->expiry_date)) <= date("Y-m-d") ? '<span class="badge bg-danger">expired</span>':'<span class="badge bg-warning">Expires Soon</span>' ?> </td>
                                             <td><div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button>
                                                    <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                </div></td>
                                            </tr>
                                           <?php
                                            }
                                            }

                                             ?>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                </div>
            </div>
        
            <!-- Modal Custom Settings-->
           
        </div> 

    </div>
            
    <!-- Jquery Core Js -->
   <?php include_once ("Includes/FooterGeneralScript.php");?>
    <script>
        $('#myDataTable')
        .addClass( 'nowrap')
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
    </script>
</body>

</html> 