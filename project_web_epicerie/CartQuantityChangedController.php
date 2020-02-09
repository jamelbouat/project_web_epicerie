<?php session_start();

    if (!empty($_GET["emptyCart"]) && $_GET["emptyCart"] == 1 ) {
        unset($_SESSION["cart_products"]);
    }

    if (!empty($_GET["removeProduct"])) {

        $productIdToRemove = $_GET["removeProduct"];
        foreach (array_keys($_SESSION["cart_products"]) as $key) {
            if ($productIdToRemove == $key) {
                unset($_SESSION["cart_products"][$key]);
            }
        }
    }

    if (!empty($_GET["productId"]) && !empty($_POST["productQuantity"])) {

        $productId = $_GET["productId"];
        $newQuantity = $_POST["productQuantity"];

        foreach (array_keys($_SESSION["cart_products"]) as $key) {

            if ($productId == $key) {
                $_SESSION["cart_products"][$key]["productQuantity"] = $newQuantity;
                echo '<script> window.location.href = "CartView.php"; </script>';
            }
        }

    } else {
        echo '<script> window.location.href = "CartView.php"; </script>';
    };
?>