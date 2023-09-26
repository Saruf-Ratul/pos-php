<?php  

Trait Coupon {

use Database;

protected string $ctable ="promo_tbl";

	public function CreateCoupon($code,$prodId,$date_from,$date_to,$promo_type,$status,$limit,$wareId,$date)
	{
		$query = "INSERT INTO $this->ctable (coupon,prodId,date_from,date_to,promo_type,status,coupon_limit,wareId,created_at) VALUES (:coupon,:prodId,:date_from,:date_to,:promo_type,:status,:coupon_limit,:wareId,:created_at);";
		$stmt = $this->connect()->prepare($query);
		 $stmt->bindParam(':coupon', $code, PDO::PARAM_STR);
		 $stmt->bindParam(':prodId', $prodId, PDO::PARAM_STR);
		 $stmt->bindParam(':date_from', $date_from, PDO::PARAM_STR);
		 $stmt->bindParam(':date_to', $date_to, PDO::PARAM_STR);
		 $stmt->bindParam(':promo_type', $promo_type, PDO::PARAM_STR);
		 $stmt->bindParam(':status', $status, PDO::PARAM_INT);
		 $stmt->bindParam(':coupon_limit', $limit, PDO::PARAM_INT);
		 $stmt->bindParam(':wareId', $wareId, PDO::PARAM_INT);
		 $stmt->bindParam(':created_at', $date, PDO::PARAM_STR);
		 if ( $stmt->execute()) {
		 	$stmt = null;
		 	return "Yes";
		 }else{
		 	return "";
		 }
	}


	public function getAllCoupons()
	{
		$query = "SELECT * FROM $this->ctable ORDER BY id DESC LIMIT 50;";

		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetchAll();

		}else{
			$response = [];
		}
		$stmt = null;
		return $response;
	}

	public function countCoupons($status)
	{
		$query = "SELECT count(`id`) as cnt FROM $this->ctable WHERE status=?;";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$status]);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->cnt;
		}
	}

	public function getAllCouponsInDropDown()
	{
		$response = "";
		$stmt = $this->connect()->prepare("SELECT * FROM `$this->ctable` ORDER BY id DESC LIMIT 50");
		$stmt->execute();
		if ($stmt->rowCount() > 0) {
			while ($row = $stmt->fetch()) {
				$response .= '<option value="' . $row->id . '">' . $row->coupon . '</option>';
			}
		}
		$stmt = null;
		return $response;
	}

	public function count_coupons():int 
	{
		$query = "SELECT count(`id`) as cnt FROM $this->ctable";
		$stmt = $this->connect()->query($query);
		if ($stmt->rowCount() > 0) {
			$response = $stmt->fetch();
			$stmt = null;
			return $response->cnt;
		}
	}

}