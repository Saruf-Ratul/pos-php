<?php
require_once "app/Controller.php";
$Controller = new Controller();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<!-- A Product of KodeMadeEazy| FlatERP Teach -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php $Controller->app(); ?>:: Sign-in </title>
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon"> <!-- Favicon-->

    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/main.style.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugin/toastr/toastr.min.css">

</head>
<body>
    <div id="ebazar-layout" class="theme-blue">
        <!-- main body area -->
        <div class="main p-2 py-3 p-xl-5 ">
            <!-- Body: Body -->
            <div class="body d-flex p-0 p-xl-5">
                <div class="container-xxl">
                    <div class="row g-0">
                        <div class="col-lg-6 d-block d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                            <div style="max-width: 25rem;">
                                <div class="text-center mb-5">
                           
                                   <img src="assets/images/favicon.png" width="50" height="50" class="img-fluid">
                                </div>
                                <div class="mb-5 text-center">
                                    <h2 class="color-900 text-center fw-bold text-info"><strong><?php $Controller->app();?></strong>
                                        </h2>
                                </div>
                                <!-- Image block -->
                                <div class="">
                                    <img src="assets/images/login-img.png" alt="login-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                            <div class="w-100 p-3 p-md-5 card border-0 shadow-sm" style="max-width: 32rem;border-radius:20px !important;">
                                <!-- Form -->
                                <form class="row g-1 p-3 p-md-4" id="LoginForm" autocomplete="off">
                                    <div class="col-12 text-center mb-2">
                                        <h3 class="fw-bold text-center text-info"> <strong>LOGIN</strong></h3>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">Email address</label>
                                            <input type="text" class="form-control form-control-lg" placeholder="email@user.com" name="email_address">
                                        </div>
                                    </div>
                                    <!-- A Product of KodeMadeEazy| FlatERP Teach -->
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <div class="form-label">
                                                <span class="d-flex justify-content-between align-items-center">
                                                    Password</span>
                                            </div>
                                            <input type="password" class="form-control form-control-lg" placeholder="***************" name="password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remember me
                                            </label>
                                            <a class="text-danger pull-right" href="auth-password-reset">Forgot Password?</a>
                                        </div>

                                    </div>
                                    <input type="hidden" name="action" value="login_user">
                                    <div class="col-12 col-md-12 text-center mt-2">
                                      <button type="submit" class="btn btn-lg btn-block btn-dark lift loginLoading" style="width: 100% !important;">SIGN IN</button>
                                    </div>
                                    <?php $Controller->copyRight();?>
                               
                                </form>
                                <!-- End Form -->
                                
                            </div>
                        </div>
                    </div> <!-- End Row -->
                    
                </div>
            </div>
<!-- A Product of KodeMadeEazy| FlatERP Teach -->
        </div>

    </div>
    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/plugin/toastr/toastr.min.js"></script>
    <script src="assets/js/kme-toastr.js"></script>
    <div id="server-response"></div>
    <script>
        $(document).ready(function(){
    $("#LoginForm").on("submit",function(e){
        e.preventDefault();
        $(".loginLoading").html('<img src="assets/loaders/tail-spin.svg" width="25">').attr("disabled", "disabled");
        const formData = $(this).serialize();
       $.post("app/View",formData,function(data){
           setTimeout(function(){
               $(".loginLoading").html("SIGN IN").attr("disabled", false);
               $("#server-response").html(data);
           },500)
       })
    })
        })
    </script>
</body>

</html>