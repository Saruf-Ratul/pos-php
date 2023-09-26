<?php 

require_once "helper.php";

 ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <?php include_once ("Includes/MetaTag.php");?>

    <title>::POS:: Category List </title>
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
                                <h3 class="fw-bold mb-0">Product Category List</h3>
                                <div class="col-auto d-flex w-sm-100">
                                    <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Category</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Category Name</th>
                                                <th>Created at</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php 

                                            $AllCategories = $Controller->getCategory();
                                            if ($AllCategories !="") {
                                                $cnt =0;
                                                foreach ($AllCategories as $category) {
                                                    $cnt++;?>
                                            <tr>
                                                <td><strong><?php echo $cnt; ?></strong></td>
                                                <td><?php echo ucfirst($category->name) ?></td>
                                                <td><?php echo $Controller->get_date($category->created_at);?></td>
                                                <td><?php echo $category->status =="Active" ? '<span class="badge bg-success">Active</span>': '<span class="badge bg-danger">Inactive</span>' ?> </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" data-action="delete_category" data-id="<?php echo $category->id;?>" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                       </div>
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
    <!-- Add Category Modal-->
 <div class="modal fade" id="expadd" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  fw-bold" id="expaddLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="addNewCategoryForm">
                    <div class="modal-body">
                        <div class="deadline-form">
                             <?php $Controller->getKeyValuePairs("kme_category","create_new_category");?>
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-12">
                                        <label for="item" class="form-label">Category Name</label>
                                        <input type="text" class="form-control form-control-lg" name="category_name">
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="taxtno" class="form-label">Status</label>
                                       <select class="form-select form-control form-control-lg" name="status">
                                        <option value="" selected>Choose...</option>
                                           <option value="Active">Active</option>
                                           <option value="Inactive">Inactive</option>
                                       </select>
                                    </div>
                                </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-md loading">Create</button>
                         <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Dismiss</button>
                    </div>
                      </form>
                </div>
                </div>
            </div>

             <!-- Edit Customers-->
            <div class="modal fade" id="expedit" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  fw-bold" id="expeditLabel"> Edit Customers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                   <form>
                    <div class="modal-body">
                        <div class="deadline-form">
                            
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-12">
                                        <label for="item" class="form-label">Category Name</label>
                                        <input type="text" class="form-control" id="item" value="Watch">
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="taxtno" class="form-label">Status</label>
                                       <select class="form-select form-control" name="status">
                                           <option selected>Active</option>
                                           <option>Inactive</option>
                                       </select>
                                    </div>
                                </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                         <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cloase</button>
                    </div>
                      </form>
                </div>
                </div>
            </div>

    <!-- Jquery Core Js -->
    <?php include_once ("Includes/FooterGeneralScript.php");?>

    <!-- Jquery Page Js -->
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
               if (confirm("Are you Sure, you want to delete this Category?")) {
                   $.post("../app/View",{catid:rowId,action:action},function(res){
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

    $("#addNewCategoryForm").on("submit",function(e){
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