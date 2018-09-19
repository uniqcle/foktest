<?php
	
	return array(

	//Регистрация и авторизация
	"user/register"         => "user/register", 
	"user/login"            => "user/login", 
	"user/logout"           => "user/logout",
	
	//Управление изображениями в админке
	"image/create"          => "image/create",
	"image/delete/([0-9]+)" => "image/delete/$1", 
	"image"                 => "image/index",
	""                      => "user/login"

	); 