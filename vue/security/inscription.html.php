<?php
if (isset($_SESSION[$arrayErrors])){
  $arrayErrors = $_SESSION[$arrayErrors];
  unset($_SESSION[$arrayErrors]);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-5">
        <div class="row">
        <div class="col-md-8 col-sm-12 offset-md-2">
        <div class="card text-left w-100">
          <div class="card-body">
          <div class="alert alert-danger" role="alert">
              <strong>danger</strong>
            </div>
            <h4 class="card-title text-center text-primary">Formulaire</h4>
            <form action="<?=WEB_ROUTE ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="controllers" value="security" />
                <input type="hidden" name="action" value="inscription" />
                <div class="form-group">
                <label for="">NOM</label>
            <input type="text" name="nom" value=""><br/>
            <small>
            <?php echo isset($arrayErrors['nom']) ? $arrayErrors['nom'] : ''; ?>
            </small>
            <label for="">PRENOM</label>
            <input type="text" name="prenom" value=""><br/>
            <small><?php echo isset($arrayErrors['prenom']) ? $arrayErrors['prenom'] : ''; ?></small>
            <label for="">date de naissance</label>
            <input type="text" name="datenaiss" value=""><br/>
            <small>
            <?php echo isset($arrayErrors['datenaiss']) ? $arrayErrors['datenaiss'] : ''; ?>
            </small>
            <input type="radio" name="sexe" value="homme">HOMME
            <input type="radio" name="sexe" value="femme">FEMME<br/><br/>
            <small><?php echo isset($arrayErrors['sexe']) ? $arrayErrors['sexe'] : ''; ?></small>
            <label for="">login</label>
            <input type="text" name="login" value=""><br/><br/>
            <small>
            <?php echo isset($arrayErrors['login']) ? $arrayErrors['login'] : ''; ?>
            </small>
            <div>
            <label for="">Mot de passe</label>
            <input type="password" name="password" value=""><br/><br/>
            <small>
            <?php echo isset($arrayErrors['password']) ? $arrayErrors['password'] : ''; ?>
            </small>
            </div>
            <div>
            <label for="">Confirmer le mot de passe</label>
            <input type="password" name="confirmpassword" value=""><br/><br/>
            <small>
            <?php echo isset($arrayErrors['confirmpassword']) ? $arrayErrors['confirmpassword'] : ''; ?>
            </small>
            </div>
            <label for="">Avatar</label>
            <input type="file" name="avatar" value="" /><br/><br/>
            <a href="<?=WEB_ROUTE.'?controllers=security&view=connexion' ?>">Se connecter</a>
                </div>
                <div class="col-md-2 offset-md-8">
                    <button type="submit" name="inscription" class="btn btn-primary">inscription</button>
                </div>
            </form>
          </div>
        </div>
        </div>
        </div>
      </div>
      <p> <?php
            if(isset($_POST['inscription'])) {
                if(count($arrayErrors['jour'] ) == 0) {
                    $resultat = verif_mois($_POST['jour']);
                    if ($resultat) {
                       echo ($resultat);
                    }else {
                        echo ("le jour n'est pas valide");
                    }
                   
            }
        }
        ?>
        </p>
        <p>
         <?php
            if(isset($_POST['inscription'])) {
                if(count($arrayErrors['mois'] ) == 0) {
                    $rest = verif_mois($_POST['mois']);
                    if ($rest) {
                        echo ($rest);
                    }else {
                        echo ("le mois n'est pas valide");
                    }
                   
            }
        }
        ?>
        </p>
        <p>
         <?php
            if(isset($_POST['inscription'])) {
                if(count($arrayErrors['annee']) == 0) {
                    if ($_POST['annee'] > 0) {
                       
                    }else {
                        echo ("l'année n'est pas valide");
                    }
                   
            }
        }
        ?></p>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>