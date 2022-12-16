<?php
session_start();
include('../inc/fonction.php');
// $idtype = 5;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admin_acceuil.css">
    <title>Admin Acceuil</title>
</head>

<body>
    <section id="menu">
        <div id="logo">
            <div id="trano">Tranok'</div>
            <div id="ala">ala</div>
            <div id="logosary"><img src="../images/logo.jpg"alt></div>
        </div>
        <div id="list">
            <div id="evolution1"><a href="evolution_habitat.php">Evolution nombre d'habitations</a></div>
            <div id="evolution2"><a href="evolution_loyer.php">Evolution montant loyer</a></div>
            <div id="deco"><a href="deconnexion.php">deconnexion</a></div>
        </div>
    </section>
    <section><a href="ajout_habitat.php">
            <div id="add"> ajouter </div>
        </a></section>
    <section>
        <div id="all">
            <?php
            // $habit = getAllHabitat($idtype);
            $habit = getAllHabitats();
            foreach ($habit as $habitation) {
                $photo = getPhoto($habitation->idphotoalaune);
            ?>
                <div id="iray">
                    <div id="sary">
                        <!-- <div id="kely">...</div> -->
                        <div id="fonction">
                            <div id="modif">
                                <a href="modif_habitat.php?idhabitat=<?php echo ($habitation->id); ?>">
                                    modifier
                                </a>
                            </div>
                            <div id="supprimer">
                                <a href="supp_habitat.php?idhabitat=<?php echo ($habitation->id); ?>">
                                    supprimer
                                </a>
                            </div>
                        </div>
                        <img src="../<?php echo ($photo->repertoire); ?>" alt="">
                    </div>
                    <div id="lettre">
                        <p>
                            <?php echo ($habitation->nom); ?>
                        </p>
                        <p>
                            <?php echo ($habitation->quartier); ?>
                        </p>
                        <p>
                            <?php echo ($habitation->loyer); ?> euros
                        </p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
    <section id="footer">
        <div id="copyright"><em>copyright 2022</em></div>
        <div id="etu">
            <div>ETU1819</div>
            <div>ETU1892</div>
            <div>ETU1793</div>
        </div>
    </section>
</body>

</html>