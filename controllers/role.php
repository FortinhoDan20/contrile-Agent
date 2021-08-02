    <?php
      require_once('./cnx.php');


      if(isset($_POST['ok'])){

            extract($_POST);

             $date=date('d-m-Y H:i:s');

            $requette ="INSERT INTO t_roles (roleName, date_at)value(?, ?)";
            $parms    = array($name, $date);
            $resultat = $bdd->prepare($requette);
            $resultat->execute($parms);

            header ('location:../views/pages/index.php?p=role');
      }
