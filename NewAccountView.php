
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- bootstrap minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="NewAccountViewCSS.css">
    <script src="HeaderViewScript.js"></script>
    <title>Inscription</title>
</head>
<body>
<?php
    include("HeaderView.php");
?>
    <div class="container border p-2 my-5 w-75 shadow rounded">
        <h1 class="text-center">Création de compte</h1>

        <form action="">
            <div class="row m-3">
                <div class="col-md">
                    <label for="lastName">Nom :</label>
                    <input type="text" class="form-control" placeholder="Nom" id="lastName">
                </div>
                <div class="col-md">
                    <label for="firstName">Prénom :</label>
                    <input type="text" class="form-control" placeholder="Prénom" id="firstName">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-md">
                    <label for="address">Adresse (N° et rue) :</label>
                    <input type="text" class="form-control" placeholder="Numéro et nom de rue" id="address">
                </div>
                <div class="col-md">
                    <label for="city">Ville :</label>
                    <input type="text" class="form-control" placeholder="Ville" id="city">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-md">
                    <label for="email">Adresse email:</label>
                    <input type="email" class="form-control" placeholder="Adresse email" id="email">
                </div>
                <div class="col-md">
                    <label for="emailConfirm">Confirmation adresse email :</label>
                    <input type="email" class="form-control" placeholder="Confirmation adresse email" id="emailConfirm">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-md">
                    <label for="pwd">Mot de passe :</label>
                    <input type="password" class="form-control" placeholder="Mot de passe" id="pwd">
                </div>
                <div class="col-md">
                    <label for="pwdConfirm">Confirmation du mot de passe :</label>
                    <input type="password" class="form-control" placeholder="Confirmation du mot de passe" id="pwdConfirm">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-md-6">
                    <input type="submit" class="form-control btn btn-primary" value="Créer un compte">
                </div>
            </div>
        </form>

    </div>

<?php
    include("FooterView.php");
?>

</body>
</html>
