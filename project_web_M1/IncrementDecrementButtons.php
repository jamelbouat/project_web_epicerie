
<?php
    // Never display this current page, redirect to ShopProductView
    strpos($_SERVER["SCRIPT_NAME"], "IncrementDecrementButtons.php" ) && header("location:index.php");
?>
<!--
    Two buttons increment and decrement the product quantity, there are 2 div's to display the quantity
        - 1'st div is used only the cart view
        - 2'nd div is used elsewhere
    A hidden input has a value as the div's above, it is used to send the value via the form of adding a product

   The two buttons + and - have a type "button" for the products listed in the index of product view,
   In the view cart they act as a submit buttons since there is no submit button
-->

<div class="addRemoveButtons d-flex d-row">

    <button
            class="decrementQuantity btn btn-dark btn-sm rounded py-0 px-1 disabled"
            <?php echo (empty($productQuantity)) ? 'type="button"' : 'type="submit"' ; ?>
    >
        <i class="fas fa-minus"></i>
    </button>
    <?php
        if (!empty($productQuantity)) {
    ?>
            <div class="productQuantityText border rounded mx-1"><?php echo $productQuantity; ?></div>
    <?php

        } else {
    ?>
            <div class="productQuantityText border rounded mx-1">1</div>
    <?php
        }
    ?>
    <button
            class="incrementQuantity btn btn-dark btn-sm rounded py-0 px-1"
        <?php echo (empty($productQuantity)) ? 'type="button"' : 'type="submit"' ; ?>
    >
        <i class="fas fa-plus"></i>
    </button>
    <input name="productQuantity" type="hidden" class="productQuantityInput" value="1">
</div>