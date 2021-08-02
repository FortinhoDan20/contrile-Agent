<?php
 require_once('./cnx.php');


if (isset($_POST['ok'])) {

      extract($_POST);

      $date = date('d-m-Y H:i:s');
      $date_up = date('d-m-Y H:i:s');

      $checkbox = $_POST['language'];

      $chk="";
      $status= "Controler";

      foreach ($checkbox as $checkboxSelect) {
      	
      	$chk .= $checkboxSelect. "," . " ";
      };

      $requette = "INSERT INTO t_controle(matriculeAg,activity,paiement,language,contoler,id_user,createdAt,updatedAt)value(?,?,?,?,?,?,?,?)";
      $parms = array($matricule,$activity,$paiement,$chk,$control,$id,$date,$date_up);
      $resultat = $bdd->prepare($requette);
      $resultat->execute($parms);

      $agentUpdate =" UPDATE t_agent SET status=? WHERE id_agent=?";
	$params =array($status, $agent); 
	$userUpdate = $bdd->prepare($agentUpdate);
	$userUpdate->execute($params);


      header('location:../views/pages/index.php?p=agent');
}