<?php  

Trait Category {

use Database;

protected string $cat_table ="category";

	public function CreateCategory($name,$status,$date)
	{
		$query = "INSERT INTO $this->cat_table (name,status,created_at) VALUES (:name,:status,:created_at);";
		$stmt = $this->connect()->prepare($query);
		 $stmt->bindParam(':name', $name, PDO::PARAM_STR);
		 $stmt->bindParam(':status', $status, PDO::PARAM_STR);
		 $stmt->bindParam(':created_at', $date, PDO::PARAM_STR);
		 if ( $stmt->execute()) {
		 	$stmt = null;
		 	return "Yes";
		 }else{
		 	return "";
		 }
	}


	public function getAllCategory()
	{
		$query = "SELECT * FROM $this->cat_table ORDER BY id DESC LIMIT 100;";

		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetchAll();

		}else{
			$response = [];
		}
		$stmt = null;
		return $response;
	}

	public function countCategory()
	{
		$query = "SELECT count(`id`) as cnt FROM $this->cat_table;";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->cnt;
		}else{
			return 0;
		}
	}

	public function getAllCategoriesInDropDown()
	{
		$response = "";
		$stmt = $this->connect()->prepare("SELECT * FROM `$this->cat_table` ORDER BY id DESC LIMIT 100");
		$stmt->execute();
		if ($stmt->rowCount() > 0) {
			while ($row = $stmt->fetch()) {
				$response .= '<option value="' . $row->name . '">' . $row->name . '</option>';
			}
		}
		$stmt = null;
		return $response;
	}

	public function findCategory($field,$value)
	{
		 $sql ="SELECT * FROM `{$this->cat_table}` WHERE `{$field}`=:field LIMIT 1;";
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