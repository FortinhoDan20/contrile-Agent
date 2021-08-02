

 <div class="container-fluid">
    <h1 class="mt-4">CHANGER MOT DE PASSE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="dashboard.php?p=home">Dashboard</a></li>
        <li class="breadcrumb-item active">Changer mot de passe</li>
    </ol>
<div class="jumbotron" id="div-id-name">

  <div>
      <form method="POST" action="../../controllers/updates/changePassword.php">
        <div class="form-group ">
          <input type="hidden" class="form-control" name="id" value="<?=$id;?>" placeholder="Entrez le nom complet" autocomplete="off" required >
        </div>
    <div class="form-group">
            <label >Mot de passe actuel </label>
            <input type="password" class="form-control" name="oldPassword"  placeholder="Entrez l'ancien mot de passe" autocomplete="off" required >
          </div>
          <div class="form-group">
            <label >Mot de passe </label>
            <input type="password" class="form-control" name="newPassword" placeholder="Entrez le nouveau mot de passe" autocomplete="off" required >
          </div>

        <button type="submit" class="btn btn-outline-primary my-2 my-sm-0" name="ok" style="width:20%"><i class="fa fa-edit"></i> &nbsp;Modifier</button>

      </form>
    </div>
</div>