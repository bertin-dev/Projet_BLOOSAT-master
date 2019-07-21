<?php

include"functions_users.php";
$user=new User;
include"functions_clients.php";
$client=new Clients;

include"functions_equipements.php";
$equipment=new  Equipements;


if (!empty($_GET['trait']) AND isset($_GET['trait'])) {
	
	$trait=$_GET['trait'];
}else{

	header("Location:index.php");
}



if ($trait=="login") {


	if ($user->login($_POST['email'],$_POST['pass'])==1) {
		
		include"render_board.php"; 
	}
	
}elseif ($trait=="logout") {
	
	session_start();
	session_destroy();
	unset($_SESSION);
	header("Location:render_login.php");

}elseif ($trait=="add_client") {


	
	if (!isset($_POST['nom']) || empty($_POST['nom'])) {
		
		echo "<div class='alert alert-danger'>Le nom est obligatoire</div>";

	}elseif(!isset($_POST['type_compte']) || empty($_POST['type_compte'])){

	echo "<div class='alert alert-danger'>Le type de compte est obligatoire</div>";

	}elseif(!isset($_POST['pays']) || empty($_POST['pays'])){

	echo "<div class='alert alert-danger'>Veuillez choisir un pays</div>";

	}elseif(!isset($_POST['ville']) || empty($_POST['ville'])){

	echo "<div class='alert alert-danger'>Veuillez choisir une ville</div>";

	}elseif(!isset($_POST['email']) || empty($_POST['email'])){

	echo "<div class='alert alert-danger'>L'email est obligatoire</div>";

	}elseif(!isset($_POST['tel1']) || empty($_POST['tel1'])){

	echo "<div class='alert alert-danger'>Numéro de téléphone est obligatoire</div>";

	}else{

			if(!isset($_POST['tel2']) || empty($_POST['tel2'])){

				$tel2="";

			}else{

				$tel2=htmlspecialchars(trim($_POST['tel2']));

			}

$nom=htmlspecialchars(trim($_POST['nom'])); 
$type_compte=htmlspecialchars(trim($_POST['type_compte']));
$pays=htmlspecialchars(trim($_POST['pays']));
$ville=htmlspecialchars(trim($_POST['ville']));
$email=htmlspecialchars(trim($_POST['email']));
$tel1=htmlspecialchars(trim($_POST['tel1']));






	$client->newClient($nom,$pays,$ville,$tel1,$tel2,$email,$type_compte);

		echo "1";
	
}


}elseif ($trait=="isserialable") {

	$id_equipt=htmlspecialchars(trim($_GET['id_equipt']));
	
		if (isset($id_equipt) && !empty($id_equipt)) {
		
			$equipment->check_if_serializable($id_equipt);	
		}
	
}elseif ($trait=="update_client") {


	
	if (!isset($_POST['nom']) || empty($_POST['nom'])) {
		
		echo "<div class='alert alert-danger'>Le nom est obligatoire</div>";

	}elseif(!isset($_POST['id_client']) || empty($_POST['id_client'])){

	echo "<div class='alert alert-danger'>Ne truquez pas les infos SVP</div>";

	}elseif(!isset($_POST['type_compte']) || empty($_POST['type_compte'])){

	echo "<div class='alert alert-danger'>Veuillez choisir un type de compte</div>";

	}elseif(!isset($_POST['pays']) || empty($_POST['pays'])){

	echo "<div class='alert alert-danger'>Veuillez selectionner un pays</div>";

	}elseif(!isset($_POST['ville']) || empty($_POST['ville'])){

	echo "<div class='alert alert-danger'>Veuillez choisir une ville</div>";

	}elseif(!isset($_POST['email']) || empty($_POST['email'])){

	echo "<div class='alert alert-danger'>L'email est obligatoire</div>";

	}elseif(!isset($_POST['tel1']) || empty($_POST['tel1'])){

	echo "<div class='alert alert-danger'>Numéro de téléphone est obligatoire</div>";

	}else{

			if(!isset($_POST['tel2']) || empty($_POST['tel2'])){

				$tel2="";

			}else{

				$tel2=htmlspecialchars(trim($_POST['tel2']));

			}
$id=htmlspecialchars(trim($_POST['id_client']));
$nom=htmlspecialchars(trim($_POST['nom'])); 
$type_compte=htmlspecialchars(trim($_POST['type_compte']));
$pays=htmlspecialchars(trim($_POST['pays']));
$ville=htmlspecialchars(trim($_POST['ville']));
$email=htmlspecialchars(trim($_POST['email']));
$tel1=htmlspecialchars(trim($_POST['tel1']));



	echo $client->updateClient($nom,$pays,$ville,$tel1,$tel2,$email,$type_compte,$id);


	
}


}elseif ($trait=="delete_client") {

	if(!isset($_GET['id_client']) || empty($_GET['id_client'])){

	echo "<div class='alert alert-danger'>Ne truquez pas les infos SVP</div>";

	}else{

		$id=htmlspecialchars(trim($_GET['id_client']));


		echo $client->supprimeClient($id);

	}
	

}elseif ($trait=="retaure_client") {

	if(!isset($_GET['id_client']) || empty($_GET['id_client'])){

	echo "<div class='alert alert-danger'>Ne truquez pas les infos SVP</div>";

	}else{

		$id=htmlspecialchars(trim($_GET['id_client']));


		echo $client->restaureClient($id);

	}
	

}elseif ($trait=="all_clients") {
	
	include"render_all_clients.php";

}elseif($trait=="clients_deleted") {
	
	include"render_clients_deleted.php";

}elseif($trait=="all_equipts") {
	
	include"render_all_equipts.php";

}elseif($trait=="all_type_equipts") {
	
	include"render_all_type_equipts.php";  

}elseif($trait=="etat_stock") {
	
	include"render_stocks.php";

}elseif($trait=="all_livrais") {
	
	include"render_all_livraisons.php";

}elseif($trait=="all_transferts") {
	
	include"render_all_transferts.php";

}elseif ($trait=="add_equipment") {



	if(!isset($_POST['type']) || empty($_POST['type'])){

	echo "<div class='alert alert-danger'>Le type d'équipement est obligatoire</div>";

	}elseif (!isset($_POST['serialisable']) || empty($_POST['serialisable'])) {
		
		echo "<div class='alert alert-danger'>Les numéros de série sont-il applicables à cet équipement ?</div>";

	}else{

			if(!isset($_POST['description']) || empty($_POST['description'])){

				$description="";

			}else{

				$description=htmlspecialchars(trim($_POST['description']));

			}


			if(!isset($_POST['nom']) || empty($_POST['nom'])){

				$nom="";

			}else{

				$nom=htmlspecialchars(trim($_POST['nom']));

			}
		
			$type=htmlspecialchars(trim($_POST['type']));
			$nom=htmlspecialchars(trim($_POST['nom']));

			$serialisable=htmlspecialchars(trim($_POST['serialisable']));



	$equipment->newEquipement($nom,$description,$type,$serialisable);

		echo "1";
	
}

}elseif ($trait=="add_new_type") {
	
	if(!isset($_POST['libelle']) || empty($_POST['libelle'])){

			echo "<div class='alert alert-danger'>Le libellé est obligatoire</div>";

	}else{


			if(!isset($_POST['description']) || empty($_POST['description'])){

				$description="";

			}else{

				$description=htmlspecialchars(trim($_POST['description']));

			}

		$libelle=htmlspecialchars(trim($_POST['libelle']));

			$equipment->newTypeEquipement($libelle,$description);

		echo "1";


	}

}elseif ($trait=="equipemtsd1_depot") {  
	
	if(!isset($_GET['id_depot_depart']) || empty($_GET['id_depot_depart'])){

			echo "<div class='alert alert-danger'>Veuillez choisir un entrepot de départ</div>";

	}else{

			$id_depot_depart=htmlspecialchars(trim($_GET['id_depot_depart']));

			$liste_equipemts=$equipment->equipementsD1depot($id_depot_depart);

			//echo"<option disabled="" selected="">Choisir</option>";
			foreach ($liste_equipemts as $equipt) {

				if ($equipment->stock_actuel($id_depot_depart,$equipt['equipment'])>0) {
					

					echo"<option value='".$equipt['num_serie']."'>".$equipt['libelle']." (".$equipt['num_serie']." )"."</option>";
					
				}
				
				
			}
	}
}
elseif ($trait=="get_id_from_num_serie") {  

	//var_dump($_GET);
	
	if(!isset($_GET['num_serie_sent']) || empty($_GET['num_serie_sent'])){

			echo "<div class='alert alert-danger'>Le numéro de série ou le code de l'équipment est obligatoire</div>";

	}else{
		$num_serie=htmlspecialchars(trim($_GET['num_serie_sent']));

		$equipment->id_equipt_a_partir_du_serie($num_serie);
	}



}
elseif ($trait=="add_approvis") {
	
	if(!isset($_POST['equipement']) || empty($_POST['equipement'])){

			echo "<div class='alert alert-danger'>Veuillez choisir un équipement</div>";

	}

	/*elseif(!isset($_POST['entrepot']) || empty($_POST['entrepot'])){


			echo "<div class='alert alert-danger'>Veuillez choisir un entrepot</div>";

	}*/

	elseif(!isset($_POST['qte']) || empty($_POST['qte'])){

			echo "<div class='alert alert-danger'>Veuillez renseigner la quantité</div>";

	}else{

		$id_equipement=htmlspecialchars(trim($_POST['equipement']));

			if(!isset($_POST['description']) || empty($_POST['description'])){

				$description="";

			}else{

				$description=htmlspecialchars(trim($_POST['description']));

			}

				if(!isset($_POST['serie']) || empty($_POST['serie'])){

				$num_serie=$id_equipement; 
				

			}else{

				$num_serie=htmlspecialchars(trim($_POST['serie']));

			}

			if (is_numeric($_POST['qte'])) {
				
				
		/*$entrepot=htmlspecialchars(trim($_POST['entrepot']));*/
		$qte=htmlspecialchars(trim($_POST['qte']));

		/*if (isset($num_serie) AND !empty($num_serie)) {
			$qte=1;	

		}elseif (!isset($num_serie) || empty($num_serie)) {
		
				$qte=htmlspecialchars(trim($_POST['qte']));
		}*/


			$equipment->newApprovision($id_equipement,$qte,$description,$num_serie);

		//echo "1"; 
		echo "<div class='alert alert-success'>Transfert d'équipement effectué avec succès</div>";
			//var_dump($_POST);


			}else{

				
				echo "<div class='alert alert-danger'>Veuillez choisir une quantité valide</div>";
			}


	}

}elseif ($trait=="add_transfert") {

	
if(!isset($_POST['equipment_to_sent']) || empty($_POST['equipment_to_sent'])){

			echo "<div class='alert alert-danger'>Veuillez choisir un équipement</div>";

	}elseif(!isset($_POST['entrepot_dep']) || empty($_POST['entrepot_dep'])){

		

			echo "<div class='alert alert-danger'>Veuillez choisir un entrepot de départ</div>";

	}elseif(!isset($_POST['entrepot_dest']) || empty($_POST['entrepot_dest'])){

			echo "<div class='alert alert-danger'>Veuillez choisir un entrepot de destination</div>";

	}elseif($_POST['entrepot_dep']==$_POST['entrepot_dest']){

			echo "<div class='alert alert-danger'>L'entrepot de départ doit être différent celui de destination</div>";

	}elseif(!isset($_POST['qte']) || empty($_POST['qte'])){

			echo "<div class='alert alert-danger'>Veuillez renseigner la quantité</div>";

	}else{


			if(!isset($_POST['description']) || empty($_POST['description'])){

				$description="";

			}else{

				$description=htmlspecialchars(trim($_POST['description']));

			}

			if(!isset($_POST['num_serie']) || empty($_POST['num_serie'])){

				echo "<div class='alert alert-danger'>Le numéro de série ou l'identifiant de l'équipement est obligatoir</div>";

			}else{

				$num_serie=htmlspecialchars(trim($_POST['num_serie']));



			}



			if (is_numeric($_POST['qte'])) {

			
				
		$id_equipement=htmlspecialchars(trim($_POST['equipment_to_sent']));
		$entrepot_dep=htmlspecialchars(trim($_POST['entrepot_dep']));
		$entrepot_dest=htmlspecialchars(trim($_POST['entrepot_dest']));
		$qte=htmlspecialchars(trim($_POST['qte']));

			$equipment->newTransfert($id_equipement,$qte,$entrepot_dep,$entrepot_dest,$description,$num_serie);


		echo "<div class='alert alert-success'>Le transfert d'équipement a bien été effectué</div>";



			}else{

				
				echo "<div class='alert alert-danger'>Veuillez choisir une quantité valide</div>";
			}

		


	}

}











