
<?php
    session_start();

    // Get the all product prices and put them in array to use it further for sorting them
    $orderPrice = array();
    function orderByPrice($data) {
        global $orderPrice;
        if (!empty($data)) {
            foreach ($data as $key => $row) {
                $orderPrice[$key] = $row["productPrice"];
            }
        }
        return $orderPrice;
    }

    // Product type sorting
    if ((!empty($_POST["productType"])) && ($_POST["productType"] !== "default"))  {
        // a product type is selected
        $data = array();
        $_SESSION["result"] = $_SESSION["AllProductsData"];

        foreach ($_SESSION["result"] as $row) {

            if ( $row["productType"] !== $_POST["productType"] ) {
                continue;
            }

            array_push($data, $row);
        }

        // The following array receives the selected products
        $_SESSION["result"] = $data;

    } else if ((!empty($_POST["productType"])) && ($_POST["productType"] == "default")) {
        // Default value in the select is selected
        $_SESSION["result"] = $_SESSION["AllProductsData"];
    }
    // Otherwise, the -- $_SESSION["result"] -- stays unchanged


    // Product price sorting
    if (!empty($_POST["descendantPrice"])) {
        array_multisort(orderByPrice($_SESSION["result"]), SORT_DESC, $_SESSION["result"]);
    } else if (!empty($_POST["ascendantPrice"])) {
        array_multisort(orderByPrice($_SESSION["result"]), SORT_ASC, $_SESSION["result"]);
    }

?>