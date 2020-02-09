<?php session_start();
    include("OrderController.php");
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

    <link rel="stylesheet" type="text/css" href="OrderViewCSS.css">
    <script src="OrderViewScript.js"></script>
    <title>Ma commande</title>
</head>
<body>
<?php
include("HeaderView.php");
?>
    <div class="container">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th colspan="2">Numéro de commande</th>
                <th>Nombre de produits</th>
                <th>Montant total</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="2"><?php echo $orderNumber; ?></td>
                <td><?php echo $allProductQuantity; ?></td>
                <td><?php echo $allProductsPrice; ?> €</td>
            </tr>
            </tbody>
            <thead class="thead-light">
            <tr>
                <th>Nom client</th>
                <th>Téléphone</th>
                <th>Adresse livraison</th>
                <th>La Date et l'heure de la commande</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $firstName." ".$lastName ; ?></td>
                <td><?php echo $phone ; ?></td>
                <td><?php echo $address.", ".$zipCode.", ".$city; ?></td>
                <td>Le : <?php echo $date ?>, à <?php echo $time; ?></td>
            </tr>
            </tbody>
        </table>

        <!-- Modal payment view -->
        <div>
            <div class="text-right">
                <button class="btn btn-success my-2" data-toggle="modal" data-target="#showModal">
                    Payer
                </button>
            </div>
            <div class="modal fade" id="showModal">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light">
                            <h4 class="modal-title">Payement</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            Somme totale est <div class="font-weight-bold"><?php echo $allProductsPrice; ?> €</div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>
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