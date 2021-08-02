<?php
session_start();
  require_once('./cnx.php');

if (isset($_POST['ok'])){
  
            extract($_POST);


            $pass = sha1($password);

            if(!empty('$username') and !empty('password'))
                {

                  $sql = "SELECT * FROM t_users
                    LEFT JOIN t_roles ON t_roles.id_role = t_users.id_role

                    WHERE t_users.username='$username' AND t_users.password='$pass'";

                  $resultat = $bdd->query($sql);

                  $req=$resultat->rowCount();

                    if ($req > 0 )
                        {

                          foreach ($resultat as $data)
                          {

                            $_SESSION['id'] = $data['id_user']; 
                            $_SESSION['name'] = $data['name'];
                            $_SESSION['role'] = $data['roleName'];


                            if($_SESSION["role"] == "admin"){

                              header("Location:../views/pages/index.php");
                            }
                            else {
                              
                              header("Location:../views/pages/user/index.php");
                            }
                            
                          }

                      }
                      else
                      {   
                                header("Location:../index.php?d=1"); 
                      }
                }

}