<?php  

Trait Product {

use Database;

protected string $table ="products";

	public function CreateProduct($batch,$item,$item_desc,$cost,$profit,$price,$qty,$barcode,$supplierId,$mft_date,$expiry_date,$category,$today_date)
	{
		$query = "INSERT INTO $this->table (batch,name,prod_desc,cost_price,profit,selling_price,qty,barcode,supId,mft_date,expiry_date,category,created_at) VALUES (:batch,:name,:prod_desc,:cost_price,:profit,:selling_price,:qty,:barcode,:supplier,:mft_date,:expiry_date,:category,:created_at);";
		$stmt = $this->connect()->prepare($query);
		 $stmt->bindParam('batch', $batch, PDO::PARAM_STR);
		 $stmt->bindParam('name', $item, PDO::PARAM_STR);
		 $stmt->bindParam('prod_desc', $item_desc, PDO::PARAM_STR);
		 $stmt->bindParam('cost_price', $cost, PDO::PARAM_INT);
		 $stmt->bindParam('profit', $profit, PDO::PARAM_INT);
		 $stmt->bindParam('selling_price', $price, PDO::PARAM_INT);
		 $stmt->bindParam('qty', $qty, PDO::PARAM_INT);
		 $stmt->bindParam('barcode', $barcode, PDO::PARAM_STR);
		 $stmt->bindParam('supplier', $supplierId, PDO::PARAM_INT);
		 $stmt->bindParam('mft_date', $mft_date, PDO::PARAM_STR);
		 $stmt->bindParam('expiry_date', $expiry_date, PDO::PARAM_STR);
		 $stmt->bindParam('category', $category, PDO::PARAM_STR);
		 $stmt->bindParam('created_at', $today_date, PDO::PARAM_STR);
		 if ( $stmt->execute()) {
		 	return "Yes";
		 }else{
		 	return "";
		 }
	}

	public function product_update($item,$item_desc,$profit,$price,$qty,$prodId)
	{
		$query = "UPDATE $this->table SET name=:name,prod_desc=:prod_desc,profit=:profit,selling_price=:selling_price,qty=:qty WHERE proId=:proId LIMIT 1;";
		$stmt = $this->connect()->prepare($query);
		 $stmt->bindParam('name', $item, PDO::PARAM_STR);
		 $stmt->bindParam('prod_desc', $item_desc, PDO::PARAM_STR);
		 $stmt->bindParam('profit', $profit, PDO::PARAM_INT);
		 $stmt->bindParam('selling_price', $price, PDO::PARAM_INT);
		 $stmt->bindParam('qty', $qty, PDO::PARAM_INT);
		 $stmt->bindParam('proId', $prodId, PDO::PARAM_INT);
		 if ( $stmt->execute()) {
		 	return "Yes";
		 }else{
		 	return "";
		 }

	}


	public function getAllProducts()
	{
		$query = "SELECT * FROM $this->table ORDER BY created_at ASC LIMIT 500;";

		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetchAll();
			$stmt = null;
		}else{
			$response = [];
		}
		
		return $response;
	}

	public function countProducts()
	{
		$query = "SELECT count(*) as cnt FROM $this->table WHERE qty > 0 AND expiry_date > DATE(CURRENT_DATE());";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			return $response->cnt;
		}else{
			return 0;
		}
	}

	public function countExpiredProducts()
	{
		$query = "SELECT count(`proId`) as cnt FROM $this->table WHERE DATE(expiry_date) <= DATE(CURRENT_DATE());";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			return $response->cnt;
		}else{
			return 0;
		}
	}

	public function countExpiredProductsInSevenDaysTime()
	{
		$query = "SELECT count(`proId`) as cnt FROM $this->table WHERE DATE(expiry_date) <= DATE(CURRENT_DATE() + INTERVAL 7 DAY);";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			return $response->cnt;
		}else{
			return 0;
		}
	}

	public function countExpiredProductsInThreeMonthTime()
	{
		$query = "SELECT count(`proId`) as cnt FROM $this->table WHERE DATE(expiry_date) <= DATE(CURRENT_DATE() + INTERVAL 3 MONTH);";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			return $response->cnt;
		}else{
			return 0;
		}
	}

	public function countExpiredProductsInSixMonthTime()
	{
		$query = "SELECT count(`proId`) as cnt FROM $this->table WHERE DATE(expiry_date) <= DATE(CURRENT_DATE() + INTERVAL 6 MONTH);";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			return $response->cnt;
		}else{
			return 0;
		}
	}

	public function countAllNewProducts()
	{
		$query = "SELECT count(`proId`) as cnt FROM $this->table WHERE DATE(created_at) >= DATE(CURRENT_DATE() - INTERVAL 10 DAY);";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			return $response->cnt;
		}else{
			return 0;
		}
	}

	public function getAllProductsInDropDown()
	{
		$response = "";
		$stmt = $this->connect()->prepare("SELECT * FROM `$this->table` ORDER BY proId DESC LIMIT 200");
		$stmt->execute();
		if ($stmt->rowCount() > 0) {
			while ($row = $stmt->fetch()) {
		$response .= "<option value='".$row->proId ."'>".htmlspecialchars_decode($row->name)." &raquo; ".$row->category."</option>";
			}
		}
		return $response;
	}

	public function fetchJsonProductById($proId)
	{
		$query = "SELECT * FROM $this->table WHERE proId=:proId LIMIT 1;";
		$stmt = $this->connect()->prepare($query);
		$stmt->bindParam(":proId",$proId,PDO::PARAM_INT);
		$stmt->execute();
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt =null;
			return json_encode($response);
		}
	}

	public function fetchAllExpiredProducts()
	{
		$query = "SELECT * FROM $this->table WHERE DATE(expiry_date) <= DATE(CURRENT_DATE()) ORDER BY proId DESC LIMIT 200;";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetchAll();
			$stmt =null;
			return $response;
		}
	}

	public function fetchAllExpiredInSevenDaysTimes()
	{
		$query = "SELECT * FROM $this->table WHERE DATE(expiry_date) <= DATE(CURRENT_DATE() + INTERVAL 7 DAY) ORDER BY proId DESC LIMIT 200;";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetchAll();
			$stmt =null;
			return $response;
		}
	}

	public function fetchAllExpiredInThreeMonthTime()
	{
		//betweencurdate() AND curdate() + 2;
		$query = "SELECT * FROM $this->table WHERE DATE(`expiry_date`) <= DATE (CURRENT_DATE() + INTERVAL 3 MONTH) ORDER BY date(`expiry_date`) DESC LIMIT 200;";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetchAll();
			$stmt =null;
			return $response;
		}
	}

	public function fetchAllExpiredInSixMonthTime()
	{
		$query = "SELECT * FROM $this->table WHERE DATE(expiry_date) <= DATE(CURRENT_DATE() + INTERVAL 6 MONTH) ORDER BY proId DESC LIMIT 200;";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetchAll();
			$stmt =null;
			return $response;
		}
	}
}