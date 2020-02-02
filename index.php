
<?php

    session_start();
    include("ViewAllProductsController.php");

    // Error check if the product is added or not to the cart, a message error is displayed at the top of the listed products
    $errorAddProductToCart = !empty($_GET["errorAddProductToCart"]) && ($_GET["errorAddProductToCart"] == 1);
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

    <script src="AllProductsViewScript.js"></script>
    <link rel="stylesheet" type="text/css" href="AllProductsViewCSS.css">
    <title>Nos produits</title>
</head>
<body>

<?php
    include("HeaderView.php");
?>
    <div class="container">
       <div class="row my-5 shadow border">

           <div class="col-3 p-5 bg-secondary">
               <div class="form-group my-5">
                   <label for="productType"><h5>Sélectionner le type du produit :</h5></label>
                   <select class="custom-select" id="productType">
                       <option value="default" selected>- Type du produit -</option>
                       <option value="drink">Boisson</option>
                       <option value="fruit">Fruit</option>
                       <option value="vegetable">Légume</option>
                       <option value="meat">Viande</option>
                       <option value="dairy">Produit laitier</option>
                   </select>
               </div>
               <div class="my-5">
                   <h5>Trier les produits</h5>
                   <div class="custom-control custom-radio custom-control-inline">
                       <input type="radio" class="custom-control-input" id="ascPrice" name="PriceSelect">
                       <label class="custom-control-label" for="ascPrice">Prix croissant</label>
                   </div>
                   <div class="custom-control custom-radio custom-control-inline">
                       <input type="radio" class="custom-control-input" id="desPrice" name="PriceSelect">
                       <label class="custom-control-label" for="desPrice">Prix decroissant</label>
                   </div>
               </div>
           </div>

           <div id="viewAllProducts" class="col-9 bg-light p-4">
               <?php
                    if ($errorAddProductToCart) {
               ?>
                       <div class="text-danger text-center font-weight-bold mb-3">Le produit n'est pas ajouté au panier, réessayez svp !</div>
               <?php
               }
                   viewAllProducts();
               ?>
           </div>

       </div>
    </div>

<?php
    include("FooterView.php");
?>
</body>
</html>
