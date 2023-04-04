<div class="container mt-5">
    <div class="col-md-10 offset-1">
        <div class="card">
            <div class="card-header blue lighten-4 text-center text-uppercase h4 font-weight-bold">
                nouvelle Facture
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mt-2 offset-4">
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="numero" class="h5">Numero</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="fname" name="numero" value="<?=$numeroFac?>" readonly >
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="consommation" class="h5">Consommation</label>
                        </div>
                        <div class="col-md-4">
                              <input type="text" id="fname" class="form-control" name="consommation">
                        </div>
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="date" class="h5">Date </label>
                        </div>
                        <div class="col-md-4">
                            <input type="date" id="fname" class="form-control" name="dd">
                        </div>
                       
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="date" class="h5">Date Fin </label>
                        </div>
                        <div class="col-md-4">
                            <input type="date" id="fname" class="form-control" readonly name="DateFin">
                        </div>
                       
                    </div>
                        <select name="idAb">
					<option disabled=""  selected="">selectionner un abonnement</option>
				    <?php  $abon = listeAbonnementSelect();foreach ($abon as $a) { ?>
       			 <option value="<?= $a['id'] ?>"><?= $a['numA'] ?></option>
				<?php } ?>
				</select>
                    
                    <div class="row">
                        <div class="col-md-4 offset-5 mt-4">
                            <input type="submit" name="addFacture" class="btn btn-md btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    if (isset($_POST['addFacture'])){
        extract($_POST);

		$dd = $_POST['dd'];
		$d = 20;
		$conso = $_POST['consommation'];
        //$idU = $idUser;
        $numero = $numeroFac;
        $idAbonnementF = $_POST['idAb'] ;
        $date = $dd;
        $date = implode('-', array_reverse(explode('/', $date)));
        $date_fin = date('Y-m-d', strtotime($date.' + '.$d.'day'));
        $DateFin = $date_fin; 
        $pu = $conso*130;
        $etatFacture = 0;


        if(addFacture($numero,$conso,$dd,$DateFin,$pu,$etatFacture,$idAbonnementF) == 1){
            updateAbonement($idAbonnementF);
            
                echo '<div class="col-md-10 offset-2 blue-text mt-2">Facture ajoute avec succes</div>';
        }else{
            echo '<div class="col-md-10 offset-2 red-text mt-2">Erreur lors de l\'ajout</div>';
        }
    }