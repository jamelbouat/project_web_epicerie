
<?php
    session_start();

    // Received data from the products list with its characteristics
    function checkFieldData($fieldData) {
        return !empty( $_GET[ $fieldData ]) ? $_GET[ $fieldData ] : "Valeur non trouvée, réessayez svp !";
    }
    $productName = checkFieldData("productName");
    $productScale = checkFieldData("productScale");
    $productPrice = checkFieldData("productPrice");
    $productDescription = checkFieldData("productDescription");
    $productType = checkFieldData("productType");
    $productImage = checkFieldData("productImage");

    empty($productName) || empty($productScale) || empty($productPrice) || empty($productDescription) || empty($productType) || empty($productImage)
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

    <link rel="stylesheet" type="text/css" href="ProductViewCSS.css">
    <script src="ProductViewScript.js"></script>
    <title>Présentation produit</title>
</head>
<body>
<?php
    include("HeaderView.php");
?>
    <div class="container">
        <div class="backward-link"><a class="text-dark" href="AllProductsView.php" title="Retour à la page produits"><- Retour à la page des produits</a></div>
        <div class="row m-5">
            <div class="col-md-6 productImage" data-toggle="modal" data-target="#myModal">
                <img src="<?php echo $productImage; ?>" alt=":Image non affichée">
            </div>
            <div class="col-md-6 border-secondary border-left pl-5">
                <div class="border p-2">
                    <h4>Nom du produit</h4>
                    <div><?php echo $productName; ?></div>
                </div>
                <div class="border p-2">
                    <h4>Prix du produit</h4>
                    <div><?php echo $productPrice; ?></div>
                </div>
                <div class="border p-2">
                    <h6>Quantité</h6>
                    <?php include("AddRetrieveButtons.php") ?>
                    <input type="submit" class="btn btn-success my-2" value="Ajouter au panier">
                </div>
                <div class="border p-2">
                    <h4>Description du produit</h4>
                    <div><?php echo $productDescription; ?></div>
                </div>
            </div>
        </div>
    </div>
<?php
    include("FooterView.php");
?>
</body>
</html>