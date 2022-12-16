<?php 

    include("../inc/fonction.php");
    include("listeImg.php");
    $categorie = $_POST['type'];
    $nom = $_POST['nom'];
    $nbChambres = $_POST['nbChambre'];
    $loyer = $_POST['loyer'];
    $sary1 = $_POST['sary1'];
    $sary2 = $_POST['sary2'];
    $sary3 = $_POST['sary3'];
    $sary4 = $_POST['sary4'];
    $sary5 = $_POST['sary5'];
    $descri = $_POST['desc'];
    $quartier = $_POST['quartier'];

    $idImgAlaUne = getIdImg($sary1, $listeImg);

    insertHabitat($categorie, $nom, $nbChambres, $loyer, $quartier, $descri, $idImgAlaUne);
    $allHabitats = getAllHabitats();
    $thisHabitat = $allHabitats[count($allHabitats) - 1];
    insertPhoto($sary1, $thisHabitat->id);
    insertPhoto($sary2, $thisHabitat->id);
    insertPhoto($sary3, $thisHabitat->id);
    insertPhoto($sary4, $thisHabitat->id);
    insertPhoto($sary5, $thisHabitat->id);

    // echo('insertion ok');
    header('location:admin_acceuil.php');
?>