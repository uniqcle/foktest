<?php
//Подключаем файлы в ручную. Почему то автозагрузчик не хочет отрабатывать
require_once './vendor/autoload.php'; 
require_once './models/user.php'; 
require_once './models/image.php'; 

//Подключаем библиотеку Intervention Image.
use Intervention\Image\ImageManagerStatic as Image;

/*******************************************************
// Класс для работы с изображениями
********************************************************/
class ImageController{


/*******************************************************
// Вывод списка описаний и изображений
********************************************************/
	public function actionIndex(){

    	$itemList = []; 
		$itemList = Images::getItems(); 

		require_once(ROOT.'/views/index.php'); 
	return true; 
	}


/*******************************************************
// Контроллер, который загружает изображение
********************************************************/
public function actionCreate(){


	//Если кликнули "Сохранить"
	if(isset($_POST['submit'])){
		//Получаем описание к картинке
		$options['descr'] = $_POST['descr'];

		//Заносим в БД
		$id = Images::createImage($options); 
 
		//Если запись добавлена
		if($id){

			//Проверяем загрузился ли файл.
			if(is_uploaded_file($_FILES['image']['tmp_name'])){
			//Перемещаем
	move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/images/{$id}.jpg" ); 

		// Тут мы используем библиотеку Intervention image
		Image::configure(array('driver' => 'gd'));
				
		// and you are ready to go ...
		$image = Image::make("./images/{$id}.jpg")
				->resize(100, 100)
				->save("./images/{$id}.jpg");

			}
		} 
		//После загрузки перемещаемся на список изображений
		header("Location: /image/");  

	}

	//Выдает пустую форму
	require_once(ROOT.'/views/create.php'); 
	return true; 
	}


	/*******************************************************
	// Контроллер удаления изображения
	********************************************************/
	public function actionDelete($id){
 
		//Если подтвердили удаление
 		if(isset($_POST['submit'])){
 			//Удалили
			Images::deleteImage($id); 
			//Переместились на список
			header("Location: /image/"); 

		}
		//Подтверждаем у пользователя удаление
 		require_once(ROOT.'/views/delete.php'); 

	return true; 

	}

}