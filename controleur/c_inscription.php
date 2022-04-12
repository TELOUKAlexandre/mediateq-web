<?php
if(isset($_POST['addInscrit'])){
    // Hachage du mot de passe
    $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    
    $req = $connexion->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
    $resultat=$req->execute(array(
        'pseudo' => $pseudo,
        'pass' => $pass_hache,
        'email' => $email));
    
        if($resultat){
            $_SESSION["success"] = 'Inscription réussite';
        }
        else{
            $_SESSION["error"] = 'Problème lors de l\'inscription';
        }
    }

// appel du script de vue qui permet de gerer l'affichage des donnees
include "$racine/vue/header.php";
include "$racine/vue/v_inscription.php";
include "$racine/vue/footer.php";
?>