<?php
require_once(__DIR__ . '/../Models/UserModel.php');

function login()
{
    if (isset($_POST['nom']) && isset($_POST['pwd'])) {
        $nom = strip_tags($_POST['nom']);
        $pwd = strip_tags($_POST['pwd']);
        $userModel = new UserModel();
        $userModel->login($nom, $pwd);
        // return home
        require_once(__DIR__ . '/../Controllers/annonceController.php');
        listCategories();
    } else {
        require_once(__DIR__ . '/../Views/loginView.php');
    }
}

function logout()
{
    session_destroy();
    session_start();
    // return home
    require_once(__DIR__ . '/../Controllers/annonceController.php');
    listCategories();
}

function signin()
{
<<<<<<< HEAD
        $userModel = new UserModel();
        if (isset($_POST['nom']) && isset($_POST['pwd'])) {
            $nom = strip_tags($_POST['nom']);
            $mail = strip_tags($_POST['mail']);
            $pwd = strip_tags($_POST['pwd']);
            // ICI on hash le password pour plus de sécurité
            $pwd = password_hash($pwd, PASSWORD_DEFAULT);
            $userModel->signin($nom, $mail, $pwd);
            require_once(__DIR__ . '/../Views/loginView.php');
        } else {
            require_once(__DIR__ . '/../Views/signinView.php');
        }
=======
    $userModel = new UserModel();
    if (isset($_POST['nom']) && isset($_POST['pwd'])) {
        $nom = strip_tags($_POST['nom']);
        $mail = strip_tags($_POST['mail']);
        $pwd = strip_tags($_POST['pwd']);
        $pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';
        if (preg_match($pattern, $pwd)) {
            // ICI on hash le password pour plus de sécurité
            $pwd = password_hash($pwd, PASSWORD_DEFAULT);
            $userModel->signin($nom, $mail, $pwd);
        } else {
            $errorPassword="Mot de passe incorrect !";
            require_once(__DIR__ . '/../Views/signinView.php');
            exit;
        }
        require_once(__DIR__ . '/../Views/loginView.php');
    } else {
        require_once(__DIR__ . '/../Views/signinView.php');
>>>>>>> fe1d45f17ed0aff4d06324c4ecf0e827a8b3d563
    }
