<?php
require_once 'header.php';
//require_once 'src/controller/controller.php';

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
    <form class="text-center" method="post" style="color: #757575;" action="src/controller/controller.php">

      <!-- Email -->
      <div class="md-form">
        <input type="text" id="materialLoginFormEmail" name="email" class="form-control">
        <label for="email">Email</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" id="materialLoginFormPassword" name="mdp" class="form-control">
        <label for="mdp">Password</label>
      </div>

      <!-- Sign in button -->
      <button class="btn btn-outline-info  btn-rounded btn-block my-4 waves-effect z-depth-0" name="connexion" type="submit">Sign in</button>

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


</div>
<!-- Material form login -->
</div>

<?php
include_once 'footer.php';
?>