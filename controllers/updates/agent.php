<?php
 require_once('../cnx.php');


if (isset($_POST['ok'])) {

      extract($_POST);

      $date = date('d-m-Y H:i:s');
      $date_up = date('d-m-Y H:i:s');

      $removedBy= 0;
      $flag= "false";
      $flags= "true"; 
      $comment= "Mise à jour";
      $comments = "";
      $updatedBy=0;

      $update =" UPDATE t_agent SET names=?, prenom=?,sexe=?,matricule=?,grade=?,acteNomination=?,fonctionAg=?,cards=?,etatCivil=?,conjoint=?,datEngagement=?,recrutement=?,niveauEtude=?,obtention=?,autreFormation=?,status=?,flag=?,removedBy=?,updatedBy=?,comment=?,updatedAt=? WHERE id_agent=?";

	$paramsUpdate =array($name,$prenom,$sexe,$matricule,$grade,$acteNomination,$fonction,$cards,$etatCivil,$conjoint,$datEngagement,$recrutement,$niveauEtude,$obtention,$autreFormation,$status,$flag,$removedBy,$updatedBy,$comment,$date_up, $idAgent); 
	$updateAgent = $bdd->prepare($update);
	$updateAgent->execute($paramsUpdate);


     $requette = "INSERT INTO t_agent (names,prenom,sexe,matricule,grade,acteNomination,fonctionAg,cards,etatCivil,conjoint,datEngagement,recrutement,niveauEtude,obtention,autreFormation,status,flag,removedBy,updatedBy,comment,id_user,createdAt,updatedAt)value(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      $parms = array($name,$prenom,$sexe,$matricule,$grade,$acteNomination,$fonction,$cards,$etatCivil,$conjoint,$datEngagement,$recrutement,$niveauEtude,$obtention,$autreFormation,$status,$flags,$removedBy,$updatedBy,$comments,$user,$date,$date_up);
      $resultat = $bdd->prepare($requette);
      $resultat->execute($parms);

      header('location:../../views/pages/index.php?p=agent');
}


