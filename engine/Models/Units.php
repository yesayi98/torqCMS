<?php

	 class Units extends \Model{


		// returns the boolean true or false;

 		public function setUnit(array $unit){
 			if(!$unit){
 				return;
 			}
 			$name = $unit['name'];
 			$code = $unit['code'];
 			$sql = "INSERT INTO units (name, code) VALUES ('$name', '$code')";

 			$query = Connection()->set($sql);
 			return $query;
 		}

		// returns the array $unit

 		public function getUnit($id){

			$id = intval($id);
 			$sql = "SELECT * FROM units WHERE id = $id";

			$unit = Connection()->fetchOne($sql);

 			return $unit;
 		}

 		public function getUnitByCode($code){
 			$connection = $this->connection;

 			$sql = "SELECT * FROM units WHERE code = '$code'";
			$query = Connection()->fetchOne($sql);

 			return $unit;
 		}


		// returns the boolean true or false;

 		public function updateUnit(array $unit){
 			$connection = $this->connection;

			if(!$unit){
 				return;
 			}
 			$name = $unit['name'];
 			$code = $unit['code'];
			$id = $unit['id'];
			$sql = "UPDATE units SET
			 				name = '$name',
							code = '$code'
							WHERE id = $id";
			$query = Connection()->set($sql);

 			// $unit = mysqli_fetch_assoc($query);
 			return $query;
 		}

		// returns the boolean true or false;

 		public function deleteUnit($id){
 			$connection = $this->connection;
			if (!$id) {
				return false;
			}
			$query = Connection()->set($sql);


			return $query;
 		}


		// returns the array $units
 		public function getUnitList(){
			$units = $this->getList('units');
 			return $units;
 		}
 	}

 ?>
