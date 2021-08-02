<?php 

include('../../controllers/cnx.php') ;

$sql = "SELECT * FROM t_agent WHERE flag ='true'";

$resultat = $bdd->query($sql);


?>



  <!-----------------------------Start Modal Rôle--------------------------------------->
  <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="agents" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include ('./modals/agent.php');?>
  </div>
<!-----------------------------End of modal Rôle--------------------------------------->




                    <div class="container-fluid">
                        <h1 class="mt-4">NOS AGENTS </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php?p=home">Dashboard</a></li>
                            <li class="breadcrumb-item active">Agents</li>
                        </ol>
                        <div class="card mb-4">
                     <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>Le liste des tous les agents
                                <button class="btn btn-sm btn-outline-primary my-2 my-sm-0" data-toggle="modal" data-target="#agents" style="margin-left: 82%"><i class="fas fa-plus mr-1"></i> Ajouter </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Matricule</th>
                                                <th>Noms complet</th>
                                                <th>Sexe</th>
                                                <th>Grade</th>
                                                <th>Fonction</th>
                                                <th>Status</th>
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
                                    <?=$row['matricule'];?>
                                </td>
                                <td>
                                   <b> <?=$row['names'];?></br>
                                    <?=$row['prenom'];?>
                                </td>
                                <td>
                                    <?=$row['sexe'];?>
                                </td>
                                
                                <td>
                                    <?=$row['grade'];?>
                                </td>

                                <td>
                                    <?=$row['fonctionAg'];?>
                                </td>
                                <td>
                                    <?php 

                                    if($row['status'] === "controler") {
                                    ?>
                                        <span class="bg-success text-white" style="padding: 8px"><?=$row['status'];?></span> 
                                   <?php }

                                    else{ ?>

                                    <span class="bg-primary text-white" style="padding: 8px"><?=$row['status'];?></span> 

                               <?php  } ?>
                                   
                                </td>

                                <td class="text-center">
                                    <a class="btn btn-primary"
                                        href="index.php?p=controle&id=<?php echo $row['id_agent']?>"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    </a> &nbsp;
                                    <a class="btn btn-danger"
                                        href="index.php?p=view&id=<?php echo $row['id_agent']?>"><span>
                                          <i class="fas fa-eye"></i></span>
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

 