<?php 
   require_once "helper.php";
   
    ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
   <head>
      <?php include_once ("Includes/MetaTag.php");?>
      <title>::POS:: Suppliers </title>
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
                        <h3 class="fw-bold mb-0">Suppliers Information</h3>
                        <div class="col-auto d-flex w-sm-100">
                           <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#addSupplierModalForm"><i class="icofont-plus-circle me-2 fs-6"></i>Add Suppliers</button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Row end  -->
               <div class="row clearfix g-3">
                  <div class="col-sm-12">
                     <div class="card mb-3">
                        <div class="card-body">
                           <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                              <thead>
                                 <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Regdate</th>
                                    <th>e-Mail</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    $AllSupplierss = $Controller->getSuppliers();
                                    if ($AllSupplierss !="") {
                                        $cnt =0;
                                        foreach ($AllSupplierss as $supplier) {
                                            $cnt++;?>
                                 <tr>
                                    <td><strong><?php echo $cnt; ?></strong></td>
                                    <td><?php echo $supplier->fullname;?> </td>
                                    <td>
                                       <span class="fw-bold ms-1"><?php echo $supplier->company;?></span>
                                    </td>
                                    <td><?php echo date("D M jS Y",strtotime($supplier->created_at));?></td>
                                    <td><?php echo $supplier->email;?></td>
                                    <td><?php echo $supplier->phone;?></td>
                                    <td><?php echo $supplier->address;?></td>
                                    <td>
                                       <div class="btn-group" role="group" aria-label="Basic outlined example">
                                          <button type="button" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                          <button type="button" data-action="delete_supplier" data-id="<?php echo $supplier->id;?>" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
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
               <!-- Row End -->
            </div>
         </div>
         <!-- Modal Custom Settings-->
         <!-- Add Expence-->
         <div class="modal fade" id="addSupplierModalForm" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title  fw-bold" id="expaddLabel">Add Suppliers</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <div class="deadline-form">
                        <form id="addSuppplierForm" autocomplete="off">
                           <div class="row g-3 mb-3">
                              <div class="col-sm-12">
                                 <label for="name" class="form-label">Supplier Name</label>
                                 <input type="text" class="form-control form-control-lg" id="name" placeholder="Enter representative name..." name="name">
                              </div>
                              <div class="col-sm-12">
                                 <label for="taxtno" class="form-label">Company Name</label>
                                 <input type="text" class="form-control form-control-lg" id="taxtno" name="company" placeholder="Enter Company name...">
                              </div>
                           </div>
                           <div class="row g-3 mb-3">
                              <div class="col-sm-12">
                                 <label for="abc11" class="form-label">Supplier e-Mail</label>
                                 <input type="text" class="form-control form-control-lg" id="abc11" placeholder="Enter Company e-mail..." name="email">
                              </div>
                              <div class="col-sm-12">
                                 <label for="abc111" class="form-label">Supplier Phone</label>
                                 <input type="text" class="form-control form-control-lg" id="abc111" placeholder="Enter Company phone..." name="phone">
                              </div>
                           </div>
                           <div class="row g-3 mb-3">
                              <div class="col-sm-12">
                                 <label class="form-label">Supplier Address</label>
                                 <textarea class="form-control form-control-lg" rows="2" placeholder="Enter Company address..." name="address"></textarea>
                              </div>
                           </div>
                           <input type="hidden" name="kme_supplier" value="kme">
                           <input type="hidden" name="action" value="create_new_supplier">
                           <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                              <button type="submit" class="btn btn-primary loading">Submit</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Edit Expence-->
         <div class="modal fade" id="expedit" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title  fw-bold" id="expeditLabel"> Edit Suppliers</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <div class="deadline-form">
                        <form>
                           <div class="row g-3 mb-3">
                              <div class="col-sm-6">
                                 <label for="item1" class="form-label">Item</label>
                                 <input type="text" class="form-control" id="item1" value="Cloth"> 
                              </div>
                              <div class="col-sm-6">
                                 <label for="taxtno1" class="form-label">Tax No</label>
                                 <input type="text" class="form-control" id="taxtno1" value="5869">
                              </div>
                           </div>
                           <div class="row g-3 mb-3">
                              <div class="col-sm-6">
                                 <label  class="form-label">Suppliers</label>
                                 <select class="form-select">
                                    <option selected>Joan Dyer</option>
                                    <option value="1">Ryan Randall</option>
                                    <option value="2">Phil Glover</option>
                                    <option value="3">Victor Rampling</option>
                                    <option value="4">Sally Graham</option>
                                 </select>
                              </div>
                              <div class="col-sm-6">
                                 <label for="abc1" class="form-label">Suppliers Register date</label>
                                 <input type="date" class="form-control w-100" id="abc1" value="2021-03-12">
                              </div>
                           </div>
                           <div class="row g-3 mb-3">
                              <div class="col-sm-6">
                                 <label for="mailid" class="form-label">Mail</label>
                                 <input type="text" class="form-control" id="mailid" value="PhilGlover@gmail.com">
                              </div>
                              <div class="col-sm-6">
                                 <label for="phoneid" class="form-label">Phone</label>
                                 <input type="text" class="form-control" id="phoneid" value="843-555-0175">
                              </div>
                           </div>
                           <div class="row g-3 mb-3">
                              <div class="col-sm-12">
                                 <label class="form-label">Address</label>
                                 <textarea class="form-control" rows="3">4 Shirley Ave. West Chicago, IL 60185</textarea>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                     <button type="submit" class="btn btn-primary">Save</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- Jquery Core Js -->
      <?php include_once ("Includes/FooterGeneralScript.php");?>
      <!-- Jquery Page Js -->
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
       
          $(".deleterow").on("click", function() {
               let rowId = $(this).data("id"),action=$(this).data("action");
               if (confirm("Are you Sure, you want to delete this Supplier?")) {
                   $.post("../app/View",{supplierId:rowId,action:action},function(res){
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
             //
               $("#addSuppplierForm").on("submit",function(e){
         e.preventDefault();
         $(".loading").html('<img src="../assets/loaders/tail-spin.svg" width="25">Loading...').attr("disabled", "disabled");
         const formData = $(this).serialize();
         $.post("../app/View",formData,function(data){
            setTimeout(function(){
                $(".loading").html("Submit").attr("disabled", false);
                $("#server-response").html(data);
            },1500)
         
         })
         })
         });
      </script>
      </body>
</html>