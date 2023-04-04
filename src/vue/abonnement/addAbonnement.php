<div class="container mt-5">
    <div class="col-md-10 offset-1">
        <div class="card">
            <div class="card-header blue lighten-4 text-center text-uppercase h4 font-weight-bold">
                nouvel Abonnement
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mt-2 offset-4">
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="nom" class="h5">Date d'abonnement</label>
                        </div>
                        <div class="col-md-4">
                            <input type="date" id="fname" class="form-control" name="dAb">
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="numero" class="h5">Numero</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="fname" name="numA" value="<?=$numeroAbo?>" readonly >
                        </div>
                    </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="description" class="h5">Description</label>
                        </div>
                        <div class="col-md-4">
                              <input type="text" id="fname" class="form-control" name="description">
                        </div>
                        <select name="idCl">
					<option disabled=""  selected="">selectionner un Client</option>
				    <?php  $clients = getClient();foreach ($clients as $c) { ?>
       			 <option value="<?= $c['id'] ?>"><?= $c['nom'] ?></option>
				<?php } ?>
				</select>
                <div class="col-md-4">
                        <select name="idCom">
					<option disabled=""  selected="">selectionner un Compteur</option>
				    <?php  $compteurs = listeCompteurSelect();foreach ($compteurs as $co) { ?>
       			 <option value="<?= $co['id'] ?>"><?= $co['numC'] ?></option>
				<?php } ?>
				</select>
                    
                    <div class="row">
                        <div class="col-md-4 offset-5 mt-4">
                            <input type="submit" name="addAbonnement" class="btn btn-md btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    if (isset($_POST['addAbonnement'])){
        extract($_POST);

		$dAb = $_POST['dAb'];
        $idClientF = $_POST['idCl'] ;
        $idCompteurF = $_POST['idCom'] ;
         //$idU = $idUser;
        $numA = $numeroAbo;
		$description = $_POST['description'];

         $date= $dAb;
        $date = implode('-', array_reverse(explode('/', $date)));

        if(addAbonnement($numA,$dAb,$description,$idClientF,$idCompteurF) ==1){
            updateCompteur($idCompteurF);
            
                echo '<div class="col-md-10 offset-2 blue-text mt-2">Abonnement ajoute avec succes</div>';
        }else{
            echo '<div class="col-md-10 offset-2 red-text mt-2">Erreur lors de l\'ajout</div>';
        }
    }