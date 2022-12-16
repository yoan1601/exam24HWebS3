<?php
    session_start();
    include("../inc/fonction.php");
    $idhabitat = $_POST['idhabitat'];
    $type = $_POST['type'];
    $nbchambre = $_POST['nbchambre'];
    $loyer = $_POST['loyer'];
    $description = $_POST['description'];
    $quartier = $_POST['quartier'];
    modifier($idhabitat, $type, $nbchambre, $loyer, $quartier, $description);
    header("location:client_acceuil.php");
?>