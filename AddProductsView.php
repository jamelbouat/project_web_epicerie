<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- bootstrap minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="AllProductsViewScript.js"></script>
    <title>Ajout produits</title>
</head>
<body>
    <div class="container my-5">
        <form action="">

            <div class="row m-3">
                <div class="col-md">
                    <label for="productName">Nom du produit :</label>
                    <input type="text" class="form-control" id="productName">
                </div>
                <div class="col-md">
                    <label for="productPrice">Prix du produit :</label>
                    <input type="text" class="form-control" id="productPrice">
                </div>
            </div>
            <div class="row m-3">
                <div class="col-md">
                    <label for="productType">Sélectionner le type du produit :</label>
                    <select class="custom-select" id="productType">
                            <option value="" selected>- Type du produit -</option>
                            <option value="">Boisson</option>
                            <option value="">Fruit</option>
                            <option value="">Légume</option>
                            <option value="">Viande</option>
                            <option value="">Produit laitier</option>
                    </select>
                </div>
                <div class="col-md">
                    <label for="productScale">Produit vendu :</label>
                    <select class="custom-select" id="productScale">
                        <option value="">À l'unité</option>
                        <option value="">Au kilo</option>
                        <option value="">Au litre</option>
                    </select>
                </div>
            </div>
            <div class="row m-3">
                <div class="col-md">
                    <label for="description">Description :</label>
                    <textarea class="form-control" rows="5" id="description" name="text"></textarea>
                </div>
                <div class="col-md">
                    <label for="productImage">Charger une image :</label>
                    <input type="file" class="form-control-file border" id="productImage">
                </div>
            </div>
            <div class="row m-3">
                <div class="col-md">
                    <button type="submit" class="btn btn-success">Ajouter à la boutique</button>
                </div>
            </div>

        </form>
    </div>
</body>
</html>
