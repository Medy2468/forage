<div class="container mt-5">
    <div class="col-md-10 offset-1">
        <div class="card">
            <div class="card-header blue lighten-4 text-center text-uppercase h4 font-weight-bold">
                nouveau Compteur
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mt-2 offset-4">
                        <div class="col-md-2 text-center"> 
                            <label for="numero" class="h5">Numero</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="fname" name="numC" value="<?=$numero?>" readonly >
                        </div>
                    
                    <div class="row">
                        <div class="col-md-4 offset-5 mt-4">
                            <input type="submit" name="AddCompteur" class="btn btn-md btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    if (isset($_POST['AddCompteur'])){
        extract($_POST);

		
        //$idU = $idUser;
        $numC = $numero;
        
        

        if(addCompteur($numC) == 1){
                echo '<div class="col-md-10 offset-2 blue-text mt-2">Compteur ajoute avec succes</div>';
        }else{
            echo '<div class="col-md-10 offset-2 red-text mt-2">Erreur lors de l\'ajout</div>';
        }
    }