
<?php
    // Never display this current page, redirect to ShopProductView
    strpos($_SERVER["SCRIPT_NAME"], "ListedProductView.php" ) && header("location:AllProductsView.php");
?>

<div class="listedProduct border bg-white p-2 rounded mb-2">
    <div class="row">
        <div class="productImage col-lg-5" title="Cliquer sur l'image pour plus de détails sur le produit">
            <a href="ProductView.php"><img src="images/pont_neuf.jpg" alt="Pas d'image du produit"></a>
        </div>

        <div class="col-lg-7">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <h4>Prix</h4>
                    <div>888</div>
                </div>
                <div class="col-lg-6 my-auto">
                    <h4 class="ml-lg-4">Quantité</h4>
                    <?php include("AddRetrieveButtons.php") ?>
                    <input type="submit" class="btn btn-success my-2" value="Ajouter au panier">
                </div>
            </div>
            <div>
                <h4>Nom produit</h4>
                <div>petite description. <span><a class="text-decoration-none" href="ProductView.php">Plus de détails</a></span></div>
            </div>
        </div>
    </div>
</div>