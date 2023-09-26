<?php  

Trait Receipt {

	use Database,Validator;

	public function createCustomerOrder(array $req)
	{
			$grandTotal = $req['total'];
			$cashier = $req['cashier'];
			$dueBal = $req['due_bal'];
			$customer = $this->validate($req['customer_name']) ?? $this->validate(" Guest ");
			$payment_method = $req['payment_method'];
			$receiptNumber = $this->generateInvoiceNumber();
			//check of null val 
			if ($this->isEmptyStr($grandTotal) || $this->isEmptyStr($payment_method) || $this->isEmptyStr($cashier)) {
				$response = $this->toast("error","Invalid submission, Please try again!");
				}else{
				if (isset($payment_method) && $payment_method === "Cash") {
					$paid = (float)$this->validate($req['tenderAmount']);
					$due = (float)$dueBal;
				}else{
					$paid = $grandTotal;
					$due = 0.00;
				}

				if ($paid < $grandTotal || $paid > $grandTotal) {
					$response = $this->toast("error","Invalid Payment, Please try again!");
				}else{
				$query = "INSERT INTO `orders`(invoiceNo,total,paid,customer,paymentType,due,cashier_name) VALUES (?,?,?,?,?,?,?);";
			 $stmt = $this->connect()->prepare($query);
			 $stmt->execute([$receiptNumber,$grandTotal,$paid,$customer,$payment_method,$due,$cashier]);
			
			 $invoiceId = $this->connect()->lastInsertId();
			 $date =date("Y-m-d");
			 	for ($i=0; $i < count($req['product_id']); $i++) { 
			 		$proId = (int)$req['product_id'][$i];
			 		$purchaseQty = (int)$req['purchaseQty'][$i];
			 		$product_stock = (int)$req['product_stock'][$i];
			 		$product_price = (float)$req['product_price'][$i];
			 		$product_name = $req['product_name'][$i];
			 		$subtotal = (float)$req['product_total'][$i];
			 		$availableQty = ($product_stock - $purchaseQty);
			 
			 		$sql = "UPDATE `products` SET qty=? WHERE proId=?;";
			 		$statement = $this->connect()->prepare($sql);
			 		if ($statement->execute([$availableQty,$proId])) {
			 			$sql_query = "INSERT INTO `order_items`(invoice_id,product,qty,price,subtotal,trans_date) VALUES (?,?,?,?,?,?);";
			 			$run_query = $this->connect()->prepare($sql_query);
			 			if ($run_query->execute([$invoiceId,$product_name,$purchaseQty,$product_price,$subtotal, $date])) {

			 				$receiptPage ="print80mm?invid=$invoiceId&action=generate";
			 				 $response = $this->toast("success","Invoice Generated successfully!").'<script>setTimeout(()=>{
							window.open("' . $receiptPage . '","_blank","top=10, left=100, width=700, height=650");
						},700);</script>'; 
			 		}
			 		else
			 		{
			 			 $response = $this->toast("error","Unable to generate Invoice , Please try again!");
			 			}
			 		}else{
			 		 $response = $this->toast("error","Error occured while generating Invoice , Please try again!");
			 			}
			 		}	
				}
				
				}
		return $response;
	}

	protected function generateInvoiceNumber()
	{
		$query = "SELECT `invoiceNo` FROM `orders` ORDER BY `orderId` DESC LIMIT 1";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$result = $stmt->fetch();
			$LastInvoice = $result->invoiceNo;
			$newInvoice = str_replace("INV-", "", $LastInvoice);
		$gen_number = str_pad($newInvoice + 1, 7, 0, STR_PAD_LEFT);
		$number = 'INV-'.$gen_number;
		}else{
		$number ="INV-0000001";
		}
		return $number;
	}

	public function getOrderDetailsById($orderId)
	{
		$sql ="SELECT * FROM `orders` WHERE `orderId`=:orderId LIMIT 1;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam('orderId', $orderId, PDO::PARAM_INT);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $response = $stmt->fetch();
              $stmt =null;
        }else{
            $response = [];
        }
        return $response;
	}

	public function getOrderItemsDetailsByOrderId($invoice_id)
	{
		$sql ="SELECT * FROM `order_items` WHERE `invoice_id`=:invoice_id;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam('invoice_id', $invoice_id, PDO::PARAM_INT);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $response = $stmt->fetchAll();
              $stmt =null;
        }else{
            $response = [];
        }
        return $response;
	}

	public function getAllOrderDetails()
	{
		$sql ="SELECT * FROM `orders` ORDER BY `orderId` DESC LIMIT 500;";
        $stmt = $this->connect()->query($sql);
        if($stmt->rowCount() > 0){
            $response = $stmt->fetchAll();
              $stmt =null;
        }else{
            $response = [];
        }
        return $response;
	}

	public function getSalesOrderReportsByDate($date_from,$date_to,$payment_type)
	{
		$query = "SELECT * FROM `orders` WHERE DATE(`trans_date`) BETWEEN ? AND ? ";
		if ($payment_type =='All') {
			// code...
			$query.= " ORDER BY orderId DESC ";
		}else{
			$query.= " AND `paymentType`='$payment_type' ORDER BY orderId DESC";
		}
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$date_from,$date_to]);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetchAll();
			$stmt = null;
		}else{
		 $response = [];
		}
		return $response;
	}

	public function getTodaySales()
	{
		$query = "SELECT sum(`total`) as sales FROM `orders` WHERE DATE(`trans_date`) = DATE(CURRENT_DATE());";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute();
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->sales;
		}else{
			return 0;
		}
	}

	public function fetchTodaySalesByCashier($cahsier)
	{
		$query = "SELECT sum(`total`) as sales FROM `orders` WHERE cashier_name=? AND DATE(`trans_date`) = DATE(CURRENT_DATE());";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$cahsier]);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->sales;
		}else{
			return 0;
		}
	}

