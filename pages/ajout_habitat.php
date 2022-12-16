<?php
include("../inc/fonction.php");
include("listeImg.php");
$allCategories = getAllCategories();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/ajout_habitat.css">
    <title>Ajout Habitat</title>
</head>

<body>
    <section>
        <div id="titre">
            Ajouter une habitation
        </div>
        <form action="insertionHabitat.php" method="post">
            <select name="type" required>
                <?php foreach ($allCategories as $categorie) { ?>
                <option value="<?php echo ($categorie->id); ?>">
                    <?php echo ($categorie->nomcategorie); ?>
                </option>
                <?php } ?>
            </select>
            <input type="number" name="nbChambre" id="chambres" min="1" placeholder="nombre de chambres" required>
            <input type="number" name="loyer" id="loyer" min="0" placeholder="loyer" required>
            <input type="text" name="desc" placeholder="Description" required>
            <input type="text" name="quartier" placeholder="Quartier" required>
            <label>Pour la photo a la une</label>
            <div class="titre">
                <select name="sary1" required>
                    <?php
                    for ($i = 0; $i < count($listeImg); $i++) {
                    ?>
                    <option value="<?php echo ($listeImg[$i]); ?>">sary
                        <?php echo ($i + 1); ?>
                    </option>
                    <?php } ?>
                </select>
                <select name="sary" required>
                    <?php
                    for ($i = 0; $i < count($listeImg); $i++) {
                    ?>
                    <option value="<?php echo ($listeImg[$i]); ?>">sary
                        <?php echo ($i + 1); ?>
                    </option>
                    <?php } ?>
                </select>
                <select name="sary" required>
                    <?php
                    for ($i = 0; $i < count($listeImg); $i++) {
                    ?>
                    <option value="<?php echo ($listeImg[$i]); ?>">sary
                        <?php echo ($i + 1); ?>
                    </option>
                    <?php } ?>
                </select>
                <select name="sary" required>
                    <?php
                    for ($i = 0; $i < count($listeImg); $i++) {
                    ?>
                    <option value="<?php echo ($listeImg[$i]); ?>">sary
                        <?php echo ($i + 1); ?>
                    </option>
                    <?php } ?>
                </select>
                <select name="sary" required>
                    <?php
                    for ($i = 0; $i < count($listeImg); $i++) {
                    ?>
                    <option value="<?php echo ($listeImg[$i]); ?>">sary
                        <?php echo ($i + 1); ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
        <input id="submit" type="submit" value="Ajouter">
        </form>
    </section>
</body>

</html>