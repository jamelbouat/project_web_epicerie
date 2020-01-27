
<?php
    include("ListedProductView.php");

try {
        require("DataBaseAccess.php");

        function retrieveProductsData($req) {
            global $conn;
            // Products table preparation
            $response = $conn -> prepare($req);
            $response -> execute();
            return $response;
        }

        function viewAllProducts() {
            $req = "SELECT * from products";
            $result = retrieveProductsData($req);

            if (!empty($result)) {
                foreach ($result as $row) {
                    $productName = $row["productName"];
                    $productScale = $row["productScale"];
                    $productPrice = $row["productPrice"];
                    $productDescription = $row["productDescription"];
                    $productType = $row["productType"];
                    $productImage = "images/".$row["productImage"];

                    listedProductView($productName, $productScale, $productPrice, $productDescription, $productType, $productImage);
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