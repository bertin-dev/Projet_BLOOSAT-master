<?php 
include"bdconfig.php";

class Params{

	function __construct()
	{
		
	}

	function pays(){

			global $conn;

				$req=$conn->query("SELECT * FROM  crbls_pays ORDER BY alpha3");
				$res=$req->fetchAll();
				return 	$res;
	}

}









 ?>