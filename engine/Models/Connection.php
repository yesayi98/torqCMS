

	<?php
	include 'Paginator.php';


		/**
		 *
		 */
		class Connection
		{
			private $connection;
			private $lastInsert;
			private $total;

			function __construct($host, $dbUser, $dbPassword, $dbName)
			{
				$this->connection = new mysqli($host, $dbUser, $dbPassword, $dbName);
			}
			public function __call($method, $args)
			{
				if ($method == 'query') {
					$limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 25;
			    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
			    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;

					$sql = $args[0];
					$result = $this->getByQuery($sql, $page, $limit, $links);
					return $result;
				}elseif ($method == 'fetchOne') {
					$limit      = "one";
			    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
			    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;

					$sql = $args[0];
					$result = $this->getByQuery($sql, $page, $limit, $links, 1);
					return $result;
				}elseif ($method == 'fetchAll') {
					$limit      = 'all';
			    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
			    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;

					$sql = $args[0];
					$result = $this->getByQuery($sql, $page, $limit, $links, 2);
					return $result;
				}elseif ($method == "set") {
					$sql = $args[0];

					if(!(strpos($sql, 'INSERT' ) !== false || strpos($sql, 'UPDATE') !== false || strpos($sql, 'DELETE') !== false || strpos($sql, 'CREATE') !== false || strpos($sql, 'ALTER') !== false)){
						return false;
					}
					return $this->setByQuery($sql);
				}
			}

			public function getByQuery($sql, $page, $limit, $links, $type = 0)
			{
				$Paginator  = new Paginator( $this->connection, $sql );
				$results['data']    = $Paginator->getData( $limit, $page );
				$this->total    = $Paginator->getTotal();
				$results['total']    = $this->total;
				$results['pagination']    = $Paginator->createLinks( $links, 'pagination' );
				if($type == 1) {
						return $results['data'][0];
				}elseif($type == 2){
						return $results['data'];
				}
				return $results;
			}

			public function setByQuery($sql)
			{
				$Paginator  = new Paginator( $this->connection, $sql );
				$query = $Paginator->setData();
					$this->lastInsert = $Paginator->getInsertedId();
				return $query;
			}

			public function getInsertedId()
			{
				return $this->lastInsert;
			}
			public function getTotalCount()
			{
				return $this->total;
			}
		}

			$dbDriver = DB_DRIVER;
			$host = DB_HOSTNAME;
			$dbUser = DB_USERNAME;
			$dbPassword = DB_PASSWORD;
			$dbName = DB_DATABASE;
			$dbPort = DB_PORT;
		$connection = new Connection($host, $dbUser, $dbPassword, $dbName);
		function Connection(){
			return $GLOBALS['connection'];
		}
	?>
