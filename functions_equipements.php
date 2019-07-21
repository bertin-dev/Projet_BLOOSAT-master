<?php 
include"bdconfig.php";

class Equipements
{
	
	function Equipements()
	{
		
	}

	function newEquipement($nom,$description,$type,$serialisable){

			global $conn;
			session_start();

			$date = date('Y-m-d H:i:s');
			$nom=$type.' '.$nom;
			
			$user_connected=$_SESSION['iduser'];

				$req=$conn->prepare("INSERT INTO  crbls_equipement VALUES(NULL,?,?,?,?,?,?)");
				$req->execute(array($nom,$description,$type,$serialisable,$date,$user_connected));
				
	}



	function allType_equipements(){

				global $conn;

				$req=$conn->query("SELECT * FROM crbls_type ");
				$result=$req->fetchAll();

				if (empty($result)) {
					
				return 0;

				}else{

					return $result;

				}
				

	}

	function newApprovision($equipment,$qte,$description,$num_serie){

	global $conn;
			session_start();

			$date = date('Y-m-d H:i:s');
			
			$user_connected=$_SESSION['iduser'];


				$req_approv=$conn->prepare("INSERT INTO  crbls_mvt VALUES(NULL,'e','a',?,?,1,?,?,?,?,0,1,0,0)");
				$req_approv->execute(array($equipment,$qte,$description,$date,$user_connected,$num_serie));
				
				
	}

	function newTransfert($equipment,$qte,$depart,$arrivee,$description,$num_serie){

	global $conn;
			session_start();

			$date = date('Y-m-d H:i:s');
			
			$user_connected=$_SESSION['iduser'];

				$req_sortie=$conn->prepare("INSERT INTO  crbls_mvt VALUES(NULL,'s','t',?,?,?,?,?,?,?,0,0,1,?)");
				$req_sortie->execute(array($equipment,$qte,$depart,$description,$date,$user_connected,$num_serie,$user_connected));
				
				$req_entree=$conn->prepare("INSERT INTO  crbls_mvt VALUES(NULL,'e','t',?,?,?,?,?,?,?,0,1,1,?)");
				$req_entree->execute(array($equipment,$qte,$arrivee,$description,$date,$user_connected,$num_serie,$user_connected));
				
				if ($this->serializable($equipment)==1) {

				$req_non_dispo=$conn->prepare("UPDATE  crbls_mvt SET dispo=0 WHERE type='e' AND  entrepot=? AND num_serie like? ");
				$req_non_dispo->execute(array($depart,$num_serie));
				
				}
			
	}

	



	function stock_actuel($entrepot,$equipment){

	global $conn;
		


				$stock_now=$conn->prepare("SELECT (sum(if(type='e', qte, 0)))- sum(if(type='s', qte, 0)) as stock from `crbls_mvt` WHERE entrepot=? and equipment=? group by entrepot");
				$stock_now->execute(array($entrepot,$equipment));

				$result=$stock_now->fetch();


					return $result['stock'];



	}




	function liste_equip_stock(){

	global $conn;
			


				$stock_liste=$conn->prepare("SELECT entrepot,crbls_entrepot.nom,equipment,libelle,num_serie from crbls_entrepot,crbls_equipement,crbls_mvt where equipment=crbls_equipement.ID and crbls_entrepot.ID=entrepot group by entrepot,num_serie");
				$stock_liste->execute(array());

				$result=$stock_liste->fetchAll();

			if (empty($result)) {
					
				return 0;

				}else{

					return $result;

				}



	}

	function liste_des_transferts(){

	global $conn;
			


				$transf_liste=$conn->prepare("SELECT entrepot,crbls_entrepot.nom,date_mvt,equipment,libelle,num_serie,qte,crbls_mvt.type type_mvt,operator from crbls_entrepot,crbls_equipement,crbls_mvt where equipment=crbls_equipement.ID and crbls_entrepot.ID=entrepot and operation like't' order by date_mvt");
				$transf_liste->execute(array());

				$result=$transf_liste->fetchAll();

			if (empty($result)) {
					
				return 0;

				}else{

					return $result;

				}



	}

	
	function check_if_serializable($id_equipt){

				global $conn;

				$req=$conn->prepare("SELECT count(ID) nbre FROM crbls_equipement where ID=? AND serializable=1");
				$req->execute(array($id_equipt));

				//var_dump($id_equipt);

				$result=$req->fetch();

				if ($result['nbre']>0) {
					
				echo 1;

				}else{

					echo "false";

				}
	}
				
				function serializable($id_equipt){

				global $conn;

				$req=$conn->prepare("SELECT count(ID) nbre FROM crbls_equipement where ID=? AND serializable=1");
				$req->execute(array($id_equipt));

				//var_dump($id_equipt);

				$result=$req->fetch();

				if ($result['nbre']>0) {
					
			return 1;

				}else{

					echo "false";

				}

	}




	function allEquipements(){

				global $conn;

				$req=$conn->query("SELECT * FROM crbls_equipement");
				$result=$req->fetchAll();

				if (empty($result)) {
					
				return 0;

				}else{

					return $result;

				}
				

	}

	function allEntrepots(){

				global $conn;

				$req=$conn->query("SELECT * FROM crbls_entrepot");
				$result=$req->fetchAll();

				if (empty($result)) {
					
				return 0;

				}else{

					return $result;

				}
				

	}

	function newTypeEquipement($libelle,$description){

			global $conn;
			session_start();

			$date = date('Y-m-d H:i:s');
			
			$user_connected=$_SESSION['iduser'];

				$req=$conn->prepare("INSERT INTO  crbls_type VALUES(NULL,?,?,?,?)");
				$req->execute(array($libelle,$description,$date,$user_connected));
			

	}

		function allLivraisons(){

	global $conn;
			


				$liste=$conn->query("SELECT valider,operator,equipment,libelle,num_serie,date_mvt,qte from crbls_entrepot,crbls_equipement,crbls_mvt where equipment=crbls_equipement.ID and crbls_entrepot.ID=entrepot and entrepot=1 and operation like 'a'");

				$result=$liste->fetchAll();

			if (empty($result)) {
					
				return 0;

				}else{

					return $result;

				}



	}

	function allTransfert(){

	global $conn;
			


				$liste=$conn->query("SELECT operator,equipment,libelle,num_serie,date_mvt,qte from crbls_entrepot,crbls_equipement,crbls_mvt where equipment=crbls_equipement.ID and crbls_entrepot.ID=entrepot and entrepot=1 and operation like 'a'");

				$result=$liste->fetchAll();

			if (empty($result)) {
					
				return 0;

				}else{

					return $result;

				}



	}

	function id_equipt_a_partir_du_serie($num_serie){

	global $conn;
			


				$req=$conn->prepare("SELECT equipment from crbls_mvt where num_serie=?");
				$req->execute(array($num_serie));

				$result=$req->fetch();
				echo $result['equipment'];

		/*	if (empty($result)) {
					
				return 0;

				}else{

					

				}*/



	}

	function equipementsD1depot($depotDepart){

	global $conn;


				$req=$conn->prepare("SELECT crbls_mvt.ID id_ligne_equip_mvt,serializable,equipment,libelle,num_serie from crbls_entrepot,crbls_equipement,crbls_mvt where equipment=crbls_equipement.ID and crbls_entrepot.ID=entrepot and entrepot=?  and crbls_mvt.type like 'e' and dispo=1  group by num_serie");
				$req->execute(array($depotDepart));

				$result=$req->fetchAll();

				return $result;

	}

	

}






 ?>