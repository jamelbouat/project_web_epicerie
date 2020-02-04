<?php session_start();

try {
    require("DataBaseAccess.php");

    $err = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST["login"];
        $pwd = $_POST["pwd"];

        if (empty($login) || empty($pwd)) {
            $err = "Erreur : au moins un des champs est vide !";
            $url = "AdminAccountView.php?error=$err";
            echo '<script> window.location.href="' . $url . '";</script>';

        } else {
            // Customers table preparation, looking for data with the entered email
            $req = "SELECT * FROM admins WHERE adminLogin=? and adminPassword=?";
            $response = $conn -> prepare($req);
            $response -> execute(array($login, $pwd));
            $data = $response -> rowCount();

            if ($data) {
                $_SESSION["adminFlag"] = true;
                echo '<script> window.location.href = "AddNewProductsView.php"; </script>';

            } else {

                $err = "Erreur d'identification. réessayez svp !";
                $url = "AdminAccountView.php?error=$err";
                echo '<script> window.location.href="' . $url . '";</script>';
            }
        }
    }
}

catch(PDOException $e){
    echo "Connexion non établie: " . $e -> getMessage();
}
?>