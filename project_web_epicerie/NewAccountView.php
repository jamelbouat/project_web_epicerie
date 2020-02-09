<?php session_start();

    // User already logged, redirect to his account view
    if (isset($_SESSION["id"])) {
        echo '<script> window.location.href = "MyAccountView.php"; </script>';
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
    include("SignUpInput.php");
?>
    <div class="container border p-2 my-5 w-75 shadow rounded">
        <h1 class="text-center">Création de compte</h1>

        <form action="NewAccountController.php" method="POST" class="needs-validation" novalidate>

            <div class="row m-3">
                <?php SignUpInputView("lastName", "err1", "Nom", "text"); ?>

                <?php SignUpInputView("firstName", "err2", "Prénom", "text"); ?>
            </div>

            <div class="row m-3">
                <?php SignUpInputView("address", "err3", "Adresse (N° et rue)", "text"); ?>

                <?php SignUpInputView("city", "err4", "Ville", "text"); ?>
            </div>

            <div class="row m-3">
                <?php SignUpInputView("phone", "err5", "Numéro de téléphone", "text"); ?>

                <?php SignUpInputView("zipCode", "err6", "Code postal", "text"); ?>
            </div>

            <div class="row m-3">
                <?php SignUpInputView("email", "err7", "Email", "email"); ?>

                <?php SignUpInputView("confirmEmail", "err8", "Confirmation email", "email"); ?>
            </div>

            <div class="row m-3">
                <?php SignUpInputView("pwd", "err9", "Mot de passe", "password"); ?>

                <?php SignUpInputView("confirmPwd", "err10", "Confirmation du mot de passe", "password"); ?>
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
