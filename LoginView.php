
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

    <link rel="stylesheet" type="text/css" href="LoginViewCSS.css">
    <script src="LoginViewScript.js"></script>
    <title>Connexion</title>
</head>
<body>
<?php
    include("HeaderView.php");
?>
    <div class="container border p-5 w-50 shadow rounded">
        <h1 class="text-center">Connexion</h1>
        <?php if (!isset($_SESSION["id"]) && isset($_SESSION["successMessage"])) { ?><h5 class="text-success text-center"><?php echo $_SESSION["successMessage"]; ?></h5><?php } ;?>
        <form action="LoginController.php" method="POST">
            <div class="m-3 mx-auto">
                <label for="email">Email :</label>
                <input name="email" type="text" class="form-control" placeholder="Email" id="email">
            </div>
            <div class="m-3 mx-auto">
                <label for="pwd">Mot de passe :</label>
                <input name="pwd" type="password" class="form-control" placeholder="Mot de passe" id="pwd">
            </div>
            <div class="m-3 mx-auto">
                <input type="submit" class="form-control btn btn-primary" value="Connexion">
            </div>
        </form>
        <?php if (!empty(isset($_GET["err"]))) { ?> <div class="text-danger"><?php echo $_GET["err"]; ?></div> <?php }; ?>
    </div>
<?php
    include("FooterView.php");
    unset($_SESSION["successMessage"]);
?>
</body>
</html>