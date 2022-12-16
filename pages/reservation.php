<?php
    session_start();
    include('../inc/fonction.php');
    $user = $_SESSION['user'];
    $arrivee = $_GET['arrivee'];
    $depart = $_GET['depart'];
    $idHabitat = $_GET['idHabitat'];

    // echo($arrivee);
    // echo($depart);
    if(insertReservation($arrivee, $depart, $idHabitat, $user->id) == false) {
        header("location:client_detail.php?reponse=0&idHabitat=$idHabitat");
    }
    else {
        header("location:client_detail.php?idHabitat=$idHabitat");  
    }
?>