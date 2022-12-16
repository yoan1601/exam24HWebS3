<?php
    session_start();
    include("../inc/fonction.php");
    $idhabitat = $_GET['idhabitat'];
    supprimer($idhabitat);
    header("location:admin_acceuil.php");
?>