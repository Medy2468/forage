<?php
session_start();
require_once '../models/user.php';

if (isset($_POST['connexion'])) {

    extract($_POST);
    $utilisateur = findEmpByLogin($email, $mdp);
    $_SESSION['auth'] = $utilisateur;

    if ($utilisateur != null) {
        $_SESSION['id'] = $utilisateur['id'];
        $_SESSION['nom'] = $utilisateur['nom'];
        $_SESSION['prenom'] = $utilisateur['prenom'];
        $_SESSION['email'] = $utilisateur['email'];
        $_SESSION['mdp'] = $utilisateur['mdp'];
        $_SESSION['idRoleF'] = $utilisateur['idRoleF'];
        $_SESSION['etat'] = $utilisateur['etat'];

        /* if ($utilisateur['idRoleF'] == 1 || $utilisateur['idRoleF'] == 2 || $utilisateur['idRoleF'] == 3 || $utilisateur['idRoleF'] == 4) {
            if ($_SESSION['mdp'] == "passer") {
                //header("location:../../accueil.php");
                header("location:../../first_connection.php");
            }
        } else {
            $_SESSION['idRoleF'] = "";
            header("location:../../index.php");
        } */
        if ($_SESSION['mdp']=='ok') {
            header("location:../../first_connection.php");
        }else {
            header("location:../../accueil.php");
        }
    }else {
        header("location:../../index.php");
    }
}

// Deconnexion
if (isset($_GET['Decon'])) {

    /*if(EtatNormal($_SESSION['id']) != null){
        // ok 
    }*/
    session_unset();
    //session_destroy();
    $_SESSION['idRoleF'] = "";
    header("location:../../index.php");
    //header("location:/coffre");  
}

if (empty($_SESSION)) {
}
