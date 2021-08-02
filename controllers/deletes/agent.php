<?php
 require_once('../cnx.php');


if (isset($_POST['ok'])) {

      extract($_POST);

      $id=isset($_GET['id'])?$_GET['id']:0;

      $date = date('d-m-Y H:i:s');
      $date_up = date('d-m-Y H:i:s');

      $flag= "false";

      $sql = "SELECT * FROM t_agent WHERE id_agent = '$id'";
      $resultat = $bdd->query($sql);

      $data = $resultat->fetch();

      $removedBy = $data['id_user'];

      $update = "UPDATE t_agent SET flag=? removedBy=?,updatedAt=? WHERE id_agent=?";

	  $paramsUpdate =array($flag,$removedBy,$date_up, $id); 
	  $updateAgent = $bdd->prepare($update);
	  $updateAgent->execute($paramsUpdate);


         header('location:../../views/pages/index.php?p=agent');
}
