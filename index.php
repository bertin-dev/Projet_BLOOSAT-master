<?php
include "bdconfig.php";
session_start();
include"functions_clients.php";
$client=new Clients;

if (!isset($_SESSION['iduser']) || empty($_SESSION['iduser'])) {
    
  include"render_login.php";

}else{

	include"render_board.php";
}

