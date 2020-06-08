<?php
	 class Translator extends \Model{

		// returns the boolean true or false;

 		public function setLanguage(array $language){
 			if(!$language){
 				return;
 			}
 			$name = $language['name'];
 			$short_code = $language['short_code'];
 			$sql = "INSERT INTO languages (name, short_code) VALUES ('$name', '$short_code')";

			$query = Connection()->set($sql);

 			return $query;
 		}

		// returns the array $language

 		public function getLanguage($id){

 			$sql = "SELECT * FROM languages WHERE id = $id";

 			$language = Connection()->fetchOne($sql);

 			return $language;
 		}

 		public function getLanguageByShortCode($short_code){

 			$sql = "SELECT * FROM languages WHERE short_code = '$short_code'";

			$language = Connection()->fetchOne($sql);

 			return $language;
 		}

 		public function getTranslations(){

			$sql="SELECT t.*, l.name, l.short_code FROM translations t LEFT JOIN languages l ON l.id = t.lang ORDER BY t.selector, t.lang";

			$translationResults = Connection()->fetchAll($sql);

			$translations = array();
			// var_dump(count($translationResults));
			foreach ($translationResults as $key => $item) {
					$selector = $item['selector'];
					$translations[$selector][$item['short_code']] = $item;
				 	unset($item['selector']);
					unset($item['short_code']);
			}
			ksort($translations);

			$translationResults['data'] = $translations;
 			return $translationResults;
 		}

 		public function getTranslationsByLanguageID($lang){

			if(!$lang){
				return;
			}

			$sql="SELECT * FROM translations WHERE lang = $lang";
			$translations = Connection()->fetchAll($sql);


 			return $translations;
 		}

		public function updateTranslation(array $translations)
		{
			if (!$translations) {
				return;
			}

			foreach ($translations as $translation) {
				$langId = intval($translation['id']);
				$content = htmlspecialchars($translation['translation']);
				$selector = htmlspecialchars($translation['selector']);
				$sql = "SELECT * FROM translations WHERE `selector` = '$selector' AND lang = $langId";
								$translationExist = Connection()->fetchOne($sql);
				if($translationExist){
					$sql = "UPDATE translations SET
													`translate` = '$content' WHERE `selector` = '$selector' AND lang = $langId";
					$query = Connection()->set($sql);
				}else{
					$newTranslations;
					$newTranslations[0]=$translation;
					$this->saveTranslation($newTranslations);
				}

				if(!$query){
					return false;
				}
			}

			return true;

		}
		public function saveTranslation(array $translations)
		{
			if (!$translations) {
				return;
			}

			foreach ($translations as $translation) {
				$langId = intval($translation['id']);
				$content = htmlspecialchars($translation['translation']);
				$selector = htmlspecialchars($translation['selector']);

				$sql = "INSERT INTO translations (`translate`, `selector`, `lang`) VALUES ('$content', '$selector', $langId);";
				$query = Connection()->set($sql);

				if(!$query){
					return false;
				}
			}

			return true;

		}

		// returns the boolean true or false;

 		public function updateLanguage(array $language){

			if(!$language){
 				return;
 			}
 			$name = $language['name'];
 			$short_code = $language['short_code'];
			$id = $language['id'];
			$sql = "UPDATE languages SET
			 				name = '$name',
							short_code = '$short_code'
							WHERE id = $id";
			$query = Connection()->set($sql);

 			// $language = mysqli_fetch_assoc($query);
 			return $query;
 		}

		// returns the boolean true or false;

 		public function deleteLanguage($id){
			if (!$id) {
				return false;
			}
 			$sql = "DELETE FROM languages WHERE id = $id";
			$query = Connection()->set($sql);

			return $query;
 		}


		// returns the array $languages
 		public function getLanguageList(){
			$languages = $this->getList('languages');

 			return $languages;
 		}
 	}

 ?>
