
<?php
    session_start();

try {
    $err = "";
    require("DataBaseAccess.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];

        if (empty($email) || empty($pwd)) {
            $err = "Erreur : au moins un des champs est vide !";
            header("location:LoginView.php?err=$err");

        } else {
            // Customers table preparation, looking for data with the entered email
            $response = $conn -> prepare("SELECT * FROM customers WHERE customerEmail= ?");
            $response -> execute(array($email));
            $data = $response -> fetch();

            // Password verification
            $checkPassword = password_verify($pwd, $data["customerPassword"]);
            // Password is checked, account exists in the DB
            if ($checkPassword) {
                $_SESSION["id"] = $data["customerId"];
                $_SESSION["firstName"] = $data["customerFirstName"];
                $_SESSION["lastName"] = $data["customerLastName"];
                $_SESSION["address"] = $data["customerAddress"];
                $_SESSION["city"] = $data["customerCity"];
                $_SESSION["zipCode"] = $data["customerPostalCode"];
                $_SESSION["phone"] = $data["customerPhone"];
                $_SESSION["email"] = $data["customerEmail"];

                header("Location:MyAccountView.php");
            } else {
                $err = "Erreur d'identification. réessayez svp !";
                header("location:LoginView.php?err=$err");
            }
        }
    }
}

catch(PDOException $e){
    echo "Connexion non établie: " . $e -> getMessage();
}
?>