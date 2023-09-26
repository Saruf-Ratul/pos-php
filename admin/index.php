<?php 
   require_once "helper.php";
   
    ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
   <head>
      <?php include_once ("Includes/MetaTag.php");?>
      <title>::POS:: Dashboard </title>
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
               <?php include_once ("Includes/dashboard-stats1.php");?>
              
               <!-- Row end  -->
               <div class="row g-3">
                  <div class="col-lg-12 col-md-12">
                     <div class="row g-1 g-sm-3 mb-3 row-deck">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                           <div class="card">
                              <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                 <div class="left-info">
                                    <span class="text-muted">Suppliers</span>
                                    <div><span class="fs-6 fw-bold me-2"><?php $Controller->getCountedSuppliers();?></span></div>
                                 </div>
                                 <div class="right-icon">
                                    <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                           <div class="card">
                              <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                 <div class="left-info">
                                    <span class="text-muted">Invoices</span>
                                    <div><span class="fs-6 fw-bold me-2"><?php echo number_format($Controller->countAllSalesInvoices());?></span></div>
                                 </div>
                                 <div class="right-icon">
                                    <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                           <div class="card">
                              <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                 <div class="left-info">
                                    <span class="text-muted">Current Month Sales</span>
                                    <div><span class="fs-6 fw-bold me-2">&#8358;<?php echo number_format($Controller->CurrentMonthSalesrecord(),2);?></span></div>
                                 </div>
                                 <div class="right-icon">
                                    <i class="icofont-sale-discount fs-3 color-santa-fe"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                           <div class="card">
                              <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                 <div class="left-info">
                                    <span class="text-muted"> Last 3 Month Record</span>
                                    <div><span class="fs-6 fw-bold me-2"><?php echo number_format($Controller->lastThreeMonthSalesrecord(),2);?></span></div>
                                 </div>
                                 <div class="right-icon">
                                    <i class="icofont-calculator-alt-2 fs-3 color-danger"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                           <div class="card">
                              <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                 <div class="left-info">
                                    <span class="text-muted">Last 6 Month Record Sales</span>
                                    <div><span class="fs-6 fw-bold me-2">&#8358;<?php echo number_format($Controller->lastSixMonthSalesrecord(),2);?></span></div>
                                 </div>
                                 <div class="right-icon">
                                    <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                           <div class="card">
                              <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                 <div class="left-info">
                                    <span class="text-muted">Users</span>
                                    <div><span class="fs-6 fw-bold me-2"><?php echo $Controller->countUsers(); ?></span></div>
                                 </div>
                                 <div class="right-icon">
                                    <i class="icofont-users-social fs-3 color-light-success"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                           <div class="card">
                              <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                 <div class="left-info">
                                    <span class="text-muted">Available Products</span>
                                    <div><span class="fs-6 fw-bold me-2"><?php 
                                       $Controller->getCountedProducts();?></span></div>
                                 </div>
                                 <div class="right-icon">
                                    <i class="icofont-bag fs-3 color-light-orange"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                           <div class="card">
                              <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                 <div class="left-info">
                                    <span class="text-muted">Current Year Revenue</span>
                                    <div><span class="fs-6 fw-bold me-2">&#8358;<?php echo number_format($Controller->currentYearRevenue(),2) ?></span></div>
                                 </div>
                                 <div class="right-icon">
                                    <i class="icofont-star fs-3 color-lightyellow"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                           <div class="card">
                              <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                 <div class="left-info">
                                    <span class="text-muted">Stores</span>
                                    <div><span class="fs-6 fw-bold me-2"><?php echo $Controller->count_Warehouses();?></span></div>
                                 </div>
                                 <div class="right-icon">
                                    <i class="icofont-handshake-deal fs-3 color-lavender-purple"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- row end -->
                  </div>
               </div>
               <!-- Row end  -->
               <!-- Row end  -->
               <div class="row g-3 mb-3">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                           <h3 class="m-0 fw-bold text-primary">Today's <strong class="text-danger">( <?php echo date("l jS F, Y") ?>)</strong> Transactions </h3>
                        </div>
                        <div class="card-body">
                           <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                              <thead>
                                 <tr>
                                    <th>Order Id</th>
                                    <th>Customer</th>
                                    <th>Payment</th>
                                    <th>Amount</th>
                                    <th>Attendant</th>
                                    <th>Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                  <?php 
                                    $AllOrders = $Controller->fetchTodaysTransactions();
                                    if ($AllOrders !="") {
                                        foreach ($AllOrders as $order) {?>
                                 <tr>
                                    <td><a href="print80mm?invid=<?php echo $order->orderId;?>&action=generate" target="_blank"><strong><?php echo $order->invoiceNo;?></strong></a></td>
                                    <td><?php echo $order->customer;?></td>
                                    <td><span class="badge badge-info"><?php echo $order->paymentType;?></span></td>
                                    <td>&#8358;<?php echo number_format($order->total,2);?></td>
                                    <td><?php echo($order->cashier_name);?></td>
                                    <td><span class="badge bg-success">Paid</span></td>
                                 </tr>
                                 <?php
                                    }
                                    }
                                     ?>
                              </tbody>
                           </table>
                        </div>
                        <!-- <h4 class="text-center"><?php //echo $Controller->showTokenGenerated(); ?></h4> -->
                     </div>
                  </div>
               </div>
               <!-- Row end  -->
            </div>
         </div>
         <!-- Modal Custom Settings-->
      </div>
      </div>
      <!-- Jquery Core Js -->
      <!--    GENERAL SCRIPT-->
      <?php include_once ("Includes/FooterGeneralScript.php");?>
      <!--    PAGE SCRIPT-->
      <script src="../assets/js/page/index.js"></script>
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