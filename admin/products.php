<?php 
   require_once "helper.php";
   
    ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
   <head>
      <?php include_once ("Includes/MetaTag.php");?>
      <title>::POS:: Stock </title>
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
                        <h3 class="fw-bold mb-0">Stock Inventory</h3>
                        <div class="col-auto d-flex w-sm-100">
                           <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add New Product</button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Row end  -->
               <div class="row g-3 mb-3">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                           <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                              <thead>
                                 <tr>
                                    <th>Barcode</th>
                                    <th>Products</th>
                                    <th>Category</th>
                                    <th>Expire</th>
                                    <th>Price</th>
                                    <th>In Stock</th>
                                    <th>Supplier</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    $AllProducts = $Controller->getProducts();
                                    if ($AllProducts !="") {
                                        foreach ($AllProducts as $product) {
                                          $supplier = $Controller->searchSupplier("id",$product->supId);?>
                                 <tr>
                                    <td><strong><?php echo $product->barcode; ?></strong></td>
                                    <td><span><?php echo htmlspecialchars_decode($product->name); ?></span></td>
                                   
                                    <td><?php echo ($product->category); ?></td>
                                    <td><?php echo $Controller->get_date($product->expiry_date); ?></td>
                                    <td>&#8358;<?php echo number_format($product->selling_price,2) ?></td>
                                    <td>
                                       <?php echo ($product->qty);?>
                                    </td>
                                    <td><?php if ($supplier) {
                                      echo $supplier->company;
                                    }else{
                                       echo '<span class="badge bg-danger">Not Available</span>';
                                    } ?></td>
                                    <td>
                                       <?php echo ($product->qty <= 10 ) ? '<span class="badge bg-danger">Out of Stock</span>' : '<span class="badge bg-success">In Stock</span>'; ?>
                                    </td>
                                    <td>
                                       <div class="btn-group" role="group" aria-label="Basic outlined example">
                                          <button type="button" class="btn btn-outline-secondary editProductBtn" data-id="<?php echo $product->proId;?>" data-action="editProduct_action"><i class="icofont-edit text-success"></i></button>
                                          <button type="button" data-action="delete_product" data-id="<?php echo $product->proId;?>" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                       </div>
                                    </td>
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
            </div>
         </div>
         <!-- Modal Custom Settings-->
      </div>
      </div>
      <!-- Add Expence-->
      <div class="modal fade" id="expadd" tabindex="-1"  aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title fw-bold" id="expaddLabel">Add Product</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="deadline-form">
                     <form id="AddProductForm" autocomplete="off">
                        <div class="row g-3 mb-2">
                           <div class="col-sm-6">
                              <label for="batch_number" class="form-label">Product Batch</label>
                              <input type="text" class="form-control form-control-lg" id="batch_number" placeholder="e.g Jan-2023 Batch" name="batch_number">
                           </div>
                           <div class="col-sm-6">
                              <label for="item" class="form-label">Product Name</label>
                              <input type="text" class="form-control form-control-lg" id="item" placeholder="e.g T-Shirt" name="item">
                           </div>
                           <div class="col-sm-12">
                              <label for="item_desc" class="form-label">Product Description</label>
                              <input type="text" class="form-control form-control-lg" id="item_desc" placeholder="Men T-Shirt" name="item_desc">
                           </div>
                        </div>
                        <div class="row g-3 mb-2">
                           <div class="col-sm-4 col-md-4">
                              <label for="cost" class="form-label">Cost Price</label>
                              <input type="text" class="form-control form-control-lg" id="cost" placeholder="&#8358;2000" name="cost">
                           </div>
                           <div class="col-sm-4 col-md-4">
                              <label for="item_price" class="form-label">Selling Price</label>
                              <input type="text" class="form-control form-control-lg" id="item_price" placeholder="&#8358;2500" name="item_price">
                           </div>
                           <div class="col-sm-4 col-md-4">
                              <label for="item_qty" class="form-label">Qty (Cartons)</label>
                              <input type="number" class="form-control form-control-lg" name="item_qty">
                           </div>
                        </div>
                        <div class="row g-3 mb-3">
                           <div class="col-sm-6">
                              <label for="supplier" class="form-label">Supplier</label>
                              <select class="form-select form-control custom-select form-control-lg" name="supplier">
                                 <option value="" selected>Choose...</option>
                                 <?php echo $Controller->showSuppliersInDropDownList();?>
                              </select>
                           </div>
                           <div class="col-sm-6">
                              <label for="category" class="form-label">Category</label>
                              <select class="form-select form-control custom-select form-control-lg" name="category">
                           <option value="" selected>Choose...</option>
                              <?php echo $Controller->showCategoriesInDropDownList();?>
                              </select>
                           </div>
                        </div>
                        <div class="row g-3 mb-3">
                           <div class="col-sm-6">
                              <label class="form-label">MFT Date</label>
                              <input type="date" name="mft_date" class="form-control form-control-lg">
                           </div>
                           <div class="col-sm-6">
                              <label class="form-label">Expiry Date</label>
                              <input type="date" name="expiry_date" class="form-control form-control-lg">
                           </div>
                        </div>
                        <?php $Controller->getKeyValuePairs("kme_product","create_new_product");?>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
                           <button type="submit" class="btn btn-primary loading">Submit</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Edit Modal -->
      <div class="modal fade" id="EditProductModal" tabindex="-1"  aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title fw-bold" id="expaddLabel">Update Product</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="deadline-form">
                     <form id="EditproductForm">
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                              <label for="product_batch" class="form-label">Product Batch</label>
                              <input type="text" class="form-control form-control-lg" name="product_batch" id="product_batch">
                           </div>
                           <div class="col-sm-12">
                              <label for="product_name" class="form-label">Product Name</label>
                              <input type="text" class="form-control form-control-lg" id="product_name" name="product_name">
                           </div>
                           <div class="col-sm-12">
                              <label for="product_desc" class="form-label">Product Description</label>
                              <input type="text" class="form-control form-control-lg" id="product_desc" name="product_desc">
                           </div>
                        </div>
                        <div class="row g-3 mb-3">
                           <div class="col-sm-6">
                              <label for="product_selling_price" class="form-label">Selling Price</label>
                              <input type="text" class="form-control form-control-lg" id="product_selling_price"  name="sell_price">
                           </div>
                           <div class="col-sm-6">
                              <label for="product_qty" class="form-label">Qty (pcs)</label>
                              <input type="number" class="form-control form-control-lg" id="product_qty" name="product_qty" value="30">
                           </div>
                        </div>
                        <input type="hidden" name="productId" id="productId">
                         <input type="hidden" name="item_cost_price" id="item_cost_price">
                         <?php $Controller->getKeyValuePairs("kme_product","update_existing_product");?>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Dismiss</button>
                           <button type="submit" class="btn btn-primary loading2">Update</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Jquery Core Js -->
      <?php include_once ("Includes/FooterGeneralScript.php");?>
      <script>
         $('#myDataTable')
         .addClass( 'nowrap' )
         .dataTable( {
             responsive: true,
             columnDefs: [
                 { targets: [-1, -3], className: 'dt-body-right' }
             ]
         });
         
         $(document).ready(function(){
             $(".deleterow").on("click", function() {
               let rowId = $(this).data("id"),action=$(this).data("action");
               if (confirm("Are you Sure, you want to delete this Product?")) {
                   $.post("../app/View",{prodId:rowId,action:action},function(res){
                  setTimeout(function(){
                    if (res) {
                var tablename = $(this).closest('table').DataTable();  
                    tablename
                    .row( $(this)
                    .parents('tr'))
                    .remove()
                    .draw();  
                    }
                $("#server-response").html(res);
            },500)
               });
               }
               return false;
            });

         $("#AddProductForm").on("submit",function(e){
         e.preventDefault();
         $(".loading").html('<img src="../assets/loaders/tail-spin.svg" width="25">Loading...').attr("disabled", "disabled");
         const formData = $(this).serialize();
         $.post("../app/View",formData,function(data){
            setTimeout(function(){
                $(".loading").html("Submit").attr("disabled", false);
                $("#server-response").html(data);
            },1500)
         
         })
         });

         //edit action 
         $(".editProductBtn").on("click", function(){
      let proId = $(this).data("id");
      let action = $(this).data("action");
      
        let options = {"action":action,"proId": proId};
            $.ajax({
               url:"../app/View",
               method:"POST",
               data:options,
               dataType:"JSON",
               success(result){
                if (result) {
                 $("#productId").val(result.proId);
                     $("#product_batch").val(result.batch);
                     $("#product_desc").val(result.name);
                     $("#product_name").val(result.prod_desc);
                     $("#item_cost_price").val(result.cost_price);
                     $("#product_selling_price").val(result.selling_price);
                     $("#product_qty").val(result.qty);
                     $("#productId").val(result.proId);
                     $("#EditProductModal").modal("show");
                } 
               },
               error(err){
                  console.error(err.responseText);
               }
            });
         })

         //when submit update btn is clicked 
         $("#EditproductForm").on("submit",function(e){
         e.preventDefault();
         $(".loading2").html('<img src="../assets/loaders/tail-spin.svg" width="25">Loading...').attr("disabled", "disabled");
         const formData = $(this).serialize();
         $.post("../app/View",formData,function(data){
            setTimeout(function(){
                $(".loading2").html("Update").attr("disabled", false);
                $("#server-response").html(data);
            },500)
         
         })
         });
         })
      </script>
      </body>
</html>