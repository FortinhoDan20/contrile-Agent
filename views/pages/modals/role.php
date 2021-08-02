
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header text-white bg-dark">
      <h5 class="modal-title" id="exampleModalLabel">FORMULAIRE RÔLE UTILISATEUR</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form action="../../controllers/role.php" method="POST">  
        <div class="modal-body">
          
              <div class="form-group">
                  
                  <input type="text" class="form-control" autocomplete="off" required="required" autofocus name="name" placeholder="Entrez le rôle utilisateur">
              </div>
            
     
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-outline-danger my-2 my-sm-0" data-dismiss="modal">Cancel</button>
          <button type="submit" name="ok"class="btn btn-sm btn-outline-success my-2 my-sm-0">Create</button>
        </div>
    </form>
  </div>
</div>
