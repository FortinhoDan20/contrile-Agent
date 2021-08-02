<?php
 require_once('./cnx.php');


if (isset($_POST['ok'])) {

      extract($_POST);

      $date = date('d-m-Y H:i:s');
      $date_up = date('d-m-Y H:i:s');

      $status= "Contrôle en attente"; 
      $removeBy=0;
      $flag= "true";
      $comment= "";

      $requette = "INSERT INTO t_agent (names,prenom,sexe,matricule,grade,acteNomination,fonctionAg,cards,etatCivil,conjoint,datEngagement,recrutement,niveauEtude,obtention,autreFormation,status,flag,removedBy,updatedBy,comment,id_user,createdAt,updatedAt)value(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      $parms = array($name,$prenom,$sexe,$matricule,$grade,$acteNomination,$fonction,$cards,$etatCivil,$conjoint,$datEngagement,$recrutement,$niveauEtude,$obtention,$autreFormation,$status,$flag,$removeBy,$updatedBy,$comment,$user,$date,$date_up);
      $resultat = $bdd->prepare($requette);
      $resultat->execute($parms);
      header('location:../views/pages/index.php?p=agent');
}