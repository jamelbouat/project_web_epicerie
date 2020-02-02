
<?php

    function displayCartElementPopover($productImage, $productQuantity) {
        ?>
        <div class="element-popover border-bottom px-3 py-1">
            <div class="d-flex d-row">
                <div class="popover-img">
                    <img src="<?php echo $productImage; ?>" alt="L'image ne s'affiche pas">
                </div>
                <div class="mx-2 text-center my-auto">
                    <div>Quantité</div>
                    <h6><?php echo $productQuantity; ?></h6>
                </div>
            </div>
        </div>
        <?php
    }
?>