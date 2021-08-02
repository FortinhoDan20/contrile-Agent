<?php 
//connexion à la base de données
include('../../controllers/cnx.php') ;

$idAgent=isset($_GET['id'])?$_GET['id']:0;

$sql = "SELECT * FROM t_agent
        LEFT JOIN t_controle ON t_controle.matriculeAg = t_agent.matricule
        WHERE t_agent.id_agent='$id'";

$resultat = $bdd->query($sql);

$data = $resultat->fetch();

if(!empty($data)) {

$name =$data['names'];
$prenom =$data['prenom'];
$sexe =$data['sexe'];
$matricule =$data['matricule'];
$grade =$data['grade'];
$acteNomination= $data['acteNomination'];
$fonctionAg = $data['fonctionAg'];
$cards = $data['cards'];
$etatCivil = $data['etatCivil'];
$conjoint= $data['conjoint'];
$datEngagement= $data['datEngagement'];
$recrutement= $data['recrutement'];
$niveauEtude= $data['niveauEtude'];
$obtention= $data['obtention'];
$autreFormation= $data['autreFormation'];
$activity= $data['activity'];
$paiement = $data['paiement'];
$language= $data['language'];
$removedBy= $data['removedBy'];
$updatedBy= $data['updatedBy'];
$createdAt= $data['createdAt'];
$updatedAt= $data['updatedAt'];
$status= $data['status'];

}
?>

<div class="container-fluid">
    <h6 class="mt-4">MISE À JOUR DE L'AGENT</h6>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?p=home">Dashboard</a></li>
        <li class="breadcrumb-item active">Modification</li>
    </ol>
    <div class="jumbotron" id="div-id-name">
        <div>
            <form method="POST" action="../../controllers/updates/agent.php">
                          <span class="text-muted">I. IDENTITE</span><hr>
            <div class="form-group">
                    <input type="hidden" class="form-control" autocomplete="off" required="required" autofocus name="idAgent" value="<?=$idAgent?>" placeholder="Saisissez le nom complet">
            </div>

            <div class="row">
            <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" autocomplete="off" required="required" autofocus name="name" value="<?=$name?>" placeholder="Saisissez le nom complet">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" autocomplete="off" required="required" autofocus name="prenom" value="<?=$prenom?>" placeholder="Saisissez le prénom">
                  </div>
              </div>
            </div>

  
                <div class="form-group">
                  
                  <select  class="form-control" name="sexe"> 
                    <option selected value="<?=$sexe?>"><?= $sexe ?></option>
                    <option value="M">Masculin</option>
                    <option value="F">Féminin</option>
                  </select>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  
                    <input type="text " class="form-control" autocomplete="off" required="required" autofocus name="matricule" value="<?=$matricule?>" placeholder="Numéro matricule">
                  </div>
                </div>
                <div class="col-md-6">
                  
                  <div class="form-group">
                  
                    <input type="text" class="form-control" autocomplete="off" required="required" autofocus name="grade" value="<?=$grade?>" placeholder="Grade de l'agent">
                  </div>
                </div>

              </div>
              

          <div class="row">
            
            <div class="col-md-6">
                <div class="form-group">
                  
                  <input type="text" class="form-control" autocomplete="off" required="required" autofocus name="acteNomination" value="<?=$acteNomination?>" placeholder="Acte de nomination">
                </div>

            </div>
            <div class="col-md-6">
              
              <div class="form-group">
                  
                  <input type="text" class="form-control" autocomplete="off" required="required" autofocus name="fonction" value="<?=$fonctionAg?>" placeholder="Fonction de l'agent">
              </div>
            </div>
          </div>

          <div class="form-group">
                  
              <select  class="form-control" name="cards"> 
                    <option selected value="<?=$cards?>"><?=$cards?></option>
                    <option value="Biométrique">Biométrique</option>
                    <option value="Récépissé">Récépissé</option>
                    <option value="Carte de Service">Carte de Service</option>
                    
                  </select>
          </div>
          <div class="form-group">
                  
                  <select  class="form-control" name="etatCivil"> 
                    <option selected value="<?=$etatCivil?>"><?=$etatCivil?></option>
                    <option value="Marié">Marié</option>
                    <option value="Célibataire">Célibataire</option>
                  </select>
          </div>
        
        <div class="form-group">

            <input type="text" class="form-control" autocomplete="off" value="<?=$conjoint?>" autofocus name="conjoint" placeholder="Saisissez le nom du conjoint">
        </div>

         <div class="form-group">
            
            <input type="text" class="form-control" autocomplete="off" value="<?=$datEngagement?>" autofocus name="datEngagement" placeholder="Saisissez la date d'engagement">
        </div>

         <div class="form-group">
            
            <input type="text" class="form-control" autocomplete="off" value="<?=$recrutement?>" autofocus name="recrutement" placeholder="Saisissez le lieu de récrutement">
        </div>

        <span class="text-muted">II. ETUDES FAITES</span><hr>

        <div class="form-group">
                  
           <select  class="form-control" name="niveauEtude"> 
                    <option selected value="<?=$niveauEtude?>"><?= $niveauEtude?></option>
                    <option value="PP4">PP4</option>
                    <option value="PP5">PP5</option>
                    <option value="D6">D6</option>
                    <option value="G3">G3</option>
                    <option value="L2">L2</option>
                  </select>
          </div>

          <div class="form-group">
            
            <input type="text" class="form-control" autocomplete="off" value="<?=$obtention?>"  autofocus name="obtention" placeholder="diplome obtenu">
        </div>

        <span class="text-muted">III. AUTRES FORMATIONS</span><hr>
        <div class="form-group">
          <textarea name="autreFormation" rows="4" cols="50" value="<?=$autreFormation?>" placeholder="Saisissez d'autres formation si possible"> <?=$autreFormation?> </textarea>
        </div>
          <div class="form-group">
            
            <input type="hidden" class="form-control" autocomplete="off" autofocus name="user"  value="<?=$id;?>" >
        </div>
        <div class="form-group">
            
            <input type="hidden" class="form-control" autocomplete="off" autofocus name="updatedBy"  value="<?=$id;?>" >
        </div>
                <div class="form-group">
            
            <input type="hidden" class="form-control" autocomplete="off" autofocus name="status"  value="<?=$status;?>" >
        </div>


                <button type="submit" class="btn btn-outline-primary my-2 my-sm-0" name="ok" style="width:20%"><i
                        class="fa fa-edit"></i> &nbsp;Modifier</button>

            </form>
        </div>
    </div>