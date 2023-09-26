<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>::eBazar::  Products List </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    
    <!--plugin css file -->
    <link rel="stylesheet" href="assets/plugin/nouislider/nouislider.min.css">

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
                                <li><a class="ms-link active" href="product-list.html">Product List</a></li>
                                <li><a class="ms-link" href="product-edit.php">Product Edit</a></li>
                                <li><a class="ms-link" href="product-detail.php">Product Details</a></li>
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
                                <h3 class="fw-bold mb-0">Products</h3>
                                <div class="btn-group group-link btn-set-task w-sm-100">
                                    <a href="product-grid.php" class="btn d-inline-flex align-items-center" aria-current="page"><i class="icofont-wall px-2 fs-5"></i>Grid View</a>
                                    <a href="product-list.html" class="btn active d-inline-flex align-items-center"><i class="icofont-listing-box px-2 fs-5"></i> List View</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3">
                            <div class="sticky-lg-top">
                                <div class="card mb-3">
                                    <div class="reset-block">
                                        <div class="filter-title">
                                            <h4 class="title">Filter</h4>
                                        </div>
                                        <div class="filter-btn">
                                            <a class="btn btn-primary" href="#">Reset</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="categories">
                                        <div class="filter-title">
                                            <a class="title" data-bs-toggle="collapse" href="#category" role="button" aria-expanded="true">Categories</a>
                                        </div>
                                        <div class="collapse show" id="category" >
                                            <div class="filter-search">
                                                <form action="#">
                                                    <input type="text" placeholder="Search" class="form-control">
                                                    <button><i class="lni lni-search-alt"></i></button>
                                                </form>
                                            </div>
                                            <div class="filter-category">
                                                <ul class="category-list">
                                                    <li><a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" class="collapsed">Game accessories</a>
                                                        <ul id="collapseOne" class="sub-category collapse" data-parent="#category" >
                                                            <li><a href="#">PlayStation 4</a></li>
                                                            <li><a href="#">Oculus VR</a></li>
                                                            <li><a href="#">Remote</a></li>
                                                            <li><a href="#">Lighting Keyborad</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Bags</a>
                                                        <ul id="collapseTwo" class="sub-category collapse" data-parent="#category">
                                                            <li><a href="#">School Bags</a></li>
                                                            <li><a href="#">Traveling Bags</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree">Flower Port</a>
                                                        <ul id="collapseThree" class="sub-category collapse" data-parent="#category">
                                                            <li><a href="#">Woodan Port</a></li>
                                                            <li><a href="#">Pattern Port</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFour">Watch</a>
                                                        <ul id="collapseFour" class="sub-category collapse" data-parent="#category">
                                                            <li><a href="#">Wall Clock</a></li>
                                                            <li><a href="#">Smart Watch</a></li>
                                                            <li><a href="#">Rado Watch</a></li>
                                                            <li><a href="#">Fasttrack Watch</a></li>
                                                            <li><a href="#">Noise Watch</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFive">Accessories</a>
                                                        <ul id="collapseFive" class="sub-category collapse" data-parent="#category">
                                                            <li><a href="#">Note Diaries</a></li>
                                                            <li><a href="#">Fold Diaries</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="size-block">
                                        <div class="filter-title">
                                            <a class="title" data-bs-toggle="collapse" href="#size" role="button" aria-expanded="true">Select Size</a>
                                        </div>
                                        <div class="collapse show" id="size" >
                                            <div class="filter-size" id="filter-size-1">
                                                <ul>
                                                    <li>XS</li>
                                                    <li>S</li>
                                                    <li class="">M</li>
                                                    <li>L</li>
                                                    <li>XL</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="color-block">
                                        <div class="filter-title">
                                            <a class="title" data-bs-toggle="collapse" href="#color" role="button" aria-expanded="false">Select Color</a>
                                        </div>
                                        <div class="collapse show" id="color">
                                            <div class="filter-color">
                                                <ul>
                                                    <li>
                                                        <div class="color-check">
                                                            <p><span style="background-color: #4114e4;"></span> <strong>Blue</strong></p>
                
                                                            <input type="checkbox" id="color-1">
                                                            <label for="color-1"><span></span></label>                                            
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="color-check">
                                                            <p><span style="background-color: #E14C7B;"></span> <strong>Red</strong></p>
                
                                                            <input type="checkbox" id="color-2">
                                                            <label for="color-2"><span></span></label>                                            
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="color-check">
                                                            <p><span style="background-color: #7CB637;"></span> <strong>Green</strong></p>
                
                                                            <input type="checkbox" id="color-3">
                                                            <label for="color-3"><span></span></label>                                            
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="color-check">
                                                            <p><span style="background-color: #161359;"></span> <strong>Dark</strong></p>
                
                                                            <input type="checkbox" id="color-4">
                                                            <label for="color-4"><span></span></label>                                            
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="price-range-block">
                                        <div class="filter-title">
                                            <a class="title" data-bs-toggle="collapse" href="#pricingTwo" role="button" aria-expanded="false">Pricing Range</a>
                                        </div>
                                        <div class="collapse show" id="pricingTwo">
                                            <div class="price-range">
                                                <div class="price-amount flex-wrap">
                                                    <div class="amount-input mt-1">
                                                        <label class="fw-bold">Minimum Price</label>
                                                        <input type="text" id="minAmount2" class="form-control">
                                                    </div>
                                                    <div class="amount-input mt-1">
                                                        <label class="fw-bold">Maximum Price</label>
                                                        <input type="text" id="maxAmount2" class="form-control">
                                                    </div>                                    
                                                </div>
                                                <div id="slider-range2" class="slider-range noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="rating-block">
                                        <div class="filter-title">
                                            <a class="title" data-bs-toggle="collapse" href="#rating" role="button" aria-expanded="false">Select Rating</a>
                                        </div>
                                        <div class="collapse show" id="rating">
                                            <div class="filter-rating">
                                                <ul>
                                                    <li>
                                                        <div class="rating-check">
                                                            <input type="checkbox" id="rating-5">
                                                            <label for="rating-5"><span></span>
                                                                
                                                            </label>
                                                            <p>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="rating-check">
                                                            <input type="checkbox" id="rating-4">
                                                            <label for="rating-4"><span></span></label>
                                                            <p>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="rating-check">
                                                            <input type="checkbox" id="rating-3">
                                                            <label for="rating-3"><span></span></label>
                                                            <p>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="rating-check">
                                                            <input type="checkbox" id="rating-2">
                                                            <label for="rating-2"><span></span></label>
                                                            <p>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="rating-check">
                                                            <input type="checkbox" id="rating-1">
                                                            <label for="rating-1"><span></span></label>
                                                            <p>
                                                                <i class="icofont-star"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-9">
                            <div class="card mb-3 bg-transparent p-2">
                                <div class="card border-0 mb-1">
                                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block">
                                        <input class="form-check-input" type="checkbox" id="Eaten-switch1" checked="">
                                        <label class="form-check-label" for="Eaten-switch1">Add to Cart</label>
                                    </div>
                                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                        <a href="product-detail.php">
                                            <img class="w120 rounded img-fluid" src="assets/images/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                            <a href="product-detail.php"><h6 class="mb-3 fw-bold">Oculus VR  <span class="text-muted small fw-light d-block">Reference 1204</span></h6></a>
                                                <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Special priceends</div>
                                                        <strong>20h:46m:30s</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Offer</div>
                                                        <strong>Bank Offer</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Price</div>
                                                        <strong>$149</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Ratings</div>
                                                        <strong><i class="icofont-star text-warning"></i>4.5 <span class="text-muted">(145)</span></strong>
                                                    </div>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2 d-inline-flex d-md-none">
                                                    <button type="button" class="btn btn-primary">Add Cart</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 mb-1">
                                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block">
                                        <input class="form-check-input" type="checkbox" id="Eaten-switch2">
                                        <label class="form-check-label" for="Eaten-switch2">Add to Cart</label>
                                    </div>
                                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                        <a href="product-detail.php">
                                            <img class="w120 rounded img-fluid" src="assets/images/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                            <a href="product-detail.php"><h6 class="mb-3 fw-bold">Wall Clock  <span class="text-muted small fw-light d-block">Reference 1004</span></h6></a>
                                                <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Special priceends</div>
                                                        <strong>20h:46m:30s</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Offer</div>
                                                        <strong>Bank Offer</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Price</div>
                                                        <strong>$399</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Ratings</div>
                                                        <strong><i class="icofont-star text-warning"></i>3.5 <span class="text-muted">(77)</span></strong>
                                                    </div>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2 d-inline-flex d-md-none">
                                                    <button type="button" class="btn btn-primary">Add Cart</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 mb-1">
                                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block">
                                        <input class="form-check-input" type="checkbox" id="Eaten-switch3">
                                        <label class="form-check-label" for="Eaten-switch3">Add to Cart</label>
                                    </div>
                                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                        <a href="product-detail.php">
                                            <img class="w120 rounded img-fluid" src="assets/images/product/product-3.jpg" alt="">
                                        </a>
                                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                            <a href="product-detail.php"><h6 class="mb-3 fw-bold">Note Diaries <span class="text-muted small fw-light d-block">Reference 1224</span></h6></a>
                                                <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Special priceends</div>
                                                        <strong>20h:46m:30s</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Offer</div>
                                                        <strong>Bank Offer</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Price</div>
                                                        <strong>$49</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Ratings</div>
                                                        <strong><i class="icofont-star text-warning"></i>3.5 <span class="text-muted">(98)</span></strong>
                                                    </div>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2 d-inline-flex d-md-none">
                                                    <button type="button" class="btn btn-primary">Add Cart</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 mb-1">
                                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block">
                                        <input class="form-check-input" type="checkbox" id="Eaten-switch4">
                                        <label class="form-check-label" for="Eaten-switch4">Add to Cart</label>
                                    </div>
                                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                        <a href="product-detail.php">
                                            <img class="w120 rounded img-fluid" src="assets/images/product/product-4.jpg" alt="">
                                        </a>
                                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                            <a href="product-detail.php"><h6 class="mb-3 fw-bold">Flower Port  <span class="text-muted small fw-light d-block">Reference 1414</span></h6></a>
                                                <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Special priceends</div>
                                                        <strong>18h:46m:30s</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Offer</div>
                                                        <strong>Bank Offer</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Price</div>
                                                        <strong>$199</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Ratings</div>
                                                        <strong><i class="icofont-star text-warning"></i>4.5 <span class="text-muted">(1455)</span></strong>
                                                    </div>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2 d-inline-flex d-md-none">
                                                    <button type="button" class="btn btn-primary">Add Cart</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 mb-1">
                                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block">
                                        <input class="form-check-input" type="checkbox" id="Eaten-switch5">
                                        <label class="form-check-label" for="Eaten-switch5">Add to Cart</label>
                                    </div>
                                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                        <a href="product-detail.php">
                                            <img class="w120 rounded img-fluid" src="assets/images/product/product-5.jpg" alt="">
                                        </a>
                                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                            <a href="product-detail.php"><h6 class="mb-3 fw-bold">School Bag  <span class="text-muted small fw-light d-block">Reference 1000</span></h6></a>
                                                <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Special priceends</div>
                                                        <strong>03h:30m:30s</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Offer</div>
                                                        <strong>Bank Offer</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Price</div>
                                                        <strong>$99</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Ratings</div>
                                                        <strong><i class="icofont-star text-warning"></i>4.5 <span class="text-muted">(145)</span></strong>
                                                    </div>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2 d-inline-flex d-md-none">
                                                    <button type="button" class="btn btn-primary">Add Cart</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 mb-1">
                                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block">
                                        <input class="form-check-input" type="checkbox" id="Eaten-switch6">
                                        <label class="form-check-label" for="Eaten-switch6">Add to Cart</label>
                                    </div>
                                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                        <a href="product-detail.php">
                                            <img class="w120 rounded img-fluid" src="assets/images/product/product-6.jpg" alt="">
                                        </a>
                                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                            <a href="product-detail.php"><h6 class="mb-3 fw-bold">Rado Watch  <span class="text-muted small fw-light d-block">Reference 9204</span></h6></a>
                                                <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Special priceends</div>
                                                        <strong>20h:46m:30s</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Offer</div>
                                                        <strong>Bank Offer</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Price</div>
                                                        <strong>$594</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Ratings</div>
                                                        <strong><i class="icofont-star text-warning"></i>4.5 <span class="text-muted">(1245)</span></strong>
                                                    </div>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2 d-inline-flex d-md-none">
                                                    <button type="button" class="btn btn-primary">Add Cart</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 mb-1">
                                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block">
                                        <input class="form-check-input" type="checkbox" id="Eaten-switch7">
                                        <label class="form-check-label" for="Eaten-switch7">Add to Cart</label>
                                    </div>
                                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                        <a href="product-detail.php">
                                            <img class="w120 rounded img-fluid" src="assets/images/product/product-7.jpg" alt="">
                                        </a>
                                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                            <a href="product-detail.php"><h6 class="mb-3 fw-bold">Traveling Bag  <span class="text-muted small fw-light d-block">Reference 1155</span></h6></a>
                                                <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Special priceends</div>
                                                        <strong>20h:46m:30s</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Offer</div>
                                                        <strong>Bank Offer</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Price</div>
                                                        <strong>$49</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Ratings</div>
                                                        <strong><i class="icofont-star text-warning"></i>4.5 <span class="text-muted">(1045)</span></strong>
                                                    </div>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2 d-inline-flex d-md-none">
                                                    <button type="button" class="btn btn-primary">Add Cart</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 mb-1">
                                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block">
                                        <input class="form-check-input" type="checkbox" id="Eaten-switch8">
                                        <label class="form-check-label" for="Eaten-switch8">Add to Cart</label>
                                    </div>
                                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                        <a href="product-detail.php">
                                            <img class="w120 rounded img-fluid" src="assets/images/product/product-4.jpg" alt="">
                                        </a>
                                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                            <a href="product-detail.php"><h6 class="mb-3 fw-bold">Flower Port  <span class="text-muted small fw-light d-block">Reference 1414</span></h6></a>
                                                <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Special priceends</div>
                                                        <strong>18h:46m:30s</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Offer</div>
                                                        <strong>Bank Offer</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Price</div>
                                                        <strong>$109</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Ratings</div>
                                                        <strong><i class="icofont-star text-warning"></i>4.5 <span class="text-muted">(1455)</span></strong>
                                                    </div>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2 d-inline-flex d-md-none">
                                                    <button type="button" class="btn btn-primary">Add Cart</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 mb-1">
                                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block">
                                        <input class="form-check-input" type="checkbox" id="Eaten-switch9">
                                        <label class="form-check-label" for="Eaten-switch9">Add to Cart</label>
                                    </div>
                                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                        <a href="product-detail.php">
                                            <img class="w120 rounded img-fluid" src="assets/images/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                            <a href="product-detail.php"><h6 class="mb-3 fw-bold">Wall Clock  <span class="text-muted small fw-light d-block">Reference 1004</span></h6></a>
                                                <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Special priceends</div>
                                                        <strong>20h:46m:30s</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Offer</div>
                                                        <strong>Bank Offer</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Price</div>
                                                        <strong>$144</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Ratings</div>
                                                        <strong><i class="icofont-star text-warning"></i>4.5 <span class="text-muted">(77)</span></strong>
                                                    </div>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2 d-inline-flex d-md-none">
                                                    <button type="button" class="btn btn-primary">Add Cart</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 mb-1">
                                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block">
                                        <input class="form-check-input" type="checkbox" id="Eaten-switch10" checked="">
                                        <label class="form-check-label" for="Eaten-switch10">Add to Cart</label>
                                    </div>
                                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                        <a href="product-detail.php">
                                            <img class="w120 rounded img-fluid" src="assets/images/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                            <a href="product-detail.php"><h6 class="mb-3 fw-bold">Oculus VR  <span class="text-muted small fw-light d-block">Reference 1204</span></h6></a>
                                                <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Special priceends</div>
                                                        <strong>20h:46m:30s</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Offer</div>
                                                        <strong>Bank Offer</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Price</div>
                                                        <strong>$149</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Ratings</div>
                                                        <strong><i class="icofont-star text-warning"></i>4.5 <span class="text-muted">(145)</span></strong>
                                                    </div>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2 d-inline-flex d-md-none">
                                                    <button type="button" class="btn btn-primary">Add Cart</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 mb-1">
                                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block">
                                        <input class="form-check-input" type="checkbox" id="Eaten-switch11">
                                        <label class="form-check-label" for="Eaten-switch11">Add to Cart</label>
                                    </div>
                                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                        <a href="product-detail.php">
                                            <img class="w120 rounded img-fluid" src="assets/images/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                            <a href="product-detail.php"><h6 class="mb-3 fw-bold">Wall Clock  <span class="text-muted small fw-light d-block">Reference 1004</span></h6></a>
                                                <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Special priceends</div>
                                                        <strong>20h:46m:30s</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Offer</div>
                                                        <strong>Bank Offer</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Price</div>
                                                        <strong>$149</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Ratings</div>
                                                        <strong><i class="icofont-star text-warning"></i>4.5 <span class="text-muted">(77)</span></strong>
                                                    </div>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2 d-inline-flex d-md-none">
                                                    <button type="button" class="btn btn-primary">Add Cart</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 mb-1">
                                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block">
                                        <input class="form-check-input" type="checkbox" id="Eaten-switch12">
                                        <label class="form-check-label" for="Eaten-switch12">Add to Cart</label>
                                    </div>
                                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                        <a href="product-detail.php">
                                            <img class="w120 rounded img-fluid" src="assets/images/product/product-3.jpg" alt="">
                                        </a>
                                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                            <a href="product-detail.php"><h6 class="mb-3 fw-bold">Note Diaries <span class="text-muted small fw-light d-block">Reference 1224</span></h6></a>
                                                <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Special priceends</div>
                                                        <strong>20h:46m:30s</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Offer</div>
                                                        <strong>Bank Offer</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Price</div>
                                                        <strong>$149</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Ratings</div>
                                                        <strong><i class="icofont-star text-warning"></i>4.5 <span class="text-muted">(98)</span></strong>
                                                    </div>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2 d-inline-flex d-md-none">
                                                    <button type="button" class="btn btn-primary">Add Cart</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block">
                                        <input class="form-check-input" type="checkbox" id="Eaten-switch13">
                                        <label class="form-check-label" for="Eaten-switch13">Add to Cart</label>
                                    </div>
                                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                        <a href="product-detail.php">
                                            <img class="w120 rounded img-fluid" src="assets/images/product/product-4.jpg" alt="">
                                        </a>
                                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                            <a href="product-detail.php"><h6 class="mb-3 fw-bold">Flower Port  <span class="text-muted small fw-light d-block">Reference 1414</span></h6></a>
                                                <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Special priceends</div>
                                                        <strong>18h:46m:30s</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Offer</div>
                                                        <strong>Bank Offer</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Price</div>
                                                        <strong>$149</strong>
                                                    </div>
                                                    <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                        <div class="text-muted small">Ratings</div>
                                                        <strong><i class="icofont-star text-warning"></i>4.5 <span class="text-muted">(1455)</span></strong>
                                                    </div>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2 d-inline-flex d-md-none">
                                                    <button type="button" class="btn btn-primary">Add Cart</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-md-12">
                                    <nav class="justify-content-end d-flex">
                                        <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
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

    <!-- Jquery Plugin --> 
    <script src="assets/plugin/nouislider/nouislider.min.js"></script>

    <!-- Jquery Page Js --> 
    <script src="../js/template.js"></script>
    <script>
        var stepsSlider2 = document.getElementById('slider-range2');
            var input3 = document.getElementById('minAmount2');
            var input4 = document.getElementById('maxAmount2');
            var inputs2 = [input3, input4];
            noUiSlider.create(stepsSlider2, {
                start: [149, 399],
                connect: true,
                step: 1,
                range: {
                    'min': [0],
                    'max': 2000
                },

            });

            stepsSlider2.noUiSlider.on('update', function (values, handle) {
                inputs2[handle].value = values[handle];
            });
    </script>
</body>

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/product-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 21:40:38 GMT -->
</html> 