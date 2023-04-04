<div class="container mt-5">
    <div class="col-md-10 offset-1">
        <div class="card">
            <div class="card-header blue lighten-4 text-center text-uppercase h4 font-weight-bold">
                nouveau Client
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="nom" class="h5">Nom</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" id="fname" class="form-control" name="nom">
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="chefVillage" class="h5">Chef du village</label>
                        </div>
                        <div class="col-md-4">
                              <input type="text" id="fname" class="form-control" name="chefV">
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="village" class="h5">Village</label>
                        </div>
                        <div class="col-md-4">
                              <input type="text" id="fname" class="form-control" name="village">
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                            <label for="adresse" class="h5">Adresse</label>
                        </div>
                        <div class="col-md-4">
                              <input type="text" id="fname" class="form-control" name="adresse">
                        </div>
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                             <label for="tel" class="h5">Tel</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="tel" maxlength="9">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-5 mt-4">
                            <input type="submit" name="AddClient" class="btn btn-md btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    if (isset($_POST['AddClient'])){
        extract($_POST);
		
		$nom = $_POST['nom'];
		$chefV = $_POST['chefV'];
        $village = $_POST['village'];
		$tel = $_POST['tel'];
        $adresse = $_POST['adresse'];
        $etatClient = 0;


        if(addClient($nom,$chefV,$village,$adresse,$tel,$etatClient) ==1){
                echo '<div class="col-md-10 offset-2 blue-text mt-2">Client ajoute avec succes</div>';
        }else{
            echo '<div class="col-md-10 offset-2 red-text mt-2">Erreur lors de l\'ajout</div>';
        }
    }