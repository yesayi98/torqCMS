<?php

	 class Currencies extends Model{



		// returns the boolean true or false;

 		public function setCurrency(array $currency){
 			if(!$currency){
 				return;
 			}
 			$name = $currency['name'];
 			$description = $currency['description'];
 			$code = $currency['code'];
      $default = $currency['default'];
      $symbol = $currency['symbol'];
 			$course = $currency['course'];
 			$sql = "INSERT INTO currencies (`name`, `description`, `code`, `default`, `symbol`, `course`) VALUES ('$name', '$description', '$code', '$default', '$symbol', '$course')";

 			$query = Connection()->set($sql);
 			return $query;
 		}

		// returns the array $currency

 		public function getCurrency($id){

 			$sql = "SELECT * FROM currencies WHERE id = $id";

 			$currency = Connection()->fetchOne($sql);
 			return $currency;
 		}

 		public function getCurrencyByCode($code){

 			$sql = "SELECT * FROM currencies WHERE code = '$code'";
			$currency = Connection()->query($sql);

 			return $currency;
 		}


		// returns the boolean true or false;

 		public function updateCurrency(array $currency){

			if(!$currency){
 				return;
 			}
			$name = $currency['name'];
 			$description = $currency['description'];
 			$code = $currency['code'];
      $default = $currency['default'];
      $symbol = $currency['symbol'];
 			$course = $currency['course'];
			$id = $currency['id'];
			$sql = "UPDATE currencies SET
			 				`name` = '$name',
			 				`description` = '$description',
							`code` = '$code',
			 				`default` = '$default',
			 				`symbol` = '$symbol',
			 				`course` = '$course'
							WHERE id = $id";
 			$query = Connection()->set($sql);

 			return $query;
 		}

		// returns the boolean true or false;

 		public function deleteCurrency($id){
			if (!$id) {
				return false;
			}
 			$sql = "DELETE FROM currencies WHERE id = $id";
			$query = Connection()->set($sql);

			return $query;
 		}


		// returns the array $currencies
 		public function getCurrencyList(){

 			$sql = "SELECT * FROM currencies";
 			$currencies = Connection()->query($sql);
 			return $currencies;
 		}
 		public function getCurrencies(){

 			$sql = "SELECT * FROM currencies ORDER BY currencies.default DESC";
 			$currencies = Connection()->fetchAll($sql);
 			return $currencies;
 		}
 	}

 ?>
