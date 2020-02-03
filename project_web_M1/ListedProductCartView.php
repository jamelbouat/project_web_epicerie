<?php
    function listedProductCartView($productId, $productName, $productScale, $productPrice, $productImage, $productQuantity) {
        $typeValue = array("unit" => "Unité", "kilo" => "Kilo", "liter" => "Litre");

?>
        <tr>
            <form action="CartQuantityChangedController.php?productId=<?php echo $productId ?>" method="POST">
                <td>
                    <div class="d-flex d-row">
                        <div class="w-25 my-auto"><?php echo $productName?></div>
                        <div><img class="cart_image" src="<?php echo $productImage; ?>" alt="L'image ne s'affiche pas"></div>
                    </div>
                </td>
                <td>
                    <div class="buttonsPosition"><?php include("IncrementDecrementButtons.php"); ?></div>
                    <span><?php echo $typeValue[ $productScale ]; ?></span>
                </td>
                <td><?php echo $productPrice?> €</td>
                <td>
                    <a href="CartQuantityChangedController.php?removeProduct=<?php echo $productId ?>">
                        <span class="far fa-trash-alt fa-2x" title="Supprimer"></span>
                    </a>
                </td>
            </form>
        </tr>
<?php
    }
?>

