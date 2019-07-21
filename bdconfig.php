<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="crm_v2";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn->exec("set names utf8");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
    echo "Pas de connexion à la base: " . $e->getMessage();
    }
?>