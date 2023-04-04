<!-- Editable table -->
<div class="container mt-2">
<div class="col-md-4 offset-10">
    <a href="accueil.php?p=gAddCompteur" class="btn aqua-gradient">Add</a>
</div>

<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Listes Des Compteurs</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Numero</th>
            <th class="text-center" colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
        foreach($compteur as $co){
            //var_dump($coffres);
            ?>
           <tr>
            <th class="text-center"><?=$co['numC'] ?></th>
            <th clospan="2">
            <a href="#" class="btn btn-sm btn-green">Detail</a>
            <a href="#" class="btn btn-sm btn-warning">Edit</a>
            </th>
          </tr>
        <?php
        }
        ?>
        
        
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

<!-- Editable table -->