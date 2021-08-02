<?php 
//connexion à la base de données
include('../../controllers/cnx.php') ;

$id=isset($_GET['id'])?$_GET['id']:0;

$sql = "SELECT * FROM t_users
        LEFT JOIN t_roles ON t_roles.id_role = t_users.id_role
        WHERE t_users.id_user='$id'";

$resultat = $bdd->query($sql);

$data = $resultat->fetch();
$name =$data['name'];
$prenom =$data['prenom'];
$sexe =$data['sexe'];
$username =$data['username'];
$role =$data['roleName'];
$role_id =$data['id_role'];



?>




 <div class="container-fluid">
    <h6 class="mt-4">PROFIL UTILISATEUR</h6>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?p=home">Dashboard</a></li>
        <li class="breadcrumb-item active">Profil</li>
    </ol>

  <div class="jumbotron" id="div-id-name">
    <div>
      <div style="margin-left:150px;">
        <a class="btn btn-sm btn-outline-primary" style="width:20%" href="index.php?p=edit_user&id=<?php echo $id?>"><i class="fa fa-edit"></i> &nbsp;Modifier</a>
          <a style="width:20%" class="btn btn-sm btn-outline-secondary"
          href="dashboard.php?p=users"><i class="fa fa-cancel"></i> &nbsp;Cancel</a>
      </div>
      <div class="mt-4"></div>
        <table class="table" border='0'>
          <tr>
              <td>Nom & Postnom :</td>
              <td><?=$name?></td>
          </tr>
          <tr>
              <td>Prénom :</td>
              <td><?=$prenom?> <td>
          </tr>
          <tr>
              <td>Sexe :</td>
              <td><?=$sexe?><td>
          </tr>
          <tr>
              <td>Nom utilisateur :</td>
              <td><?=$username?><td>
          </tr>
          <tr>
              <td>Rôle utilisateur :</td>
              <td><?=$role?><td>
          </tr>
  
        </table>
    </div>
</div>