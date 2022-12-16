<?php
session_start();
include('..\inc\fonction.php');
$idtype = 5;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Acceuil</title>
</head>

<body>
    <section><a href="ajout_habitat.php">
            <div id="add"> ajouter </div>
        </a></section>
    <section>
        <div id="all">
            <?php
            $habit = getAllHabitat($idtype);
            foreach ($habit as $habitation) {
                $photo = getPhoto($habitation->idphotoalaune);
            ?>
                <div id="iray">
                    <div id="sary">
                        <div id="kely">...</div><img src="../<?php echo ($photo->repertoire); ?>" alt="">
                    </div>
                    <div id="lettre">
                        <p><?php echo ($habitation->nom); ?>,<?php echo ($habitation->quartier); ?>,<?php echo ($habitation->loyer); ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>

</body>

</html>