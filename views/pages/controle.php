<?php 
//connexion à la base de données
include('../../controllers/cnx.php') ;


$idAgent=isset($_GET['id'])?$_GET['id']:0;

$sql = "SELECT * FROM t_agent
        WHERE t_agent.id_agent='$idAgent'";

$resultat = $bdd->query($sql);
$data = $resultat->fetch();
$matricule =$data['matricule'];


?>

          <h6 class="mt-4">FICHE DE CONTROLE DU PERSONNEL ADMINISTRATIF</h6>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php?p=home">Dashboard</a></li>
                <li class="breadcrumb-item active">Contrôle du personnel administratif</li>
            </ol>
    <div class="jumbotron" id="div-id-name">
        <div>
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                
                <form method="POST" action="../../controllers/controle.php">
                <div class="form-group ">
                    <input type="hidden" class="form-control" name="agent" value="<?=$idAgent;?>"required>
                </div>
                <div class="form-group ">
                    <input type="hidden" class="form-control" name="matricule" value="<?=$matricule;?>"required>
                </div>
                <div class="form-group ">
                    <input type="hidden" class="form-control" name="id" value="<?=$id;?>" required>
                </div>
                  <span class="text-muted"> SITUATION ADMINISTRATIVE</span><hr>

                <div class="form-group">
                    
                  <select  class="form-control" name="activity"> 
                      <option selected>Choisissez l'activité de l'agent</option>
                      <option value="actif">Actif</option>
                      <option value="non actif">Non Actif</option>
                      <option value="détachement">Détachement</option>
                      <option value="hors cadre">Hors cadre</option>
                      <option value="permis">Permission</option>
                      <option value="congé">Congé</option>
                      <option value="captivité">Captivité</option>
                      <option value="detention préventive">Détention Préventive</option>
                      <option value="misiion officielle">Mission Officielle</option>
                      <option value="voyage ou séjour d’études">Voyage ou Séjour d’études</option>
                  </select>
                </div>


                <div class="form-group">
                      
                    <select  class="form-control" name="paiement"> 
                        <option selected>Choisissez le mode de paiement</option>
                        <option value="banque">Banque</option>
                        <option value="manuel">Manuel</option>
                        <option value="non payé">Non payé</option>
                    </select>
                </div>

                <div class="form-group">
                    <fieldset id="coordonnees">
                        <legend class="text-muted">langue parlée:</legend>
                        <div class="row">
                          <div class="col-md-6">
                            <input type="checkbox" name="language[ ]" value="Français"><span class="text-muted">Français</span><br/>
                            <input type="checkbox" name="language[ ]" value="Lingala"><span class="text-muted">Lingala</span><br/>
                            <input type="checkbox" name="language[ ]" value="Swahili"><span class="text-muted">Swahili</span><br/> 
                            
                          </div>
                          <div class="col-md-6">
                            <input type="checkbox" name="language[ ]" value="Tshiluba"><span class="text-muted">Tshiluba</span><br/>  
                            <input type="checkbox" name="language[ ]" value="Kikongo"><span class="text-muted"> Kikongo</span><br/>
                          </div>

                        </div>
                    </fieldset>   
                </div>

                <div class="form-group ">
                    <input type="text" class="form-control" name="control""
                        placeholder="Entrez un commentaire sur le rapport" autocomplete="off" required>
                </div>

                <button type="submit" class="btn btn-outline-success my-2 my-sm-0" name="ok"><i
                        class="fa fa-edit"></i> &nbsp;Enregistrer</button>

            </form>

              </div>
              <div class="col-md-3"></div>
            </div>
        </div>
    </div>

