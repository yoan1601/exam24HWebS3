<?php
include('fonction.php');
// $habitats = getAllHabitat(1);
// foreach ($habitats as $h) {
//     echo($h->id);
//     echo('</br>');
// }

// $s = search('hote');
// foreach ($s as $h) {
//     echo($h->id);
//     echo('</br>');
// }

// $h = getHabitat(1);
// var_dump($h);

// $nb = getNbHabitatOQPJour('2022-04-16');
// var_dump($nb);

// $montant = getMontantLoyerJour('2022-04-16');
// var_dump($montant);

$u = verifyLogin('client1@gmail.com', 'bla');
var_dump($u);
?>