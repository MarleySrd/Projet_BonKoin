<?php
require_once(__DIR__ . '/../Models/AnnonceModel.php');
require_once(__DIR__ . '/../Models/UserModel.php');
$annonceModel = new AnnonceModel();
// détail d'un annonce
function viewAnnonce()
{
    global $annonceModel;
    $annonce = $annonceModel->getAnnonce($_GET['id_annonce']);
    $listCategories = $annonceModel->listCategories();
    $userModel = new UserModel();
    $user = $userModel->getUser($annonce['id_user']);
    require_once(__DIR__ . '/../Views/annonceView.php');
    exit();
}
//recherche, affichage des annonces d'une categorie
function searchAnnonces()
{
    global $annonceModel;
    $listCategories = $annonceModel->listCategories();
    if (isset($_GET['form'])) {

        require_once(__DIR__ . '/../Views/searchView.php');
    } else {
        // les annonces d'une categorie, les annonces d'un user ou une recherche passent par la méthode search du modele
        $annoncesList = $annonceModel->searchAnnonces();
        

        require_once(__DIR__ . '/../Views/listAnnoncesView.php');

        exit();
    }
}

function listCategories()
{
    global $annonceModel;
    $listCategories = $annonceModel->listCategories();
    require_once(__DIR__ . '/../Views/home.php');
}

function newAnnonce()
{
    global $annonceModel;
    $listCategories = $annonceModel->listCategories();
    if (isset($_POST['submit'])) {
        $errors = $annonceModel->newAnnonce();
        if ($errors) {
            require_once(__DIR__ . '/../Views/newAnnonceView.php');
        } else {
            // require_once (__DIR__ . '/../Views/home.php');
            header("Location:?search&id_user=" . $_SESSION['connected']);
        }
    } else {
        require_once(__DIR__ . '/../Views/newAnnonceView.php');
    }
}
