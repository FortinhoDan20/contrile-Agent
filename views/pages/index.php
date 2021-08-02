<?php
//On demarre la session pour reconnaitre notre idUser
session_start();

if (isset($_SESSION['id'])) {

    $user = $_SESSION['name'];
    $id = $_SESSION['id'];

if (!empty($user)) { 


    include('./inc/head.php');

    include('./inc/topbar.php');

    include('./inc/sidebar.php');


    ?> 

            <div style="margin-top: 100px">
                <div class="container-fluid">

                    <div class="row" style="margin-left: 200px">
                        <div class="col-md-2"></div>
                            <div class="col-md-12">
                                <?php 

                                    include((isset($_GET['p']) ? $_GET['p'] : 'home') . '.php');

                                        $content_for_layout = ob_get_clean();

                                        echo $content_for_layout;
                                ?>
                            </div>
                        <div class="col-md-2"></div>

                    </div>

                      

                </div>

            </div>


    <?php

        include('./inc/footer.php');
     } 

}
else {

    header('location:../forbidden.php');
}

?>

