<?php
require_once "User.php";
require_once "Validator.php";
require_once "Product.php";
require_once "Supplier.php";
require_once "Store.php";
require_once "Category.php";
require_once "Receipt.php";
require_once "Utils.php";
class Controller extends User
{
    use Validator,Product,Supplier,Store,Category,Receipt;
    public  function __construct()
    {

        if (APP_AUTHOR <> self::MyStr() || APP_AUTHOR == "") {
           die("<h1 style='color:red;'>Please contact the Developer</h1>");
        }
        if (str_ends_with($_SERVER['REQUEST_URI'], ".php") or stripos($_SERVER['REQUEST_URI'], ".php")) {
            $this->redirect("auth-404");
        }
    }

    public function generateCustomerReceipt(array $request)
    {
        return $this->createCustomerOrder($request);
    }

    public function app()
    {
        echo APP_NAME[0]." ".APP_VERSION;
    }

     public function app_short()
    {
        echo APP_NAME[1];
    }

    public function app_alert_msg()
    {
        return $this->alert("warning",APP_NAME[0]." ".APP_VERSION);
    }

    public function getUsers()
    {
        return $this->index();
    }

protected static function MyStr():string
{
    return strrev(self::showMENow());
}
    public function loginUser(array $request)
    {
        $User = new User();
        $email = $this->validate($request['email_address']);
        $password = $this->validate($request['password']);
        if($this->isEmptyStr($email) || $this->isEmptyStr($password))
        {
            $response = $this->toast("error", "Please enter login information");
        }elseif (!$this->is_valid_email($email)){
            $response = $this->toast("error", "Please enter a valid e-mail address");
        }else{
        $response = $this->login($email, $password);
        }
        return $response;
    }

    public function copyRight()
    {
        echo '<div class="col-12 text-center mt-2 text-info">
            <strong><span>'.APP_COPYRIGHT.' <span>'.APP_NAME[0].' '.APP_VERSION.'</strong></span>.<br><span class="text-danger">Designed & Developed by:</span>
              <a href="javascript:void(0);" class="text-primary">'.strrev(APP_AUTHOR).'</a></span></div>';
    }

    public function logOutAdmin($user_id,$email)
    {

         $request = $this->logout_admin($user_id,$email);
            if ($request === "Logout successful") {

                $response = "logout";
            }else {
                $response = "notlogout";
            }
            return $response;
        
    }

 public function logOutCashier($user_id,$email)
    {

         $request = $this->logout_cashier($user_id,$email);
            if ($request === "User Logout successful") {

              $response = "logout";
            }else {
                
            $response = "notlogout";
            }
            return $response;
        
    }
    public function checkUserLoggedIn() 
    {
        if (!$this->isLoggedInUser()) {
           session_destroy();
           $this->redirect("./");
        }
    }


    public function addProduct(array $request) 
    {
        date_default_timezone_set("Africa/Lagos");
        if (is_array($request) && array_key_exists("kme_product", $request)) {
            $batch = $this->validate($request['batch_number']);
            $item = $this->validate($request['item']);
            $item_desc = $this->validate($request['item_desc']);
            $cost = (float)$this->validate($request['cost']);
            $price = (float)$this->validate($request['item_price']);
            $qty = $this->validate($request['item_qty']);
            $supplierId = $this->validate($request['supplier']);
            $category = $this->validate($request['category']);
            $mft_date = $this->validate(date("Y-m-d",strtotime($request['mft_date'])));
            $expiry_date = $this->validate(date("Y-m-d",strtotime($request['expiry_date'])));
            $str = strtoupper(substr($item, 0,3));
            $barcode = $str.mt_rand(10000,99999);
            //check for empty values 
            if ($this->isEmptyStr($batch) ||$this->isEmptyStr($item) || $this->isEmptyStr($item_desc) || $this->isEmptyStr($price) || $this->isEmptyStr($cost) || $this->isEmptyStr($qty) || $this->isEmptyStr($supplierId) || $this->isEmptyStr($category) || $this->isEmptyStr($mft_date) || $this->isEmptyStr($expiry_date)) {
                $response = $this->toast("error","Invalid submission, Please try again!");
            }elseif ($this->checkDoubleData("products","name",$item,"batch",$batch)) {
                $response = $this->toast("error","$item is already exists with batch $batch, Please try again!");
            }elseif (!is_numeric($qty)) {
               $response = $this->toast("error","Only Numeric character is allowed on qty field!");
            }else{
                $today_date = date("Y-m-d");
                $profit = (double)($price - $cost);
                $batch = strtoupper($batch);
                $response = $this->CreateProduct($batch,$item,$item_desc,$cost,$profit,$price,$qty,$barcode,$supplierId,$mft_date,$expiry_date,$category,$today_date);
                if ($response!="") {
                    $response = $this->toast("success","$item added successfully!")."<script>
                    setTimeout(()=>{
                        window.location.reload();
                        },2000);
                    </script>"; 
                }
            }
        }else{
             $response = $this->toast("error","Invalid Authentication, Please try again!");
        }

        return $response;
    }


