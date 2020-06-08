<?php

	 class Delivery extends Model{

		// returns the boolean true or false;

 		public function setDelivery(array $delivery){
 			if(!$delivery){
 				return;
 			}
 			$name = $delivery['name'];
 			$code = $delivery['code'];
 			$sql = "INSERT INTO delivery_status (name, code) VALUES ('$name', '$code')";

 			$query = Connection()->set($sql);
 			return $query;
 		}

		// returns the array $delivery

 		public function getDelivery($id){

 			$sql = "SELECT * FROM delivery_status WHERE id = $id";

 			$delivery = Connection()->fetchOne($sql);
 			return $delivery;
 		}

 		public function getDeliveryByCode($code){

 			$sql = "SELECT * FROM delivery_status WHERE code = '$code'";
			$delivery = Connection()->query($sql);

 			return $delivery;
 		}


		// returns the boolean true or false;

 		public function updateDelivery(array $delivery){

			if(!$delivery){
 				return;
 			}
 			$name = $delivery['name'];
 			$code = $delivery['code'];
			$id = $delivery['id'];
			$sql = "UPDATE delivery_status SET
			 				name = '$name',
							code = '$code'
							WHERE id = $id";
 			$query = Connection()->set($sql);
 			// $delivery = mysqli_fetch_assoc($query);
 			return $query;
 		}

		// returns the boolean true or false;

 		public function deleteDelivery($id){
			if (!$id) {
				return false;
			}
 			$sql = "DELETE FROM delivery_status WHERE id = $id";
			$query = Connection()->set($sql);

			return $query;
 		}


		// returns the array $delivery_status
 		public function getDeliveryList(){
 			$sql = "SELECT * FROM delivery_status";
 			$delivery_status = Connection()->fetchAll($sql);

 			return $delivery_status;
 		}

		public function getDeliveryCityList()
		{
 			$sql = "SELECT * FROM delivery_city";
 			$delivery_cities = Connection()->query($sql);

 			return $delivery_cities;
		}

		public function getDeliveryRegionList()
		{
 			$sql = "SELECT * FROM delivery_region";
 			$delivery_regions = Connection()->fetchAll($sql);

 			return $delivery_regions;
		}

		public function getDeliveryRegion()
		{
 			$sql = "SELECT * FROM delivery_region WHERE id = '$region_id'";

 			$delivery_region = Connection()->fetchOne($sql);

 			return $delivery_region;
		}

		public function getDeliveryCityListByRegion($region_id)
		{
 			$sql = "SELECT * FROM delivery_city WHERE region_id = '$region_id'";
 			$delivery_cities = Connection()->fetchAll($sql);

 			return $delivery_cities;
		}

		public function getDeliveryCity($city_id)
		{
 			$sql = "SELECT * FROM delivery_city WHERE id = '$city_id'";
 			$delivery_city = Connection()->fetchOne($sql);

 			return $delivery_city;
		}

 	}

 ?>
