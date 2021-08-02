<?php 
//connexion à la base de données
include('../../controllers/cnx.php') ;


$id=isset($_GET['id'])?$_GET['id']:0;

$sql = "SELECT * FROM t_roles
        WHERE t_roles.id_role='$id'";

$resultat = $bdd->query($sql);

$data = $resultat->fetch();
$role =$data['name'];


?>




 <div class="container-fluid">
    <h4 class="mt-4">MODIFICATION RÔLE </h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?p=home">Dashboard</a></li>
        <li class="breadcrumb-item active">Modification de Rôle</li>
    </ol>
<div class="jumbotron" id="div-id-name">
	    <div>
        <form action="../../controllers/updates/role.php" method="POST">  
        <div class="modal-body">
        <div class="form-group">
                  
                  <input type="hidden" class="form-control" value="<?=$id?>" autocomplete="off" required="required" autofocus name="id" placeholder="Entrez le rôle utilisateur">
              </div>
          
              <div class="form-group">
                  
                  <input type="text" class="form-control" value="<?=$role?>" autocomplete="off" required="required" autofocus name="role" placeholder="Entrez le rôle utilisateur">
              </div>
            



        <button type="submit" class="btn btn-outline-primary my-2 my-sm-0" name="ok" style="width:20%"><i class="fa fa-edit"></i> &nbsp;Modifier</button>

      </form>
    </div>
</div>