<?php
		/**
		 *
		 */
		class Connection
		{
			private $connection;
			private $lastInsert;
			private $total;

			function __construct(array $db)
			{
				$this->connection = new mysqli($db['db_hostname'], $db['db_username'], $db['db_password'], $db['db_name']);
				$this->connection->set_charset('utf8');
				$this->executeQuery("SET time_zone = '".$db['timezone']."'");
			}

			public function __call($method, $args)
			{
				if ($method == 'query') {
					$limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 25;
			    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
			    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 4;

					$sql = $args[0];
					$result = $this->getByQuery($sql, $page, $limit, $links);
					return $result;
				}elseif ($method == 'fetchOne') {
					$limit      = "one";
			    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
			    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 4;

					$sql = $args[0];
					$result = $this->getByQuery($sql, $page, $limit, $links, 1);
					return $result;
				}elseif ($method == 'fetchAll') {
					$limit      = 'all';
			    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
			    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 4;

					$sql = $args[0];
					$result = $this->getByQuery($sql, $page, $limit, $links, 2);
					return $result;
				}elseif ($method == "set") {
					$sql = $args[0];

					if(!(strpos($sql, 'INSERT' ) !== false || strpos($sql, 'UPDATE') !== false || strpos($sql, 'DELETE') !== false || strpos($sql, 'CREATE') !== false || strpos($sql, 'ALTER') !== false)){
						return false;
					}
					return $this->setByQuery($sql);
				}elseif($method == "exec"){
					$sql = $args[0];

					return $this->executeQuery($sql);
				}
			}



			public function getByQuery($sql, $page=1, $limit=0, $links='', $type = 0)
			{
				$Paginator  = new Paginator( $this->connection, $sql );
				$results['data'] = $Paginator->getData( $limit, $page );
				$this->total = $Paginator->getTotal();
				$results['total'] = $this->total;
				if (Router::$route['module'] == 'frontend') {
					$Paginator->paginatorClass = '';
					$Paginator->paginatorItem = '';
					$Paginator->paginatorLink = '';
				}
				$results['pagination'] = $Paginator->createLinks($links);
				if($type == 1) {
						return $results['data'][0]?$results['data'][0]:array();
				}elseif($type == 2){
						return $results['data']?$results['data']:array();
				}
				if (empty($results['data'])) {
					$results['data'] = array();
				}
				return $results;
			}

			public function executeQuery($sql)
			{
				$Paginator  = new Paginator( $this->connection, $sql );
				$query = $Paginator->execute();
					$this->lastInsert = $Paginator->getInsertedId();
				return $query;
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


			public function getError()
			{
				return $this->connection->error;
			}

			public function setError($Error)
			{
				$this->connection->error = $Error;
			}

			public function getErrorList()
			{
				return $this->connection->error_list;
			}
		}

	?>
