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
$email =$data['username'];
$role =$data['roleName'];
$role_id =$data['id_role'];

$sq = "SELECT * FROM t_roles";
$result = $bdd->query($sq);


?>




<div class="container-fluid">
    <h6 class="mt-4">FORMULAIRE DE MISE À JOUR UTILISATEUR</h6>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?p=home">Dashboard</a></li>
        <li class="breadcrumb-item active">Modification</li>
    </ol>
    <div class="jumbotron" id="div-id-name">
        <div>
            <form method="POST" action="../../controllers/updates/user.php">
                <div class="form-group ">
                    <input type="hidden" class="form-control" name="id" value="<?=$id;?>"
                        placeholder="Entrez le nom complet" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Nom & Postnom</label>
                    <input type="text" class="form-control" name="name" value="<?=$name;?>"
                        placeholder="Entrez le nom complet" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Prenom</label>
                    <input type="text" class="form-control" name="prenom" value="<?=$prenom;?>"
                        placeholder="Entrez le prénom" autocomplete="off" required>
                </div>



                <div class="form-group ">
                    <label>Sexe</label>
                    <select name="sexe" class="form-control">
                        <option value="<?=$sexe;?>" selected><?=$sexe;?> </option>
                        <option value="M">Masculin</option>
                        <option value="F">Féminin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="username" value="<?=$email;?>"
                        placeholder="Entrez le nom utilisateur" autocomplete="off" required>
                </div>
                <div class="form-group">

                    <input type="text" disabled class="form-control" name="prenom"
                        value="Rôle de l'utilisateur ( <?=$role;?> )" placeholder="Entrez le prénom" autocomplete="off"
                        required>
                </div>
                <div class="form-group">

                    <select class="form-control" name="role">
                        <option value="<?=$role_id?>" selected><?=$role?></option>
                        <?php 

                      foreach ($result as $role) {?>
                        <option value="<?=$role['idrole'];?>"><?=$role['roleName'];?></option>

                        <?php
                      }
                    ?>

                    </select>
                </div>


                <button type="submit" class="btn btn-outline-primary my-2 my-sm-0" name="ok" style="width:20%"><i
                        class="fa fa-edit"></i> &nbsp;Modifier</button>

            </form>
        </div>
    </div>