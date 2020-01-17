
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

    <link rel="stylesheet" type="text/css" href="ShopProductViewCSS.css">
    <script src="ShopProductViewScript.js"></script>
    <title>Nos produits</title>
</head>
<body>
<?php
include("HeaderView.php");
?>

    <div class="container">
       <div class="row my-5 shadow border">

           <div class="col-3 p-5 bg-secondary">
               <div class="selectProductType form-group my-5">
                  <select class="custom-select" name="selectProductType">
                      <option value="" selected>- Type de produits -</option>
                      <option value="">Boissons</option>
                      <option value="">Fruits</option>
                      <option value="">Légumes</option>
                      <option value="">Viandes</option>
                      <option value="">Produits laitiers</option>
                  </select>
               </div>
               <div class="my-5">
                   <h5>Sélection de produits</h5>
                   <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="perKilo" name="productPerKilo">
                       <label class="custom-control-label" for="perKilo">Au kilo</label>
                   </div>
                   <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="perLiter" name="productPerLiter">
                       <label class="custom-control-label" for="perLiter">Au litre</label>
                   </div>
                   <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="unitPrice" name="productPerUnit">
                       <label class="custom-control-label" for="unitPrice">À l'unité</label>
                   </div>
               </div>
               <div class="my-5">
                   <h5>Trier les produits</h5>
                   <form action="#">
                       <div class="custom-control custom-radio custom-control-inline">
                           <input type="radio" class="custom-control-input" id="ascPrice" name="PriceSelect" value="ascPrice">
                           <label class="custom-control-label" for="ascPrice">Prix decroissant</label>
                       </div>
                       <div class="custom-control custom-radio custom-control-inline">
                           <input type="radio" class="custom-control-input" id="decPrice" name="PriceSelect" value="decPrice">
                           <label class="custom-control-label" for="decPrice">Prix croissant</label>
                       </div>
                   </form>
               </div>

           </div>

           <div class="col-9 bg-light p-5">
               <?php include("ListedProductView.php"); ?>
           </div>

       </div>
    </div>


<?php
include("FooterView.php");
?>

</body>
</html>
