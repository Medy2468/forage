<?php
session_start();
require_once 'header.php';
require_once 'src/models/user.php';
?>

<?PHP
/* if (isset($_POST['valider'])) {
    extract($_POST);
  
    $Amdp = $_POST['Amdp'];
    $Nmdp = $_POST['Nmdp'];
    $Cmdp = $_POST['Cmdp'];
    //$mdp = $_SESSION['mdp'];

    //$errors = array();
$edit = editMdp($id, $Nmdp);
  
    if ($Amdp != $_SESSION['mdp']) {
     echo "Confirmation incorrecte";
    }
    if ($Nmdp == $Amdp) {
      echo "Erreur du nouveau mot de passe";
    if ($Cmdp != $Nmdp) {
      echo "Erreur de confirmation";
    }
    if ($Amdp == $_SESSION['mdp'] && $Nmdp != $Amdp && $Cmdp == $Nmdp) {
      $id = $_SESSION['id'];
      if ($edit != NULL) {
        header("location: accueil.php");
      }
    }
  }
} */

if (isset($_POST['valider'])) {
  extract($_POST);

  $Amdp = $_POST['Amdp'];
  $Nmdp = $_POST['Nmdp'];
  $Cmdp = $_POST['Cmdp'];

  $errors = array();

  if ($Amdp != $_SESSION['mdp']) {
    array_push($errors, '<div class="h6 text-danger text-center container col-md-6"> Confirmation incorecte </div>');
  }
  if ($Nmdp == $Amdp) {
    array_push($errors, '<div class="h6 text-danger text-center container col-md-6">erreur votre nouveau mot de passe doit etre different de l\'ancien</div>');
  }
  if ($Cmdp != $Nmdp) {
    array_push($errors, '<div class="h6 text-danger text-center container col-md-6"> erreur votre confirmation ne correspont pas </div>');
  }
  if ($Amdp == $_SESSION['mdp'] && $Nmdp != $Amdp && $Cmdp == $Nmdp) {
    $id = $_SESSION['id'];
    if (editMdp($id, $Nmdp) == 1) {
      header("location:accueil.php");
    }
  }
}
?>


<div class="container">

<!-- Material form login -->
<div class="card col-md-4 offset-4 mt-4">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Sign in</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" method="post" style="color: #757575;" action="">

      <!-- Old Password -->
      <div class="md-form">
        <input type="password" id="materialLoginFormPassword" name="Amdp" class="form-control">
        <label for="materialLoginFormPassword">Ancien mot de passe</label>
      </div>

      <!-- new Password -->
      <div class="md-form">
        <input type="password" id="materialLoginFormPassword" name="Nmdp" class="form-control">
        <label for="materialLoginFormPassword">Nouveau mot de passe</label>
      </div>

      <!-- confirmation new Password -->
      <div class="md-form">
        <input type="password" id="materialLoginFormPassword" name="Cmdp" class="form-control">
        <label for="materialLoginFormPassword">Confirmation mot de passe</label>
      </div>

      <!-- Sign in button -->
      <button class="btn btn-outline-info  btn-rounded btn-block my-4 waves-effect z-depth-0" name="valider" type="submit">Sign in</button>

      <a type="button" class="btn-floating btn-tw btn-sm">
        <i class="fab fa-twitter"></i>
      </a>
      <a type="button" class="btn-floating btn-li btn-sm">
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a type="button" class="btn-floating btn-git btn-sm">
        <i class="fab fa-github"></i>
      </a>

    </form>
    <!-- Form -->


    <?php
        if (!empty($errors)) : ?>
          <?php foreach ($errors as $error) : ?>
            <p><?= $error ?></p>
            <?php endforeach; ?>
            <?php endif; ?>

  </div>

</div>
<!-- Material form login -->
</div>

<?php
include_once 'footer.php';
?>