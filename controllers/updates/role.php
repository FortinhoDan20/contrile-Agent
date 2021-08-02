<?php
require_once('../cnx.php');

if(isset($_POST['ok']))
{
  extract($_POST);



  $date=date('d-m-Y H:i:s'); 

  $requete =" UPDATE t_roles SET roleName=? WHERE id_role=?";
  $params =array($role, $id); 
  $resultat = $bdd->prepare($requete);
  $resultat->execute($params);


  header ('location:../../views/pages/index.php?p=home');
}
