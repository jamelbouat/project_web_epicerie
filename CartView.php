
<?php
    session_start();
    include("cartController.php");
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
        <div class="backward-link"><a class="text-dark" href="index.php" title="Retour à la page produits"><- Retour à la page des produits</a></div>
        <h1 class="text-center">Mon panier</h1>

        <div class="border border-light rounded shadow p-2 my-3">

            <?php
                if (!empty($_SESSION["cart_products"])) {
                    ?>
                    <!-- The following section is displayed if the cart contains products -->
                    <div>
                        <div class="text-right py-2">
                            <a href="CartQuantityChangedController.php?emptyCart=1">
                                <button class="btn btn-danger">
                                    Vider le panier
                                    <span class="far fa-trash-alt ml-2"></span>
                                </button>
                            </a>
                        </div>
                        <div>
                            <!-- Cart table view -->
                            <div>
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

                                        <?php viewCartProducts(); ?>

                                        <tr class="table-success">
                                            <td colspan="2">
                                                <h6>Nombre d'articles</h6>
                                                <div class="font-weight-bold"><?php echo $_SESSION["allProductQuantity"]; ?></div>
                                            </td>
                                            <td colspan="2">
                                                <h6>Prix total</h6>
                                                <div class="font-weight-bold"><?php echo $_SESSION["allProductsPrice"]; ?> €</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Order button -->
                            <div class="text-right">
                                <a href="OrderView.php">
                                    <button class="btn btn-success my-2">
                                        Commander
                                    </button>
                                </a>
                            </div>

                        </div>
                    </div>

                    <?php
                } else if (empty($_SESSION["cart_products"])) {
            ?>
                    <!-- The following section is displayed if the cart does not contain products -->
                    <div class="empty_trash_container text-center p-3">
                        <h5>Votre panier est vide</h5>
                        <a href="index.php" class="text-white text-decoration-none">
                            <button class="btn btn-success m-3">Commencer vos achats</button>
                        </a>
                    </div>
            <?php
                };
            ?>
        </div>
    </div>

<?php
include("FooterView.php");
?>

</body>
</html>
