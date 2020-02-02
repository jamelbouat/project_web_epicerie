<?php

    session_start();

    // Check if the data is well received by the controller
    if (!empty($_GET["productId"]) && !empty($_GET["productName"]) && !empty($_GET["productScale"]) && !empty($_GET["productPrice"]) &&
        !empty($_GET["productImage"]) && !empty($_POST["productQuantity"] && !empty($_GET["operation"]))) {

        $productId = $_GET["productId"];
        $productName = $_GET["productName"];
        $productScale = $_GET["productScale"];
        $productPrice = $_GET["productPrice"];
        $productImage = $_GET["productImage"];
        $productQuantity = $_POST["productQuantity"];

        // Check if the operation is a product add
        if ($_GET["operation"] == "addProduct") {
            addProductToCart();
        }

        header("location:index.php");

    } else {

        // Error send the index page view, and mention that the product is not added to the cart
        header("location:index.php?errorAddProductToCart=1");
    }

    function addProductToCart() {
        // The cart_products is an array of products, a productArray is an array of its own data
        global $productId, $productName, $productScale, $productPrice, $productImage, $productQuantity;

        // Important !, array_merge function merge arrays (products arrays), since the arrays keys are numeric values(productId),
        // The keys of the products arrays will have new key values, starting from zero and so on
        // the product Id must be kept unchanged (it represents a unique product), this is why it is transformed to a string ($productId."id")
        $productId = $productId."id";

        $productArray = array(
            $productId => array(
                "productName" => $productName,
                "productScale" => $productScale,
                "productPrice" => $productPrice,
                "productImage" => $productImage,
                "productQuantity" => $productQuantity
            )
        );

        if (!empty($_SESSION["cart_products"])) {
            // Check if a product already exists in the cart or not, if so increment its quantity by the received quantity,
            // otherwise add this new product to the cart
            if(in_array($productId,array_keys($_SESSION["cart_products"]))) {
                foreach($_SESSION["cart_products"] as $key => $value) {
                    if($productId == $key) {
                        $_SESSION["cart_products"][$key]["productQuantity"] += $productQuantity;
                    }
                }
            } else {
                $_SESSION["cart_products"] = array_merge($_SESSION["cart_products"], $productArray);
            }
        // The first time the cart_products is set
        } else {
            $_SESSION["cart_products"] = $productArray;
        }
    }
?>