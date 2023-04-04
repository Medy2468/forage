<?php
session_start();
include_once 'header.php';
?>

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand" href="#">LOGO</a>
  <?php
  if($_SESSION['idRoleF'] == "" || $_SESSION['idRoleF'] == ''){
    ?>
    <marquee direction=right><h3>BIENVENUE</h3></marquee> 
    <?php
  }
  ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="?p=gAdmin" <?= (strtolower($_SESSION['idRoleF']) == '1') ? '':'hidden' ?>>Service Admin
          <span class="sr-only">(current)</span>
        </a>
        <a class="nav-link" href="?p=gGestionClient" <?= (strtolower($_SESSION['idRoleF']) == '2') ? '':'hidden' ?>>Service Gestion clientèle
          <span class="sr-only">(current)</span>
        </a>
        <a class="nav-link" href="?p=gGestionCommercial" <?= (strtolower($_SESSION['idRoleF']) == '3') ? '':'hidden' ?>>Service Gestion commerciale
          <span class="sr-only">(current)</span>
        </a>
        <a class="nav-link" href="?p=gGestionCompteur" <?= (strtolower($_SESSION['idRoleF']) == '4') ? '':'hidden' ?>>Service Gestion compteur
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
      <a class="navbar-brand" href="#" <?= (strtolower($_SESSION['idRoleF']) == '1' || strtolower($_SESSION['idRoleF']) == '2'  || strtolower($_SESSION['idRoleF']) == '4') ? '':'hidden' ?>>A Propos</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="#" <?= (strtolower($_SESSION['idRoleF']) == '1' || strtolower($_SESSION['idRoleF']) == '2' || strtolower($_SESSION['idRoleF']) == '4') ? '':'hidden' ?>>Info</a>
      </li>
        <a class="nav-link" href="?p=gGestionFacture" <?= (strtolower($_SESSION['idRoleF']) == '3' ) ? '':'hidden' ?>>Gestion Facture 
        <span class="sr-only">(current)</span>
        </a>
      
      
        <a class="nav-link" href="?p=gGestionReglement" <?= (strtolower($_SESSION['idRoleF']) == '3' ) ? '':'hidden' ?>>Gestion Reglement 
        <span class="sr-only">(current)</span>
        </a>
    </ul>
             <!-- -->

    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
      <?php
      if(strtolower($_SESSION['idRoleF']) == '1' || strtolower($_SESSION['idRoleF']) == '2' || strtolower($_SESSION['idRoleF']) == '3' || strtolower($_SESSION['idRoleF']) == '4'){
         ?>
         <li class="nav-item">
         <h2><?= $_SESSION['nom'].' '. $_SESSION['prenom'] ?></h2>
         </li>
         <li class="nav-item">
         <a class="nav-link " href="src/controller/controller.php?Decon">Deconnexion</a>
         </li>
         <?php  
      
      }else{
        ?>
        <a class="nav-link" href="index.php">Connexion</a>
        <?php
      }
      ?>
        </a>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
</div>

<?php
include_once 'footer.php';
?>
