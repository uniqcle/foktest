<?php 

/*******************************************************
// Функция автозагрузки классов
********************************************************/
function __autoload($nameClass){

	//Массив, где находятся классы
	$classArray = [
		"/components/", 
		"/models/"
	]; 

	//Проходимся по массиву. Если есть класс с таким именем, то подключаем
	foreach($classArray as $item):
		$path = ROOT.$item.$nameClass.'.php'; 

		if(is_file($path)){
			require_once $path; 
		}
	endforeach; 
}