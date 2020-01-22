
<?php
    // Never display this current page, redirect to ShopProductView
    strpos($_SERVER["SCRIPT_NAME"], "AddRetrieveButtons.php" ) && header("location:AllProductsView.php");
?>

<div class="addRemoveButtons d-flex d-row">
    <button id="decrementQuantity" class="minusButton btn btn-dark btn-sm rounded py-0 px-1 disabled"><i class="fas fa-minus"></i></button>
    <div id="productQuantity" class="border rounded mx-1">1</div>
    <button id="incrementQuantity" class="plusButton btn btn-dark btn-sm rounded py-0 px-1"><i class="fas fa-plus"></i></button>
</div>