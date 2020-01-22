
<?php
    session_start();
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

    <link rel="stylesheet" type="text/css" href="CartViewCSS.css">
    <script src="CartViewScript.js"></script>
    <title>Mon panier</title>
</head>
<body>

<?php
include("HeaderView.php");
?>
    <div class="container">
        <div class="backward-link"><a class="text-dark" href="AllProductsView.php" title="Retour à la page produits"><- Retour à la page des produits</a></div>
        <h1 class="text-center">Mon panier</h1>
        <div class="border border-light rounded shadow p-2 my-3">
            <div class="text-right py-2">
                <a href="">
                    <button class="btn btn-danger"> Vider le panier <span class="far fa-trash-alt"></span></button>
                </a>
            </div>
            <div class="cartTable">
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                    <tr>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>....</td>
                        <td><div class="buttonsPosition"><?php include("AddRetrieveButtons.php") ?></div></td>
                        <td>....</td>
                        <td><span class="far fa-trash-alt fa-2x" title="Supprimer"></span></td>
                    </tr>
                    <tr>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td><span class="far fa-trash-alt fa-2x" title="Supprimer"></span></td>
                    </tr>
                    </tbody>
                </table>
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th>Nombre d'articles</th>
                        <th>Prix total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>.....</td>
                        <td>.....</td>
                    </tr>
                    </tbody>
                </table>
                <div class="text-right">
                    <button class="btn btn-success my-2" data-toggle="modal" data-target="#showModal">Commander</button>
                </div>
                <div class="modal fade" id="showModal">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header bg-light">
                                <h4 class="modal-title">Payement</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                                Somme à payer.........
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            </div>

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
