
<?php
    session_start();
    // User not already logged, redirect to his login view
    if (!isset($_SESSION["id"])) {
        header("location:LoginView.php");
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

    <link rel="stylesheet" type="text/css" href="MyAccountViewCSS.css">
    <script src="MyAccountViewScript.js"></script>
    <title>Mon compte</title>
</head>
<body>
<?php
    include("HeaderView.php");
?>
    <div class="container mx-auto">
        <div class="float-right">
            <a href="index.php"><button class="btn btn-success">Commcencer mes achats</button></a>
        </div>
        <h2>Mon compte</h2>

        <div class="list-group">
            <div class="list-group-item list-group-item-action">
                <span>Bonjour, </span>
                <span class="font-weight-bold"><?php echo $_SESSION["firstName"]." ".$_SESSION["lastName"] ?></span>
                <button id="onModifyEvent" class="btn btn-info float-right" data-toggle="modal" data-target="#showModal">Modifier mes informations</button>
            </div>
            <div class="list-group-item list-group-item-action d-flex d-row">
                <div>Adresse : </div>
                <div class="notModifiedData"><?php echo $_SESSION["address"] ?></div>
            </div>
            <div class="list-group-item list-group-item-action d-flex d-row">
                <div>Code postal : </div>
                <div class="notModifiedData"><?php echo $_SESSION["zipCode"] ?></div>
            </div>
            <div class="list-group-item list-group-item-action d-flex d-row">
                <div>Ville : </div>
                <div class="notModifiedData"><?php echo $_SESSION["city"] ?></div>
            </div>
            <div class="list-group-item list-group-item-action d-flex d-row">
                <div>Téléphone : </div>
                <div class="notModifiedData"><?php echo $_SESSION["phone"] ?></div>
            </div>
            <div class="list-group-item list-group-item-action d-flex d-row">
                <div>Email : </div>
                <div class="notModifiedData"><?php echo $_SESSION["email"] ?></div>
            </div>
        </div>

        <!-- Modal container -->
        <div class="modal fade" id="showModal">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h4 class="modal-title">Modifications de mes informations</h4>
                        <button type="button" class="close" data-dismiss="modal">&times</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="address">Adresse :</label>
                            <input class="dataToModify form-control" type="text" id="address" >
                        </div>
                        <div class="form-group">
                            <label for="zipCode">Code postal :</label>
                            <input class="dataToModify form-control" type="text" id="zipCode" >
                        </div>
                        <div class="form-group">
                            <label for="city">Ville :</label>
                            <input class="dataToModify form-control" type="text" id="city" >
                        </div>
                        <div class="form-group">
                            <label for="phone">Téléphone :</label>
                            <input class="dataToModify form-control" type="text" id="phone" >
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input class="dataToModify form-control" type="text" id="email" disabled>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal">Annuler</button>
                        <button id="onSaveEvent" class="btn btn-info" data-dismiss="modal">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php
    include("FooterView.php");
?>
</body>
</html>