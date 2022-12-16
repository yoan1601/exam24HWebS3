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
    <title>Client Detail</title>
</head>

<body>
    <?php
    //echo ($_GET['reponse']);
        if(isset($_GET['reponse'])) {  ?>
            <div class="error">cet immobilier est deja reserve pour cette plage de date</div>
        <?php } ?>
    <section>
        <?php $habitation = getHabitat($idhabitat);
        //var_dump($habitation); 
        $photo = getPhoto($habitation->idphotoalaune);
        ?>
        <div id="desc">
            <p>
                <?php echo ($habitation->nom . " " . $habitation->quartier); ?>
            </p>

            <p>
                <?php echo ($habitation->descri); ?>
            </p>
        </div>
    </section>
    <section>
        <div id="contain">
            <div id="gauche">
                <div id="une"><img src="<?php echo ($photo->repertoire); ?>" alt=""></div>
            </div>
            <div id="droite">
                <?php
                $allPhoto = getAllPhoto($idhabitat);
                for ($i = 1; $i < count($allPhoto); $i++) {
                ?>
                    <div id="sary"><img src="../<?php echo ($allPhoto[$i]->repertoire); ?>" alt=""></div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section>
        <div id="left">
            <p>
                <?php echo ($habitation->idcategorie . " " . $habitation->nbchambre); ?>
            </p>
        </div>
        <div id="right">
            <div id="iray">
                <div id="prix">
                    <h4>
                        <?php echo ($habitation->loyer); ?>
                    </h4>
                    <p> par nuit</p>
                </div>
            </div>
            <div id="daty">
                <form action="reservation.php" method="get">
                    <div id="arrive">
                        <input type="date" name="arrivee" required>
                    </div>
                    <div id="depart">
                        <input type="date" name="depart" required>
                    </div>
                    <div id="reserve">
                        <input type="submit" value="Reserver">
                    </div>
                    <input type="hidden" name="idHabitat" value="<?php echo($idhabitat); ?>">
                </form>
            </div>
        </div>
    </section>
    <section>
        <div id="retour"><a href="#">Retour</a></div>
    </section>
</body>

</html>