
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- bootstrap minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="ProductViewCSS.css">
    <script src="ProductViewScript.js"></script>
    <script src="HeaderViewScript.js"></script>
    <title>Présentation produit</title>
</head>
<body>
<?php
    include("HeaderView.php");
?>

    <div class="container">

        <div class="row m-5">

            <div class="col-md-6 productImage" data-toggle="modal" data-target="#myModal">
                <img src="images/pont_neuf.jpg" alt="image non affichée">
            </div>

            <div class="col-md-6 border-secondary border-left pl-5">
                <h2>Description du produit</h2>
                <div>blabla</div>
                <h3>Prix du produit</h3>
                <div>888888</div>
                <div>
                    <h6>Quantité</h6>
                        <div class="d-flex d-row">
                            <button id="decrementQuantity" class="btn btn-dark btn-sm rounded py-0 px-1 disabled"><i class="fas fa-minus"></i></button>
                            <div id="productQuantity">1</div>
                            <button id="incrementQuantity" class="btn btn-dark btn-sm rounded py-0 px-1"><i class="fas fa-plus"></i></button>
                        </div>
                        <input type="submit" class="btn btn-success my-2" value="Ajouter au panier">
                </div>
            </div>

        </div>

    </div>

<?php
    include("FooterView.php");
?>

</body>
</html>
