<?php
include("../inc/fonction.php");
$allCategories = getAllCategories();
$idhabitat = $_GET['idhabitat'];
$habitat = getHabitat($idhabitat);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/modif_habitat.css">
    <title>Modifier Habitation</title>
</head>

<body>
    <div id="titre">Modifier une habitation</div>
    <div>
        <form action="modifiHabitat.php" method="post">
            <div>
                <select name="type" required>
                    <?php foreach ($allCategories as $categorie) { ?>
                    <option value="<?php echo ($categorie->id); ?>">
                        <?php echo ($categorie->nomcategorie); ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <input type="hidden" name="idhabitat" value="<?php echo ($idhabitat); ?>">
            </div>
            <div>
                <input type="text" name="nom" value="<?php echo($habitat->nom); ?>" placeholder="nom">
            </div>
            <div>
                <input type="number" name="nbchambre" value="<?php echo($habitat->nbchambre); ?>" placeholder="Nombre de chambre">
            </div>
            <div>
                <input type="number" name="loyer" value="<?php echo($habitat->loyer); ?>" placeholder="Loyer">
            </div>
            <div>
                <input type="text" name="description" value="<?php echo($habitat->descri); ?>" placeholder="Description">
            </div>
            <div>
                <input type="text" name="quartier" value="<?php echo($habitat->quartier); ?>" placeholder="Quartier">
            </div>
            <div>
                <input id="submit" type="submit" value="Modifier">
            </div>
        </form>
    </div>
</body>

</html>