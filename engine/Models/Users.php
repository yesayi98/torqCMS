<?php
namespace Models\Users;

use Models\Users\Address\Address;

class Users extends \Model{
 		private $Address;

 		public function __construct($container){
			$this->container = $container;
 			$this->Address = new Address($container);
			$this->connection = Connection();
 		}

		// returns the boolean true or false;
 		public function setUser(array $user){
 			if(empty($user)){
 				return;
 			}
			if ($user['password']) {
				$user['password'] = md5($user['password']);
			}


			$query = $this->insert('users', $user);
			$this->insertedUserId = $this->connection->getInsertedId();
			$uniqueId = hash( 'sha256', $this->insertedUserId);
			$id = $this->insertedUserId;
			$user['id'] = $id;
			$sql = "UPDATE users SET specific_id = '$uniqueId' WHERE id = $id";
			$this->setOrUpdateUserAttributes($user);
			Connection()->set($sql);
 			return $query;
 		}

		public function setOrUpdateUserAttributes($user)
		{
			$userId = $user['id'];
			$sql = "SELECT * FROM user_attributes WHERE user_id=$userId";
			$userExist = !empty(Connection()->fetchAll($sql));
			$attributes = $user['attributes'];
			$attributes['user_id'] = $user['id'];

			if ($userExist) {
				$sql = "UPDATE user_attributes SET ";
				foreach ($attributes as $key => $value) {
					$sql .= "$key = '$value'";
					if ($key != end(array_keys($attributes))) {
						$sql .= ',';
					}
				}
				$sql .= " WHERE user_id = $userId";
			}else{
				$columns = $this->getTableColumns("user_attributes");
				$sql = "INSERT INTO user_attributes "."(";
				foreach ($columns as $column) {
					$column = $column['COLUMN_NAME'];
					$sql .= "$column";
					if ($column != $columns[end(array_keys($columns))]['COLUMN_NAME']) {
						$sql .= ', ';
					}
				}
				$sql .= ") VALUES (";
				foreach ($columns as $column) {
					$value = $attributes[$column['COLUMN_NAME']];
					$sql .= "'$value'";
					if ($column != $columns[end(array_keys($columns))]) {
						$sql .= ', ';
					}
				}

				$sql .= ");";
			}
			$query = Connection()->set($sql);
			return $query;
		}


		// returns object Address

		public function Address()
		{
			return $this->Address;
		}
		// returns the array $user

 		public function getUser($id){

 			$sql = "SELECT * FROM users WHERE id = $id";

 			$user = Connection()->fetchOne($sql);
			if (!empty($user)) {
				$user['address'] = $this->Address()->getAddressByUser($user['id']);
				$user['attributes'] = $this->getUserAttributes($user['id']);
			}

 			return $user;
 		}

 		public function getInsertedId(){
 			return $this->insertedUserId;
 		}

 		public function loginUser($user){
			$password = md5($user['password']);
			$email = $user['email'];
 			$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
			$user = Connection()->fetchOne($sql);
 			return $user['id'];
 		}

		private function getUserAttributes($userId){
			$sql = "SELECT * FROM user_attributes WHERE user_id = $userId";

			$attributes = Connection()->fetchOne($sql);
			return $attributes;
		}
		// returns the boolean true or false;

 		public function updateUser(array $user){

			if(!$user){
 				return;
 			}
			$name = $user['name'];
 			$lastname = $user['lastname'];
			$email = $user['email'];
			$phone = $user['phone'];
			$user_type = $user['usertype'];
			$id = $user['id'];
			$guest = $user['guest'];

			if ($user['password']) {
				$password = md5($user['password']);
			}else{
				$password = Connection()->fetchOne("SELECT password FROM users WHERE id = $id" )['password'];
			}

			$gender = $user['gender'];
			$sql = "UPDATE users SET
			 				name = '$name',
							lastname = '$lastname',
			 				email = '$email',
			 				user_type = '$user_type',
			 				phone = '$phone',
			 				password = '$password',
							gender = '$gender'
							WHERE id = $id";


			$query = Connection()->set($sql);
 			// $user = mysqli_fetch_assoc($query);
			$this->setOrUpdateUserAttributes($user);

 			return $query;
 		}

