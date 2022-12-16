<?php 
    session_start();
    include("inc/fonction.php");
    if(isset($_POST['email']) && isset($_POST['password'])) {
        $mail = $_POST['email'];
        $mdp = $_POST['password'];
        $user = verifyLogin($mail, $mdp);
        //var_dump($user);
        if($user == false) {
            $error = 0;
        }
        else {
            $_SESSION['user'] = $user;
            if($user->isadmin == 1) { // admin
                header("location:pages/admin_acceuil.php");
            }
            else { // client
                header("location:pages/client_acceuil.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Login and Register</title>
</head>

<body>
    <section>
        <div id="titre">
            Tranok'ala
        </div>
    </section>
    <section>

        <div id="contenu">
            <div id="gauche">
                <form action="#" method="post">
                    <label>Se connecter</label>
                    <input type="text" name="email" placeholder="email" required>
                    <input type="password" name="password" placeholder="mot de passe" required>
                    <input id="submit" type="submit" value="Se connecter">
                </form>
                <?php if(isset($error)) { ?>
                <div id="error">
                    Email ou Mot de passe incorrect
                </div>
                <?php } ?>
            </div>
            <div id="droite">
                <form action="pages/inscription.php" method="post">
                    <label>S'inscrire</label>
                    <input type="text" name="nom" placeholder="Votre nom" required>
                    <input type="text" name="email" placeholder="email" required>
                    <input type="text" name="password" placeholder="mot de passe" required>
                    <input type="text" name="tel" placeholder="tel" required>
                    <input id="submit" type="submit" value="S'inscrire">
                </form>
            </div>
        </div>

    </section>
</body>

</html>