<?php 

require_once('../cnx.php');

$id=isset($_GET['id'])?$_GET['id']:0;

   	$requete ="DELETE FROM t_users WHERE id_user=?";
	$params=array($id);
	$resultat=$bdd->prepare($requete);
	$resultat->execute($params);

	header ('location:../../views/pages/index.php?p=home');


			