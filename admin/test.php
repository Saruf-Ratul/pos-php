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
<form>
<div class="row mt-2">
<div class="col-md-6 mb-3">
<div class="form-group">
<label>Transaction ID:</label>
<input type="text" name="invNo" class="form-control form-control-lg" value="INV-00032" readonly>
</div>
</div>
<div class="col-md-6 mb-3">
<div class="form-group">
<label>Customer Name</label>
<input type="text" name="customer_name" class="form-control form-control-lg" value="Guest">
</div>
</div>

</div>
<div class="row">
<div class="col-md-12 col-sm-12">
    <a href="javascript:void(0)" class="text-white text-decoration-none font-18 addMoreBtn btn btn-sm btn-success" title="Add"><i class="icofont-plus-circle fs-5"></i>Add To Cart</a>
<div class="table-responsive">
<table class="table table-hover table-white">
<thead>
<tr>

<th class="col-md-6">Product Name</th>
<th class="col-md-2">Stock Qty</th>
<th style="width:150px;">Unit Price</th>
<th style="width:150px;">Qty</th>
<th style="width:120px;">Amount</th>
<th> </th>
</tr>
</thead>
<tbody class="kmeTableBody" id="kmeTableBody">
<!-- <tr>
<td>
    <select class="form-control form-select-lg form-control-lg" name="sellist1" style="min-width:200px">
<option selected>Select...</option>
<?php echo $Controller->showProductsInDropDownList();?>
</select>
</td>
<td>
<span class="badge bg-danger">300 qty in Stock</span>
</td>
<td>
<input class="form-control form-control-lg" style="width:150px" type="text">
</td>
<td>
<input class="form-control form-control-lg qty" style="width:150px" type="text" id="qty" value="1">
</td>
<td>
<input class="form-control form-control-lg" readonly="" style="width:120px" type="text">
</td>
<td>-</td>
</tr> -->

</tbody>
</table>
</div>
<div class="table-responsive">
<table class="table table-hover table-white">
<tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="text-right">Grand Total</td>
<td style="text-align: right; padding-right: 30px;width: 230px"><input type="text" name="total" class="form-control form-control-lg" id="total" value="&#8358;20,000.00" readonly>
</td>
</tr>
<tr>
<td colspan="5" class="text-right">Transaction Type</td>
<td style="text-align: right; padding-right: 30px;width: 260px">
<!-- <input class="form-control form-control-lg text-right form-amt" value="0"  type="text"> -->
<select class="form-control form-select-lg form-control-lg form-amt" name="sellist1" style="min-width:100px">
<option selected value="">Select</option>
<option value="Paid">Cash</option>
<option value="Credit">Credit</option>
</select>
</td>
</tr>
<tr>
<td colspan="5" class="text-right">
Amount Tender
</td>
<td style="text-align: right; padding-right: 30px;width: 230px">
<input class="form-control text-right" type="text">
</td>
</tr>
<tr>
<td colspan="5" style="text-align: right; font-weight: bold">
Total Due Balance
</td>
<td style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
$ 0.00
</td>
</tr>
</tbody>
</table>
</div>

<button type="button" class="btn btn-primary btn-lg">Submit Transaction</button>
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
                  <?php include_once ("Includes/ThemeSettings.php")?>
            </div>

        </div>

    </div>

    <!-- Jquery Core Js -->
   <?php include_once ("Includes/FooterGeneralScript.php");?>

   <script>
       $(document).ready(function(){
        $(".addMoreBtn").click(function(){
            let available_qty =10;
            var html_body =`<tr>
            <td><select class="form-control form-select-lg form-control-lg" name="sellist1" style="min-width:200px"><option selected>Select...</option><?php echo $Controller->showProductsInDropDownList();?></select></td>
            <td>${available_qty < 20 ? '<span class="badge bg-danger">'+available_qty+' qty in Stock</span>':'<span class="badge bg-success">'+available_qty+' qty in Stock</span>'}</td>
            <td><input class="form-control form-control-lg" style="width:150px" type="text"></td>
            <td><input class="form-control form-control-lg qty" style="width:150px" type="text" id="qty" value="1"></td>
            <td><input class="form-control form-control-lg product_total" readonly="" style="width:120px" type="text" id="product_total"></td>
            <td><a href="javascript:void(0)" class="text-danger font-18 removeProdBtn" title="Remove"><i class="icofont-trash fs-5"></i></a></td>`;
            $(".kmeTableBody").append(html_body);
        });

        //function to remove tr from table
    $(document).on('click','.removeProdBtn', function(){
        //var is_true =confirm("Are you sure you want to remove this product from list?");
         $(this).closest('tr').remove();
        /*if (is_true) {
            $(this).closest('tr').remove();
            //calculate(0,0);
            //$("#paid").val(0);
        }else{
            return false;
        }*/
    });
    //
    //
    //Payment section
    $('#kmeTableBody').delegate(".qty","keyup change", function(){
        var qty_demand = $(this);
        var tr = $(this).parent().parent();
        var actualQty = parseInt(tr.find(".product_stock").val());
        if((qty_demand.val()=='0') || (parseInt(qty_demand.val()) <= -1)){
jQuery(function validation(){
                     swal.fire("ERROR", "Invalid Quantity Detected!", "error", {
                     button: "Continue",
                        });
                    });
                    $(".__loadingBtn__").attr("disabled", true);
                        return false;
        }else
        if((parseInt(qty_demand.val()) > actualQty)){
          jQuery(function validation(){
                     swal.fire("Warning", "Invalid Quantity!", "warning", {
                     button: "Continue",
                        });
                    });
                    $(".__loadingBtn__").attr("disabled", true);
                        return false; 
        }else{
parseInt(tr.find(".product_total").val(qty_demand.val() * tr.find(".selling_price").val()));
        calculate(0,0);
        $(".__loadingBtn__").attr("disabled", false);
        }
    });
    
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