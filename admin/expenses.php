<?php 

require_once "helper.php";

 ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <?php include_once ("Includes/MetaTag.php");?>

    <title>::POS:: Expenses </title>
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
                                <h3 class="fw-bold mb-0">POS SYSTEM EXPENSES</h3>
                                <div class="col-auto d-flex w-sm-100">
                                    <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Expenses</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row clearfix g-3">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Exp Id</th>
                                                <th>Exp Item</th>
                                                <th>Exp Order By</th> 
                                                <th>Date</th>
                                                <th>From</th> 
                                                <th>Amount</th>
                                                <th>Status</th>   
                                                <th>Actions</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <strong>#EX-00002</strong>
                                                </td>
                                                <td>
                                                    Mortgage Payments 
                                                </td>
                                                <td>
                                                    <img class="avatar rounded" src="../assets/images/xs/avatar1.svg" alt="">
                                                    <span class="fw-bold ms-1">Joan Dyer</span>
                                                </td>
                                                <td>
                                                        12/05/2021
                                                </td>
                                                <td>Office Owner</td>
                                                <td>$50000</td>
                                                <td><span class="badge bg-warning">In Progress</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->
                </div>
            </div>
            
            <!-- Modal Custom Settings-->

            <!-- Add Expence-->
            <div class="modal fade" id="expadd" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  fw-bold" id="expaddLabel"> Add Expenses</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="deadline-form">
                            <form>
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-6">
                                        <label for="item" class="form-label">Exp Item</label>
                                        <input type="text" class="form-control" id="item">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="amount" class="form-label">Amount</label>
                                        <input type="text" class="form-control" id="amount">
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                <div class="col-sm-6">
                                    <label for="depone" class="form-label">Exp Order By</label>
                                    <input type="text" class="form-control" id="depone">
                                </div>
                                <div class="col-sm-6">
                                    <label for="abc" class="form-label">Date</label>
                                    <input type="date" class="form-control w-100" id="abc">
                                </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-6">
                                        <label for="deptwo" class="form-label">From</label>
                                        <input type="text" class="form-control" id="deptwo">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Status</label>
                                        <select class="form-select">
                                            <option selected>In Progress</option>
                                            <option value="1">Completed</option>
                                            <option value="2">Wating</option>
                                            <option value="3">Decline</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
                </div>
            </div>

            <!-- Edit Expence-->
            <div class="modal fade" id="expedit" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  fw-bold" id="expeditLabel"> Edit Expenses</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="deadline-form">
                            <form>
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-6">
                                        <label for="item1" class="form-label">Exp Item</label>
                                        <input type="text" class="form-control" id="item1" value="Mortgage Payments">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="amount1" class="form-label">Amount</label>
                                        <input type="text" class="form-control" id="amount1" value="$50000">
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                <div class="col-sm-6">
                                    <label  class="form-label">Exp Order By</label>
                                    <select class="form-select">
                                        <option selected>Joan Dyer</option>
                                        <option value="1">Ryan Randall</option>
                                        <option value="2">Phil Glover</option>
                                        <option value="3">Victor Rampling</option>
                                        <option value="4">Sally Graham</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="abc1" class="form-label">Date</label>
                                    <input type="date" class="form-control w-100" id="abc1" value="2021-05-12">
                                </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-6">
                                        <label for="deptwo1" class="form-label">From</label>
                                        <input type="text" class="form-control" id="deptwo1" value="Office Owner">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Status</label>
                                        <select class="form-select">
                                            <option selected>In Progress</option>
                                            <option value="1">Completed</option>
                                            <option value="2">Wating</option>
                                            <option value="3">Decline</option>
                                        </select>
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
            $('.deleterow').on('click',function(){
            var tablename = $(this).closest('table').DataTable();  
            tablename
                    .row( $(this)
                    .parents('tr') )
                    .remove()
                    .draw();

            } );
        });
    </script>
</body>

</html>