<?php  

Trait Store {

use Database;

protected string $ware_table ="warehouses";

	public function CreateStore($name,$manager,$address,$phone,$status,$date)
	{
		$query = "INSERT INTO $this->ware_table (store_name,manager,store_location,phone,status,created_at) VALUES (:store_name,:manager,:store_location,:phone,:status,:created_at);";
		$stmt = $this->connect()->prepare($query);
		 $stmt->bindParam(':store_name', $name, PDO::PARAM_STR);
		 $stmt->bindParam(':manager', $manager, PDO::PARAM_STR);
		 $stmt->bindParam(':store_location', $address, PDO::PARAM_STR);
		 $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
		 $stmt->bindParam(':status', $status, PDO::PARAM_STR);
		 $stmt->bindParam(':created_at', $date, PDO::PARAM_STR);
		 if ( $stmt->execute()) {
		 	$stmt = null;
		 	return "Yes";
		 }else{
		 	return "";
		 }
	}


	public function getAllStores()
	{
		$query = "SELECT * FROM $this->ware_table ORDER BY id DESC LIMIT 50;";

		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetchAll();

		}else{
			$response = [];
		}
		$stmt = null;
		return $response;
	}

	public function countStores($status)
	{
		$query = "SELECT count(`id`) as cnt FROM $this->ware_table WHERE status=?;";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$status]);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->cnt;
		}else{
			return 0;
		}
	}

	public function getAllStoresInDropDown()
	{
		$response = "";
		$stmt = $this->connect()->prepare("SELECT * FROM `$this->ware_table` ORDER BY id DESC LIMIT 50");
		$stmt->execute();
		if ($stmt->rowCount() > 0) {
			while ($row = $stmt->fetch()) {
				$response .= '<option value="' . $row->id . '">' . $row->store_name . '</option>';
			}
		}
		$stmt = null;
		return $response;
	}

	public function count_store():int 
	{
		$query = "SELECT count(`id`) as cnt FROM $this->ware_table";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->cnt;
		}else{
			return 0;
		}
	}

}