<div class="sidebar px-4 py-4 py-md-4 me-0">
    <div class="d-flex flex-column h-100">
        <a href="./" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <img src="assets/images/favicon.png" width="50" height="50" class="img-fluid" style="border-radius: 50% !important;">
<!--                        <i class="bi bi-bag-check-fill fs-4"></i>-->
                    </span>
            <span class="logo-text">POS SYSTEM</span>
        </a>
        <?php 
        //check if the loggedIn User is Admin
        if ($_SESSION['user_type'] === "Administrator") {
            // show all admin menu...
             ?>

               <ul class="menu-list flex-grow-1 mt-3">
            <li><a class="m-link" href="index"><i class="icofont-home fs-5"></i> <span>Dashboard</span></a></li>
            <li><a class="m-link" href="create-invoice"> <i class="icofont-shopping-cart fs-5"></i> <span>POS Sales</span></a></li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#categories" href="#">
                    <i class="icofont-chart-flow fs-5"></i> <span>Categories</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="categories">
                    <li><a class="ms-link" href="categorie-list">Categories List</a></li>
                    <li><a class="ms-link" href="categories-edit">Categories Edit</a></li>
                    <li><a class="ms-link" href="categories-add">Categories Add</a></li>
                </ul>
            </li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-order" href="#">
                    <i class="icofont-notepad fs-5"></i> <span>Orders</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-order">
                    <li><a class="ms-link" href="order-list">Orders List</a></li>
                    <li><a class="ms-link" href="order-details">Order Details</a></li>
                    <li><a class="ms-link" href="order-invoices">Order Invoices</a></li>
                </ul>
            </li>
            <li><a class="m-link" href="customers"> <i class="icofont-funky-man fs-5"></i> <span>Customers</span></a></li>
            <li><a class="m-link" href="supplier"> <i class="icofont-funky-man fs-5"></i> <span>Suppliers</span></a></li>
            <li><a class="m-link" href="coupons-list">  <i class="icofont-sale-discount fs-5"></i> <span>Sales Promotion</span></a></li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-inventory" href="#">
                    <i class="icofont-chart-histogram fs-5"></i> <span>Inventory</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-inventory">
                    <li><a class="ms-link" href="inventory-info">Stock List</a></li>
                    <li><a class="ms-link" href="purchase">Purchase</a></li>
                    <li><a class="ms-link" href="returns">Returns</a></li>
                    <li><a class="ms-link" href="department">Department</a></li>
                </ul>
            </li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Componentsone" href="#"><i
                        class="icofont-ui-calculator"></i> <span>Accounts</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-Componentsone">
                    <li><a class="ms-link" href="invoices">Invoices </a></li>
                    <li><a class="ms-link" href="expenses">Expenses </a></li>
                    <li><a class="ms-link" href="salaryslip">Salary Slip </a></li>
                    <li><a class="ms-link" href="create-invoice">Create Invoice </a></li>
                </ul>
            </li>
            <li><a class="m-link" href="store-locator"><i class="icofont-focus fs-5"></i> <span>Store Locator</span></a></li>
        </ul>
        <?php 

    }else{?>
          <ul class="menu-list flex-grow-1 mt-3">
            <li><a class="m-link" href="index"><i class="icofont-home fs-5"></i> <span>Dashboard</span></a></li>
            <li><a class="m-link" href="products"> <i class="icofont-truck-loaded fs-5"></i> <span>Products</span></a></li>
            <li><a class="m-link" href="create-invoice"> <i class="icofont-shopping-cart fs-5"></i> <span>Make Sales</span></a></li>
           
            <li><a class="m-link" href="invoices"> <i class="icofont-funky-man fs-5"></i> <span>Invoices</span></a></li>
            <li><a class="m-link" href="customers"> <i class="icofont-funky-man fs-5"></i> <span>Customers</span></a></li>
            <li><a class="m-link" href="supplier"> <i class="icofont-funky-man fs-5"></i> <span>Suppliers</span></a></li>
            <li><a class="m-link" href="coupons-list"> <i class="icofont-sale-discount fs-5"></i> <span>Sales Reports</span></a></li>
            <li><a class="m-link" href="store-locator"><i class="icofont-focus fs-5"></i> <span>Store Locator</span></a></li>
        </ul>
       <?php
        }
        ?>
        <!-- Menu: main ul -->
       
        <!-- Menu: menu collepce btn -->
        <button type="button" class="btn btn-link sidebar-mini-btn text-light">
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
        </button>
    </div>
</div>