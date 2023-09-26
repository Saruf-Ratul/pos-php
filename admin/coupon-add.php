<?php 

require_once "helper.php";

 ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <?php include_once ("Includes/MetaTag.php");?>

    <title>::POS:: Coupons Code </title>
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
                                <h3 class="fw-bold mb-0">Coupons Add</h3>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row clearfix g-3">
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Coupon Status</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="couponsstatus" value="1">
                                        <label class="form-check-label">
                                            Active
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="couponsstatus" value="2">
                                        <label class="form-check-label">
                                            In Active
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="couponsstatus" value="3">
                                        <label class="form-check-label">
                                            Future Plan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Date Schedule</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-12">
                                            <label class="form-label">Start Date</label>
                                            <input type="date" class="form-control w-100" required="" name="dateFrom">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">End Date</label>
                                            <input type="date" class="form-control w-100" required="" name="dateTo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Coupon Information</h6>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label class="form-label">Coupons Code</label>
                                                <input type="text" class="form-control" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Discount Products</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Open this select category</option>
                                                    <?php echo $Controller->showProductsInDropDownList();?>
                                                    
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Discount Warehouse</label>
                                                <select class="form-select" aria-label="Default select example">
                                                 <option selected="">Open this select Warehouse</option>
                                                    <?php echo $Controller->showWarehousesInDropDownList();?>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Coupons Limits</label>
                                                <input type="text" class="form-control" required="">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Coupons Types</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="couponstype">
                                                    <label class="form-check-label">
                                                        Free Shipping
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="couponstype" checked>
                                                    <label class="form-check-label">
                                                        Percentage
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="couponstype">
                                                    <label class="form-check-label">
                                                        Fixed Amount
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Discount value</label>
                                                <input type="text" class="form-control" required="">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-4 text-uppercase px-5">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->
                </div>
            </div>
            
            <!-- Modal Custom Settings-->
         
        </div>     
        
    </div>
    <!-- Jquery Core Js -->
    <?php include_once ("Includes/FooterGeneralScript.php");?>
</body>

</html>