
<?php
    session_start();

try {
    require("DataBaseAccess.php");

    function updateDataBase($req, $address, $city, $phone, $zipCode, $id) {
        global $conn;
        // Customers table preparation
        $response = $conn -> prepare($req);
        $response -> execute(array($address, $city, $phone, $zipCode, $id));
        return "data updated";
    }

    if (isset($_POST["address"])) {
        $address = $_POST["address"];
        $city = $_POST["city"];
        $phone = $_POST["phone"];
        $zipCode = $_POST["zipCode"];
        $id = $_SESSION["id"];

        $req = "UPDATE customers SET customerAddress=?, customerCity=?, customerPhone=?, customerPostalCode=? where customerId=?";
        $result = updateDataBase($req, $address, $city, $phone, $zipCode, $id);

        // Put the results in the session variables, because the user is always logged with the previous sessions variables.
        // Also send a response to success in Ajax to update data without refreshing the page
        if ($result) {
            $_SESSION["address"] = $address;
            $_SESSION["city"] = $city;
            $_SESSION["zipCode"] = $zipCode;
            $_SESSION["phone"] = $phone;
            echo $result;
        }
    }
}

catch(PDOException $e){
    echo "Connexion non établie: " . $e -> getMessage();
}
?>