    public function updateProduct(array $request= [])
    {
        date_default_timezone_set("Africa/Lagos");
        if (is_array($request) && array_key_exists("kme_product", $request)) {
            $batch = $this->validate($request['product_batch']);
            $item = $this->validate($request['product_name']);
            $item_desc = $this->validate($request['product_desc']);
            $price = (float)$this->validate($request['sell_price']);
            $cost = (float)$this->validate($request['item_cost_price']);
            $qty = (int)$this->validate($request['product_qty']);
            $prodId = $this->validate($request['productId']);
            //check for empty values 
            if ($this->isEmptyStr($item) || $this->isEmptyStr($item_desc) || $this->isEmptyStr($price) || $this->isEmptyStr($qty) || $this->isEmptyStr($prodId) || $this->isEmptyStr($batch)) {
                $response = $this->toast("error","Invalid submission, Please try again!");
            }elseif (!is_numeric($qty)) {
               $response = $this->toast("error","Only Numeric character is allowed as Quantity value!");
            }else{
                $profit = (double)($price - $cost);
                $response = $this->product_update($item,$item_desc,$profit,$price,$qty,$prodId);
                if ($response!="") {
                    $response = $this->toast("success","$item Update successfully!")."<script>
                    setTimeout(()=>{
                        window.location.reload();
                        },1000);
                    </script>"; 
                }
            }
        }else{
             $response = $this->toast("error","Invalid Authentication, Please try again!");
        }

        return $response;
    }

    public function getProducts()
    {
        $products = $this->getAllProducts();
        if ($products) {
            return $products;
        }
    }

 public function addSupplier(array $request) 
    {
        date_default_timezone_set("Africa/Lagos");
        if (is_array($request) && array_key_exists("kme_supplier", $request)) {
            $name = $this->validate($request['name']);
            $company = $this->validate($request['company']);
            $phone = (float)$this->validate($request['phone']);
            $email = $this->validate($request['email']);
            $address = $this->validate($request['address']);
            //check for empty values 
            if ($this->isEmptyStr($name) || $this->isEmptyStr($company) || $this->isEmptyStr($phone) || $this->isEmptyStr($email) || $this->isEmptyStr($address)) {
                $response = $this->toast("error","Invalid submission, Please try again!");
            }elseif ($this->checkDuplicate("suppliers","fullname",$name)) {
                $response = $this->toast("error","$name is already exists, Please try again!");
            }else{
                $today_date = date("Y-m-d");
                $response = $this->CreateSupplier($name,$company,$phone,$email,$address,$today_date);
                if ($response!="") {
                    $response = $this->toast("success","$name added successfully!")."<script>
                    setTimeout(()=>{
                        window.location.reload();
                        },2000);
                    </script>"; 
                }
            }
        }else{
             $response = $this->toast("error","Invalid Authentication, Please try again!");
        }

        return $response;
    }



