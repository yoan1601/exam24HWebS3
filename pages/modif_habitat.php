<?php
include("../inc/fonction.php");
$allCategories = getAllCategories();
$idhabitat = $_GET['idhabitat'];
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
            <select name="type" required>
                <?php foreach ($allCategories as $categorie) { ?>
                <option value="<?php echo ($categorie->id); ?>">
                    <?php echo ($categorie->nomcategorie); ?>
                </option>
                <?php } ?>
            </select>
            <input type="hidden" name="idhabitat" value="<?php echo ($idhabitat); ?>">
            <input type="number" name="nbchambre" placeholder="Nombre de chambre">
            <input type="number" name="loyer" placeholder="Loyer">
            <input type="text" name="description" placeholder="Description">
            <input type="text" name="quartier" placeholder="Quartier">
            <input id="submit" type="submit" value="Modifier">
        </form>
    </div>
</body>

</html>