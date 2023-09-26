<?php  

Trait Supplier {

use Database;

protected string $sup_table ="suppliers";

	public function CreateSupplier($name,$company,$phone,$email,$address,$date)
	{
		$query = "INSERT INTO $this->sup_table (fullname,company,phone,email,address,created_at) VALUES (:fullname,:company,:phone,:email,:address,:created_at);";
		$stmt = $this->connect()->prepare($query);
		 $stmt->bindParam('fullname', $name, PDO::PARAM_STR);
		 $stmt->bindParam('company', $company, PDO::PARAM_STR);
		 $stmt->bindParam('phone', $phone, PDO::PARAM_STR);
		 $stmt->bindParam('email', $email, PDO::PARAM_STR);
		 $stmt->bindParam('address', $address, PDO::PARAM_STR);
		 $stmt->bindParam('created_at', $date, PDO::PARAM_STR);
		 if ( $stmt->execute()) {
		 	$stmt = null;
		 	return "Yes";
		 }else{
		 	return "";
		 }
	}


	public function getAllSuppliers()
	{
		$query = "SELECT * FROM $this->sup_table ORDER BY id DESC LIMIT 100;";

		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetchAll();

		}else{
			$response = [];
		}
		$stmt = null;
		return $response;
	}

	public function countSuppliers()
	{
		$query = "SELECT count(`id`) as cnt FROM $this->sup_table WHERE status=1;";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->cnt;
		}else{
			return 0;
		}
	}

	public function getAllSuppliersInDropDown()
	{
		$response = "";
		$stmt = $this->connect()->prepare("SELECT * FROM `$this->sup_table` ORDER BY id DESC LIMIT 100");
		$stmt->execute();
		if ($stmt->rowCount() > 0) {
			while ($row = $stmt->fetch()) {
				$response .= '<option value="' . $row->id . '">' . $row->company . '</option>';
			}
		}
		$stmt = null;
		return $response;
	}

	public function findSupplier($field,$value)
	{
		 $sql ="SELECT * FROM `{$this->sup_table}` WHERE `{$field}`=:field LIMIT 1;";
        $stmt = $this->connect()->prepare($sql);
       
        $type = gettype($value);
        $param_type = match ($type) {
            'integer' => PDO::PARAM_INT,
            'boolean' => PDO::PARAM_BOOL,
            default => PDO::PARAM_STR,
        };
        $stmt->bindParam('field', $value, $param_type);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $response = $stmt->fetch();
              $stmt =null;
        }else{
            $response = [];
        }
        return $response;
	}

}