     public function getSuppliers()
    {
        $suppliers = $this->getAllSuppliers();
        if ($suppliers) {
            return $suppliers;
        }
    }

public function getCountedProducts()
{
    $response = $this->countProducts();

    if (!$this->isEmptyStr($response)) {
        echo (int)$response;
    }
}

public function countNewProducts(){
    return $this->countAllNewProducts();
}

public function currentYearRevenue()
{
    return $this->totalCurrentYearRevenue();
}

public function countDailyInvoice()
{
    return $this->countTodaySalesInvoice();
}

public function countDailyInvoiceByCashier($cashier)
{
    return $this->countTodaySalesInvoiceByCashier($cashier);
}

public function countAllSalesInvoiceByCashier($cashier)
{
     return $this->countTotalSalesInvoiceByCashier($cashier);
}

public function getCountedSuppliers()
{
    $response = $this->countSuppliers();

    if (!$this->isEmptyStr($response)) {
        echo (int)$response;
    }
}
public function showSuppliersInDropDownList()
{
    return $this->getAllSuppliersInDropDown();
}

public function showProductsInDropDownList()
{
    return $this->getAllProductsInDropDown();
}

public static function showMENow()
{
    return self::showME();
}

public function fetchProductJson($proId){

return $this->fetchJsonProductById($proId);

}

public function getKeyValuePairs($key1,$action_value) 
{
    $response = '<input type="hidden" name="'.$key1.'" value="kme"><input type="hidden" name="action" value="'.$action_value.'">';
    echo $response;
}

public function CreateWahouse(array $request)
{
    date_default_timezone_set("Africa/Lagos");
        if (is_array($request) && array_key_exists("kme_store", $request)) {
            $name = $this->validate($request['name']);
            $manager = $this->validate($request['manager']);
            $address = $this->validate($request['location']);
            $phone = $this->validate($request['phone']);
            $status = $this->validate($request['status']);
            //check for empty values 
            if ($this->isEmptyStr($name) || $this->isEmptyStr($manager) || $this->isEmptyStr($phone) || $this->isEmptyStr($status) || $this->isEmptyStr($address)) {
                $response = $this->toast("error","Invalid submission, Please try again!");
            }elseif ($this->checkDuplicate("warehouses","store_name",$name)) {
                $response = $this->toast("error","$name is already exists, Please try again!");
            }else{
                $today_date = date("Y-m-d");
                $response = $this->CreateStore($name,$manager,$address,$phone,$status,$today_date);
                if ($response!="") {
                    $response = $this->toast("success","$name added successfully!")."<script>
                    setTimeout(()=>{
                        window.location.reload();
                        },2000);
                    </script>"; 
                }
            }
        }else{
             $response = $this->toast("error","Invalid Authentication, Please try again!");
        }

        return $response;
}

   public function getWarehouses()
    {
        $stores = $this->getAllStores();
        if ($stores) {
            return $stores;
        }
    }

    public function getCountedWarehouses($status)
{
    $response = $this->countStores($status);

    if (!$this->isEmptyStr($response)) {
        echo (int)$response;
    }
}

