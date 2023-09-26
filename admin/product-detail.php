<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/product-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 21:40:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>::eBazar::  Product Detail </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    
    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/ebazar.style.min.css">
</head>
<body>
    <div id="ebazar-layout" class="theme-blue">
        
        <!-- sidebar -->
        <div class="sidebar px-4 py-4 py-md-4 me-0">
            <div class="d-flex flex-column h-100">
                <a href="index.php" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <i class="bi bi-bag-check-fill fs-4"></i>
                    </span>
                    <span class="logo-text">eBazar</span>
                </a>
                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1 mt-3">
                    <li><a class="m-link" href="index.php"><i class="icofont-home fs-5"></i> <span>Dashboard</span></a></li>
                    <li class="collapsed">
                        <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#menu-product" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Products</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse show" id="menu-product">
                                <li><a class="ms-link" href="product-grid.php">Product Grid</a></li>
                                <li><a class="ms-link" href="product-list.php">Product List</a></li>
                                <li><a class="ms-link" href="product-edit.php">Product Edit</a></li>
                                <li><a class="ms-link active" href="product-detail.html">Product Details</a></li>
                                <li><a class="ms-link" href="product-add.php">Product Add</a></li>
                                <li><a class="ms-link" href="product-cart.php">Shopping Cart</a></li>
                                <li><a class="ms-link" href="checkout.php">Checkout</a></li>
                            </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#categories" href="#">
                            <i class="icofont-chart-flow fs-5"></i> <span>Categories</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="categories">
                                <li><a class="ms-link" href="categorie-list.php">Categories List</a></li>
                                <li><a class="ms-link" href="categories-edit.php">Categories Edit</a></li>
                                <li><a class="ms-link" href="categories-add.php">Categories Add</a></li>
                            </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-order" href="#">
                        <i class="icofont-notepad fs-5"></i> <span>Orders</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-order">
                            <li><a class="ms-link" href="order-list.php">Orders List</a></li>
                            <li><a class="ms-link" href="order-details.php">Order Details</a></li>
                            <li><a class="ms-link" href="order-invoices.php">Order Invoices</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#customers-info" href="#">
                        <i class="icofont-funky-man fs-5"></i> <span>Customers</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="customers-info">
                            <li><a class="ms-link" href="customers.php">Customers List</a></li>
                            <li><a class="ms-link" href="customer-detail.php">Customers Details</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-sale" href="#">
                        <i class="icofont-sale-discount fs-5"></i> <span>Sales Promotion</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-sale">
                            <li><a class="ms-link" href="coupons-list.php">Coupons List</a></li>
                            <li><a class="ms-link" href="coupon-add.php">Coupons Add</a></li>
                            <li><a class="ms-link" href="coupon-edit.php">Coupons Edit</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-inventory" href="#">
                        <i class="icofont-chart-histogram fs-5"></i> <span>Inventory</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-inventory">
                            <li><a class="ms-link" href="inventory-info.php">Stock List</a></li>
                            <li><a class="ms-link" href="purchase.php">Purchase</a></li>
                            <li><a class="ms-link" href="supplier.php">Supplier</a></li>
                            <li><a class="ms-link" href="returns.php">Returns</a></li>
                            <li><a class="ms-link" href="department.php">Department</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Componentsone" href="#"><i
                                class="icofont-ui-calculator"></i> <span>Accounts</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-Componentsone">
                            <li><a class="ms-link" href="invoices.php">Invoices </a></li>
                            <li><a class="ms-link" href="expenses.php">Expenses </a></li>
                            <li><a class="ms-link" href="salaryslip.php">Salary Slip </a></li>
                            <li><a class="ms-link" href="create-invoice.php">Create Invoice </a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#app" href="#">
                        <i class="icofont-code-alt fs-5"></i> <span>App</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="app">
                            <li><a class="ms-link" href="calendar.php">Calandar</a></li>
                            <li><a class="ms-link" href="chat.php"> Chat App</a></li>
                        </ul>
                    </li>
                    <li><a class="m-link" href="store-locator.php"><i class="icofont-focus fs-5"></i> <span>Store Locator</span></a></li>
                    <li><a class="m-link" href="ui-elements/ui-alerts.html"><i class="icofont-paint fs-5"></i> <span>UI Components</span></a></li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#page" href="#">
                        <i class="icofont-page fs-5"></i> <span>Other Pages</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="page">
                            <li><a class="ms-link" href="admin-profile.php">Profile Page</a></li>
                            <li><a class="ms-link" href="purchase-plan.php">Price Plan Example</a></li>
                            <li><a class="ms-link" href="charts.php">Charts Example</a></li>
                            <li><a class="ms-link" href="table.php">Table Example</a></li>
                            <li><a class="ms-link" href="forms.php">Forms Example</a></li>
                            <li><a class="ms-link" href="icon.php">Icons</a></li>
                            <li><a class="ms-link" href="contact.php">Contact Us</a></li>
                            <li><a class="ms-link" href="todo-list.php">Todo List</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Menu: menu collepce btn -->
                <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                    <span class="ms-2"><i class="icofont-bubble-right"></i></span>
                </button>
            </div>
        </div>    

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4"> 

            <!-- Body: Header -->
            <div class="header">
                <nav class="navbar py-4">
                    <div class="container-xxl">
        
                        <!-- header rightbar icon -->
                        <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                            <div class="d-flex">
                                <a class="nav-link text-primary collapsed" href="help.php" title="Get Help">
                                    <i class="icofont-info-square fs-5"></i>
                                </a>
                            </div>
                            <div class="dropdown zindex-popover">
                                <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                    <img src="assets/images/flag/GB.png" alt="">
                                </a>
                                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3">
                                    <div class="card border-0">
                                        <ul class="list-unstyled py-2 px-3">
                                            <li>
                                                <a href="#" class=""><img src="assets/images/flag/GB.png" alt=""> English</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="assets/images/flag/DE.png" alt=""> German</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="assets/images/flag/FR.png" alt=""> French</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="assets/images/flag/IT.png" alt=""> Italian</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="assets/images/flag/RU.png" alt=""> Russian</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="dropdown notifications">
                                <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                    <i class="icofont-alarm fs-5"></i>
                                    <span class="pulse-ring"></span>
                                </a>
                                <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3">
                                    <div class="card border-0 w380">
                                        <div class="card-header border-0 p-3">
                                            <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                                                <span>Notifications</span>
                                                <span class="badge text-white">06</span>
                                            </h5>
                                        </div>
                                        <div class="tab-content card-body">
                                            <div class="tab-pane fade show active">
                                                <ul class="list-unstyled list mb-0">
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar1.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Chloe Walkerr</span> <small>2MIN</small></p>
                                                                <span class="">Added New Product 2021-07-15 <span class="badge bg-success">Add</span></span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <div class="avatar rounded-circle no-thumbnail">AH</div>
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan	Hill</span> <small>13MIN</small></p>
                                                                <span class="">Invoice generator </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar3.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Melanie	Oliver</span> <small>1HR</small></p>
                                                                <span class="">Orader  Return RT-00004</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar5.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Boris Hart</span> <small>13MIN</small></p>
                                                                <span class="">Product Order to Toyseller</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar6.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan	Lambert</span> <small>1HR</small></p>
                                                                <span class="">Leave Apply</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar7.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Zoe Wright</span> <small class="">1DAY</small></p>
                                                                <span class="">Product Stoke Entry Updated</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a class="card-footer text-center border-top-0" href="#"> View all notifications</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                                <div class="u-info me-2">
                                    <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">John Quinn</span></p>
                                    <small>Admin Profile</small>
                                </div>
                                <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                    <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/profile_av.svg" alt="profile">
                                </a>
                                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                    <div class="card border-0 w280">
                                        <div class="card-body pb-0">
                                            <div class="d-flex py-1">
                                                <img class="avatar rounded-circle" src="assets/images/profile_av.svg" alt="profile">
                                                <div class="flex-fill ms-3">
                                                    <p class="mb-0"><span class="font-weight-bold">John	Quinn</span></p>
                                                    <small class="">Johnquinn@gmail.com</small>
                                                </div>
                                            </div>
                                            
                                            <div><hr class="dropdown-divider border-dark"></div>
                                        </div>
                                        <div class="list-group m-2 ">
                                            <a href="admin-profile.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user fs-5 me-3"></i>Profile Page</a>
                                            <a href="order-invoices.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-file-text fs-5 me-3"></i>Order Invoices</a>
                                            <a href="ui-elements/auth-signin.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-5 me-3"></i>Signout</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="setting ms-2">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#Settingmodal"><i class="icofont-gear-alt fs-5"></i></a>
                            </div>
                        </div>
        
                        <!-- menu toggler -->
                        <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                            <span class="fa fa-bars"></span>
                        </button>
        
                        <!-- main menu Search-->
                        <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                            <div class="input-group flex-nowrap input-group-lg">
                                <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                                <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                                
                            </div>
                        </div>
        
                    </div>
                </nav>
            </div>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">

                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Products Detail</h3>
                            </div>
                        </div>
                    </div> <!-- Row end  -->  

                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="product-details">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="product-details-image mt-50">
                                                    <div class="product-thumb-image">
                                                        <div class="product-thumb-image-active nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                            <a class="single-thumb" id="v-pills-one-tab" data-bs-toggle="pill" href="#v-pills-one" role="button" aria-controls="v-pills-one" >
                                                                <img src="assets/images/product/thunb-1.jpg" alt="">
                                                            </a>
                                                            <a class="single-thumb" id="v-pills-two-tab" data-bs-toggle="pill" href="#v-pills-two" role="button" aria-controls="v-pills-two">
                                                                <img src="assets/images/product/thunb-2.jpg" alt="">
                                                            </a>
                                                            <a class="single-thumb active" aria-current="page" id="v-pills-three-tab" data-bs-toggle="pill" role="button" href="#v-pills-three"  aria-controls="v-pills-three">
                                                                <img src="assets/images/product/thunb-3.jpg" alt="">
                                                            </a>
                                                            <a class="single-thumb" id="v-pills-four-tab" data-bs-toggle="pill" href="#v-pills-four" role="button" aria-controls="v-pills-four">
                                                                <img src="assets/images/product/thunb-4.jpg" alt="">
                                                            </a>
                                                            <a class="single-thumb" id="v-pills-five-tab" data-bs-toggle="pill" href="#v-pills-five"  role="button" aria-controls="v-pills-five">
                                                                <img src="assets/images/product/thunb-5.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-image">
                                                        <div class="product-image-active tab-content" id="v-pills-tabContent">
                                                            <a class="single-image tab-pane fade" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab">
                                                                <img src="assets/images/product/productslide-1.jpg" alt="">
                                                            </a>
                                                            <a class="single-image tab-pane fade" id="v-pills-two" role="tabpanel" aria-labelledby="v-pills-two-tab">
                                                                <img src="assets/images/product/productslide-2.jpg" alt="">
                                                            </a>
                                                            <a class="single-image tab-pane fade active show" id="v-pills-three" role="tabpanel" aria-labelledby="v-pills-three-tab">
                                                                <img src="assets/images/product/productslide-3.jpg" alt="">
                                                            </a>
                                                            <a class="single-image tab-pane fade" id="v-pills-four" role="tabpanel" aria-labelledby="v-pills-four-tab">
                                                                <img src="assets/images/product/productslide-5.jpg" alt="">
                                                            </a>
                                                            <a class="single-image tab-pane fade " id="v-pills-five" role="tabpanel" aria-labelledby="v-pills-five-tab">
                                                                <img src="assets/images/product/productslide-5.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="product-details-content mt-45">
                                                    <h2 class="fw-bold fs-4">Oculus VR</h2>
                                                    <div class="my-3">
                                                        <i class="fa fa-star text-warning"></i>
                                                        <i class="fa fa-star text-warning"></i>
                                                        <i class="fa fa-star text-warning"></i>
                                                        <i class="fa fa-star text-warning"></i>
                                                        <i class="fa fa-star text-warning"></i>
                                                        <span class="text-muted ms-3">(449 customer review)</span>
                                                    </div>
                                                    <div class="product-items flex-wrap">
                                                        <h6 class="item-title fw-bold">Select Your Oculus</h6>
                                                        <div class="items-wrapper" id="select-item-1">
                                                            <div class="single-item active">
                                                                <div class="items-image">
                                                                    <img src="assets/images/product/product-items-1.jpg" alt="product">
                                                                </div>
                                                                <p class="text">Oculus Go</p>
                                                            </div>
                                                            <div class="single-item">
                                                                <div class="items-image">
                                                                    <img src="assets/images/product/product-items-2.jpg" alt="product">
                                                                </div>
                                                                <p class="text">Oculus Quest</p>
                                                            </div>
                                                            <div class="single-item">
                                                                <div class="items-image">
                                                                    <img src="assets/images/product/product-items-3.jpg" alt="product">
                                                                </div>
                                                                <p class="text">Oculus Rift S</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-select-wrapper flex-wrap">
                                                        <div class="select-item">
                                                            <h6 class="select-title fw-bold">Select Color</h6>
                                                            <ul class="color-select" id="select-color-1">
                                                                <li style="background-color: #EFEFEF;" class="active"></li>
                                                                <li style="background-color: #FAE5EC;"></li>
                                                                <li style="background-color: #4C4C4C;"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <h6 class="price-title fw-bold">Price</h6>
                                                        <p class="sale-price">$ 149 USD</p>
                                                        <p class="regular-price text-danger">$ 179 USD</p>
                                                    </div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's standard
                                                        dummy text ever since the 1500s, when an unknown printer took a
                                                        galley of type and scrambled it to make a type specimen book.</p>
                                                    <div class="product-btn mb-5">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="mt-2 mt-sm-0  me-1">
                                                                <div class="input-group">
                                                                    <input type="number" class="form-control" placeholder="1" min="1" max="5">
                                                                    <span class="input-group-text"><i class="fa fa-sort"></i></span>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary mx-1 mt-2  mt-sm-0"><i class="fa fa-heart me-1"></i> Addto Wishlist</button>
                                                            <button class="btn btn-primary mx-1 mt-2 mt-sm-0 w-sm-100"><i class="fa fa-shopping-cart me-1"></i> Add to Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->  

                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs tab-body-header rounded  d-inline-flex" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#review" role="tab">Reviews</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#descriptions" role="tab">Descriptions</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#about" role="tab">About</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="review">
                                        <div class="card-body">
                                            <div class="row clearfix g-3">
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="feedback-info sticky-top">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h2 class=" display-6 fw-bold mb-0">4.5</h2>
                                                                <small class="text-muted">based on 1,032 ratings</small>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="mb-2 me-3">
                                                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                        <a href="#" class="rating-link active"><i class="bi bi-star-half text-warning"></i></a>
                                                                    </span>
                                                                </div>
                                                                <div class="progress-count mt-2">
                                                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                                                        <h6 class="mb-0 fw-bold d-flex align-items-center">5<i class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i></h6>
                                                                        <span class="small text-muted">661</span>
                                                                    </div>
                                                                    <div class="progress" style="height: 10px;">
                                                                        <div class="progress-bar light-success-bg" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="progress-count mt-2">
                                                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                                                        <h6 class="mb-0 fw-bold d-flex align-items-center">4<i class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i></h6>
                                                                        <span class="small text-muted">237</span>
                                                                    </div>
                                                                    <div class="progress" style="height: 10px;">
                                                                        <div class="progress-bar bg-info-light" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="progress-count mt-2">
                                                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                                                        <h6 class="mb-0 fw-bold d-flex align-items-center">3<i class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i></h6>
                                                                        <span class="small text-muted">76</span>
                                                                    </div>
                                                                    <div class="progress" style="height: 10px;">
                                                                        <div class="progress-bar bg-lightyellow" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="progress-count mt-2">
                                                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                                                        <h6 class="mb-0 fw-bold d-flex align-items-center">2<i class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i></h6>
                                                                        <span class="small text-muted">19</span>
                                                                    </div>
                                                                    <div class="progress" style="height: 10px;">
                                                                        <div class="progress-bar light-danger-bg " role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="progress-count mt-2">
                                                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                                                        <h6 class="mb-0 fw-bold d-flex align-items-center">1<i class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i></h6>
                                                                        <span class="small text-muted">39</span>
                                                                    </div>
                                                                    <div class="progress" style="height: 10px;">
                                                                        <div class="progress-bar bg-careys-pink" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="customer-like mt-5">
                                                                    <h6 class="mb-0 fw-bold ">What Customers Like</h6>
                                                                    <ul class="list-group mt-3">
                                                                        <li class="list-group-item d-flex">
                                                                            <div class="number border-end pe-2 fw-bold">
                                                                                <strong class="color-light-success">1</strong>
                                                                            </div>
                                                                            <div class="cs-text flex-fill ps-2">
                                                                                <span>Fun Factor</span>
                                                                            </div>
                                                                            <div class="vote-text">
                                                                                <span class="text-muted">72 votes</span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item d-flex">
                                                                            <div class="number border-end pe-2 fw-bold">
                                                                                <strong class="color-light-success">2</strong>
                                                                            </div>
                                                                            <div class="cs-text flex-fill ps-2">
                                                                                <span>Great Value</span>
                                                                            </div>
                                                                            <div class="vote-text">
                                                                                <span class="text-muted">52 votes</span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item d-flex">
                                                                            <div class="number border-end pe-2 fw-bold">
                                                                                <strong class="color-light-success">3</strong>
                                                                            </div>
                                                                            <div class="cs-text flex-fill ps-2">
                                                                                <span>eBazar</span>
                                                                            </div>
                                                                            <div class="vote-text">
                                                                                <span class="text-muted">35 votes</span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="customer-like mt-5">
                                                                    <h6 class="mb-0 fw-bold ">What Need Improvement</h6>
                                                                    <ul class="list-group mt-3">
                                                                        <li class="list-group-item d-flex">
                                                                            <div class="number border-end pe-2 fw-bold">
                                                                                <strong class="color-careys-pink">1</strong>
                                                                            </div>
                                                                            <div class="cs-text flex-fill ps-2">
                                                                                <span>Value for Money</span>
                                                                            </div>
                                                                            <div class="vote-text">
                                                                                <span class="text-muted">12 votes</span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item d-flex">
                                                                            <div class="number border-end pe-2 fw-bold">
                                                                                <strong class="color-careys-pink">2</strong>
                                                                            </div>
                                                                            <div class="cs-text flex-fill ps-2">
                                                                                <span>Customer service</span>
                                                                            </div>
                                                                            <div class="vote-text">
                                                                                <span class="text-muted">8 votes</span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item d-flex">
                                                                            <div class="number border-end pe-2 fw-bold">
                                                                                <strong class="color-careys-pink">3</strong>
                                                                            </div>
                                                                            <div class="cs-text flex-fill ps-2">
                                                                                <span>Product Item</span>
                                                                            </div>
                                                                            <div class="vote-text">
                                                                                <span class="text-muted">2 votes</span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-12">
                                                    <ul class="list-unstyled mb-4">
                                                        <li class="card mb-2">
                                                            <div class="card-body p-lg-4 p-3">
                                                                <div class="d-flex mb-3 pb-3 border-bottom flex-wrap">
                                                                    <img class="avatar rounded" src="assets/images/xs/avatar9.svg" alt="">
                                                                    <div class="flex-fill ms-3 text-truncate">
                                                                        <h6 class="mb-0"><span>Joan Dyer</span></h6>
                                                                        <span class="text-muted">3 hours ago</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="mb-2 me-3">
                                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                            <a href="#" class="rating-link active"><i class="bi bi-star-half text-warning"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-item-post">
                                                                    <h6 class="">Top-Oculus VR</h6>
                                                                    <p> A good fit for many households, this Oculus VR has a movable deli drawer and door shelves that can accommodate gallon containers.Though its low price means fewer features, this pick is quiet and an energy-saving option, resulting in a lower energy bill.</p>
                                                                </div>
                                                            </div>
                                                        </li> <!-- .Card End -->
                                                        <li class="card mb-2">
                                                            <div class="card-body p-lg-4 p-3">
                                                                <div class="d-flex mb-3 pb-3 border-bottom flex-wrap">
                                                                    <img class="avatar rounded" src="assets/images/xs/avatar2.svg" alt="">
                                                                    <div class="flex-fill ms-3 text-truncate">
                                                                        <h6 class="mb-0"><span>Phil Glover</span></h6>
                                                                        <span class="text-muted">1 Day ago</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="mb-2 me-3">
                                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                            <a href="#" class="rating-link active"><i class="bi bi-star-half text-warning"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-item-post">
                                                                    <h6 class="">Oculus VR Full 3D</h6>
                                                                    <p>I purchased this Oculus from elsewhere, on last Dipawali. As this Oculus contains in-built DDB( means you need not to install a separate set-top box), there is less number of wire hanging around the set and single remote required. Great full HD picture quality. Sound quality of the set is far better than most of the sets of the so called big brands.</p>
                                                                </div>
                                                            </div>
                                                        </li> <!-- .Card End -->
                                                        <li class="card mb-2">
                                                            <div class="card-body p-lg-4 p-3">
                                                                <div class="d-flex mb-3 pb-3 border-bottom flex-wrap">
                                                                    <img class="avatar rounded" src="assets/images/xs/avatar3.svg" alt="">
                                                                    <div class="flex-fill ms-3 text-truncate">
                                                                        <h6 class="mb-0"><span>Victor Rampling</span></h6>
                                                                        <span class="text-muted">5 Day ago</span>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="mb-2 me-3">
                                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                            <a href="#" class="rating-link active"><i class="bi bi-star-half text-warning"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-item-post">
                                                                    <h6 class="">Oculus VR  Wireless Bluetooth</h6>
                                                                    <p>The build quality feels really premium.Sound quality is quite great compared to its price point.Sound quality is quite great compared to its price point.</p>
                                                                    <div>
                                                                        <div class="d-flex mt-3 pt-3 border-top">
                                                                            <img class="avatar rounded" src="assets/images/xs/avatar12.svg" alt="">
                                                                            <div class="flex-fill ms-3 text-truncate">
                                                                                <p class="mb-0"><span>Karen Clark</span> <small class="msg-time text-muted">5 Day ago</small></p>
                                                                                <span class="text-muted">Hd quality is quite great compared to its price point.</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-4">
                                                                        <textarea class="form-control" placeholder="Replay"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li> <!-- .Card End -->
                                                    </ul>
                                                    <nav aria-label="...">
                                                        <ul class="pagination justify-content-end">
                                                        <li class="page-item disabled">
                                                            <span class="page-link">Previous</span>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active" aria-current="page">
                                                            <span class="page-link">2</span>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#">Next</a>
                                                        </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div><!-- Row End -->
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="descriptions">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquet sem in erat volutpat, nec sollicitudin erat varius. Sed feugiat, leo varius facilisis sagittis, lorem magna cursus tortor, molestie venenatis odio nunc quis eros.Morbi volutpat dui vitae efficitur posuere.</p>
                                            <p>Donec ut libero imperdiet, eleifend ipsum vitae, laoreet nisl. Morbi volutpat dui vitae efficitur posuere. Pellentesque mi libero, dapibus ut tellus eu, volutpat viverra magna. Phasellus vitae erat porta, condimentum enim ac, luctus dui. Fusce dignissim, neque quis aliquet posuere, ante tortor lobortis eros, et facilisis dolor ipsum malesuada ante.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="about">
                                        <div class="card-body">
                                            <h3>Where can I get some?</h3>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                <li>Phasellus accumsan orci sit amet orci malesuada tristique.</li>
                                                <li>Morbi varius odio et lorem ornare, auctor rutrum est rhoncus.</li>
                                                <li>Vivamus consequat tortor eu consequat eleifend.</li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquet sem in erat volutpat, nec sollicitudin erat varius. Sed feugiat, leo varius facilisis sagittis, lorem magna cursus tortor, molestie venenatis odio nunc quis eros.Morbi volutpat dui vitae efficitur posuere.</p>
                                            <p>Donec ut libero imperdiet, eleifend ipsum vitae, laoreet nisl. Morbi volutpat dui vitae efficitur posuere. Pellentesque mi libero, dapibus ut tellus eu, volutpat viverra magna. Phasellus vitae erat porta, condimentum enim ac, luctus dui. Fusce dignissim, neque quis aliquet posuere, ante tortor lobortis eros, et facilisis dolor ipsum malesuada ante.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row end  -->  

                </div>
            </div>    
        
            <!-- Modal Custom Settings-->
            <div class="modal fade right" id="Settingmodal" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog  modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Custom Settings</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body custom_setting">
                            <!-- Settings: Color -->
                            <div class="setting-theme pb-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color Settings</h6>
                                <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                                    <li data-theme="indigo"><div class="indigo"></div></li>
                                    <li data-theme="tradewind"><div class="tradewind"></div></li>
                                    <li data-theme="monalisa"><div class="monalisa"></div></li>
                                    <li data-theme="blue" class="active"><div class="blue"></div></li>
                                    <li data-theme="cyan"><div class="cyan"></div></li>
                                    <li data-theme="green"><div class="green"></div></li>
                                    <li data-theme="orange"><div class="orange"></div></li>
                                    <li data-theme="blush"><div class="blush"></div></li>
                                    <li data-theme="red"><div class="red"></div></li>
                                </ul>
                            </div>
                            <div class="sidebar-gradient py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-paint fs-4 me-2 text-primary"></i>Sidebar Gradient</h6>
                                <div class="form-check form-switch gradient-switch pt-2 mb-2">
                                    <input class="form-check-input" type="checkbox" id="CheckGradient">
                                    <label class="form-check-label" for="CheckGradient">Enable Gradient! ( Sidebar )</label>
                                </div>
                            </div>
                            <!-- Settings: Template dynamics -->
                            <div class="dynamic-block py-3">
                                <ul class="list-unstyled choose-skin mb-2 mt-1">
                                    <li data-theme="dynamic"><div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting</div></li>
                                </ul>
                                <div class="dt-setting">
                                    <ul class="list-group list-unstyled mt-1">
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Primary Color</label>
                                            <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Secondary Color</label>
                                            <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 1</label>
                                            <button id="chartColorPicker1" class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 2</label>
                                            <button id="chartColorPicker2" class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 3</label>
                                            <button id="chartColorPicker3" class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 4</label>
                                            <button id="chartColorPicker4" class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 5</label>
                                            <button id="chartColorPicker5" class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Settings: Font -->
                            <div class="setting-font py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-font fs-4 me-2 text-primary"></i> Font Settings</h6>
                                <ul class="list-group font_setting mt-1">
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-poppins" value="font-poppins">
                                            <label class="form-check-label" for="font-poppins">
                                                Poppins Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans" checked="">
                                            <label class="form-check-label" for="font-opensans">
                                                Open Sans Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-montserrat" value="font-montserrat">
                                            <label class="form-check-label" for="font-montserrat">
                                                Montserrat Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-mukta" value="font-mukta">
                                            <label class="form-check-label" for="font-mukta">
                                                Mukta Google Font
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Settings: Light/dark -->
                            <div class="setting-mode py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout</h6>
                                <ul class="list-group list-unstyled mb-0 mt-1">
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-switch mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-switch">
                                            <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-high-contrast mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                            <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-rtl mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-rtl">
                                            <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-start">
                            <button type="button" class="btn btn-white border lift" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary lift">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div> 

        </div>        

    </div>

    <!-- Jquery Core Js -->      
    <script src="assets/bundles/libscripts.bundle.js"></script>

    <!-- Jquery Page Js -->   
    <script src="../js/template.js"></script>
    <script>
        // =========== select-item-1 active 
        selectItem1=document.querySelectorAll("#select-item-1 .single-item");
            for(var i=0; i<selectItem1.length; i++){
                selectItem1[i].onclick=function(){
                var el=selectItem1[0];
                while(el){
                    if(el.tagName==="DIV"){
                    el.classList.remove("active");
                    }
                    el=el.nextSibling;
                }
                this.classList.add("active");
                };
            }
            // =========== select-color-1 active
            selectColor1=document.querySelectorAll("#select-color-1 li");
            for(var i=0; i<selectColor1.length; i++){
                selectColor1[i].onclick=function(){
                var el=selectColor1[0];
                while(el){
                    if(el.tagName==="LI"){
                    el.classList.remove("active");
                    }
                    el=el.nextSibling;
                }
                this.classList.add("active");
                };
            }
    </script>
</body>

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/product-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 21:40:54 GMT -->
</html> 