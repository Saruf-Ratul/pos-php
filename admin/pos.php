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
               <div class="col-12">
                  <div class="row">
                     <div class="col-sm-12">
                        <form id="GenerateInvoiceForm" autocomplete="off">
                           <div class="row mt-2">
                              <div class="col-md-6 mb-3">
                                 <div class="form-group">
                                    <label>Customer Name:</label>
                                    <input type="text" name="customer_name" class="form-control form-control-lg" placeholder="Enter Customer Name here...">
                                 </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                 <div class="form-group">
                                    <label>Select Product &raquo; Category</label>
                                    <select class="form-control form-select-lg form-control-lg selectProduct" id="selectProduct" name="prod_id" style="min-width:200px">
                                       <option value="" selected>Select...</option>
                                       <?php echo $Controller->showProductsInDropDownList();?>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 col-sm-12">
                                 <a href="javascript:void(0)" class="text-white text-decoration-none font-18 addMoreBtn btn btn-sm btn-success mb-3" title="Add More"><i class="icofont-plus-circle fs-5"></i>Add To Cart</a>
                                 <div class="table-responsive">
                                    <table class="table table-primary text-end">
                                       <thead>
                                          <tr>
                                             <th class="col-md-6">Product Name</th>
                                             <th class="col-md-2">Stock Qty</th>
                                             <th style="width:150px;">Unit Price</th>
                                             <th style="width:150px;">Qty</th>
                                             <th style="width:120px;">Subtotal</th>
                                             <th> </th>
                                          </tr>
                                       </thead>
                                       <tbody class="kmeTableBody" id="kmeTableBody"></tbody>
                                    </table>
                                 </div>
                                 <div class="table-responsive">
                                    <table class="table table-white">
                                       <tbody>
                                          <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td class="text-right">Grand Total</td>
                                             <td style="text-align: right; padding-right: 30px;width: 230px">
                                                <input type="text" name="total" class="form-control form-control-lg" id="total" readonly placeholder="Grand Total" required></td>
                                          </tr>
                                          <tr>
                                             <td colspan="5" class="text-right">Payment Method</td>
                                             <td style="text-align: right; padding-right: 30px;width: 260px">
                                                <select class="form-control form-select-lg form-control-lg form-amt paymentTypeBtn" name="payment_method" style="min-width:100px" required>
                                                   <option selected value="">Select...</option>
                                                   <option value="Cash">Cash</option>
                                                   <option value="POS">POS</option>
                                                   <option value="Transfer">Transfer</option>
                                                   <option value="Cheque">Cheque</option>
                                                </select>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td colspan="5" class="text-right">
                                                Amount Tender
                                             </td>
                                             <td style="text-align: right; padding-right: 30px;width: 230px">
                                                <input class="form-control form-control-lg text-right tenderAmount" type="text" id="tenderAmount" placeholder="Enter amount paid" style="display:none !important;" name="tenderAmount">
                                             </td>
                                          </tr>
                                          <tr>
                                             <td colspan="5" style="text-align: right; font-weight: bold">
                                                Total Due
                                             </td>
                                             <td style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                <input type="text" name="due_bal" id="due" class="due form-control form-control-lg" placeholder="Due balance" readonly>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <input type="hidden" name="cashier" value="<?=$userData->username;?>">
                                 <?php $Controller->getKeyValuePairs("kme_receipt","create_new_receipt");?>
                                 <button type="submit" class="btn btn-dark btn-lg loading float-end">Generate Invoice</button>
                                 <div class="clearfix"></div>
                                 <div class="row">
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Modal Custom Settings-->
     
         </div>
      </div>
      </div>
      <!-- Jquery Core Js -->
      <?php include_once ("Includes/FooterGeneralScript.php");?>
      <script>
         $(document).ready(function(){
           $("#GenerateInvoiceForm").on("submit",function(e){
          e.preventDefault();
         
          $(".loading").html('<img src="../assets/loaders/tail-spin.svg" width="25">Loading...').attr("disabled", "disabled");
          const fData = $(this).serialize();
         $.post("../app/View",fData,function(data){
             setTimeout(function(){
              console.log(data)
                 $(".loading").html("Generate Invoice").attr("disabled", false);
                 $("#server-response").html(data);
             },1000)
         })
         })
          //when payment type is selected
           $(".paymentTypeBtn").on("change", function(){
              const paymentOpt = $(this).val();
              if (paymentOpt =="" || paymentOpt.length == 0)
               {
                  $("#tenderAmount").css("display","none");
              }
              if (paymentOpt === "Cash") 
              {
               $("#tenderAmount").css("display","block").animate("slideDown");
              }
              else{
               $("#tenderAmount").css("display","none");
            }
           });
         
          $(".addMoreBtn").on("click",function(){
              //check if the no product is selected
              var productSelected = $(".selectProduct");
              if (productSelected.val() =="" || productSelected.val().length ==0) 
              {
                  alert("Please select product to proceed")
                  return false;
              }
              else
              {
                 var proId = productSelected.val();
           //get product by its ID 
           $.ajax({
              url:"../app/View",
              type:"POST",
              data: {action:'fetch_product_id',proId:proId},
              dataType:'json',
              success:function(response){
                  //check if the product is already selected
                   var html_body =`<tr>
              <td><input type="text" class="form-control form-control-lg product_name" readonly name="product_name[]" value="${response.name}"><input type="hidden" class="product_stock" name="product_stock[]" value="${response.qty}"><input type="hidden" class="product_id" name="product_id[]" value="${response.proId}" required></td>
              <td><div class="available_qty">${response.qty <= 20 ? '<span class="badge bg-danger">'+response.qty+ ' In Stock</span>':'<span class="badge bg-success">'+response.qty+ ' In Stock</span>'}</div></td>
              <td><input class="form-control form-control-lg kmePrice" style="width:150px" type="text" name="product_price[]" value="${response.selling_price}"></td>
              <td><input class="form-control form-control-lg purchaseQty" style="width:150px" type="number" id="purchaseQty" value="1" name="purchaseQty[]" required></td>
              <td><input class="form-control form-control-lg product_total" readonly style="width:120px" type="number" id="product_total" name="product_total[]" value="${response.price*1}" required></td>
              <td><a href="javascript:void(0)" class="text-danger font-18 removeProdBtn" title="Remove"><i class="icofont-trash fs-5"></i></a></td>`;
              $(".kmeTableBody").append(html_body);
              }
           });
              }
         
          });
         
          //function to remove tr from table
         $(document).on('click','.removeProdBtn', function(){
           $(this).closest('tr').remove();
              calculate(0,0);
              $("#paid").val(0);
         });
         
         $(document).on('blur','.tenderAmount', function(){
           var paidAmount = $(this).val();
              let myTotal = $("#total").val();
              calculate(0,0);
              $("#due").val(Number(myTotal-paidAmount));
              $("#paid").val(0);
         });
         
         //Payment section
         $('#kmeTableBody').delegate(".purchaseQty","keyup change", function(){
          var qty_demand = $(this);
          var tr = $(this).parent().parent();
          var actualQty = parseInt(tr.find(".product_stock").val());
          if((qty_demand.val()=='0') || (parseInt(qty_demand.val()) <= -1)){
          alert("Invalid Quantity Detected!");
                      $(".loading").attr("disabled", true);
                          return false;
          }else
          if((parseInt(qty_demand.val()) > actualQty)){
           alert("Invalid Quantity!");
                      $(".loading").attr("disabled", true);
                          return false; 
          }else{
         parseInt(tr.find(".product_total").val(qty_demand.val() * tr.find(".kmePrice").val()));
          calculate(0,0);
          $(".loading").attr("disabled", false);
          }
         });
         
         
         //
         
         
         });
         
         function calculate(paid){
          var net_total = 0;
          var paid = paid;
         
          $(".product_total").each(function(){
            net_total = net_total + ($(this).val()*1);
          })
          due = parseInt(net_total - paid);
         
          $("#total").val(net_total);
          $("#due").val(due);
         }
      </script>
      </body>
</html>