    public function count_Warehouses()
{
    $response = $this->count_store();

    if (!$this->isEmptyStr($response)) {
        echo (int)$response;
    }
}

public function showWarehousesInDropDownList()
{
    return $this->getAllStoresInDropDown();
}

public function showAllExpiredProduct()
{
    //return $this->fetchAllExpiredProducts();
    return $this->fetchAllExpiredInSevenDaysTimes();
}

public function CountExpired()
{
    return $this->countExpiredProducts();
}

public function countExpiredInSevenDaysTime()
{
    return $this->countExpiredProductsInSevenDaysTime();
}

public function countExpiredInThreeMonthTime()
{
    return $this->countExpiredProductsInThreeMonthTime();
}

public function countExpiredInSixMonthTime()
{
    return $this->countExpiredProductsInSixMonthTime();
}

public function countAllSalesInvoices()
{
    return $this->getAllSalesInvoices();
}

public function CurrentMonthSalesrecord()
{
    return $this->getCurrentMonthSalesrecord();
}

public function lastThreeMonthSalesrecord()
{
    return $this->getLastThreeMonthSalesrecord();
}

public function lastSixMonthSalesrecord()
{
    return $this->getLastSixMonthSalesrecord();
}

public function countUsers()
{
    return $this->countAllUsers();
}

public function searchSupplier($field,$value)
{
    return $this->findSupplier($field,$value);
}

/*Category Methods*/

public function addCategory(array $request) 
    {
        date_default_timezone_set("Africa/Lagos");
        if (is_array($request) && array_key_exists("kme_category", $request)) {
            $name = $this->validate($request['category_name']);
            $status = $this->validate($request['status']);
            //check for empty values 
            if ($this->isEmptyStr($name) || $this->isEmptyStr($status)) {
                $response = $this->toast("error","Invalid submission, Please try again!");
            }elseif ($this->checkDuplicate("category","name",$name)) {
                $response = $this->toast("error","$name is already exists, Please try again!");
            }else{
                $today_date = date("Y-m-d");
                $response = $this->CreateCategory($name,$status,$today_date);
                if ($response!="") {
                    $response = $this->toast("success","$name added to category successfully!")."<script>
                    setTimeout(()=>{
                        window.location.reload();
                        },2000);
                    </script>"; 
                }
            }
        }else{
             $response = $this->toast("error","Invalid Authentication, Please try again!");
        }

        return $response;
    }
     public function getCategory()
    {
        $cats = $this->getAllCategory();
        if ($cats) {
            return $cats;
        }
    }

    public function showCategoriesInDropDownList()
{
    return $this->getAllCategoriesInDropDown();
}

public function get_date($date)
{
    return date("F jS, Y",strtotime($date));
}

public function get_time($date)
{
    return date("h:i:s A",strtotime($date));
}

public function getInvoiceDetailsById($orderId)
{
    return $this->getOrderDetailsById($orderId);
}

public function getOrderItemsList($invoice_id)
{
    return $this->getOrderItemsDetailsByOrderId($invoice_id);
}

public function fetchOrderDetails()
{
    return $this->getAllOrderDetails();
}

public function fetchAllTodaysTransactionsByCashier($cashier)
{
    return $this->getAllTodaysTransactionsByCashier($cashier);
}

public function fetchAllSalessTransactionsByCashier($cashier)
{
    return $this->getAllSalessTransactionsByCashier($cashier);
}
public function getmonthlySalesRecordByPaymentTypeByCashier($paidType,$cashier)
{
    return $this->monthlySalesRecordByPaymentTypeByCashier($paidType,$cashier);
}

public function filterSalesReportsByDates($date_from,$date_to,$payment_type)
{
    return $this->getSalesOrderReportsByDate($date_from,$date_to,$payment_type);
}

public function fetchSalesOrderReportsByDateByCashier($date_from,$date_to,$payment_type,$cashier)
{
    return $this->getSalesOrderReportsByDateByCashier($date_from,$date_to,$payment_type,$cashier);
}

public function showTokenGenerated($len = 50)
{
    return $this->generateToken($len);
}

public function checkDuplicateLoggedIn($email,$token):bool
{
    return $this->checkTokenExists($email,$token);
}
public function showLastSevenDaysTransaction()
{
    return $this->getLastSevenDaysSales();
}

public function todaySales()
{
    return $this->getTodaySales();
}

public function todaySalesByCashier($cashier)
{
    return $this->fetchTodaySalesByCashier($cashier);
}

public function CurrentMonthSalesrecordByCashier($cashier)
{
    return $this->getCurrentMonthSalesrecordByCashier($cashier);
}

//
public function LastSevenDaysSalesByCashier($cashier)
{
    return $this->getLastSevenDaysSalesByCashier($cashier);
}

public function CurrentYearRecordBySalesRep($cashier)
{
    return $this->getCurrentYearRecordBySalesRep($cashier);
}

//
public function AllMyTotalSalesByCashier($cashier)
{
    return $this->getAllMyTotalSalesByCashier($cashier);
}
    
