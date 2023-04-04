<div class="container mt-5">
    <div class="col-md-10 offset-1">
        <div class="card">
            <div class="card-header blue lighten-4 text-center text-uppercase h4 font-weight-bold">
                Faire un reglement
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mt-2 offset-4">
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="date" class="h5">Date</label>
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="fname" name="dd">
                        </div>
                        <select name="idR">
					<option disabled=""  selected="">selectionner une facture</option>
				    <?php  $regle = getFactureNonReglee();foreach ($regle as $re) { ?>
       			 <option value="<?= $re['idF'] ?>"><?= $re['numero'] ?></option>
				<?php } ?>
				</select>
                    
                    <div class="row">
                        <div class="col-md-4 offset-5 mt-4">
                            <input type="submit" name="addReglement" class="btn btn-md btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    if (isset($_POST['addReglement'])){
        extract($_POST);

		$dd = $_POST['dd'];
        $idF = $_POST['idR'] ;
        $date = $dd;
        $date = implode('-', array_reverse(explode('/', $date)));
        //$etat =0;
       // $DateFin = getFacture();
        
        $reglement = addReglement($date,$idF);
        //$DateFin["DateFin"];
        if($reglement == 1){
            //var_dump($re['DateFin']);
            updateFacture($idF);
            //die();
                echo '<div class="col-md-10 offset-2 blue-text mt-2">Reglement ajoute avec succes</div>';
                if($date > $re['DateFin']){
                    updatePrice($idF);
                }
        }else{
            echo '<div class="col-md-10 offset-2 red-text mt-2">Erreur lors de l\'ajout</div>';
    }

    
}