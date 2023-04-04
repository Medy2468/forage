<div class="container mt-5">
    <div class="col-md-10 offset-1">
        <div class="card">
            <div class="card-header blue lighten-4 text-center text-uppercase h4 font-weight-bold">
                nouvel utlisateur
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
                            <label for="prenom" class="h5">Prenom</label>
                        </div>
                        <div class="col-md-4">
                              <input type="text" id="fname" class="form-control" name="prenom">
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="email" class="h5">Email</label>
                        </div>
                        <div class="col-md-4">
                              <input type="email" id="fname" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                            <label for="mot de passe" class="h5">Mot de passe</label>
                        </div>
                        <div class="col-md-4">
                              <input type="password" id="fname" class="form-control" name="mdp">
                        </div>
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                             <label for="role" class="h5">Role</label>
                        </div>
                        <div class="col-md-4">
                        <select name="id">
					<option disabled=""  selected="">selectionner un Role</option>
				    <?php  $role = getRole();foreach ($role as $r) { ?>
       			 <option value="<?= $r['idRole'] ?>"><?= $r['nomRole'] ?></option>
				<?php } ?>
				</select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-5 mt-4">
                            <input type="submit" name="AddUser" class="btn btn-md btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    if (isset($_POST['AddUser'])){
        extract($_POST);
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
        $email = $_POST['email'];
		$mdp = $_POST['mdp'];
        $etat= 0;
        $idRoleF= $_POST['id'] ;
/* mail */

$to = $email;
$subject = "Mot de passe de connexion";
$body = "votre mot de passe est ".$mdp." <b>HTML</b>.";
$headers = $nom;
$headers .= "Reply-To: mnsangouisidk@groupeisi.com\r\n";
$headers .= "Return-Path: mnsangouisidk@groupeisi.com\r\n";
$headers .= "X-Mailer: PHP5\n";

        if(addUser($nom,$prenom,$email,$mdp,$etat,$idRoleF) ==1){
            mail($to,$subject,$body,$headers);
                echo '<div class="col-md-10 offset-2 blue-text mt-2">Utilisateur ajouté avec succes</div>';
        }else{
            echo '<div class="col-md-10 offset-2 red-text mt-2">Erreur lors de l\'ajout</div>';
        }
    }

  //$headers .= ‘MIME-Version: 1.0′ . "\n";
  //$headers .= ‘Content-type: text/html; charset=iso-8859-1′ . "\r\n";
 // mail($to,$subject,$body,$headers);
?>