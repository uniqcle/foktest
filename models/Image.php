<?php
require_once './components/db.php'; 

/*******************************************************
// Класс для работы с изображениями
********************************************************/
class Images
{
	/*******************************************************
	// Модель добавления инфо к изображению в БД
	********************************************************/
	public static function createImage($options){

		$pdo = DB::getConnect(); 

		$sql = "INSERT INTO image (descr) VALUES (:descr)"; 

		$stmt = $pdo -> prepare($sql); 

		$result = $stmt -> execute(array(
			"descr"           => $options['descr'],
 		)); 

		if($result){
			return $pdo -> lastInsertId(); 
		} 

		return 0; 

	}

	/*******************************************************
	// Получаем инфо по изображению
	********************************************************/
	public static function getItems(){

		$pdo = DB::getConnect(); 

		$itemList = []; 

		$sql = "SELECT id, `descr` FROM image"; 

		$stmt = $pdo -> query($sql); 

		$i = 0; 
		while($row = $stmt -> fetch()){
			$itemList[$i]['id']     = $row['id']; 
			$itemList[$i]['descr']   = $row['descr']; 
			 
		$i++; 
		}
    return $itemList; 
	}

	/*******************************************************
	// Метод удаления изображения из БД
	********************************************************/
		public static function deleteImage($id){

		$pdo = DB::getConnect(); 

		$sql = "DELETE FROM image WHERE id = :id"; 

		$stmt = $pdo -> prepare($sql); 

		return $stmt -> execute(array("id" => $id));  
	}



}