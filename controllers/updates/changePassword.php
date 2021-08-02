<?php
require_once('../cnx.php');

if(isset($_POST['ok']))
{
  extract($_POST);

  	$id=isset($_GET['id'])?$_GET['id']:0;

  	$oldPassword = sha1($password);
  	$newPassword = sha1($newPassword);

  	$sql = "SELECT * FROM t_users
        WHERE t_users.id_user='$id'";

  	$resultat = $bdd->query($sql);

  	$date=date('d-m-Y H:i:s'); 

  	$password= $data['password'];

  		if($oldPassword = $password ) {

		  	$requete =" UPDATE t_roles SET password=? WHERE d_user=?";
		  	$params =array($newPassword, $id); 
		  	$resultat = $bdd->prepare($requete);
		  	$resultat->execute($params);


		  	header ('location:../../views/pages/index.php?p=home&d=1');

  		}else {

  			header ('location:../../views/pages/index.php?p=home&d=2');

  		}


}
