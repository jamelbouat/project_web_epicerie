<?php
    // Never display this current page, redirect to ShopProductView
    if (strpos($_SERVER["SCRIPT_NAME"], "ListedProductView.php" )) { echo '<script> window.location.href = "index.php"; </script>'; }

    // Listed product view is the product presentation in the listed products (index.php)
    function listedProductView($productId, $productName, $productScale, $productPrice, $productDescription, $productType, $productImage) {

        $reqAddProductToCart = "productId=$productId&productName=$productName&productScale=$productScale&productPrice=$productPrice&productImage=$productImage";

        $reqViewProductDetails = $reqAddProductToCart."&productDescription=$productDescription&productType=$productType";

        $scaleValue = array("unit" => "unité", "kilo" => "Kilo", "liter" => "Litre");
        $typeValue = array("fruit" => "Fruit", "drink" => "Boisson", "vegetable" => "Légume", "meat" => "Viande", "dairy" => "Produit laitier");
?>
        <div class="listedProduct border bg-white p-1 rounded mb-2">
            <div class="row">
                <div class="productImage col-lg-4" title="Cliquer sur l'image pour plus de détails sur le produit">
                    <!-- Display of the clicked product, in product view -->
                    <a href="ProductView.php?<?php echo $reqViewProductDetails; ?>">
                        <img src="<?php echo $productImage; ?>" alt="Pas d'image du produit">
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-5">
                            <h2><?php echo $productName; ?></h2>
                            <div>Type de produit : <?php echo $typeValue[ $productType ]; ?></div>
                        </div>
                        <div class="col-lg-3 my-auto">
                            <div class="font-weight-bold"><?php echo $productPrice." € | ".$scaleValue[ $productScale ]; ?></div>
                        </div>
                        <div class="col-lg-4">
                            <form action="AddProductToCartController.php?operation=addProduct&<?php echo $reqAddProductToCart; ?>" method="POST">
                                <h6 class="ml-5">Quantité</h6>
                                <?php include("IncrementDecrementButtons.php") ?>
                                <input type="submit" class="btn btn-success my-2" value="Ajouter au panier">
                            </form>
                        </div>
                    </div>
                    <div>
                        <h6>Description</h6>
                        <div>
                            <?php echo $productDescription; ?>
                            <span>
                                <!-- Display of the clicked product, in product view -->
                                <a class="text-decoration-none" href="ProductView.php?<?php echo $reqViewProductDetails; ?>"> | Plus de détails</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
?>