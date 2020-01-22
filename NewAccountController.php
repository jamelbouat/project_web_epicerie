
<?php
    session_start();

    // Never display the current page, redirect to AllProductsView
    (isset($_SESSION["id"])) && header("location:AllProductsView.php");

try {
    require("DataBaseAccess.php");

    $err1 = ""; $err2 = ""; $err3 = ""; $err4 = ""; $err5 = ""; $err6 = ""; $err7 = ""; $err8 = ""; $err9 = "";

    $regex_spaces_letters = "/^[a-zA-Z]*$/"; // regex accepts only spaces and/or letters
    $regex_zip_code = "/^[0-9]{5}$/";  // regex, accepts only a number of 5 digits
    $regex_phone_number = "/^[0]{1}[0-9]{9}$/";  // regex, begin with a 0 and followed with 9 digits

    function addToDataBase($firstName,$lastName,$address,$city,$phone,$zipCode,$email,$pwd) {
        global $conn;
        $req = "INSERT INTO customers (customerFirstName, customerLastName, customerAddress, customerCity, customerPhone, customerPostalCode, customerEmail, customerPassword)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        // Customers table preparation
        $stmt = $conn -> prepare($req);
        // Add the data
        $stmt -> execute(array($firstName,$lastName,$address,$city,$phone,$zipCode,$email,$pwd));
        header("location:loginView.php");
    }

    function checkEmptyInput($data) {
        // Verify if $data is not empty
        return (empty(trim($data)) ? true : false);
    }

    function checkInputData($data) {
        // trim Delete extra spaces, stripslashes delete backslashes,
        // and htmlspecialchars convert to html entities like < becomes &lt; or > becomes &gt;
        return htmlspecialchars(stripslashes(trim($data)));
    }

    // The code is executed on submit button
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $checkedValue = 0;
        $lastName = $_POST["lastName"];
        $firstName = $_POST["firstName"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $zipCode = $_POST["zipCode"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $confirmEmail = $_POST["confirmEmail"];
        $pwd = $_POST["pwd"];
        $confirmPwd = $_POST["confirmPwd"];

        // Last name verification
        if (checkEmptyInput($lastName)) {
            $err1 = "Erreur nom vide : nom est requis";
        } else {
            $lastName = checkInputData($lastName);
            if (preg_match($regex_spaces_letters, $lastName)) {
                $checkedValue += 1;
            } else {
                $err1 = "Erreur nom : Seuls les lettres et les espaces sont autorisés";
            }
        }

        // First name verification
        if (checkEmptyInput($firstName)) {
            $err2 = "Erreur prénom vide : prénom est requis";
        } else {
            $firstName = checkInputData($firstName);
            if (preg_match($regex_spaces_letters,$firstName)) {
                $checkedValue += 1;
            } else {
                $err2= "Erreur prénom : Seuls les lettres et les espaces sont autorisés";
            }
        }

        // Address verification
        if (checkEmptyInput($address)) {
            $err3 = "Erreur adresse vide : adresse requise";
        } else {
            $address = checkInputData($address);
            $checkedValue += 1;
        }

        // City name verification
        if (checkEmptyInput($city)) {
            $err4 = "Erreur ville vide : ville requise";
        } else {
            $city = checkInputData($city);
            $checkedValue += 1;
        }

        // Phone number verification
        if (checkEmptyInput($phone)) {
            $err5 = "Erreur téléphone vide: téléphone requis";
        } else {
            $phone = checkInputData($phone);
            if (preg_match($regex_phone_number, $phone)) {
                $checkedValue += 1;
            } else {
                $err5= "Erreur téléphone : Entrez un numéro valide (0x xx xx xx xx)";
            }
        }

        // Zip code verification
        if (checkEmptyInput($zipCode)) {
            $err6 = "Erreur code postal vide : code postal requis";
        } else {
            $zipCode = checkInputData($zipCode);
            if (preg_match($regex_zip_code, $zipCode)) {
                $checkedValue += 1;
            } else {
                $err6 = "Erreur code postal : Entrez un code postal valide (5 chiffres)";
            }
        }

        // Email verification
        if (checkEmptyInput($email)) {
            $err7 = "Erreur email : Email requis";
        } else {
            $email = checkInputData($email);
            // Verify email if exists
            $req = "SELECT * FROM customers WHERE customerEmail= ?";
            $response = $conn-> prepare($req);
            $response -> execute(array($email));
            $checking_email = $response->rowCount();
            if($checking_email === 0){
                if ($email === $confirmEmail){
                    $checkedValue += 1;
                } else {
                    $err8 = "Erreur email : email à confirmer";
                }
            } else {
                $err7 = "Erreur email: email déjà utilisé !";
            }
        }

        // Password verification
        if (checkEmptyInput($pwd)) {
            $err9 = "Erreur mot de passe vide : mot de passe requis";
        } else {
            if ($pwd === $confirmPwd){
                $pwd = checkInputData($pwd);
                // Password hashing
                $pwd = password_hash($pwd, PASSWORD_DEFAULT);
                $checkedValue += 1;
            } else {
                $err10 = "Erreur mot de passe: mot de passe à confirmer !";
            }
        }

        // 8 inputs are verified
        if ($checkedValue === 8) {
            addToDataBase($firstName,$lastName,$address,$city,$phone,$zipCode,$email,$pwd);
            $_SESSION["successMessage"] = "Vous êtes bien inscrit, connectez-vous au-dessous";
        } else {
            header("location:NewAccountView.php?err1=$err1&err2=$err2&err3=$err3&err4=$err4&err5=$err5&err6=$err6&err7=$err7&err8=$err8&err9=$err9&err10=$err10");
        }
    }
}

catch(PDOException $e){
    echo "Connexion non établie: " . $e -> getMessage();
}
?>