		public function checkUser($user)
		{
			$result;

			$email = $user['email'];
			$phone = $user['phone'];

			$sql = "SELECT * FROM users WHERE email = '$email' AND guest = 0";
			$query = Connection()->fetchOne($sql);
			if ($query) {
				$result['errorMessage'][] = 'emailExist';
			}
			$sql = "DELETE FROM users WHERE email = '$email' AND guest = 1";
			$query = Connection()->set($sql);

			$sql = "SELECT * FROM users WHERE phone = '$phone'  AND guest = 0";
			$query = Connection()->fetchOne($sql);
			if ($query && $query['phone'] != '') {
				$result['errorMessage'][] = 'phoneExist';
			}

			if (count($result['errorMessage'])) {
				return $result;
			}else{
				return $result = true;
			}
		}
		// returns the boolean true or false;

 		public function deleteUser($id){
			if (!$id) {
				return false;
			}
 			$sql = "DELETE FROM users WHERE id = $id";
			$query = Connection()->set($sql);

			return $query;
 		}


		// returns the array $users
 		public function getUserList(){
 			$sql = "SELECT * FROM users";

 			$users = Connection()->query($sql);
 			return $users;
 		}

		// returns array $userComments
		public function getUserNotifications()
		{
			$sql = "SELECT uc.*, u.name as username, u.lastname, a.name, aa.ordernumber FROM article_comments uc
							LEFT JOIN users u ON u.id = uc.user_id
							LEFT JOIN articles a ON a.id = uc.article_id
							LEFT JOIN article_attributes aa ON aa.article_id = uc.article_id
							WHERE uc.active = 0";
			$userComments = Connection()->fetchAll($sql);
			$sql = "SELECT ur.*, u.name as username, u.lastname, a.name, aa.ordernumber FROM article_rating ur
							LEFT JOIN users u ON u.id = ur.user_id
							LEFT JOIN articles a ON a.id = ur.article_id
							LEFT JOIN article_attributes aa ON aa.article_id = ur.article_id
							WHERE ur.active = 0";
			$userReviews = Connection()->fetchAll($sql);
			if (!$userReviews) {
				$userReviews = NULL;
			}
			if (!$userComments) {
				$userComments = NULL;
			}
			$userNotifications;
			$userNotifications['count'] = count($userComments) + count($userReviews);
			$userNotifications['comments'] = $userComments;
			$userNotifications['reviews'] = $userReviews;
 			return $userNotifications;

		}

		public function setCommentActive($id)
		{
			$id = intval($id);

			$sql = "UPDATE article_comments SET active = 1 WHERE id = $id";

			$query = Connection()->set($sql);
			return $query;

		}

		public function deleteComment($id)
		{
			$id = intval($id);

			$sql = "DELETE FROM article_comments WHERE id = $id";

			$query = Connection()->set($sql);
			return $query;

		}

		public function setRatingActive($id)
		{
			$id = intval($id);

			$sql = "UPDATE article_rating SET active = 1 WHERE id = $id";

			$query = Connection()->set($sql);

			return $query;
		}

		public function deleteRating($id)
		{
			$id = intval($id);

			$sql = "DELETE FROM article_rating WHERE id = $id";

			$query = Connection()->set($sql);
			return $query;

		}

		public function addSubscribeToNewsletter($email)
		{
			if (!$email) {
				return;
			}
			$sql = "INSERT INTO user_newsletter (email, sended) VALUES ('$email', 0)";
			$query = Connection()->set($sql);
			return $query;
		}

		/**
		*	@param array $confirmation
		*	@return bool
		*/
		public function addUserConfirmation($confirmation)
		{
			$token = $confirmation['token'];
			$email = $confirmation['email'];
			$sql = "INSERT INTO user_confirmation (email, token) VALUES ('$email', '$token')";

			return Connection()->set($sql);
		}

		/**
		*	@param array $confirmation
		*	@return bool
		*/
		public function updateUserConfirmation($email)
		{

			$sql = "UPDATE users SET confirmed = 1 WHERE email = '$email'";
			return Connection()->set($sql);
		}

		/**
		*	@param string $token
		*	@return array
		*/
		public function getUserConfirmation($token)
		{
			$sql = "SELECT * FROM user_confirmation WHERE token = '$token'";
			return Connection()->fetchOne($sql);
		}
 	}

 ?>
