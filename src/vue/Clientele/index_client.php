<!-- Editable table -->
<div class="container mt-2">
<div class="col-md-4 offset-10">
    <a href="accueil.php?p=gAddClient" class="btn aqua-gradient">Add</a>
</div>
<div class="card mt-4">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Listes Des Clients</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Nom</th>
            <th class="text-center">Chef du village</th>
            <th class="text-center">Village</th>
            <th class="text-center">Adresse</th>
            <th class="text-center">Téléphone</th>
            <th class="text-center">Etat</th>
            <th class="text-center" colspan="2">Action</th>
          </tr>
          <?php
          foreach ($client as $c) {
            ?>
          <tr>
             <th><?=$c['id'] ?></th>
             <th><?=$c['nom'] ?></th>
             <th><?=$c['chefV'] ?></th>
             <th><?=$c['village'] ?></th>
             <th><?=$c['tel'] ?></th>
             <th><?=$c['adresse'] ?></th>
             <th><?=$c['etatClient'] ?></th>
             <th clospan="2">
            <a href="#" class="btn btn-sm btn-green">S'abonner</a>

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