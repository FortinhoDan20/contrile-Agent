<?php
 require_once('./cnx.php');


if (isset($_POST['ok'])) {

      extract($_POST);

      $date = date('d-m-Y H:i:s');
      $date_up = date('d-m-Y H:i:s');

      $passWord = sha1($password);

      $requette = "INSERT INTO t_users (name,prenom,sexe,username,password,id_role,createdAt,updatedAt)value(?,?,?,?,?,?,?,?)";
      $parms    = array($name, $prenom, $sexe, $username, $passWord, $role, $date, $date_up);
      $resultat = $bdd->prepare($requette);
      $resultat->execute($parms);
      header('location:../views/pages/index.php?p=home');
}