<?php
    $orderNumber = "";
    $date = "";
    $time = "";
    $id = "";
    $orderNumber = "";;
    $firstName = "";
    $lastName = "";
    $address = "";
    $city = "";
    $zipCode = "";
    $phone = "";
    $allProductQuantity = 0;
    $allProductsPrice = 0;

    if (empty($_SESSION["id"]) || empty($_SESSION["firstName"]) || empty($_SESSION["lastName"]) ||
        empty($_SESSION["address"]) || empty($_SESSION["zipCode"]) || empty($_SESSION["city"]) ||
        empty($_SESSION["phone"]) || empty($_SESSION["allProductQuantity"]) || empty($_SESSION["allProductsPrice"])) {

        $_SESSION["requiredLoginMessage"] = "Veuillez-vous connecter avant toute commande !";
        echo '<script> window.location.href = "LoginView.php"; </script>';

    } else {
        $date = date("d-m-Y");
        $time = date("H:i");
        $id = $_SESSION["id"];
        // Order number is composed of date seperated with 'C' character and the id of the user
        $orderNumber = "N° ".date("dCmCY").$id;
        $firstName = $_SESSION["firstName"];
        $lastName = $_SESSION["lastName"];
        $address = $_SESSION["address"];
        $city = $_SESSION["city"];
        $zipCode = $_SESSION["zipCode"];
        $phone = $_SESSION["phone"];
        $allProductQuantity = $_SESSION["allProductQuantity"];
        $allProductsPrice = $_SESSION["allProductsPrice"];
    }
?>
