    <div class="col-md-4"></div>
    <div class="col-md-4" style="margin-top: 200px;">
        <?php 

        $flash=isset($_GET['d'])?$_GET['d']:0;

        $msg = "Impossible de se connecter à l'application ";

        if($flash == 1){ 

           echo "<div class='alert alert-danger text-center' role='alert'> $msg </div>";

        }      
            
        ?>
        <div class="card">
            <div class="card-header">
                <h1 class="h3 mb-3 font-weight-normal text-center text-white">CONNEXION</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="./controllers/login.php" class="form-signin">

                    <div class="form-group">
                        <label class="sr-only">Nom utilisateur</label>
                        <input type="text" class="form-control" name="username" required autofocus
                            placeholder="Votre nom utilisateur">
                    </div>
                    <div class="form-group">
                        <label class="sr-only">Mot de passe</label>
                        <input type="password" class="form-control" name="password" required placeholder="Votre mot de passe">
                    </div>

                    <button type="submit" class="btn btn-outline-success my-2 my-sm-0" name="ok" >
                        <i class="fa fa-lock"></i> Se Connecter</button>

                    <div class="mt-4"></div>
                    <div class="mt-4"></div>
                </form>
                <hr>

            </div>
        </div>
    </div>
    <div class="col-md-4"></div>