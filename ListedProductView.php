
<?php
    // Never display this current page, redirect to ShopProductView
    strpos($_SERVER["SCRIPT_NAME"], "ListedProductView.php" ) && header("location:AllProductsView.php");

    function listedProductView($productName, $productScale, $productPrice, $productDescription, $productType, $productImage) {

        $reqViewProductDetails = "productName=".$productName."&productScale=".$productScale.
                                "&productPrice=".$productPrice."&productDescription=".$productDescription.
                                "&productImage=".$productImage."&productType=".$productType;

        $typeValue = array("unit" => "unité", "kilo" => "Kilo", "liter" => "Litre")
?>
        <div class="listedProduct border bg-white p-2 rounded mb-2">
            <div class="row">
                <div class="productImage col-lg-5" title="Cliquer sur l'image pour plus de détails sur le produit">
                    <a href="ProductView.php?<?php echo $reqViewProductDetails; ?>">
                        <img src="<?php echo $productImage; ?>" alt="Pas d'image du produit">
                    </a>
                </div>

                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6 my-auto">
                            <h4><?php echo $productName; ?></h4>
                            <h6><?php echo $productPrice." € | ".$typeValue[ $productScale ]; ?></h6>
                        </div>
                        <div class="col-lg-6 my-auto">
                            <h6 class="ml-lg-4">Quantité</h6>
                            <?php include("AddRetrieveButtons.php") ?>
                            <input type="submit" class="btn btn-success my-2" value="Ajouter au panier">
                        </div>
                    </div>
                    <div>
                        <h6>Description</h6>
                        <div>
                            <?php echo $productDescription; ?>
                            <span>
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