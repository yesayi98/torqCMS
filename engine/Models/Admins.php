<?php

	 class Admins extends Model{


		// returns the boolean true or false;

 		public function setAdmin(array $admin){
 			if(!$admin){
 				return;
 			}
 			$name = $admin['name'];
 			$email = $admin['email'];
 			$username = $admin['username'];
			if(Connection()->fetchOne("SELECT username FROM admins WHERE username = '$username'" )['username']){
					return $error = 'username exist.Try another';
			}

 			$password = md5($admin['password']);
 			$admin_group = $admin['admin_group'];
 			$sql = "INSERT INTO admins (
				name,
				email,
				username,
				password,
				admin_group
			) VALUES (
				'$name',
				'$email',
				'$username',
				'$password',
				'$admin_group'
			)";

 			$query = Connection()->set($sql);
 			return $query;
 		}

		public function checkAdmin($admin)
		{
			if (empty($admin)) {
				return;
			}

			$password = $admin['password'];
			$username = $admin['username'];

			$sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
			$result = Connection()->fetchOne($sql);

			return $result;
		}
		// returns the array $admin

 		public function getAdmin($id){

 			$sql = "SELECT * FROM admins WHERE id = $id";

 			$admin = Connection()->fetchOne($sql);

 			return $admin;
 		}

 		public function getAdminByCode($code){

 			$sql = "SELECT * FROM admins WHERE code = '$code'";

			$admin = Connection()->fetchOne($sql);

 			return $admin;
 		}


		// returns the boolean true or false;

 		public function updateAdmin(array $admin){

			if(!$admin){
 				return;
 			}
			$id = $admin['id'];
			$name = $admin['name'];
 			$email = $admin['email'];
 			$username = $admin['username'];
			if(Connection()->fetchOne("SELECT username FROM admins WHERE username = '$username'" )['username']){
					return $error = 'username exist.Try another';
				};
			if ($admin['password']) {
				$password = md5($admin['password']);
			}else{
				$password = Connection()->fetchOne("SELECT password FROM admins WHERE id = '$id'" )['password'];
			}
 			$admin_group = $admin['admin_group'];
			$sql = "UPDATE admins SET
			 				name = '$name',
			 				email = '$email',
			 				username = '$username',
			 				password = '$password',
							admin_group = '$admin_group'
							WHERE id = $id";
 			$query = Connection()->set($sql);
 			// $admin = mysqli_fetch_assoc($query);
 			return $query;
 		}

		// returns the boolean true or false;

 		public function deleteAdmin($id){
			if (!$id) {
				return false;
			}
 			$sql = "DELETE FROM admins WHERE id = $id";
			$query = Connection()->set($sql);


			return $query;
 		}


		// returns the array $admins
 		public function getAdminList(){

 			$sql = "SELECT * FROM admins";
			$admins = Connection()->query($sql);
 			return $admins;
 		}
 	}

 ?>