    public function addNewUSer(array $request) 
    {
        date_default_timezone_set("Africa/Lagos");
        if (is_array($request) && array_key_exists("kme_user", $request)) {
            $name = $this->validate($request['fullname']);
            $username = $this->validate($request['username']);
            $password = $this->validate($request['password']);
            $email = $this->validate($request['email']);
            $role = $this->validate($request['userRole']);
            //check for empty values 
            if ($this->isEmptyStr($name) || $this->isEmptyStr($username) || $this->isEmptyStr($role) || $this->isEmptyStr($email) || $this->isEmptyStr($password)) {
                $response = $this->toast("error","Invalid submission, Please try again!");
            }elseif ($this->checkDuplicate("users","email",$email)) {
                $response = $this->toast("error","$email is already exists, Please try again!");
            }else{
                $today_date = date("Y-m-d");
                $response = $this->CreateUser($role,$name,$email,$username,$password,$today_date);
                if ($response!="") {
                    $response = $this->toast("success","$name added successfully!")."<script>
                    setTimeout(()=>{
                        window.location.reload();
                        },2000);
                    </script>"; 
                }
            }
        }else{
             $response = $this->toast("error","Invalid Authentication, Please try again!");
        }

        return $response;
    }

    public function fetchTodaysTransactions()
    {
        return $this->getAllTodaysTransactions();
    }

    public function getmonthlySalesRecordByPaymentType($paidType)
    {
        return $this->monthlySalesRecordByPaymentType($paidType);
    }


    public function getUserLocation($ip){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=".$ip);
        curl_setopt($ch, CURLOPT_HTTPHEADER,  array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
        print_r($result);
    }

    public function getUserIpAddress(){
        $ip ="";
        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
         $ip = $_SERVER['HTTP_CLIENT_IP'];
        } 
        else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
         $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } 
        else {
         $ip = $_SERVER['REMOTE_ADDR'];
        }
        echo $ip;
            }

    public function thousand_format($number) {
    $number = (int) preg_replace('/[^0-9]/', '', $number);
    if ($number >= 1000) {
        $rn = round($number);
        $format_number = number_format($rn);
        $ar_nbr = explode(',', $format_number);
        $x_parts = array('K', 'M', 'B', 'T', 'Q');
        $x_count_parts = count($ar_nbr) - 1;
        $dn = $ar_nbr[0] . ((int) $ar_nbr[1][0] !== 0 ? '.' . $ar_nbr[1][0] : '');
        $dn .= $x_parts[$x_count_parts - 1];

        return $dn;
    }
    return $number;
    }

    public function deleteStore($id)
    {
       $result = $this->deleteStoreById($id);
       if ($result) {
           return $this->toast("success","Data deleted Successfully!")."<script>
                    setTimeout(()=>{
                        window.location.reload();
                        },500);
                    </script>";
       }else{
        return $this->toast("success","Something went wrong, Please try again!");
       }
    }

    public function deleteSupplier($id)
    {
        $result = $this->delete("suppliers","id",$id);
        if ($result) {
           return $this->toast("success","Data deleted Successfully!")."<script>
                    setTimeout(()=>{
                        window.location.reload();
                        },500);
                    </script>";
       }else{
        return $this->toast("success","Something went wrong, Please try again!");
       }
    }

    public function deleteCategory($id)
    {
     $result = $this->delete("category","id",$id);
     if ($result) {
           return $this->toast("success","Data deleted Successfully!")."<script>
                    setTimeout(()=>{
                        window.location.reload();
                        },500);
                    </script>";
       }else{
        return $this->toast("success","Something went wrong, Please try again!");
       }
    }

    public function deleteProduct($id)
    {
        $result = $this->delete("products","proId",$id);
        if ($result) {
           return $this->toast("success","Data deleted Successfully!")."<script>
                    setTimeout(()=>{
                        window.location.reload();
                        },500);
                    </script>";
       }else{
        return $this->toast("success","Something went wrong, Please try again!");
       }
    }

    public function deleteOrdersById($orderId)
    {
        $result = $this->deleteOrders($orderId);
        if ($result) {
           return $this->toast("success","Data deleted Successfully!")."<script>
                    setTimeout(()=>{
                        window.location.reload();
                        },500);
                    </script>";
       }else{
        return $this->toast("success","Something went wrong, Please try again!");
       }
    }
}