<?php

require("connect.php");

function getCategorieById($idCategorie){
    $connexion = getConnexionPostGres();
    $format = "select * from categorie where id = %g";
    $sql = sprintf($format, $idCategorie);
    // echo($sql);
    $rep = $connexion->query($sql);
    $rep->setFetchMode(PDO::FETCH_OBJ);
    $retour=$rep->fetch();
    $rep->closeCursor();
    return $retour;
}

function constructEventsForCalendar($idHab) {
    $allReservation = getAllReservationByIdHab($idHab);
    $rep = '';
    $j = 0;
    
    for ($i=0; $i < count($allReservation) - 1; $i++) { 
        $rep = $rep."{id: ".$i.",title: 'logement occupé',start: '".$allReservation[$i]->datearrivee."',end: '".$allReservation[$i]->datedepart."'}".",";
        $j++;
    }
    $rep = $rep."{id: ".$j.",title: 'logement occupé',start: '".$allReservation[$j]->datearrivee."',end: '".$allReservation[$j]->datedepart."'}";
    return $rep;
}

function getAllReservationByIdHab($idHab) {
    $connexion = getConnexionPostGres();
    $sql = "select * from reservation where idHabitation = ".$idHab;
    // echo($sql);
    $rep = $connexion->query($sql);
    $rep->setFetchMode(PDO::FETCH_OBJ);
    while($reservation=$rep->fetch()){
        $retour[]=$reservation;
    }
    $rep->closeCursor();
    return $retour;
}

function constructYAxisLoyerJour($mois, $annee) {
    date_default_timezone_set("Africa/Nairobi");
    $j = 1;
    $nbJourMois = getDaysInMonth($mois, $annee);
    $rep = "";
    for ($i=1; $i <= $nbJourMois - 1; $i++) { 
        $datenew = DateTime::createFromFormat("Y-m-d", $annee."-".$mois."-".$i);
        $dateStr = $datenew->format("Y-m-d");
        $montant = getMontantLoyerJour($dateStr)->montant;
        $rep = $rep.$montant.",";
       $j++;
    }
    $datenew = DateTime::createFromFormat("Y-m-d", $annee."-".$mois."-".$j);
    $dateStr = $datenew->format("Y-m-d");
    $montant = getMontantLoyerJour($dateStr)->montant;
    $rep = $rep.$montant;
    return $rep;
}

function constructYAxisNbHabOqpJour($mois, $annee) {
    date_default_timezone_set("Africa/Nairobi");
    $j = 1;
    $nbJourMois = getDaysInMonth($mois, $annee);
    $rep = "";
    for ($i=1; $i <= $nbJourMois - 1; $i++) { 
        $datenew = DateTime::createFromFormat("Y-m-d", $annee."-".$mois."-".$i);
        $dateStr = $datenew->format("Y-m-d");
        $nb = getNbHabitatOQPJour($dateStr)->nb;
        $rep = $rep.$nb.",";
       $j++;
    }
    $datenew = DateTime::createFromFormat("Y-m-d", $annee."-".$mois."-".$j);
    $dateStr = $datenew->format("Y-m-d");
    $nb = getNbHabitatOQPJour($dateStr)->nb;
    $rep = $rep.$nb;
    return $rep;
}

function constructDays($mois, $annee) {
    date_default_timezone_set("Africa/Nairobi");
    $j = 1;
    $nbJourMois = getDaysInMonth($mois, $annee);
    $rep = "";
    for ($i=1; $i <= $nbJourMois - 1; $i++) { 
        $rep = $rep.$i.",";
       $j++;
    }
    $rep = $rep.$j;
    return $rep;
}

function getDaysInMonth($month,$year) {
    date_default_timezone_set("Africa/Nairobi");
    if ($month==null) { 
         $month = date("n",time());
    }
  
     if ($year=null) {
         $year = date("Y",time());
     }
     $dim = date( "j", mktime(0, 0, 0, $month + 1, 1, $year) - 1 );
    return $dim;
  
  }

function getAllCategories() {
    $connexion = getConnexionPostGres();
    $sql = "select * from categorie order by id";
    // echo($sql);
    $rep = $connexion->query($sql);
    $rep->setFetchMode(PDO::FETCH_OBJ);
    while($habitat=$rep->fetch()){
        $retour[]=$habitat;
    }
    $rep->closeCursor();
    return $retour;
}

