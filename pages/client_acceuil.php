<?php
session_start();
include('../inc/fonction.php');
$idtype = 2;
$habit = getAllHabitat($idtype);
if(isset($_GET['recherche'])) {
    $habit = search($_GET['recherche']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/client_acceuil.css">
    <title>Admin Acceuil</title>
</head>

<body>
    <section id="recherche">
        <div id="search">
            <form action="#" method="get">
                <input type="text" name="recherche" id="champ" placeholder="description" required>
                <input type="submit" value="chercher">
            </form>
        </div>
        <div id="deco"><a href="deconnexion.php">Se deconnecter</a> </div>
    </section>
    <section id="content">
        <div id="all">
            <?php
            foreach ($habit as $habitation) {
                $photo = getPhoto($habitation->idphotoalaune);
            ?>
                <div id="iray">
                    <div id="kely"><a href="calendar.php?idHabitat=<?php echo($habitation->id); ?>">voir occupation</a></div>
                    <div id="click">
                        <a href="client_detail.php?idHabitat=<?php echo ($habitation->id); ?>">
                            <div id="sary"><img src="../<?php echo ($photo->repertoire); ?>" alt=""></div>
                            <div id="lettre">
                                <p>
                                    <?php echo ($habitation->nom . " " . $habitation->quartier . " " . $habitation->loyer); ?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

</body>

</html>