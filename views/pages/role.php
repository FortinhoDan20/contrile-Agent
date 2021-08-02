<?php 

include('../../controllers/cnx.php') ;

$sql = "SELECT * FROM t_roles";

$resultat = $bdd->query($sql);


?>



<!-----------------------------Start Modal Rôle--------------------------------------->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="role" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include ('./modals/role.php');?>
</div>
<!-----------------------------End of modal Rôle--------------------------------------->




<div class="container-fluid">
    <h1 class="mt-4">ROLE UTILISATEUR</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?p=home">Dashboard</a></li>
        <li class="breadcrumb-item active">Rôle utilisateur</li>
    </ol>
    <div class="card mb-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>Les Rôles
                <button class="btn btn-sm btn-outline-primary my-2 my-sm-0" data-toggle="modal" data-target="#role"
                    style="margin-left: 82%"><i class="fas fa-plus mr-1"></i> Ajouter </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Rôle Utilisateur</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                                     <?php 
                                            $i = 0;
                                            foreach ($resultat as $row)
                                             {
                                               $i++;
                                               ?>

                            <tr>
                                <td>
                                    <?=$i;?>
                                </td>
                                <td>
                                    <?=$row['roleName'];?>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-primary"
                                        href="index.php?p=editrole&id=<?php echo $row['id_role']?>"><span
                                            class="fas fa-edit"></span>
                                    </a> &nbsp;
                                    <a class="btn btn-danger"
                                        href="../../app/delete/deleterole.php?id=<?php echo $row['id_role']?>"><span
                                            class="fas fa-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            <?php
                                            }
                                        ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>