function getAllUser() {
    $connexion = getConnexionPostGres();
    $sql = "select * from utilisateur order by id";
    // echo($sql);
    $rep = $connexion->query($sql);
    $rep->setFetchMode(PDO::FETCH_OBJ);
    while($habitat=$rep->fetch()){
        $retour[]=$habitat;
    }
    $rep->closeCursor();
    return $retour;
}

function getAllReservationByDate($date) {
    $connexion = getConnexionPostGres();
    $format = "select * from reservation where '%s' between datearrivee and datedepart";
    $sql = sprintf($format, $date);
    // echo($sql);
    $rep = $connexion->query($sql);
    $rep->setFetchMode(PDO::FETCH_OBJ);
    while($habitat=$rep->fetch()){
        $retour[]=$habitat;
    }
    $rep->closeCursor();
    return $retour;
}

function insertUser($email, $nom, $mdp, $tel){
    $connexion = getConnexionPostGres();
    $format = "insert into utilisateur (email, nom, mdp, tel, isAdmin) values ('%s', '%s', '%s', '%s', 0)";
    $sql = sprintf($format, $email, $nom, $mdp, $tel);
    // echo($sql);
    $insert = $connexion->exec($sql);
}

function insertHabitat($idtype, $nom,$nbChambre, $loyer, $quartier, $descri, $idphoto){
    $connexion = getConnexionPostGres();
    $format = "insert into habitation (idCategorie, nom,nbChambre, loyer, quartier, descri, idPhotoALaUne) values (%g, '%s',%g, %g, '%s', '%s', %g)";
    $sql = sprintf($format, $idtype, $nom,$nbChambre, $loyer, $quartier, $descri, $idphoto);
    // echo($sql);
    $insert = $connexion->exec($sql);
}

function insertReservation($arrivee, $depart, $idhabitat, $idUser){
    $allReservation = getAllReservationByDate($depart);
    if($allReservation != false) {
        foreach ($allReservation as $reservation) {
            // var_dump($reservation->idhabitation);
            // var_dump($idhabitat);
            // if($reservation->idhabitation == $idhabitat) echo('mitovy');
            if($reservation->idhabitation == $idhabitat) return false;
        }
        $allReservation = getAllReservationByDate($arrivee);
        foreach ($allReservation as $reservation) {
            if($reservation->idhabitation == $idhabitat) return false;
        }
    }
    $connexion = getConnexionPostGres();
    $format = "insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('%s', '%s', %g, %g)";
    $sql = sprintf($format, $arrivee, $depart, $idhabitat, $idUser);
    // echo($sql);
    $insert = $connexion->exec($sql);
    return true;
}

function insertPhoto($rep, $idhabitat){
    $connexion = getConnexionPostGres();
    $format = "insert into photo (idhabitation, repertoire) values (%g, '%s')";
    $sql = sprintf($format, $idhabitat, $rep);
    // echo($sql);
    $insert = $connexion->exec($sql);
}

function modifier($idhabitat, $idtype, $nbChambre, $loyer, $quartier, $descri){
    $connexion = getConnexionPostGres();
    $format = "update habitation set idCategorie = %g, nbChambre = %g, loyer = %g, quartier = '%s', descri = '%s' where id = %g";
    $sql = sprintf($format, $idtype, $nbChambre, $loyer, $quartier, $descri, $idhabitat);
    // echo($sql);
    $insert = $connexion->exec($sql);    
}

function supprimer($idhabitat){
    $connexion = getConnexionPostGres();

    $format = " delete from photo where idhabitation = %g";
    $sql = sprintf($format, $idhabitat);
    // echo($sql);
    $delete = $connexion->exec($sql);

    $format = " delete from reservation where idhabitation = %g";
    $sql = sprintf($format, $idhabitat);
    // echo($sql);
    $delete = $connexion->exec($sql);

    $format = " delete from habitation where idhabitation = %g";
    $sql = sprintf($format, $idhabitat);
    // echo($sql);
    $delete = $connexion->exec($sql);
}

function verifyLogin($email, $mdp){
    $connexion = getConnexionPostGres();
    $format = "select * from utilisateur where email = '%s' and mdp = '%s'";
    $sql = sprintf($format, $email, $mdp);
    // echo($sql); 
    $rep = $connexion->query($sql);
    $rep->setFetchMode(PDO::FETCH_OBJ);
    $retour = $rep->fetch();
    $rep->closeCursor();
    return $retour; //user / false
}

