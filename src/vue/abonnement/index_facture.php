<!-- Editable table -->
<div class="container mt-2">
<div class="col-md-4 offset-10">
    <a href="accueil.php?p=gAddFacture" class="btn aqua-gradient">Add</a>
</div>
<div class="card mt-4">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Listes Des Factures</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Numero</th>
            <th class="text-center">Consommation</th>
            <th class="text-center">Date</th>
            <th class="text-center">A payer avant</th>
            <th class="text-center">Prix a payer</th>
            <th class="text-center">Etat facture</th>
            <th class="text-center">Abonnement</th>
            <th class="text-center" colspan="2">Action</th>
          </tr>
          <?php
          foreach ($facture as $f) {
            ?>
          <tr>
             <th><?=$f['idF'] ?></th>
             <th><?=$f['numero'] ?></th>
             <th><?=$f['consommation'] ?> litres</th>
             <th><?=$f['date'] ?></th>
             <th><?=$f['DateFin'] ?></th>
             <th><?=$f['pu'] ?>FCFA</th>
             <th><?=$f['etatFacture'] ?></th>
             <th><?=$f['idAbonnementF'] ?></th>
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