<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header text-white bg-dark">
      <h5 class="modal-title" id="exampleModalLabel">FORMULAIRE AGENT</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form action="../../controllers/agent.php" method="POST">
        <div class="modal-body">
          
          <span class="text-muted">I. IDENTITE</span><hr>
            <div class="row">
              
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" autocomplete="off" required="required" autofocus name="name" placeholder="Saisissez le nom complet">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" autocomplete="off" required="required" autofocus name="prenom" placeholder="Saisissez le prénom">
                  </div>
              </div>
            </div>

  
                <div class="form-group">
                  
                  <select  class="form-control" name="sexe"> 
                    <option selected>Choisissez le sexe</option>
                    <option value="M">Masculin</option>
                    <option value="F">Féminin</option>
                  </select>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  
                    <input type="text " class="form-control" autocomplete="off" required="required" autofocus name="matricule" placeholder="Numéro matricule">
                  </div>
                </div>
                <div class="col-md-6">
                  
                  <div class="form-group">
                  
                    <input type="text" class="form-control" autocomplete="off" required="required" autofocus name="grade" placeholder="Grade de l'agent">
                  </div>
                </div>

              </div>
              

          <div class="row">
            
            <div class="col-md-6">
                <div class="form-group">
                  
                  <input type="text" class="form-control" autocomplete="off" required="required" autofocus name="acteNomination" placeholder="Acte de nomination">
                </div>

            </div>
            <div class="col-md-6">
              
              <div class="form-group">
                  
                  <input type="text" class="form-control" autocomplete="off" required="required" autofocus name="fonction" placeholder="Fonction de l'agent">
              </div>
            </div>
          </div>

          <div class="form-group">
                  
              <select  class="form-control" name="cards"> 
                    <option selected>Choisissez le type de carte</option>
                    <option value="Biométrique">Biométrique</option>
                    <option value="Récépissé">Récépissé</option>
                    <option value="Carte de Service">Carte de Service</option>
                    
                  </select>
          </div>
          <div class="form-group">
                  
                  <select  class="form-control" name="etatCivil"> 
                    <option selected>Choisissez l'état civil</option>
                    <option value="Marié">Marié</option>
                    <option value="Célibataire">Célibataire</option>
                  </select>
          </div>
        
        <div class="form-group">

            <input type="text" class="form-control" autocomplete="off" autofocus name="conjoint" placeholder="Saisissez le nom du conjoint">
        </div>

         <div class="form-group">
            
            <input type="text" class="form-control" autocomplete="off" autofocus name="datEngagement" placeholder="Saisissez la date d'engagement">
        </div>

         <div class="form-group">
            
            <input type="text" class="form-control" autocomplete="off" autofocus name="recrutement" placeholder="Saisissez le lieu de récrutement">
        </div>

        <span class="text-muted">II. ETUDES FAITES</span><hr>

        <div class="form-group">
                  
           <select  class="form-control" name="niveauEtude"> 
                    <option selected>Choisissez le niveau d'étude</option>
                    <option value="PP4">PP4</option>
                    <option value="PP5">PP5</option>
                    <option value="D6">D6</option>
                    <option value="G3">G3</option>
                    <option value="L2">L2</option>
                  </select>
          </div>

          <div class="form-group">
            
            <input type="text" class="form-control" autocomplete="off" autofocus name="obtention" placeholder="diplome obtenu">
        </div>

        <span class="text-muted">III. AUTRES FORMATIONS</span><hr>
        <div class="form-group">
          <textarea name="autreFormation" rows="4" cols="50" placeholder="Saisissez d'autres formation si possible"></textarea>
        </div>
          <div class="form-group">
            
            <input type="hidden" class="form-control" autocomplete="off" autofocus name="user"  value="<?=$id;?>" >
        </div>

 </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-outline-danger my-2 my-sm-0" data-dismiss="modal">Cancel</button>
          <button type="submit" name="ok"class="btn btn-sm btn-outline-success my-2 my-sm-0">Create</button>
        </div>
    </form>
  </div>
</div>
