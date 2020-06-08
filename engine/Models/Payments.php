<?php

	 class Payments extends Model{

		// returns the boolean true or false;

 		public function setPayment(array $payment){
 			if(!$payment){
 				return;
 			}
 			$name = $payment['name'];
 			$description = $payment['description'];
 			$client_id = $payment['client_id'];
 			$client_secret_key = $payment['client_secret_key'];
 			$client_password = $payment['client_password'];
 			$sql = "INSERT INTO payment_methods (
				name,
				description,
				client_id,
				client_secret_key,
				client_password
			) VALUES (
				'$name',
				'$description',
				'$client_id',
				'$client_secret_key',
				'$client_password'
			)";

 			$query = Connection()->set($sql);
 			return $query;
 		}

		// returns the array $payment

 		public function getPayment($id){

 			$sql = "SELECT * FROM payment_methods WHERE id = $id";

 			$payment = Connection()->fetchOne($sql);

 			return $payment;
 		}

 		// public function getPaymentByCode($code){
 		// 	$connection = $this->connection;
		//
 		// 	$sql = "SELECT * FROM payment_methods WHERE code = '$code'";
 		// 	$query = mysqli_query($connection, $sql);
		//
 		// 	$payment = mysqli_fetch_assoc($query);
 		// 	return $payment;
 		// }


		// returns the boolean true or false;

 		public function updatePayment(array $payment){

			if(!$payment){
 				return;
 			}
			$id = $payment['id'];
			$name = $payment['name'];
 			$description = $payment['description'];
 			$client_id = $payment['client_id'];
 			$client_secret_key = $payment['client_secret_key'];
 			$client_password = $payment['client_password'];
			$sql = "UPDATE payment_methods SET
			 				name = '$name',
			 				description = '$description',
			 				client_id = '$client_id',
			 				client_secret_key = '$client_secret_key',
							client_password = '$client_password'
							WHERE id = $id";
 			$query = Connection()->set($sql);

 			return $query;
 		}

		// returns the boolean true or false;

 		public function deletePayment($id){
 			$connection = $this->connection;
			if (!$id) {
				return false;
			}
 			$sql = "DELETE FROM payment_methods WHERE id = $id";
			$query = Connection()->set($sql);

			return $query;
 		}


		// returns the array $payments
 		public function getPaymentList(){
 			$payments = $this->getList('payment_methods', true);
 			return $payments;
 		}
 	}

 ?>
