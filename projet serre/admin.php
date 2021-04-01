<?php
class admin{

    private $_idAdmin;
    private $_nom;
    private $_mdp;
    private $_mail;
    
    public function connectbdd()
    { 
    try {
        $bdd = new PDO('mysql:host=mysql-projetserre.alwaysdata.net; dbname=projetserre_sql; charset=utf8', '231031_admin', 'serre1234');
    } catch (Exception $erreur) {
        echo 'Erreur : ' . $erreur->getMessage();
    }
    return $bdd;
    }
    public function connexion($nom, $mdp, $bdd)
    {  
        $request = $bdd->prepare("SELECT * FROM 'Admin' WHERE nom =".$nom." AND mdp = ".$mdp."");
       
        $request->execute([$nom, $mdp]);
        $userexist = $request->rowCount();
        if ($userexist == 1) {
            $userinfo = $request->fetch();
            $_SESSION['nom'] = $userinfo['nom'];
            $_SESSION['id'] = $userinfo['id_admin'];
            echo "je suis connecté";
            
        } else {

            echo "Identifiant ou mot de passe incorrect ! ";
        }
    }

}
   
?>