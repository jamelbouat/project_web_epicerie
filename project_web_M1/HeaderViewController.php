<?php
    include("CartElementPopover.php");

    if(!empty($_SESSION["cart_products"])){
        $total_quantity = 0;
        foreach ($_SESSION["cart_products"] as $product){
            $total_quantity += $product["productQuantity"];
        }
        $_SESSION["total_quantity"] = $total_quantity;
    } else {
        $_SESSION["total_quantity"] = 0;
    }

    function displayCartContentPopover() {

        foreach ($_SESSION["cart_products"] as $product) {

            $productImage = $product["productImage"];
            $productQuantity = $product["productQuantity"];

            displayCartElementPopover($productImage, $productQuantity);
        }
    }
?>
