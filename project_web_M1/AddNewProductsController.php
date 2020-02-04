<?php session_start();

    // Call an external file to use the function inside it
    include("AddImageCheck.php");

try {
    require("DataBaseAccess.php");

    $name = $_POST["productName"];
    $scale = $_POST["productScale"];
    $price = $_POST["productPrice"];
    $description = $_POST["productDescription"];
    $type = $_POST["productType"];

    // Check if an image is chosen, if so continue, otherwise send an alert message
    if (!empty($_FILES['file'])) {
        $image = $_FILES['file']['name'];
        $imageSize = $_FILES['file']['size'];
        // Image added to the images directory then assign a true flag to continue
        $imageAddFlag = addImageCheck($image, $imageSize);
    } else {
        echo "Erreur : Veuillez séléctionner une image !\n";
    }

    function addProductToDb($req, $name, $scale, $price, $description, $image, $type) {
        global $conn;
        // Products table preparation
        $response = $conn -> prepare($req);
        $response -> execute(array($name, $scale, $price, $description, $image, $type));
        return $response;
    }

    // Check all the inputs are set and not empty, and imageAddFlag is set to true
    if (!empty($name) && !empty($scale) &&!empty($price) && !empty($description) && !empty($image) && !empty($type) && $imageAddFlag) {

        $req = "INSERT INTO products (productName, productScale, productPrice, productDescription, productImage, productType)
        VALUES (?, ?, ?, ?, ?, ?)";
        $result = addProductToDb($req, $name, $scale, $price, $description, $image, $type);

        // Send a response to success in Ajax to display it
        if ($result) {
            echo "succès : Produit ajouté à la liste !\n";
        } else {
            echo "Erreur : Produit non ajouté à la liste, problème relié à la base de donnée !\n";
        }
    } else {
        echo "Erreur : Produit non ajouté à la liste !\n";
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