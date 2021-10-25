<!-- Routeur qui indique quel controlleur appeler -->
<!-- ici le routeur est directement dans index.php, dans certains cas on l'appelle ici  -->
<?php
// session_start() crée une session ou restaure celle trouvée sur le serveur, via l'identifiant de session passé dans une requête GET, POST ou par un cookie.
///session_start();

//Nous allons vérifier si une variable de session connected existe auquel cas on va laisser l'utilisateur accéder à cette page
// $_SESSION['connected']=true;

<<<<<<< HEAD
if(isset($_GET['login'])){
    require_once(__DIR__.'/Controllers/userController.php');
    login();
}

if (isset($_GET['signin'])){
    require_once(__DIR__.'/Controllers/userController.php');
    
}

=======
require_once(__DIR__ . '/Controllers/annonceController.php');
listAnnonce();
>>>>>>> 07466d88da8781e24d29e091e3f9b0abd8382038

?>