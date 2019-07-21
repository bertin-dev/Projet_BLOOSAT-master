<?php 
include"bdconfig.php";

class Clients
{
	
	function Clients()
	{
		
	}

	function newClient($nom,$pays,$ville,$tel1,$tel2,$email,$type){

			global $conn;

			$date = date('Y-m-d H:i:s');

				$req=$conn->prepare("INSERT INTO  crbls_clients VALUES(NULL,?,?,?,?,?,?,?,0,?,1,0)");
				$req->execute(array($nom,$pays,$ville,$tel1,$tel2,$email,$type,$date));
				
	}

	function updateClient($nom,$pays,$ville,$tel1,$tel2,$email,$type,$id){

			global $conn;

			
				$req=$conn->prepare("UPDATE crbls_clients SET nom=?,pays=?,ville=?,tel1=?,tel2=?,email=?,type=? WHERE id=?");
				$req->execute(array($nom,$pays,$ville,$tel1,$tel2,$email,$type,$id));

				if ($req==true) {
					
					echo "1";
				}else{

					echo "0";
				}
	}

	function supprimeClient($id){

			global $conn;

			
				$req=$conn->prepare("UPDATE crbls_clients SET supprime=1 WHERE id=?");
				$req->execute(array($id));

				if ($req==true) {
					
					echo "1";

				}else{

					echo "0";
				}
	}

	function restaureClient($id){

			global $conn;

			
				$req=$conn->prepare("UPDATE crbls_clients SET supprime=0 WHERE id=?");
				$req->execute(array($id));

				if ($req==true) {
					
					echo "1";

				}else{

					echo "0";
				}
	}

	function allClients(){

				global $conn;

				$req=$conn->query("SELECT * FROM crbls_pays,crbls_clients WHERE pays=alpha3 AND supprime=0 ORDER BY date_inscription desc ");
				$result=$req->fetchAll();

				if (empty($result)) {
					
				return 0;

				}else{

					return $result;

				}
				

	}

	function clients_deleted(){

				global $conn;

				$req=$conn->query("SELECT * FROM crbls_pays,crbls_clients WHERE pays=alpha3 AND supprime=1 ORDER BY date_inscription desc ");
				$result=$req->fetchAll();

				if (empty($result)) {
					
				return 0;

				}else{

					return $result;

				}
				

	}


	function nombreProspect(){

				global $conn;

				$req=$conn->query("SELECT count(ID) as nbre FROM crbls_clients WHERE etat_client=0 AND supprime=0");
				$result=$req->fetch();

					return $result['nbre'];

			
				

	}


	function nombreClients(){

				global $conn;

				$req=$conn->query("SELECT count(ID) as nbre FROM crbls_clients WHERE etat_client=1");
				$result=$req->fetch();

					return $result['nbre'];

			
				

	}

}






 ?>