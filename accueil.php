<?php
//session_start(); // on demare la session

//require_once 'src/models/adherent_db.php';
//require_once 'src/models/coffre_db.php';
require_once 'src/models/user.php';

include_once 'header.php';
include_once 'topBar.php';

if (isset($_GET['p'])){
    switch ($_GET['p']){
        case 'gGestionClient':
            $client = getClient();
            require_once 'src/vue/clientele/index_client.php';
            break;
        case 'gAddClient':
            require_once 'src/vue/clientele/addClient.php';
                 break;
        case 'gAdmin':
            $users = getUser();
            include_once 'src/vue/admin/index_user.php';
            break;
        case 'gAddUser':
            require_once 'src/vue/admin/addUser.php';
            break;
        case 'gGestionCommercial':
            $abonnement = getAbonnement();
            include_once 'src/vue/abonnement/index_abonnement.php';
               break;
        case 'gAddAbonnement':
            $numeroAbo = genererNumeroAbonnement();
            include_once 'src/vue/abonnement/addAbonnement.php';
                break;
        case 'gGestionCompteur':
                 $compteur = getCompteur();
                 include_once 'src/vue/compteur/index_compteur.php';
                    break;
        case 'gAddCompteur':
                $numero = genererNumeroCompteur();
                include_once 'src/vue/compteur/addCompteur.php';
                 break;        
        case 'gGestionFacture':
                $facture = getfacture();
                include_once 'src/vue/abonnement/index_facture.php';
                 break;
        case 'gAddFacture':
                $numeroFac = genererNumeroFacture();
                include_once 'src/vue/abonnement/addFacture.php';
                 break;        
        case 'gGestionReglement':
               $reglement = getReglement();
               include_once 'src/vue/abonnement/index_reglement.php';
               break;
        case 'gAddReglement':
             include_once 'src/vue/abonnement/addReglemeent.php';
             break;   
        default:
            include_once 'erreur.php';
    }
} else{
    include_once 'home.php';
}

include_once 'footer.php';