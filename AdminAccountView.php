
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
      <!-- bootstrap minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title>Connexion admin</title>
</head>
<body>
    <div class="backward-link"><a class="text-dark" href="AllProductsView.php" title="Retour à la page produits"><- Retour à la page des produits</a></div>
    <div class="container border p-5 my-5 w-50 shadow rounded">
        <h1 class="text-center text-info">Connexion admin</h1>
        <form action="AdminAccountController.php" method="POST">
            <div class="m-3 mx-auto">
                <label for="login">Login :</label>
                <input name="login" type="text" class="form-control" id="login">
            </div>
            <div class="m-3 mx-auto">
                <label for="pwd">Mot de passe :</label>
                <input name="pwd" type="password" class="form-control" id="pwd">
            </div>
            <div class="m-3 mx-auto">
                <input type="submit" class="form-control btn btn-primary" value="Connexion">
            </div>
        </form>
        <?php if (!empty(isset($_GET["error"]))) { ?> <div class="text-danger"><?php echo $_GET["error"]; ?></div> <?php }; ?>
    </div>
</body>
</html>