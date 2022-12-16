<?php
    session_start();
    include("../inc/fonction.php");
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tel = $_POST['tel'];
    insertUser($email, $nom, $password, $tel);
    $allUser = getAllUser();
    $newUser = $allUser[count($allUser) - 1];
    $_SESSION['user'] = $newUser;
    header("location:client_acceuil.php");
?>