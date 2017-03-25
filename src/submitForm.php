<?php
require "bdd.php";

$prenom     = $_POST["prenom"];
$nom        = $_POST["nom"];
$email      = $_POST["email"];

$conn = getConnection();
$sql = "INSERT INTO profile2 (prenom, nom, email) VALUES ('$prenom', '$nom', '$email');";
execSql($conn, $sql);

header('Location: /?page=index&addcontact=ok');