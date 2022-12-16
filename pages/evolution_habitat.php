<?php 

    include("../inc/fonction.php");
    date_default_timezone_set("Africa/Nairobi");
    $jour = 1;
    $annee = 2022;
    $mois = 1;
    $datenew = DateTime::createFromFormat("Y-m-d", $annee."-".$mois."-".$jour);
    $dateStr = $datenew->format("Y-m-d");
    $nbJourMois = getDaysInMonth($mois, $annee);
    $daysData = constructDays($mois, $annee);
    $Yaxis = constructYAxisNbHabOqpJour($mois,$annee);

    if(isset($_GET['annee']) && isset($_GET['mois'])) {
        $annee = $_GET['annee'];
        $mois = $_GET['mois'];
        $datenew = DateTime::createFromFormat("Y-m-d", $annee."-".$mois."-".$jour);
        $dateStr = $datenew->format("Y-m-d");
        $nbJourMois = getDaysInMonth($mois, $annee);
        $daysData = constructDays($mois, $annee);
        $Yaxis = constructYAxisNbHabOqpJour($mois,$annee);
    }

    $listMois = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
    //echo $daysData." \n";
    //echo($Yaxis);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolution Habitat</title>
</head>
<body>
    <section>
    <div id="haut">
        <div id="titre"><h2>Evolution du nombre d'habitation par jour</h2>
    </div>
    <form action="#" method="get">
        <select name="mois">
            <?php for($i = 0; $i < count($listMois); $i++) { ?>
                <option value="<?php echo($i+1); ?>"><?php echo($listMois[$i]); ?></option>
            <?php } ?>
        </select>

        <div id="annee">
            <input type="number" name="annee" id="annee" min="2000" value="2022" required>
        </div>
        <div class="submi">
            <input type="submit" value="voir">
        </div>
    </form>
</div>
</section>
<section>
    <div id ="bas">

        <script src="../assets/js/chart.min.js"></script>

        <canvas id="canvas"></canvas>
        <!-- 
            <button onclick="generateData()">Ajouter une valeur</button> -->
        
            <script>
                config = {
                    type: "line", // Graphique de type Line
                    data: {
                        //labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'], // Données Axe X
                        labels: [<?php echo($daysData); ?>],
                        datasets: [{
                            label: "evolution", // Titre du jeu de données
                            fill: false, // Juste un trait pour le tracé de la courbe
                            backgroundColor: "deepskyblue", // Couleur des points
                            borderColor: "deepskyblue", // Couleur du trait
                            //data: [0,25,35,20,2,30,5] // Données Axe Y
                            data: [<?php echo($Yaxis); ?>]
                        }]
                    },
                    options: {
                        legend: { display: false },
                        scales: {
                            xAxes: [{
                                scaleLabel: { // Titre sur l'axe X
                                    display: true,
                                    labelString: "jours"
                                }
                            }],
                            yAxes: [{
                                scaleLabel: { // Titre sur l'axe Y
                                    display: true,
                                    labelString: "nombre d'habitation louee",
                                    padding : 1
                                }
                            }]
                        }
                    }
                };
        
        
        
                /*Le contexte du canevas HTML */
                context = document.getElementById("canvas").getContext("2d");
                /* Création du graphique */
                chart = new Chart(context, config);
                    chart.update();
            </script>
        

    </div>
</section>
</body>
</html>