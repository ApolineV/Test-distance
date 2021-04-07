<?php session_start();?>
<?php include "admin.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
<h1>Connexion</h1>
    <form method="POST">
    <label>Nom</label>
    <input name="nom"type="text">
    <p></p>
    <label>Mdp</label>
    <input name="mdp" type="password">
    <p></p>
    <button type="submit">connect</button>
    </form>

    <?php // Tout les champs du formulaire
                        if (isset($_POST['nom']) && isset($_POST['mdp'])) {
                           //echo $_POST['nom'];
                            $coadmin = new admin();
                            $coadmin->Connexion($_POST['nom'], $_POST['mdp']);
                        }
                        ?>
                        
</body>
</html>