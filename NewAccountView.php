
<?php
    session_start();
    // User already logged, redirect to his account view
    if (isset($_SESSION["id"])) {
        header("location:MyAccountView.php");
    }
?>

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
    <script src="NewAccountViewScript.js"></script>
    <title>Inscription</title>
</head>
<body>
<?php
    include("HeaderView.php");
?>
    <div class="container border p-2 my-5 w-75 shadow rounded">
        <h1 class="text-center">Création de compte</h1>
        <form action="NewAccountController.php" method="POST">
            <div class="row m-3">
                <div class="col-md">
                    <label for="lastName">Nom :</label>
                    <input name="lastName" type="text" class="form-control" placeholder="Nom" id="lastName">
                    <?php if (!empty(isset($_GET["err1"]))) { ?> <div class="text-danger"><?php echo $_GET["err1"]; ?></div> <?php }?>
                </div>
                <div class="col-md">
                    <label for="firstName">Prénom :</label>
                    <input name="firstName" type="text" class="form-control" placeholder="Prénom" id="firstName">
                    <?php if (!empty(isset($_GET["err2"]))) { ?> <div class="text-danger"><?php echo $_GET["err2"]; ?></div> <?php }?>
                </div>
            </div>
            <div class="row m-3">
                <div class="col-md">
                    <label for="address">Adresse (N° et rue) :</label>
                    <input name="address" type="text" class="form-control" placeholder="Numéro et nom de rue" id="address">
                    <?php if (!empty(isset($_GET["err3"]))) { ?> <div class="text-danger"><?php echo $_GET["err3"]; ?></div> <?php }?>
                </div>
                <div class="col-md">
                    <label for="city">Ville :</label>
                    <input name="city" type="text" class="form-control" placeholder="Ville" id="city">
                    <?php if (!empty(isset($_GET["err4"]))) { ?> <div class="text-danger"><?php echo $_GET["err4"]; ?></div> <?php }?>
                </div>
            </div>
            <div class="row m-3">
                <div class="col-md">
                    <label for="phone">Numéro de téléphone :</label>
                    <input name="phone" type="text" class="form-control" placeholder="Numéro de téléphone" id="phone">
                    <?php if (!empty(isset($_GET["err5"]))) { ?> <div class="text-danger"><?php echo $_GET["err5"]; ?></div> <?php }?>
                </div>
                <div class="col-md">
                    <label for="postalCode">Code postal :</label>
                    <input name="zipCode" type="text" class="form-control" placeholder="Code postal" id="postalCode">
                    <?php if (!empty(isset($_GET["err6"]))) { ?> <div class="text-danger"><?php echo $_GET["err6"]; ?></div> <?php }?>
                </div>
            </div>
            <div class="row m-3">
                <div class="col-md">
                    <label for="email">Adresse email:</label>
                    <input name="email" type="email" class="form-control" placeholder="Adresse email" id="email">
                    <?php if (!empty(isset($_GET["err7"]))) { ?> <div class="text-danger"><?php echo $_GET["err7"]; ?></div> <?php }?>
                </div>
                <div class="col-md">
                    <label for="emailConfirm">Confirmation adresse email :</label>
                    <input name="confirmEmail" type="email" class="form-control" placeholder="Confirmation adresse email" id="emailConfirm">
                    <?php if (!empty(isset($_GET["err8"]))) { ?> <div class="text-danger"><?php echo $_GET["err8"]; ?></div> <?php }?>
                </div>
            </div>
            <div class="row m-3">
                <div class="col-md">
                    <label for="pwd">Mot de passe :</label>
                    <input name="pwd" type="password" class="form-control" placeholder="Mot de passe" id="pwd">
                    <?php if (!empty(isset($_GET["err9"]))) { ?> <div class="text-danger"><?php echo $_GET["err9"]; ?></div> <?php }?>
                </div>
                <div class="col-md">
                    <label for="confirmPwd">Confirmation du mot de passe :</label>
                    <input name="confirmPwd" type="password" class="form-control" placeholder="Confirmation du mot de passe" id="confirmPwd">
                    <?php if (!empty(isset($_GET["err10"]))) { ?> <div class="text-danger"><?php echo $_GET["err10"]; ?></div> <?php }?>
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
