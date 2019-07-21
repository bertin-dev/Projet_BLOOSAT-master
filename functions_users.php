<?php 
include"bdconfig.php";

class User{
	
	function User()
	{
		
	}

	function login($email,$pass){

			global $conn;

			if (!isset($email) || empty($email)) {
				
				echo "Veuillez fournir votre adresse e-mail";

			}elseif (!isset($pass) || empty($pass)) {
				
				echo "Veuillez fournir votre mot de passe";

			}else{

				//$pass=sha1($pass);

				$req=$conn->prepare("SELECT * FROM  crbls_user WHERE email like ? AND pass like ?");
				$req->execute(array($email,$pass));
				$res=$req->fetch();

				if (!empty($res)) {

					session_start();

					$_SESSION['iduser']=$res['ID'];
					$_SESSION['nom']=$res['nom'];
					$_SESSION['privilege']=$res['privilege'];
					$_SESSION['email']=$res['email'];
					$_SESSION['supprime']=$res['supprime'];
					$_SESSION['actif']=$res['actif'];

					return 1;
				

				}else{

					echo "Vos identifiants ne sont pas corrects";
				}

			}

	}

	function nomUser($id){

			global $conn;

				$req=$conn->prepare("SELECT nom FROM crbls_user WHERE ID=? ");
				$req->execute(array($id));
				$nom=$req->fetch();
				return $nom['nom'];
				
	}


	
}









 ?>