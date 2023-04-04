<?php
require_once 'bdd.php';

function findEmpByLogin($email,$mdp){
    global $db;
    $req = "SELECT * FROM users, role WHERE idRoleF = idRole  AND email='$email' AND mdp='$mdp'";
    return $db->query($req)->fetch();
}

function addUser($nom,$prenom,$email,$mdp,$etat,$idRoleF){
    $etat = 0;
    //$req = "INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `mdp`, `etat`, `idRoleF`) 
    //VALUES (NULL, '$nom', '$prenom', '$email', '$mdp', '$etat, '$idRoleF')";
    $req = "INSERT INTO users(nom, prenom, email, etat, mdp, idRoleF)
          VALUES ('$nom','$prenom','$email','$mdp','$etat','$idRoleF')";
    global $db;
    return $db->exec($req);
}

function getUser(){
    global $db;
    return $db->query("SELECT * FROM users")->fetchAll();
}

function getRole(){
    global $db;
    return $db->query("SELECT * FROM `role` WHERE 1")->fetchAll();
}

function getClient(){
    global $db;
    return $db->query("SELECT * FROM client")->fetchAll();
}

function addClient($nom,$chefV,$village,$adresse,$tel,$etatClient)
{
   global $db;
     $etatClient = 0;
    $req = "INSERT INTO client(nom,chefV,village,adresse,tel,etatClient)
            VALUES ('$nom','$chefV','$village','$adresse','$tel','$etatClient')";
    return $db->exec($req);
}

function getCompteur(){
    global $db;
    return $db->query("SELECT * FROM compteur")->fetchAll();
}

function genererNumeroCompteur(){  
    return 'SEN__'.'00'.recupere();
}

function recupere(){
    global $db;
    $req = "SELECT MAX(id) FROM compteur";
    $res = $db->query($req)->fetch();
    $idMax = $res[0] + 1;
    return $idMax;
}
function addCompteur($numC){
    $id = recupere();
    $req = "INSERT INTO compteur(numC)
            VALUES ('$numC')";
    global $db;
    return $db->exec($req);
}

function getAbonnement(){
    global $db;
    return $db->query("SELECT * FROM abonnement")->fetchAll();
}
function genererNumeroAbonnement(){  
    return 'ABONNEMENT__'.'00'.recupere1();
}

function recupere1(){
    global $db;
    $req = "SELECT MAX(id) FROM abonnement";
    $res = $db->query($req)->fetch();
    $idMax = $res[0] + 1;
    return $idMax;
}

function addAbonnement($numA,$dAb,$description,$idClientF,$idCompteurF)
{
   $id = recupere1();
   global $db;
    $req = "INSERT INTO abonnement(numA,date,description,idClientF,idCompteurF)
            VALUES ('$numA','$dAb','$description','$idClientF','$idCompteurF')";
    return $db->exec($req);
}

function editMdp($id,$Nmdp)
{
    global $db;
    $req = "UPDATE users SET mdp = '$Nmdp' WHERE id = $id";
    return $db->exec($req);
}

function getFacture(){
    global $db;
    return $db->query("SELECT * FROM facture")->fetchAll();
}
function genererNumeroFacture(){  
    return 'FAC__'.'00'.recupere2();
}

function recupere2(){
    global $db;
    $req = "SELECT MAX(idF) FROM facture";
    $res = $db->query($req)->fetch();
    $idMax = $res[0] + 1;
    return $idMax;
}

function addFacture($numero,$conso,$dd,$DateFin,$pu,$etatFacture,$idAbonnementF)
{
    $etatFacture = 0;
   $idF = recupere2();
   global $db;
    $req = "INSERT INTO facture(numero,consommation,date,DateFin,pu,etatFacture,idAbonnementF)
            VALUES('$numero','$conso','$dd','$DateFin','$pu','$etatFacture','$idAbonnementF')";
    
    return $db->exec($req);
}

function getFactureNonReglee(){
    global $db;
    return $db->query("SELECT * FROM facture WHERE etatFacture = 0 ")->fetchAll();
}

function updateFacture($idF)
{
    global $db;
    $req = "UPDATE facture SET etatFacture = 1 WHERE idF = $idF ";
    return $db->exec($req);
}

function addReglement($date,$idF)
{
   global $db;
    $req = "INSERT INTO reglement(date,idF)
            VALUES ('$date','$idF')";
    return $db->exec($req);
}

function getReglement(){
    global $db;
    return $db->query("SELECT * FROM reglement")->fetchAll();
}

function listeCompteurSelect(){
    global $db;
    return $db->query("SELECT * FROM compteur WHERE etatC = 0")->fetchAll();
}


function updateCompteur($idCompteurF)
{
    global $db;
    $req = "UPDATE compteur SET etatC = 1 WHERE id = $idCompteurF";
    return $db->exec($req);
}

function listeAbonnementSelect(){
    global $db;
    return $db->query("SELECT * FROM abonnement WHERE etatA = 0")->fetchAll();
}


function updateAbonement($idAbonnementF)
{
    global $db;
    $req = "UPDATE abonnement SET etatA = 1 WHERE id = $idAbonnementF";
    return $db->exec($req);
}

function updatePrice($idF)
{
    global $db;
    $req = "UPDATE facture SET pu =pu+(pu*20)/100 WHERE idF = $idF ";
    return $db->exec($req);
}
    

?>