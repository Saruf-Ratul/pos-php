<?php 

require_once "helper.php";

 ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <?php include_once ("Includes/MetaTag.php");?>

    <title>::POS:: Category </title>
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
                                <h3 class="fw-bold mb-0">Product Category</h3>
                                
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
   </script>
</body>

</html> 