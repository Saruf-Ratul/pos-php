<?php
require_once "core.php";
$Controller = new Controller();
//check server request
$request_method = $_SERVER['REQUEST_METHOD'];
//Handle post Request
if ($request_method == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] != ""){
        switch($_POST['action']){
            case 'login_user':
                echo $Controller->loginUser($_POST);
                break;
                case 'create_new_product':
               echo $Controller->addProduct($_POST);
                 break;

                   case 'update_existing_product':
               echo $Controller->updateProduct($_POST);
                 break;

                  case 'create_new_supplier':
                echo $Controller->addSupplier($_POST);
                 break;
                 //create_new_user
                  case 'create_new_user':
                echo $Controller->addNewUSer($_POST);
                 break;

                 case 'fetch_product_id':
                 echo $Controller->fetchProductJson($_POST['proId']); 
                 break;

                 case 'create_new_warehouse':
                 echo $Controller->CreateWahouse($_POST);  
                 break;

                 case 'create_new_category':
                 echo $Controller->addCategory($_POST);  
                 break;

                  case 'create_new_receipt':
                 echo $Controller->generateCustomerReceipt($_POST);  
                 break;
                 
                  case 'editProduct_action':
                 echo $Controller->fetchProductJson($_POST['proId']);  
                 break;

                  case 'delete_ware_house':
                 echo $Controller->deleteStore($_POST['store_id']);  
                 break;
                 
                  case 'delete_supplier':
                 echo $Controller->deleteSupplier($_POST['supplierId']);  
                 break;

                 case 'delete_order_by_id':
                 echo $Controller->deleteOrdersById($_POST['orderId']);  
                 break;

                 case 'delete_product':
                 echo $Controller->deleteProduct($_POST['prodId']);  
                 break;
                 
                  case 'delete_category':
                 echo $Controller->deleteCategory($_POST['catid']);  
                 break;

                default:
                break;
    }
}

}

//Handle get Request
if($request_method == 'GET') {
    if (isset($_GET['user-action']) && $_GET['user-action'] != "") {
        switch ($_GET['user-action']) {
            case 'logoutadmin':
               $result = $Controller->logOutAdmin($_SESSION['loggedIn_ID'],$_SESSION['loggedIn_email']);
              if ($result ==='logout') {
                  session_destroy();
                $Controller->redirect("./");
              }
                break;
                 case 'logoutcashier':
               $result = $Controller->logOutCashier($_SESSION['loggedIn_ID'],$_SESSION['loggedIn_email']);
              if ($result ==='logout') {
                  session_destroy();
                $Controller->redirect("./");
              }
                break;
            
            default:
                // code...
                break;
        }
    }
}

