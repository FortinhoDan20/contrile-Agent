<?php 

include('../../controllers/cnx.php') ;

$sql = "SELECT * FROM t_roles";

$resultat = $bdd->query($sql);

$users = "SELECT * FROM t_users
            LEFT JOIN t_roles ON t_roles.id_role = t_users.id_role";

$userResultat = $bdd->query($users);


 $flash=isset($_GET['d'])?$_GET['d']:0;

        $msg = "Le mot de passe que vous venez de saissir n'est pas authentique. Veuillez mettre le bon mot de passe";
        $succesPaswswordChange = "Votre mot de passe a été mis à jour avec succès";

        if($flash==1){ 

           //echo "<div class='alert alert-danger text-center' role='alert'> $msg </div>";
           echo "<script type='text/javascript'>alert('$succesPaswswordChange');</script>";

        } 
        elseif($flash==2){

             echo "<script type='text/javascript'>alert('$msg');</script>";

        }  

    $requeteCount="select count(*) actif from t_controle WHERE activity='actif'";
    $resultatCount=$bdd->query($requeteCount);
    $tabCount=$resultatCount->fetch();
    $nbrActif=$tabCount['actif'];

    $requeteCountNonActif="select count(*) nonActif from t_controle WHERE activity='non actif'";
    $resultatCountA=$bdd->query($requeteCountNonActif);
    $tabCountA=$resultatCountA->fetch();
    $nbrNonActif=$tabCountA['nonActif'];

    $requeteCountDet="select count(*) det from t_controle WHERE activity='détachement'";
    $resultatCountDet=$bdd->query($requeteCountDet);
    $tabCountDet=$resultatCountDet->fetch();
    $nbrDetachement=$tabCountDet['det'];

    $requeteCountConge="select count(*) conge from t_controle WHERE activity='conge'";
    $resultatCountC=$bdd->query($requeteCountConge);
    $tabCountC=$resultatCountC->fetch();
    $nbrConge=$tabCountC['conge'];
?>



<!-----------------------------Start Modal Rôle--------------------------------------->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="users" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include ('./modals/user.php');?>
</div>
<!-----------------------------End of modal Rôle--------------------------------------->





<main class="mt-4">
    <div class="container-fluid">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Tableau de board </li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">

                    <div class="card-body">
                        <i class="fas fa-user-check fa-3x text-white"></i>
                        &nbsp;AGENT ACTIF (<?php echo $nbrActif?>)
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#" data-toggle="modal"
                            data-target="#Inscrits">View Details (<?php echo $nbrActif?>)</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <i class="fas fa-user-times fa-3x text-white"></i>
                        &nbsp;AGENT INACTIF (<?php echo $nbrNonActif?>)
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="index.php?p=list_enseignant">View Details
                            (<?php echo $nbrNonActif?>)</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <i class="fas fa-user-shield fa-3x text-white"></i>
                        &nbsp;DETACHEMENT (<?php echo $nbrDetachement?>)
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#" data-toggle="modal" data-target="#std">View
                            Details (<?php echo $nbrDetachement?>)</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">
                        <i class="fas fa-user-tag fa-3x text-white"></i>
                        &nbsp; AGENT CONGÉ (<?php echo $nbrConge?>)
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="dashboard.php?p=list_users">View Details
                            (<?php echo $nbrConge?>)</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="card mb-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>Les Utilisateurs
                    <button class="btn btn-sm btn-outline-primary my-2 my-sm-0" data-toggle="modal" data-target="#users"
                        style="margin-left: 82%"><i class="fas fa-plus mr-1"></i> Ajouter </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Noms</th>
                                    <th>Prénoms</th>
                                    <th>Nom utilisateur</th>
                                    <th>Rôle utilisateur</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                     <?php 
                                            $i = 0;

                                            foreach ($userResultat as $rows)
                                             {
                                               $i++;
                                               ?>

                            <tr>
                                <td>
                                    <?=$i;?>
                                </td>
                                <td>
                                    <?= $rows['name']?>

                                </td>
                                <td>
                                    <?= $rows['prenom']?>
                                    
                                </td>
                                <td>
                                    <?= $rows['username']?>
                                    
                                </td>
                                <td>
                                    <?= $rows['roleName']?>
                                    
                                </td>

                                  <td class="text-center">
                                    <a class="btn btn-primary"
                                        href="index.php?p=edit_user&id=<?php echo $rows['id_user']?>"><span
                                            class="fas fa-edit"></span>
                                    </a> &nbsp;
                                    <a class="btn btn-danger"
                                        href="../../controllers/deletes/user.php?id=<?php echo $rows['id_user']?>"><span
                                            class="fas fa-trash"></span>
                                    </a>
                                </td>

                            </tr>
                            <?php
                                            }
                                        ?>
                            </tbody>

                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Noms</th>
                                <th>Prénoms</th>
                                <th>Email</th>
                                <th>Rôle utilisateur</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>