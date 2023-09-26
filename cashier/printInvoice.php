<?php 
   require_once "helper.php";
   if (isset($_GET['invid']) && $_GET['invid'] !== "" && isset($_GET['action']) && $_GET['action'] === "generate") {
     $InvoiceId = $Controller->validate($_GET['invid']);
     $order_data = $Controller->getInvoiceDetailsById($InvoiceId);

   }else{
      echo '<script>
      window.location.assign("./pos");
      </script>';
   }
    ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
   <head>
      <?php include_once ("Includes/MetaTag.php");?>
      <title>::POS:: Sales Invoice </title>
      <!--    GENERAL SCRIPT-->
      <?php include_once ("Includes/HeaderGeneralScript.php");?>
      <!-- sidebar -->
      <?php include_once ("Includes/SideBar.php");?>
      <!-- main body area -->
      <div class="main px-lg-4 px-md-4">
         <!-- Body: Header -->
         <?php include_once ("Includes/HeaderNavBar.php");?>
         <!-- Body: Body -->
         <div class="body d-flex py-lg-3 py-md-2 ">
            <div class="container-xxl">
              
               <!-- Row end  -->
               <div class="row justify-content-center">
                  <div class="col-lg-12 col-md-12">
                     <div class="row justify-content-center">
                              <div class="col-lg-12 col-md-12">
                                 <div class="card p-xl-5 p-lg-4 p-0">
                                    <div class="card-body">
                                       <div class="mb-3 pb-3 border-bottom">
                                          Invoice Date:
                                          <strong><?php echo $Controller->get_date($order_data->trans_date);?></strong>
                                          <span class="float-end"> <strong>Transaction ID:</strong> <?php echo $order_data->invoiceNo; ?></span>
                                       </div>
                                       <div class="row mb-4">
                                          <div class="col-sm-6">
                                             <h6 class="mb-3">From:</h6>
                                             <div><strong><?php echo $Controller->app_short();?></strong></div>
                                             <div>22,Aladeyelu St. Opp. Oando B/Stop</div>
                                             <div>Ijoko Road, Sango Ota.</div>
                                             <div>Email: <b><?php echo APP_AUTHOR_EMAIL ?></b> </div>
                                             <div>Phone: <b><?php echo APP_AUTHOR_PHONE ?></b> </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <h6 class="mb-3">To:</h6>
                                             <div><strong><?php echo $order_data->customer; ?></strong></div>
                                             <div>Email: guest@possystem.com</div>
                                             <div>Phone: ----------</div>
                                          </div>
                                       </div>
                                       <!-- Row end  -->
                                       <div class="table-responsive-sm">
                                          <table class="table table-striped">
                                             <thead>
                                                <tr>
                                                   <th class="text-center">S/N</th>
                                                   <th class="text-center">Item</th>
                                                   <th class="text-end">Unit Price</th>
                                                   <th class="text-center">Qty</th>
                                                   <th class="text-end">Total</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php 
                                                $orderLists = $Controller->getOrderItemsList($order_data->orderId);

                                                if ($orderLists) {
                                                   $cnt =0;
                                                   foreach ($orderLists as $item) {
                                                      $cnt++;
                                                      ?>
                                                       <tr>
                                                   <td class="text-center"><?php echo $cnt; ?></td>
                                                   <td class="text-center"><?php echo $item->product;?></td>
                                                   <td class="text-end">&#8358;<?php echo number_format($item->price,2);?></td>
                                                   <td class="text-center"><?php echo $item->qty;?></td>
                                                   <td class="text-end">&#8358;<?php echo number_format($item->subtotal,2);?></td>
                                                </tr>

                                                      <?php
                                                   }
                                                }
                                                 ?>
                                               
                                             </tbody>
                                          </table>
                                       </div>
                                       <div class="row">
                                          <div class="col-lg-4 col-sm-5">
                                          </div>
                                          <div class="col-lg-4 col-sm-5 ms-auto">
                                             <table class="table table-clear">
                                                <tbody>
                                                   <tr>
                                                      <td ><strong>Subtotal:</strong></td>
                                                      <td class="text-end">&#8358;<?php echo number_format($order_data->total,2); ?></td>
                                                   </tr>
                                                   <tr>
                                                      <td ><strong>Paid:</strong></td>
                                                      <td class="text-end">&#8358;<?php echo number_format($order_data->paid,2); ?></td>
                                                   </tr>
                                                   <tr>
                                                      <td ><strong>Due:</strong></td>
                                                      <td class="text-end"><strong>&#8358;<?php echo number_format($order_data->due,2); ?></strong></td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <!-- Row end  -->
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <h6>Terms &amp; Condition</h6>
                                             <p class="text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over</p>
                                          </div>
                                          <div class="col-lg-12 text-end">
                                             <!--  -->
                                             <a href="print80mm?invid=<?php echo $order_data->orderId;?>&action=generate"> <button type="button" class="btn btn-outline-secondary btn-lg my-1"><i class="fa fa-print"></i> Print</button></a>
                                             <button type="button" class="btn btn-primary btn-lg my-1"><i class="fa fa-paper-plane-o"></i> Send Invoice</button>
                                          </div>
                                       </div>
                                       <!-- Row end  -->
                                    </div>
                                 </div>
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
      <?php include_once ("Includes/FooterGeneralScript.php");?>
      <script type="text/javascript">
         $(document).ready(function(){
            //window.print();
         })
      </script>
      </body>
</html>