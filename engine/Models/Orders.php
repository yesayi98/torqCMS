<?php

	 class Orders extends Model{

		// returns the boolean true or false;

 		public function setOrderStatus(array $order){
 			if(!$order){
 				return;
 			}
 			$name = $order['name'];
 			$code = $order['code'];
 			$sql = "INSERT INTO order_status (name, code) VALUES ('$name', '$code')";

 			$query = Connection()->set($sql);
 			return $query;
 		}

		// returns the array $order

 		public function getOrderStatus($id){

 			$sql = "SELECT * FROM order_status WHERE id = $id";

 			$order = Connection()->fetchOne($sql);

 			return $order;
 		}

 		public function getOrderStatusByCode($code){

 			$sql = "SELECT * FROM order_status WHERE code = '$code'";

			$order = Connection()->fetchOne($sql);
 			return $order;
 		}


		// returns the boolean true or false;

 		public function updateOrderStatus(array $order){

			if(!$order){
 				return;
 			}
 			$name = $order['name'];
 			$code = $order['code'];
			$id = $order['id'];
			$sql = "UPDATE order_status SET
			 				name = '$name',
							code = '$code'
							WHERE id = $id";
			$query = Connection()->set($sql);

 			return $query;
 		}

		// returns the boolean true or false;

 		public function deleteOrderStatus($id){
			if (!$id) {
				return false;
			}
 			$sql = "DELETE FROM order_status WHERE id = $id";
			$query = Connection()->set($sql);

			return $query;
 		}


		// returns the array $order_status
 		public function getOrderStatusList(){

 			$sql = "SELECT * FROM order_status";

 			$order_status = Connection()->fetchAll($sql);
 			return $order_status;
 		}

		// returns the array $orders
 		public function getOrderList(){

 			$sql = "SELECT o.*, u.name, u.lastname, pm.name pm_name, os.name os_name, ds.name ds_name FROM orders o
							LEFT JOIN users u ON u.id = o.user_id
							LEFT JOIN order_status os ON os.id = o.order_status
							LEFT JOIN delivery_status ds ON ds.id = o.delivery_status
							LEFT JOIN payment_methods pm ON pm.id = o.payment_method
							ORDER BY o.id DESC";
			$orders = Connection()->query($sql);

			foreach ($orders['data'] as &$order) {
				$order['address'] = $this->container->Users()->Address()->getAddressById($order['address_id']);
			}
 			return $orders;
 		}
		// returns the array $order
 		public function getOrder($order_id){
			if (!$order_id) {
					return;
			}
			$order_id = intval($order_id);
 			$sql = "SELECT o.*, u.name, u.lastname, pm.name pm_name, os.name os_name, ds.name ds_name FROM orders o
							LEFT JOIN users u ON u.id = o.user_id
							LEFT JOIN order_status os ON os.id = o.order_status
							LEFT JOIN delivery_status ds ON ds.id = o.delivery_status
							LEFT JOIN payment_methods pm ON pm.id = o.payment_method
							WHERE o.id = '$order_id'";
							$order = Connection()->fetchOne($sql);


			$order['address'] = $this->container->Users()->Address()->getAddressById($order['address_id']);
			$order['details'] = $this->getOrderDetails($order_id);

 			return $order;
		}
		/*status id*/
		public function getOrderByDeliveryStatus( $status)
		{
			$status = intval($status);

			$sql = "SELECT * FROM orders WHERE delivery_status = $status";

			$orders = Connection()->fetchAll($sql);

			return $orders;
		}


		public function getOrdersByUserId($user_id)
		{
			if(!$user_id){
				return;
			}

			$sql="SELECT o.*, u.name, u.lastname, pm.name pm_name, os.name os_name, ds.name ds_name FROM orders o
							LEFT JOIN users u ON u.id = o.user_id
							LEFT JOIN order_status os ON os.id = o.order_status
							LEFT JOIN delivery_status ds ON ds.id = o.delivery_status
							LEFT JOIN payment_methods pm ON pm.id = o.payment_method
							WHERE o.user_id = $user_id";

			$orders = Connection()->query($sql);
			return $orders;
		}


		public function setOrder($order)
		{
			if(!$order){
				return;
			}
			$order['buy_date'] = date("Y-m-d H:i:s");
			$query = $this->insert('orders', $order);

			return $query;
		}

		/**
		* update order by id
		* @param array $order
		* @return bool $qeury
		*/
		public function updateOrder($order)
		{
			// check if order not empty
			if(empty($order)){
				return;
			}
			// updating order
			$query = $this->update('orders', $order);
			return $query;
		}

		public function getOrderDetails($order_id)
		{
			if (!$order_id) {
					return;
			}
			$order_id = intval($order_id);
			$sql = "SELECT od.*, ut.name unit_name FROM `order_details` od
							LEFT JOIN units ut ON ut.id = od.unit
							WHERE od.order_id = $order_id;";

			$orderDetails = Connection()->fetchAll($sql);

			foreach ($orderDetails as &$orderDetail) {
				$orderDetail['mainDetail'] = $this->container->Articles()->getArticleById($orderDetail['article_id']);
			}

 			return $orderDetails;
		}

		public function setOrderDetails($orderDetails)
		{
			if(!$orderDetails){
				return;
			}
			$sql = 'INSERT INTO order_details (
									`order_id`,
									`article_id`,
									`quantity`,
									`price`,
									`total`,
									`name`,
									`unit`
							 ) VALUES ';
			foreach ($orderDetails as $key => $orderDetail) {
				$order_id = $orderDetail['order_id'];
				$article_id = $orderDetail['article_id'];
				$quantity = $orderDetail['quantity'];
				$price = $orderDetail['price'];
				$total = $orderDetail['total_price'];
				$name = $orderDetail['name'];
				$unit_id = $orderDetail['unit_id'];
				$sql .= "(
									 '$order_id',
									 '$article_id',
									 '$quantity',
									 '$price',
									 '$total',
									 '$name',
									 '$unit_id'
								 )";

					if ($key != count($orderDetails)-1) {
						$sql .= ', ';
					}
			}
			$query = false;
			if($sql != ''){
				$sql .= ";";
				$query = Connection()->set($sql);
			}
			if ($query) {
				$sql = "UPDATE articles
									 SET  sold = CASE ";

									 foreach ($orderDetails as $key => $orderDetail) {
										$article_id = $orderDetail['article_id'];
										$quantity = $orderDetail['quantity'];
										$sql .= " WHEN id = '$article_id' THEN sold + $quantity " ;
									}
				$sql .= "END, in_stock = CASE ";
									foreach ($orderDetails as $key => $orderDetail) {
									 $article_id = $orderDetail['article_id'];
									 $quantity = $orderDetail['quantity'];
									 $sql .= " WHEN id = '$article_id' THEN in_stock - $quantity " ;
								 }
				$sql .= "END WHERE id = '$article_id';";

				$query = Connection()->set($sql);
			}

			return $query;
		}


		public function deleteOrderDetail($detail_id)
		{
			if (!$detail_id) {
				return;
			}

			$sql = "SELECT * FROM order_details WHERE id = $detail_id";

			$orderDetail = Connection()->fetchOne($sql);
			$orderId = $orderDetail['order_id'];
			$order = Connection()->fetchOne("SELECT * FROM orders WHERE id = $orderId");
			$order['total_price'] = intval($order['total_price']) - intval($orderDetail['price'])*intval($orderDetail['quantity']);
			$order['count_product'] = intval($order['count_product']) - 1;
			$order['order_id'] = $order['id'];
			if ($order['total_price'] == 0) {
				$order['order_status'] = 2;
			}
			$isset = Connection()->set($sql);


			if(!$isset){
				return false;
			}

			$sql = "DELETE FROM order_details WHERE id = $detail_id" ;

			return $query	= Connection()->set($sql);

		}

		public function deleteOrder($order_id)
		{
			if (!$order_id) {
				return;
			}


			$sql = "DELETE FROM orders WHERE id = $order_id" ;

			return $query	= Connection()->set($sql);

		}
 	}

 ?>
