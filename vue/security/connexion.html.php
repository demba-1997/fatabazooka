<?php
if (isset($_SESSION['arrayError'])){
  $arrayErrors = $_SESSION['arrayError'];
  unset($_SESSION['arrayError']);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="it.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="body">
  <script src="ht.js"></script>
    <div><h4 id="autotext">BIENVENUE SUR LE PLATEFORME</h4></div>
    <div class="container mt-5">
        <div class="row">
        <div class="col-md-8 col-sm-12 offset-md-2">
        <div class="card text-left w-100">
          <div class="card-body">
            <h4 class="card-title text-center text-primary">Formulaire</h4>
            <div class="alert alert-danger" role="alert">
              <strong>danger</strong>
            </div>
            <form action="<?=WEB_ROUTE ?>" method="POST">
            <input type="hidden" name="controllers" value="security" />
        <input type="hidden" name="action" value="connexion" />
                <div class="form-group">
                    <label for="">login</label>
                    <input type="text" name="login" class="form-control">
                    <small>
                    <?php echo isset($arrayErrors['login']) ? $arrayErrors['login'] : ''; ?>
                    </small>
                </div>
                <div class="form-group">
                    <label for="">MOT DE PASS</label>
                    <input type="text" name="password" class="form-control">
                    <small>
                    <?php echo isset($arrayErrors['password']) ? $arrayErrors['password'] : ''; ?>
                    </small>
                </div>
                <a href="<?=WEB_ROUTE.'?controllers=security&view=inscription' ?>">S'inscrire en tant que joueur</a>
                <div class="col-md-2 offset-md-8">
                    <button type="submit" name="connexion" class="btn btn-primary">Connexion</button>
                </div>
            </form>
          </div>
        </div>
        </div>
        </div>
      </div>
      
      
      
     
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
  </body>
</html>