<?php
include('../inc/fonction.php');
session_start();
$idhabitat = $_GET['idHabitat'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/client_detail.css">
    <title>Client Detail</title>
</head>

<body>
    <?php
    //echo ($_GET['reponse']);
    if (isset($_GET['reponse'])) {  ?>
        <div class="error">cet immobilier est deja reserve pour cette plage de date</div>
    <?php } ?>
    <section>
        <?php $habitation = getHabitat($idhabitat);
        //var_dump($habitation); 
        $photo = getPhoto($habitation->idphotoalaune);
        ?>
        <div id="titre">
            <div><?php echo ($habitation->nom . " " . $habitation->quartier); ?></div>
            <div id="deco"><a href="deconnexion.php">Se deconnecter</a></div>
        </div>
        <div id="descri">
            <?php echo ($habitation->descri); ?>
        </div>
    </section>
    <section>
        <div id="contain">
            <div id="gauche">
                <img src="../<?php echo ($photo->repertoire); ?>" alt="">
            </div>
            <div id="droite">
                <div id="haut">
                    <?php
                    $allPhoto = getAllPhoto($idhabitat);
                    for ($i = 1; $i < 3; $i++) {
                    ?>
                        <div><img src="../<?php echo ($allPhoto[$i]->repertoire); ?>" alt=""></div>
                    <?php } ?>
                </div>
                <div id="bas">
                    <?php for ($i = 3; $i < count($allPhoto); $i++) { ?>
                        <div><img src="../<?php echo ($allPhoto[$i]->repertoire); ?>" alt=""></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section id="last">
        <div id="left">
            <?php $categorie = getCategorieById($habitation->idcategorie); ?>
            <div><?php echo($categorie->nomcategorie); ?></div>
            <div><?php echo ($habitation->nbchambre); ?> chambres</div>
        </div>
        <div id="right">
            <div id="prix">
               <strong><?php echo ($habitation->loyer); ?> euro</strong> la nuit
            </div>
            <div id="daty">
                <div class="arrivee">
                    <div>Arrivée</div>
                    <div id="champ">
                    <input type="date" name="arrivee">
                    </div>
                </div>
                <div class="depart">
                    <div>Départ</div>
                    <div id="champ">
                    <input type="date" name="depart">
                    </div>
                </div>
            </div>
            <div id="submit">
                <input type="submit" value="Reserver">
            </div>
        </div>
    </section>
    <section id="retour">
        <a href="client_acceuil.php">Retour</a>
    </section>
</body>

</html>