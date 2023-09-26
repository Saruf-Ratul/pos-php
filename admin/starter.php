<?php 

require_once "helper.php";

 ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <?php include_once ("Includes/MetaTag.php");?>

    <title>::POS:: Order List </title>
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
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body text-center p-5">
                                <img src="../assets/images/no-data.svg" class="img-fluid mx-size" alt="No Data">
                                <div class="mt-4 mb-2">
                                    <span class="text-muted">No data to show</span>
                                </div>
                                <button type="button" class="btn btn-white border lift mt-1">Get Started</button>
                                <button type="button" class="btn btn-primary border lift mt-1">Back to Home</button>
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
</body>

</html>