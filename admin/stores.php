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
                        <h3 class="fw-bold mb-0">Stores</h3>
                     </div>
                  </div>
               </div>
               <!-- Row end  -->
              <!--  <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                  <div class="col">
                     <div class="alert-success alert mb-0">
                        <div class="d-flex align-items-center">
                           <div class="avatar rounded no-thumbnail bg-success text-light"><i class="icofont-cart-alt fs-5"></i></div>
                           <div class="flex-fill ms-3 text-truncate">
                              <div class="h6 mb-0">Open</div>
                              <span class="small"><?php //echo $Controller->getCountedWarehouses('Open') ?></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="alert-danger alert mb-0">
                        <div class="d-flex align-items-center">
                           <div class="avatar rounded no-thumbnail bg-danger text-light"><i class="icofont-star-alt-1 fs-5"></i></div>
                           <div class="flex-fill ms-3 text-truncate">
                              <div class="h6 mb-0">Close</div>
                              <span class="small"><?php //echo $Controller->getCountedWarehouses('Closed') ?></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="alert-warning alert mb-0">
                        <div class="d-flex align-items-center">
                           <div class="avatar rounded no-thumbnail bg-warning text-light"><i class="icofont-spinner-alt-5 fs-5"></i></div>
                           <div class="flex-fill ms-3 text-truncate">
                              <div class="h6 mb-0">Store</div>
                              <span class="small"><?php //echo $Controller->count_Warehouses();?></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="alert-info alert mb-0">
                        <div class="d-flex align-items-center">
                           <div class="avatar rounded no-thumbnail bg-info text-light"><i class="icofont-verification-check fs-5"></i></div>
                           <div class="flex-fill ms-3 text-truncate">
                              <div class="h6 mb-0">Total Goods</div>
                              <span class="small">2000</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
               <!-- Row end  -->
               <div class="row g-3 mb-3">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                           <h6 class="m-0 fw-bold">Stores Data</h6>
                           <div class="col-auto d-flex w-sm-100">
                              <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#newStoreModal"><i class="icofont-plus-circle me-2 fs-6"></i>Add Store</button>
                           </div>
                        </div>
                        <div class="card-body">
                           <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                              <thead>
                                 <tr>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Manager</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    $AllWarehouses = $Controller->getWarehouses();
                                    if ($AllWarehouses !="") {
                                        foreach ($AllWarehouses as $warehouse) {?>
                                 <tr>
                                    <td><?php echo $warehouse->store_name;?></td>
                                    <td><?php echo $warehouse->store_location;?></td>
                                    <td><?php echo $warehouse->manager;?></td>
                                    <td><?php echo $warehouse->phone;?></td>
                                    <td><?php echo $warehouse->status == 'Open' ? '<span class="badge bg-success">Open</span>':'<span class="badge bg-danger">Closed</span>' ?> </td>
                                    <td> <div class="btn-group" role="group" aria-label="Basic outlined example">
                                          <button type="button" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#EditStoreModal"><i class="icofont-edit text-success"></i></button>
                                          <button type="button" data-action="delete_ware_house" data-id="<?php echo $warehouse->id;?>" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
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
               </div>
               <!-- Row end  -->
            </div>
         </div>
         <!-- Modal Custom Settings-->
      </div>
      </div>
      <!-- Add Department-->
      <div class="modal fade" id="newStoreModal" tabindex="-1"  aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title  fw-bold" id="depaddLabel"> Add New Store </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <!-- <div class="text-center mb-2" id="response"></div> -->
                  <div class="deadline-form">
                     <form autocomplete="off" id="AddNewWarehouseForm">
                        <div class="mb-3">
                           <label for="name" class="form-label"> Name</label>
                           <input type="text" class="form-control" name="name">
                        </div>
                        <div class="row g-3 mb-3">
                           <div class="col-sm-12">
                              <label for="manager" class="form-label"> Manager</label>
                              <input type="text" class="form-control" id="manager" name="manager">
                           </div>
                           <div class="col-sm-12">
                              <label for="location" class="form-label"> Location</label>
                              <textarea class="form-control" id="location" name="location" cols="2"></textarea>
                           </div>
                           <div class="col-sm-6">
                              <label for="phone" class="form-label">Store Phone</label>
                              <input type="text" class="form-control" id="phone" name="phone">
                           </div>
                           <div class="col-sm-6">
                              <label for="status" class="form-label">Status</label>
                              <select class="form-control form-select-sm" id="status" name="status">
                                 <option>Choose...</option>
                                 <option value="Open">Open</option>
                                 <option value="Closed">Closed</option>
                              </select>
                           </div>
                           <?php $Controller->getKeyValuePairs("kme_store","create_new_warehouse");?>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
                           <button type="submit" class="btn btn-primary loading">Create</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- EDIT STORE MODAL -->
       <div class="modal fade" id="EditStoreModal" tabindex="-1"  aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title  fw-bold" id="depaddLabel"> Update Store </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <!-- <div class="text-center mb-2" id="response"></div> -->
                  <div class="deadline-form">
                     <form autocomplete="off" id="updateWarehouseForm">
                        <div class="mb-3">
                           <label for="name" class="form-label"> Name</label>
                           <input type="text" class="form-control" name="name">
                        </div>
                        <div class="row g-3 mb-3">
                           <div class="col-sm-12">
                              <label for="manager" class="form-label"> Manager</label>
                              <input type="text" class="form-control" id="manager" name="manager">
                           </div>
                           <div class="col-sm-12">
                              <label for="location" class="form-label"> Location</label>
                              <textarea class="form-control" id="location" name="location" cols="2"></textarea>
                           </div>
                           <div class="col-sm-6">
                              <label for="phone" class="form-label">Store Phone</label>
                              <input type="text" class="form-control" id="phone" name="phone">
                           </div>
                           <div class="col-sm-6">
                              <label for="status" class="form-label">Status</label>
                              <select class="form-control form-select-sm" id="status" name="status">
                                 <option>Choose...</option>
                                 <option value="Open">Open</option>
                                 <option value="Closed">Closed</option>
                              </select>
                           </div>
                           <?php $Controller->getKeyValuePairs("kme_store","create_new_warehouse");?>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
                           <button type="submit" class="btn btn-primary loading">Create</button>
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
         .addClass( 'nowrap')
         .dataTable( {
             responsive: true,
             columnDefs: [
                 { targets: [-1, -3], className: 'dt-body-right' }
             ]
         });
         
         $(document).ready(function(){
              $(".deleterow").on("click", function() {
               let rowId = $(this).data("id"),action=$(this).data("action");
               if (confirm("If your delete a store, all products associated with it will be deleted, Are you Sure?")) {
                   $.post("../app/View",{store_id:rowId,action:action},function(res){
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

         $("#AddNewWarehouseForm").on("submit",function(e){
         e.preventDefault();
         $(".loading").html('<img src="../assets/loaders/tail-spin.svg" width="25">Loading...').attr("disabled", "disabled");
         const formData = $(this).serialize();
         $.post("../app/View",formData,function(data){
            setTimeout(function(){
                $(".loading").html("Create").attr("disabled", false);
                $("#server-response").html(data);
            },1500)
         
         })
         })
         });
      </script>
      </body>
</html>