<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/chat.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 21:41:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>::eBazar:: Chat </title>
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
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-product" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Products</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="menu-product">
                                <li><a class="ms-link" href="product-grid.php">Product Grid</a></li>
                                <li><a class="ms-link" href="product-list.php">Product List</a></li>
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
                        <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#app" href="#">
                        <i class="icofont-code-alt fs-5"></i> <span>App</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse show" id="app">
                            <li><a class="ms-link" href="calendar.php">Calandar</a></li>
                            <li><a class="ms-link active" href="chat.html"> Chat App</a></li>
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
        <div class="main">
            <!-- Body: Body -->
            <div class="body d-flex">
                <div class="container-xxl p-0">
                    <div class="row g-0">
                        <div class="col-12 d-flex">
                        <!-- Card: -->
                            <div class="card card-chat border-right border-top-0 border-bottom-0  w380">
                                <div class="px-4 py-3 py-md-4">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control mb-1" placeholder="Search...">
                                    </div>

                                    <div class="nav nav-pills justify-content-between text-center" role="tablist">
                                        <a class="flex-fill rounded border-0 nav-link active" data-bs-toggle="tab" href="#chat-recent" role="tab" aria-selected="true">Chat</a>
                                        <a class="flex-fill rounded border-0 nav-link" data-bs-toggle="tab" href="#chat-groups" role="tab" aria-selected="false">Ecommerce Groups</a>
                                        <a class="flex-fill rounded border-0 nav-link" data-bs-toggle="tab" href="#chat-contact" role="tab" aria-selected="false">Contact</a>
                                    </div>
                                </div>

                                <div class="tab-content border-top">
                                    <div class="tab-pane fade show active" id="chat-recent" role="tabpanel">
                                        <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar6.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Vanessa Knox</span> <small class="msg-time">10:45 AM</small></h6>
                                                        <span class="text-muted">There are many variations of passages</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar1.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Abigail Bell</span> <small class="msg-time">11:45 AM</small></h6>
                                                        <span class="text-muted">changed an issue from "In Progress" to</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <div class="avatar rounded no-thumbnail">RH</div>
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Diane Blake</span> <small class="msg-time">12:45 AM</small></h6>
                                                        <span class="text-muted">It is a long established fact that a reader will be distracted</span>
                                                    </div>
                                                </a>
                                            </li>
                                        
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar4.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Megan Dyer</span> <small class="msg-time">12:46 AM</small></h6>
                                                        <span class="text-muted">Contrary to popular belief</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar1.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Abigail Bell</span> <small class="msg-time">12:47 PM</small></h6>
                                                        <span class="text-muted">changed an issue from "In Progress" to</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar5.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Diane Blake</span> <small class="msg-time">12:48 PM</small></h6>
                                                        <span class="text-muted">making it over 2000 years old</span>
                                                    </div>
                                                </a>
                                            </li>
                                            
                                            <li class="list-group-item px-md-4 py-3 py-md-4 open">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar3.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Vanessa Knox</span> <small class="msg-time">12:49 PM</small></h6>
                                                        <span class="text-muted">There are many variations of passages</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar7.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Donna Grant</span> <small class="msg-time">Thu</small></h6>
                                                        <span class="text-muted">Add Calander Event</span>
                                                    </div>
                                                </a>
                                            </li>
                                            
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <div class="avatar rounded no-thumbnail">RH</div>
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Diane Blake</span> <small class="msg-time">Wed</small></h6>
                                                        <span class="text-muted">It is a long established fact that a reader will be distracted</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar3.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Vanessa Knox</span> <small class="msg-time">13/10/2020</small></h6>
                                                        <span class="text-muted">There are many variations of passages</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar4.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Megan Dyer</span> <small class="msg-time">13/10/2020</small></h6>
                                                        <span class="text-muted">Contrary to popular belief</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar5.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Diane Blake</span> <small class="msg-time">22/10/2020</small></h6>
                                                        <span class="text-muted">making it over 2000 years old</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="chat-groups" role="tabpanel">
                                        <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <div class="avatar rounded no-thumbnail">IN</div>
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Inventory
                                                        </span> <small class="msg-time">15/06/2021</small></h6>
                                                        <span class="text-muted">The point of using Lorem Ipsum</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <div class="avatar rounded no-thumbnail">OD</div>
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Order
                                                        </span> <small class="msg-time">13/06/2021</small></h6>
                                                        <span class="text-muted">If you are going to use a passage</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <div class="avatar rounded no-thumbnail">PD</div>
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Product
                                                        </span> <small class="msg-time">12/06/2021</small></h6>
                                                        <span class="text-muted">The point of using Lorem Ipsum</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="chat-contact" role="tabpanel">
                                        <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar10.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <div class="d-flex justify-content-between mb-0">
                                                            <h6 class="mb-0">Hannah Gill</h6>
                                                            <div class="text-muted">
                                                                <i class="fa fa-heart-o pl-2 text-danger"></i>
                                                                <i class="fa fa-trash pl-2 text-danger"></i>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted">hannahgill@eBazar.com</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar2.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <div class="d-flex justify-content-between mb-0">
                                                            <h6 class="mb-0">Abigail Bell</h6>
                                                            <div class="text-muted">
                                                                <i class="fa fa-heart pl-2 text-danger"></i>
                                                                <i class="fa fa-trash pl-2 text-danger"></i>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted">abigailbell@eBazar.com</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar1.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <div class="d-flex justify-content-between mb-0">
                                                            <h6 class="mb-0">Megan Dyer</h6>
                                                            <div class="text-muted">
                                                                <i class="fa fa-heart-o pl-2 text-danger"></i>
                                                                <i class="fa fa-trash pl-2 text-danger"></i>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted">barbara.kelly@eBazar.com</span>
                                                    </div>
                                                </a>
                                            </li>
                                        
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar7.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <div class="d-flex justify-content-between mb-0">
                                                            <h6 class="mb-0">Ruth Cornish</h6>
                                                            <div class="text-muted">
                                                                <i class="fa fa-heart pl-2 text-danger"></i>
                                                                <i class="fa fa-trash pl-2 text-danger"></i>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted">ruthcornish@eBazar.com</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar4.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <div class="d-flex justify-content-between mb-0">
                                                            <h6 class="mb-0">Yvonne Duncan</h6>
                                                            <div class="text-muted">
                                                                <i class="fa fa-heart-o pl-2 text-danger"></i>
                                                                <i class="fa fa-trash pl-2 text-danger"></i>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted">yvonneduncan@eBazar.com</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item px-md-4 py-3 py-md-4">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded" src="assets/images/xs/avatar6.svg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <div class="d-flex justify-content-between mb-0">
                                                            <h6 class="mb-0">Nicola Carl</h6>
                                                            <div class="text-muted">
                                                                <i class="fa fa-heart-o pl-2 text-danger"></i>
                                                                <i class="fa fa-trash pl-2 text-danger"></i>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted">nicolacarl@eBazar.com</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card: -->
                            <div class="card card-chat-body border-0  w-100 px-4 px-md-5 py-3 py-md-4">

                                <!-- Chat: Header -->
                                <div class="chat-header d-flex justify-content-between align-items-center border-bottom pb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="index.php" title="Home" class="d-block d-xxl-none"><i class="icofont-arrow-left fs-4"></i></a>
                                        <a href="javascript:void(0);" title="">
                                            <img class="avatar rounded" src="assets/images/xs/avatar2.svg" alt="avatar">
                                        </a>
                                        <div class="ms-3">
                                            <h6 class="mb-0">Grace Smith</h6>
                                            <small class="text-muted">Last seen: 3 hours ago</small>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a class="nav-link py-2 px-3 text-muted d-none d-lg-block" href="javascript:void(0);"><i class="fa fa-camera"></i></a>
                                        <a class="nav-link py-2 px-3 text-muted d-none d-lg-block" href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
                                        <a class="nav-link py-2 px-3 text-muted d-none d-lg-block" href="javascript:void(0);"><i class="fa fa-gear"></i></a>
                                        <a class="nav-link py-2 px-3 text-muted d-none d-lg-block" href="javascript:void(0);"><i class="fa fa-info-circle"></i></a>
                                        <a class="nav-link py-2 px-3 d-block d-lg-none chatlist-toggle" href="#"><i class="fa fa-bars"></i></a>

                                        <!-- Mobile menu -->
                                        <div class="nav-item list-inline-item d-block d-xl-none">
                                            <div class="dropdown">
                                                <a class="nav-link text-muted px-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <ul class="dropdown-menu shadow border-0">
                                                    <li><a class="dropdown-item" href="index.php"><i class="fa fa-camera"></i> Share Images</a></li>
                                                    <li><a class="dropdown-item" href="index.php"><i class="fa fa-video-camera"></i> Video Call</a></li>
                                                    <li><a class="dropdown-item" href="index.php"><i class="fa fa-gear"></i> Settings</a></li>
                                                    <li><a class="dropdown-item" href="index.php"><i class="fa fa-info-circle"></i> Info</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Chat: body -->
                                <ul class="chat-history list-unstyled mb-0 py-lg-5 py-md-4 py-3 flex-grow-1">
                                    <!-- Chat: left -->
                                    <li class="mb-3 d-flex flex-row align-items-end">
                                        <div class="max-width-70">
                                            <div class="user-info mb-1">
                                                <img class="avatar sm rounded-circle me-1" src="assets/images/xs/avatar2.svg" alt="avatar">
                                                <span class="text-muted small">10:10 AM, Today</span>
                                            </div>
                                            <div class="card border-0 p-3">
                                                <div class="message"> Hi Aiden, how are you?</div>
                                            </div>
                                        </div>
                                        <!-- More option -->
                                        <div class="btn-group">
                                            <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <ul class="dropdown-menu border-0 shadow">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Chat: right -->
                                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                        <div class="max-width-70 text-right">
                                            <div class="user-info mb-1">
                                                <span class="text-muted small">10:12 AM, Today</span>
                                            </div>
                                            <div class="card border-0 p-3 bg-primary text-light">
                                                <div class="message">Fine</div>
                                            </div>
                                        </div>
                                        <!-- More option -->
                                        <div class="btn-group">
                                            <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <ul class="dropdown-menu border-0 shadow">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Chat: left -->
                                    <li class="mb-3 d-flex flex-row align-items-end">
                                        <div class="max-width-70">
                                            <div class="user-info mb-1">
                                                <img class="avatar sm rounded-circle me-1" src="assets/images/xs/avatar2.svg" alt="avatar">
                                                <span class="text-muted small">10:10 AM, Today</span>
                                            </div>
                                            <div class="card border-0 p-3">
                                                <div class="message">Product Stoke available</div>
                                            </div>
                                        </div>
                                        <!-- More option -->
                                        <div class="btn-group">
                                            <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <ul class="dropdown-menu border-0 shadow">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Chat: left -->
                                    <li class="mb-3 d-flex flex-row align-items-end">
                                        <div class="max-width-70">
                                            <div class="user-info mb-1">
                                                <img class="avatar sm rounded-circle me-1" src="assets/images/xs/avatar2.svg" alt="avatar">
                                                <span class="text-muted small">10:10 AM, Today</span>
                                            </div>
                                            <div class="card border-0 p-3">
                                                <div class="message"> Yes, and also new stoke On Way</div>
                                            </div>
                                        </div>
                                        <!-- More option -->
                                        <div class="btn-group">
                                            <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <ul class="dropdown-menu border-0 shadow">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Chat: right -->
                                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                        <div class="max-width-70 text-right">
                                            <div class="user-info mb-1">
                                                <span class="text-muted small">10:12 AM, Today</span>
                                            </div>
                                            <div class="card border-0 p-3 bg-primary text-light">
                                                <div class="message">ok,Lets check stoke and sent me product pic</div>
                                            </div>
                                        </div>
                                        <!-- More option -->
                                        <div class="btn-group">
                                            <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <ul class="dropdown-menu border-0 shadow">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Chat: left -->
                                    <li class="mb-3 d-flex flex-row align-items-end">
                                        <div class="max-width-70">
                                            <div class="user-info mb-1">
                                                <img class="avatar sm rounded-circle me-1" src="assets/images/xs/avatar2.svg" alt="avatar">
                                                <span class="text-muted small">10:10 AM, Today</span>
                                            </div>
                                            <div class="card border-0 p-3">
                                                <div class="message">
                                                    <p>Please find attached images</p>
                                                    <img class="w120 img-thumbnail" src="assets/images/gallery/1.jpg" alt="" />
                                                    <img class="w120 img-thumbnail" src="assets/images/gallery/2.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- More option -->
                                        <div class="btn-group">
                                            <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <ul class="dropdown-menu border-0 shadow">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Chat: right -->
                                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                        <div class="max-width-70 text-right">
                                            <div class="user-info mb-1">
                                                <span class="text-muted small">10:12 AM, Today</span>
                                            </div>
                                            <div class="card border-0 p-3 bg-primary text-light">
                                                <div class="message">Okay, will check and let you know.</div>
                                            </div>
                                        </div>
                                        <!-- More option -->
                                        <div class="btn-group">
                                            <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <ul class="dropdown-menu border-0 shadow">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>

                                <!-- Chat: Footer -->
                                <div class="chat-message">
                                    <textarea  class="form-control" placeholder="Enter text here..."></textarea>
                                </div>

                            </div>
                        </div>
                    </div> <!-- row end -->
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
</body>

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/chat.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 21:41:07 GMT -->
</html>