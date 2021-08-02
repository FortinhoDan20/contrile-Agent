<?php 
session_start();
//connexion à la base de données
require_once('../cnx.php');

$user = $_SESSION['name'];

$id=isset($_GET['id'])?$_GET['id']:0;

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
$controler = $data['contoler'];

}

// echo $data;


?>

<style>
    @media print{
        #imp{
            display: none;
        }
    }
</style>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <title>FICHE DE CONTROLE DU PERSONNEL ADMINISTRATIF</title>
  </head>
  <body>
    <div class="container"> 
    	     <div class="mt-4"></div>
           <div class="row">
             
             <div class="col-md-3"></div>
             <div class="col-md-6">
                     <h5 class="text-center" style="font-size: 11px">REPUBLIQUE DEMOCRATIQUE DU CONGO</h5>
        <h5 class="text-center"style="font-size: 11px" >MINISTERE DE L’INTERIEUR, SECURITE, DECENTRALISATION ET AFFAIRES COUTUMIERES</h5>
        <h6 class="text-center" style="font-size: 11px">POLICE NATIONALE CONGOLAISE INSPECTION GENERALE</h6>
        <img src="../../views/css/img/pnc.jpeg" alt="Logo université" width="60px" style="margin-left:250px">
         <div class="mt-4"></div>
          <h6 class="text-center" style="font-size: 11px">COORDINATION MISSIONS TECHNIQUES </h6>
      <h6 class="text-center"  style="border-bottom: solid 6px #000" style="font-size: 10px">FICHE DE CONTROLE DU PERSONNEL ADMINISTRATIF</h6>
        <br>

    <button type="submit" id="imp" style="margin-left: 72%" class="btn btn-success" onclick='window.print();return false;'><i class="fa fa-print"></i> Imprimer</button>

     <div class="card-body">
        <div class="table-responsive"  width="100%">

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
              <tr>
                  <td>Contrôler :</td>
                  <td>

                    <?php

                      if(!empty($controler)){
                        echo $controler;
                      };

                    ?>
                  <td>
              </tr>

              <tr>
                  <td>Date de contrôle :</td>
                  <td>
                    <?php
                        if(!empty($datEngagement)){
                          echo $datEngagement;
                        };

                    ?>
                  <td>
              </tr>



        </table> <hr>
        <br><br>
        <table class="table" >
          <tr>
                  <td style="font-size: 11px"><u>SIGNATURE DU CONTROLE</u> <br>
                     <span>
                      <?php
                        if(!empty($name)){
                          echo $name;
                        };

                      ?>
                  </td>
                  <td></td><td></td>
                  <td style="font-size: 11px">
                    <u> NOM ET SIGNATURE DU CONTROLEUR</u> <br>
                     <span>
                      <?php
                        if(!empty($user)){
                          echo $user;
                        };

                    ?></span>
                  <td>
              </tr>
        </table>
        </div>
    </div>

             </div>
             <div class="col-md-3"></div>

           </div>

  
   	</div>

</body>
</html>
