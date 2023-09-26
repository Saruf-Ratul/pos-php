<?php 

require_once "helper.php";

 ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <?php include_once ("Includes/MetaTag.php");?>

    <title>::POS:: Create Invoice </title>
    <!--    GENERAL SCRIPT-->
    <?php include_once ("Includes/HeaderGeneralScript.php");?>
    <!-- sidebar -->
    <?php include_once ("Includes/SideBar.php");?>

    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">

        <!-- Body: Header -->
        <?php include_once ("Includes/HeaderNavBar.php");?>

            <!-- Body: Body -->       
            <div class="body d-flex py-lg-3 py-md-2">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Create Invoice</h3>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row g-3">
                        <div class="col-12">
                          <form id="invoiceForm">
                            
                          <div class="card print_invoice">
                            <div class="card-header border-bottom fs-4">
                              <h5 class="card-title mb-0 fw-bold">INVOICE</h5>
                            </div>
                            <div class="card-body">
                              <div class="card p-3">
                               
                                <div style="clear:both"></div>
                                <div class="customer mt-4">
                                 
                                  <div class="col-md-6">
                                    <input type="text" name="" placeholder="Enter Customer Name here..." autofocus class="form-control form-control-lg">
                                  </div>
                                  <table class="meta">
                                    <tbody>
                                      <tr>
                                        <td class="meta-head">Invoice #</td>
                                        <td><textarea class="form-control">POS-<?php echo date("Ymdhis"); ?></textarea></td>
                                      </tr>
                                      <tr>
                                        <td class="meta-head">Date</td>
                                        <td><textarea class="form-control"><?php echo date("F jS, Y");?></textarea></td>
                                      </tr>
                                      <tr>
                                        <td class="meta-head">Amount Due</td>
                                        <td>
                                         <input type="text" name="due" class="form-control due" value="₦">
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div style="clear:both"></div>
                                <table class="items">
                                  <tbody>
                                    <tr>
                                      <th style="width: 300px;">Item</th>
                                      <th>Available Qty</th>
                                      <th style="width: 140px;">Unit Cost</th>
                                      <th style="width: 70px;">Quantity</th>
                                      <th style="width: 140px;">Price</th>
                                    </tr>
                                    <tr class="item-row">
                                      <td class="item-name">
                                        <div class="delete-wpr"> <select name="product" id="" class="form-control form-select-lg">
                                                <?php echo $Controller->showProductsInDropDownList();?>
                                            </select><a class="delete" href="javascript:;" title="Remove row">X</a></div>
                                      </td>
                                      <td class="description">
                                        <span class="badge bg-success badge-sm">100 Qty</span>
                                      </td>
                                      <td><textarea class="cost">₦0.00</textarea></td>
                                      <td><textarea class="qty">1</textarea></td>
                                      <td><span class="price">₦0.00</span></td>
                                    </tr>

                                    <tr id="hiderow">
                                      <td colspan="5"><a id="addrow" href="javascript:;" title="Add More Product" class="text-bold">
                                              <button class="btn btn-danger btn-sm btn-rounded text-white" type="button">Add More</button></a></td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" class="blank"> </td>
                                      <td colspan="2" class="total-line">Subtotal</td>
                                      <td class="total-value">
                                        <div id="subtotal">₦0.00</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" class="blank"> </td>
                                      <td colspan="2" class="total-line">Total</td>
                                      <td class="total-value">
                                        <div id="total">₦0.00</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" class="blank"> </td>
                                      <td colspan="2" class="total-line">Amount Paid</td>
                                      <td class="total-value"><textarea id="paid">₦0.00</textarea></td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" class="blank"> </td>
                                      <td colspan="2" class="total-line balance">Balance Due</td>
                                      <td class="total-value balance">
                                        <input type="text" name="due" class="form-control due" value="₦">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <div style="clear:both"></div>
                                <div class="footer-note mt-5">
                                  <h5>Notes:</h5>
                                  <textarea class="form-control bg-light" name="note">NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
                                </div>
                                 <div class="col-12 text-center text-md-start mt-3 mb-3">
                          <button type="button" class="btn btn-lg btn-primary" onclick="window.print();return false"><i class="fa fa-print me-2"></i>Print Invoice</button>
                          <button type="button" class="btn btn-lg btn-secondary"><i class="fa fa-envelope me-2"></i>Submit Sales</button>
                        </div>
                              </div>
                            </div>
                          </div>
                          
                        </form>
                        </div>
                       
                    </div><!-- Row end  -->
                </div>
            </div>
            
            <!-- Modal Custom Settings-->

        </div>
             
    </div>
    
    <!-- Jquery Core Js -->
<!--    GENERAL SCRIPT-->
<?php include_once ("Includes/FooterGeneralScript.php");?>
<!--    PAGE SCRIPT-->
    <!-- Plugin Js -->
     <script src="../assets/bundles/invoice.bundle.js"></script>

     
    <!-- Jquery Page Js -->
</body>

</html>