<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

// recuperation des donnees GET, POST, et SESSION


if(isset($_POST['formconnexion'])){
    $pseudoconnect = $_POST['formmail'];
    $passconnect = hash('sha256', $_POST['formmdp']);
    login($pseudoconnect, $passconnect);
    
}
else
    {
        $erreur = "erreur";
    }
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 


// traitement si necessaire des donnees recuperees


// appel du script de vue qui permet de gerer l'affichage des donnees
/*if(isLoggedOn()){
     include "$racine/controleurs/".controleurPrincipal("defaut"); //page par défaut : si connecté catalogue, sinon connexion
} else {*/
    $title = "Connexion";
    include "$racine/vue/header.php";
    include "$racine/vue/v_connexion.php";
    include "$racine/vue/footer.php";
 
?>