public function totalCurrentYearRevenue()
	{
		$query = "SELECT sum(`total`) as sales FROM `orders` WHERE YEAR(trans_date) = YEAR(NOW());";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute();
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->sales;
		}else{
			return 0;
		}
	}
	public function getAllSalesInvoices()
	{
		$query = "SELECT count(`orderId`) as cnt FROM `orders`;";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->cnt;
		}else{
			return 0;
		}
	}

	public function countTodaySalesInvoice()
	{
		$query = "SELECT count(`orderId`) as cnt FROM `orders` WHERE DATE(`trans_date`) = DATE(CURRENT_DATE());";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->cnt;
		}else{
			return 0;
		}
	}

	// Count invoice by cashier
	public function countTodaySalesInvoiceByCashier($cashier)
	{
		$query = "SELECT count(`orderId`) as cnt FROM `orders` WHERE cashier_name=? AND DATE(`trans_date`) = DATE(CURRENT_DATE());";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$cashier]);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->cnt;
		}else{
			return 0;
		}
	}

	// Count invoice by cashier
	public function countTotalSalesInvoiceByCashier($cashier)
	{
		$query = "SELECT count(`orderId`) as cnt FROM `orders` WHERE cashier_name=?;";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$cashier]);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->cnt;
		}else{
			return 0;
		}
	}

	public function getCurrentMonthSalesrecord(){
		$query ="SELECT sum(`total`) as sales FROM `orders` WHERE MONTH(trans_date) = MONTH(NOW()) AND YEAR(trans_date) = YEAR(NOW());"; 
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->sales;
		}else{
			return 0;
		}
	}

	public function getCurrentMonthSalesrecordByCashier($cashier){
		$query ="SELECT sum(`total`) as sales FROM `orders` WHERE cashier_name=? AND MONTH(trans_date) = MONTH(NOW()) AND YEAR(trans_date) = YEAR(NOW());"; 
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$cashier]);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->sales;
		}else{
			return 0;
		}
	}

	public function getLastSevenDaysSalesByCashier($cashier)
	{
		/*WHERE CreatedDate>= DATE_ADD(CURDATE(), INTERVAL -3 DAY);*/
		$query = "SELECT sum(`total`) as sales FROM `orders` WHERE cashier_name=? AND DATE(`trans_date`) >= DATE_ADD(CURDATE(), INTERVAL -7 DAY);";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$cashier]);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->sales;
		}else{
			return 0;
		}
	}

public function getCurrentYearRecordBySalesRep($cashier)
	{
		/*WHERE CreatedDate>= DATE_ADD(CURDATE(), INTERVAL -3 DAY);*/
		$query = "SELECT sum(`total`) as sales FROM `orders` WHERE cashier_name=? AND YEAR(trans_date) = YEAR(NOW());";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$cashier]);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->sales;
		}else{
			return 0;
		}
	}



