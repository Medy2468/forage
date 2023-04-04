<!-- Editable table -->
<div class="container mt-2">
<div class="col-md-4 offset-10">
    <a href="accueil.php?p=gAddAbonnement" class="btn aqua-gradient">Add</a>
</div>
<div class="card mt-4">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Listes Des Abonnements</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Date</th>
            <th class="text-center">Numero</th>
            <th class="text-center">Description</th>
            <th class="text-center">Client</th>
            <th class="text-center">Compteur</th>
            <th class="text-center" colspan="2">Action</th>
          </tr>
          <?php
          foreach ($abonnement as $ab) {
            ?>
          <tr>
             <th><?=$ab['id'] ?></th>
             <th><?=$ab['date'] ?></th>
             <th><?=$ab['numA'] ?></th>
             <th><?=$ab['description'] ?></th>
             <th><?=$ab['idClientF'] ?></th>
             <th><?=$ab['idCompteurF'] ?></th>
             <th clospan="2">
            <a href="#" class="btn btn-sm btn-green">Remove</a>
            <a href="#" class="btn btn-sm btn-warning">Edit</a>

            </th>

          </tr>
          <?php
          }
          ?>
        </thead>
        <tbody>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<?php

?>
<!-- Editable table -->