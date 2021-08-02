
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header text-white bg-dark">
      <h5 class="modal-title" id="exampleModalLabel">FORMULAIRE UTILISATEUR</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form action="../../controllers/user.php" method="POST">
        <div class="modal-body">
          
              <div class="form-group">
   
                  <input type="text" class="form-control" autocomplete="off" required="required" autofocus name="name" placeholder="Saisissez le nom">
              </div>
              <div class="form-group">
                  
                  <input type="text" class="form-control" autocomplete="off" required="required" autofocus name="prenom" placeholder="Saisissez le prénom">
              </div>
                <div class="form-group">
                  
                  <select  class="form-control" name="sexe"> 
                    <option selected>Choisissez le sexe</option>
                    <option value="M">Masculin</option>
                    <option value="F">Féminin</option>
                  </select>
              </div>
              <div class="form-group">
                  
                  <input type="username" class="form-control" autocomplete="off" required="required" autofocus name="username" placeholder="Saisissez le nom utilisateur">
              </div>
              <div class="form-group">
                  
                  <input type="password" class="form-control" autocomplete="off" required="required" autofocus name="password" placeholder="Saisissez le mot de passe">
              </div>
              <div class="form-group">
                  
                  <select  class="form-control" name="role">
                    <option selected>Choisissez le rôle</option>
                    <?php 

                      foreach ($resultat as $role) {?>
                        <option value="<?=$role['id_role'];?>"><?=$role['roleName'];?></option>

                      <?php
                      }
                    ?>
                   
                  </select>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-outline-danger my-2 my-sm-0" data-dismiss="modal">Cancel</button>
          <button type="submit" name="ok"class="btn btn-sm btn-outline-success my-2 my-sm-0">Create</button>
        </div>
    </form>
  </div>
</div>