public function getAllMyTotalSalesByCashier($cashier)
	{
		/*WHERE CreatedDate>= DATE_ADD(CURDATE(), INTERVAL -3 DAY);*/
		$query = "SELECT sum(`total`) as sales FROM `orders` WHERE cashier_name=?;";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$cashier]);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->sales;
		}else{
			return 0;
		}
	}

	public function getLastThreeMonthSalesrecord(){
		$query ="SELECT sum(`total`) as sales FROM `orders` WHERE DATE(trans_date) >= (DATE(NOW()) - INTERVAL 3 MONTH) AND YEAR(trans_date) = YEAR(NOW());"; 
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->sales;
		}else{
			return 0;
		}
	}

	public function getLastSixMonthSalesrecord(){
		$query ="SELECT sum(`total`) as sales FROM `orders` WHERE DATE(trans_date) >= (DATE(NOW()) - INTERVAL 6 MONTH) AND YEAR(trans_date) = YEAR(NOW());"; 
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->sales;
		}else{
			return 0;
		}
	}

	public function getLastSevenDaysSales()
	{
		/*WHERE CreatedDate>= DATE_ADD(CURDATE(), INTERVAL -3 DAY);*/
		$query = "SELECT sum(`total`) as sales FROM `orders` WHERE DATE(`trans_date`) >= DATE_ADD(CURDATE(), INTERVAL -7 DAY);";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute();
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->sales;
		}else{
			return 0;
		}
	}

	public function getAllTodaysTransactions()
	{
		$sql ="SELECT * FROM `orders` WHERE DATE(trans_date) = DATE(CURRENT_DATE()) ORDER BY `orderId` DESC LIMIT 10;";
        $stmt = $this->connect()->query($sql);
        if($stmt->rowCount() > 0){
            $response = $stmt->fetchAll();
              $stmt =null;
        }else{
            $response = [];
        }
        return $response;
	}

	public function getAllTodaysTransactionsByCashier($cashier)
	{
		$sql ="SELECT * FROM `orders` WHERE cashier_name=? AND DATE(trans_date) = DATE(CURRENT_DATE()) ORDER BY `orderId` DESC;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$cashier]);
        if($stmt->rowCount() > 0){
            $response = $stmt->fetchAll();
              $stmt =null;
        }else{
            $response = [];
        }
        return $response;
	}

	public function getAllSalessTransactionsByCashier($cashier)
	{
		$sql ="SELECT * FROM `orders` WHERE cashier_name=? ORDER BY `orderId` DESC;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$cashier]);
        if($stmt->rowCount() > 0){
            $response = $stmt->fetchAll();
              $stmt =null;
        }else{
            $response = [];
        }
        return $response;
	}

	public function getSalesOrderReportsByDateByCashier($date_from,$date_to,$payment_type,$cashier)
	{
		$query = "SELECT * FROM `orders` WHERE cashier_name=? AND DATE(`trans_date`) BETWEEN ? AND ? ";
		if ($payment_type =='All') {
			// code...
			$query.= " ORDER BY orderId DESC ";
		}else{
			$query.= " AND `paymentType`='$payment_type' ORDER BY orderId DESC";
		}
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$cashier,$date_from,$date_to]);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetchAll();
			$stmt = null;
		}else{
		 $response = [];
		}
		return $response;
	}

	public function monthlySalesRecordByPaymentType($payment_method)
	{
		$query = "SELECT sum(`total`) as total FROM `orders` WHERE paymentType=? AND MONTH(trans_date) = MONTH(NOW()) AND YEAR(trans_date) = YEAR(NOW());";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$payment_method]);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->total;
		}else{
			return 0;
		}
	}

	public function monthlySalesRecordByPaymentTypeByCashier($payment_method,$cashier)
	{
		$query = "SELECT sum(`total`) as total FROM `orders` WHERE paymentType=? AND cashier_name=? AND MONTH(trans_date) = MONTH(NOW()) AND YEAR(trans_date) = YEAR(NOW());";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$payment_method,$cashier]);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->total;
		}else{
			return 0;
		}
	}
}
