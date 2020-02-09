<?php

    include("ListedProductCartView.php");
    $_SESSION["allProductQuantity"] = 0;
    $_SESSION["allProductsPrice"] = 0;

    function viewCartProducts() {

        foreach ($_SESSION["cart_products"] as $productId => $product) {

            $productName = $product["productName"];
            $productScale = $product["productScale"];
            $productPrice = $product["productPrice"];
            $productImage = $product["productImage"];
            $productQuantity = $product["productQuantity"];

            $productPrice = $productPrice * $productQuantity;
            $_SESSION["allProductQuantity"] += $productQuantity;
            $_SESSION["allProductsPrice"] += $productPrice;

            listedProductCartView($productId, $productName, $productScale, $productPrice, $productImage, $productQuantity);
        }
    }
?>


