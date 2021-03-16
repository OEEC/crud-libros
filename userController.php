<?php
// incluye la clase Db
require_once('conexion.php');

	class UserController{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo user
		public function insertar($user){
            $db=Db::conectar();
            $password = $user->getPassword();
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
         
            $query = $db->prepare("SELECT * FROM users WHERE EMAIL=:email");
            $query->bindParam("email", $user->getEmail(), PDO::PARAM_STR);
            $query->execute();
         
            if ($query->rowCount() > 0) {
                echo '<p class="error">The email address is already registered!</p>';
            }
         
            if ($query->rowCount() == 0) {
                $query = $db->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
                $query->bindParam("username", $user->getUsername(), PDO::PARAM_STR);
                $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
                $query->bindParam("email", $user->getEmail(), PDO::PARAM_STR);
                $result = $query->execute();
         
                if ($result) {
                    header('Location: index.php');
                } else {
                    header('Location: index.php');
                }
            }
		}
	}
?>