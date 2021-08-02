<?php 
//connexion à la base de données
include('../../controllers/cnx.php') ;

$idAg=isset($_GET['id'])?$_GET['id']:0;

$sql = "SELECT * FROM t_agent
        LEFT JOIN t_controle ON t_controle.matriculeAg = t_agent.matricule
        WHERE t_agent.id_agent='$idAg'";

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

}

// echo $data;



?>




 <div class="container-fluid">
    <h6 class="mt-4">PROFIL UTILISATEUR</h6>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?p=home">Dashboard</a></li>
        <li class="breadcrumb-item active">Fiche de controle</li>
    </ol>

  <div class="jumbotron" id="div-id-name">
    <div>
      <div style="margin-left:150px;">
         <a style="width:20%" class="btn btn-sm btn-outline-secondary"
          href="index.php?p=agent"><i class="fas fa-arrow-left"></i></i> &nbsp;Cancel</a>

        <a class="btn btn-sm btn-outline-primary" style="width:20%" href="index.php?p=editAgent&id=<?php echo $idAg?>"><i class="fa fa-edit"></i> &nbsp;Modifier</a>

          <a class="btn btn-sm btn-outline-danger" style="width:20%" href="../../controllers/deletes/agent.php?id=<?php echo $idAg?>"><i class="fas fa-trash"></i> &nbsp;Supprimer</a>

          <a style="width:20%" class="btn btn-sm btn-outline-success"
          href="../../controllers/files/fileAgent.php?id=<?php echo $idAg?>"><i class="fas fa-print"></i> &nbsp;Imprimer</a>
      </div>
      <div class="mt-4"></div>
        <table class="table" border='0'>

          <span class="text-muted">I. Identités</span><hr>

          <tr>
              <td>Numéro matricule :</td>
              <td>
                <?php 

              if(!empty($matricule)){
                echo $matricule;};
              ?>
              <td>
          </tr>
          <tr>
              <td>Nom & Postnom :</td>
              <td>
                <?php 
                if(!empty($name)){
                  echo $name;
                };
                
                ?>
                <td>
          </tr>
          <tr>
              <td>Prénom :</td>
              <td>
                <?php
                if(!empty($prenom)){
                  echo $prenom;
                };
                 
                 ?>
               <td>
          </tr>
          <tr>
              <td>Sexe :</td>
              <td>
                <?php
                if(!empty($sexe)){
                  echo $sexe;
                };
                ?>
              <td>
          </tr>
          </tr>
          <tr>
              <td>Grade :</td>
              <td>
                <?php
                if(!empty($grade)){
                  echo $grade;
                };
              ?><td>
          </tr>
          <tr>
              <td>Acte de normination :</td>
              <td>
                <?php 

                if(!empty($acteNomination)){
                    echo $acteNomination;
                };
                ?><td>
          </tr>
          <tr>
              <td>Fonction de l'agent :</td>
              <td>
                <?php 
                  if(!empty($fonctionAg)){
                    echo $fonctionAg;
                  };
                ?><td>
          </tr>
          <tr>
              <td>Etat civil :</td>
              <td>
                <?php 

                   if(!empty($etatCivil)){
                      echo $etatCivil;
                    };
                ?>
                <td>
          </tr>
          <tr>
              <td>Conjoint :</td>
              <td>

                <?php
                  if(!empty($conjoint)){
                      echo $conjoint;
                  };

                ?>
              <td>
          </tr>
          <tr>
              <td>Date d'engagement :</td>
              <td>
                <?php
                    if(!empty($datEngagement)){
                      echo $datEngagement;
                    };

                ?>
              <td>
          </tr>
          <tr>
              <td>Récrutement :</td>
              <td>

                <?php

                  if(!empty($datEngagement)){
                    echo $datEngagement;
                  };

                ?>
              <td>
          </tr>
          <tr>
              <td>Niveau d'étude :</td>
              <td>

                <?php
                    if(!empty($niveauEtude)){
                      echo $niveauEtude;
                    };

                ?><td>
          </tr>
           <tr>
              <td>Titre obtenu :</td>
              <td>

                <?php

                  if(!empty($obtention)){
                    echo $obtention;
                  };

                ?>
              <td>
          </tr>
          <tr>
              <td>Autres formation :</td>
              <td>
                <?php

                  if(!empty($autreFormation)){
                    echo $autreFormation;
                  };

                ?>
              <td>
          </tr>
                    <tr>
              <td>Activité de l'agent :</td>
              <td>
                <?php

                  if(!empty($activity)){
                    echo $activity;
                  };

                ?>
              <td>
          </tr>
                    <tr>
              <td>Mode de paiement :</td>
              <td>
                <?php

                  if(!empty($paiement)){
                    echo $paiement;
                  };

                ?>
              <td>
          </tr>
                    <tr>
              <td>Langue parlée par l'agent:</td>
              <td>
                <?php

                  if(!empty($language)){
                    echo $language;
                  };

                ?>
              <td>
          </tr>
                    <tr>
              <td>Rétirer par :</td>
              <td>
                <?php

                  if(!empty($removedBy)){
                    echo $removedBy;
                  };

                ?>
              <td>
          </tr>
                    <tr>
              <td>Modifier par :</td>
              <td>
                <?php

                  if(!empty($updatedBy)){
                    echo $updatedBy;
                  };

                ?>
              <td>
          </tr>
                    <tr>
              <td>Date de création de l'agent :</td>
              <td>
                <?php

                  if(!empty($createdAt)){
                    echo $createdAt;
                  };

                ?>
              <td>
          </tr>
                    <tr>
              <td>Date de modification :</td>
              <td>
                <?php

                  if(!empty($updatedAt)){
                    echo $updatedAt;
                  };

                ?>
              <td>
          </tr>
        </table>
    </div>
</div>