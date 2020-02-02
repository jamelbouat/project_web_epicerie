<?php

    include("ListedProductView.php");

try {

    // Get the data from the data base and place it in a constant array to use it for sorting -- $_SESSION["AllProductsData"]
    // For the first time the products data is displayed as it is in the data base
    // With the sorting mode the -- $_SESSION["result"] -- is changing depending on the sorting

    if (empty($_SESSION["result"])) {

        require("DataBaseAccess.php");
        $req = "SELECT * from products";
        global $conn;
        // Products table preparation
        $response = $conn -> prepare($req);
        $response -> execute();
        $result = $response -> fetchAll();

        $_SESSION["AllProductsData"] = $result;
        $_SESSION["result"] = $result;
    }

    function viewAllProducts() {

        if (!empty($_SESSION["result"])) {
            foreach ($_SESSION["result"] as $row) {
                $productId = $row["productId"];
                $productName = $row["productName"];
                $productScale = $row["productScale"];
                $productPrice = $row["productPrice"];
                $productDescription = $row["productDescription"];
                $productType = $row["productType"];
                $productImage = "images/".$row["productImage"];

                // Send data of one product to the ListedProductView to render it
                listedProductView($productId, $productName, $productScale, $productPrice, $productDescription, $productType, $productImage);
            }
        } else {
            echo "Erreur : les produits ne s'affichent pas !";
        }
    }
}

catch(PDOException $e){
    echo "Connexion non établie: " . $e -> getMessage();
}
catch(Exception $e) {
    echo "Erreur : ";
    var_dump($e->getMessage());
}
?>