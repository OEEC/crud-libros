<?php
//incluye la clase user y userController
require_once('userController.php');
require_once('user.php');
 
$uc = new UserController();
$user = new User();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$user->setUsername($_POST['username']);
		$user->setEmail($_POST['email']);
		$user->setPassword($_POST['password']);
		//llama a la función insertar definida en el crud
		$uc->insertar($user);
		header('Location: dashboard.php');
	}
?>