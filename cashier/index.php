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
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                           <div class="card">
                              <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                 <div class="left-info">
                                    <span class="text-muted">Today Invoices</span>
                                    <div><span class="fs-6 fw-bold me-2"><?php echo $Controller->countDailyInvoiceByCashier($userData->username);?></span></div>
                                 </div>
                                 <div class="right-icon">
                                    <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                           <div class="card">
                              <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                 <div class="left-info">
                                    <span class="text-muted">Total Invoices</span>
                                    <div><span class="fs-6 fw-bold me-2"><?php echo $Controller->countAllSalesInvoiceByCashier($userData->username);?></span></div>
                                 </div>
                                 <div class="right-icon">
                                    <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                       
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                           <div class="card">
                              <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                 <div class="left-info">
                                    <span class="text-muted"> Available Products</span>
                                    <div><span class="fs-6 fw-bold me-2"><?php 
                                       $Controller->getCountedProducts();?></span></div>
                                 </div>
                                 <div class="right-icon">
                                    <i class="icofont-calculator-alt-2 fs-3 color-danger"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                     
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                           <div class="card">
                              <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                 <div class="left-info">
                                    <span class="text-muted">Revenue</span>
                                    <div><span class="fs-6 fw-bold me-2">&#8358;<?php echo
                                       number_format($Controller->AllMyTotalSalesByCashier($userData->username),2);?></span></div>
                                 </div>
                                 <div class="right-icon">
                                    <i class="icofont-star fs-3 color-lightyellow"></i>
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
                           <h3 class="m-0 fw-bold text-primary">Today's <strong class="text-danger"> <?php //echo date("l jS F, Y") ?></strong> Transactions </h3>
                        </div>
                        <div class="card-body">
                           <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                              <thead>
                                 <tr>
                                    <th>Order Id</th>
                                    <th>Customer</th>
                                    <th>Payment Method</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    $AllOrders = $Controller->getAllTodaysTransactionsByCashier($userData->username);
                                    if ($AllOrders !="") {
                                        foreach ($AllOrders as $order) {?>
                                 <tr>
                                    <td><a data-id="<?php echo $order->orderId;?>" class="showReportInvoiceBtn" style="cursor: pointer;"><strong><?php echo $order->invoiceNo;?></strong></a></td>
                                    <td><?php echo $order->customer;?></td>
                                    <td><span class="badge badge-info"><?php echo $order->paymentType;?></span></td>
                                    <td>&#8358;<?php echo number_format($order->total);?></td>
                                    <td><span class="badge bg-success">Paid</span></td>
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
       <script>
         $(document).ready(function(){
          
            $(".showReportInvoiceBtn").on("click", function(){
                 let reportId = $(this).data("id");
               let action_page ="print80mm?invid="+reportId+"&action=generate";
               setTimeout(()=>{
                     window.open(action_page,"_blank","top=10, left=100, width=700, height=650");
                  },100)
            })
         });
         ;</script>
      </body>
</html>