function getAllPhoto($idh){
    $connexion = getConnexionPostGres();
    $format = "select * from photo where idHabitation = %g";
    $sql = sprintf($format, $idh);
    // echo($sql);
    $rep = $connexion->query($sql);
    $rep->setFetchMode(PDO::FETCH_OBJ);
    while($habitat=$rep->fetch()){
        $retour[]=$habitat;
    }
    $rep->closeCursor();
    return $retour;
}

function getAllHabitats(){
    $connexion = getConnexionPostGres();
    $sql = "select * from habitation order by id";
    // echo($sql);
    $rep = $connexion->query($sql);
    $rep->setFetchMode(PDO::FETCH_OBJ);
    while($habitat=$rep->fetch()){
        $retour[]=$habitat;
    }
    $rep->closeCursor();
    return $retour;
}

function getAllHabitat($idtype){
    $connexion = getConnexionPostGres();
    $format = "select * from habitation where idCategorie = %g order by id";
    $sql = sprintf($format, $idtype);
    // echo($sql);
    $rep = $connexion->query($sql);
    $rep->setFetchMode(PDO::FETCH_OBJ);
    while($habitat=$rep->fetch()){
        $retour[]=$habitat;
    }
    $rep->closeCursor();
    return $retour;
}

function search($descri){
    $connexion = getConnexionPostGres();
    $format = "select * from habitation where descri like '%s%s%s'";
    $sql = sprintf($format, '%', $descri, '%');
    // echo($sql);
    $rep = $connexion->query($sql);
    $rep->setFetchMode(PDO::FETCH_OBJ);
    while($habitat=$rep->fetch()){
        $retour[]=$habitat;
    }
    $rep->closeCursor();
    return $retour;
}

function getPhoto($idPhoto){
    $connexion = getConnexionPostGres();
    $format = "select * from Photo where id = %g";
    $sql = sprintf($format, $idPhoto);
    // echo($sql);
    $rep = $connexion->query($sql);
    $rep->setFetchMode(PDO::FETCH_OBJ);
    $retour=$rep->fetch();
    $rep->closeCursor();
    return $retour;
}

function getHabitat($idhabitat){
    $connexion = getConnexionPostGres();
    $format = "select * from habitation where id = %g";
    $sql = sprintf($format, $idhabitat);
    // echo($sql);
    $rep = $connexion->query($sql);
    $rep->setFetchMode(PDO::FETCH_OBJ);
    $retour=$rep->fetch();
    $rep->closeCursor();
    return $retour;
}

function getNbHabitatOQPJour($date){
    $connexion = getConnexionPostGres();
    $format = "select count(h.*) as nb
    from habitation h 
    join reservation r on r.idhabitation = h.id 
    where '%s' between r.datearrivee and r.datedepart";
    $sql = sprintf($format, $date);
    // echo($sql);
    $rep = $connexion->query($sql);
    $rep->setFetchMode(PDO::FETCH_OBJ);
    $nb=$rep->fetch();
    $retour = $nb;
    $rep->closeCursor();
    return $retour;
}

function getMontantLoyerJour($date){
    $connexion = getConnexionPostGres();
    $format = "select sum(h.loyer) as montant
    from habitation h 
    join reservation r on r.idhabitation = h.id 
    where '%s' between r.datearrivee and r.datedepart";
    $sql = sprintf($format, $date);
    // echo($sql);
    $rep = $connexion->query($sql);
    $rep->setFetchMode(PDO::FETCH_OBJ);
    $montant=$rep->fetch();
    $retour = $montant;
    $rep->closeCursor();
    // $retour = array(1, 6,23,54,13,123);
    return $retour;
}

function getOccupaLogement($date){
    $connexion = getConnexionPostGres();
    // $connexion = ;
    // $format = "";
    // $sql = sprintf($format, $date);
    // echo($sql);// 
    // $rep = $connexion->query($sql);
    // $rep->setFetchMode(PDO::FETCH_OBJ);
    // $habitat=$rep->fetch();
    // $retour = $habitat;
    // $rep->closeCursor();
    $retour = array(1, 6,23,54,13,123);
    return $retour;
}
