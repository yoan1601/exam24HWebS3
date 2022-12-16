<?php
session_start();
include('../inc/fonction.php');
// $idtype = 2;
// $habit = getAllHabitat($idtype);
$habit = getAllHabitats();
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
    <section id="menu">
        <div id="logo">
            <div id="trano">Tranok'</div>
            <div id="ala">ala</div>
            <div id="logosary"><img src="../images/logo.jpg"alt></div>
        </div>
        <div id="list">
            <div id="deco"><a href="deconnexion.php">deconnexion</a></div>
        </div>
    </section>
    <section id="recherche">
        <div id="search">
            <form action="#" method="get">
                <input type="text" name="recherche" id="champ" placeholder="description" required>
                <input type="submit" value="chercher">
            </form>
        </div>
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
                                    <?php echo ($habitation->nom); ?>
                                </p>
                                <p>
                                    <?php echo ($habitation->quartier); ?>
                                </p>
                                <p>
                                    <?php echo ($habitation->loyer); ?> euros
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
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