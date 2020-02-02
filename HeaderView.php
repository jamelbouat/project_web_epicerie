
<?php
    // Never display this current page, redirect to ShopProductView
    strpos($_SERVER["SCRIPT_NAME"], "HeaderView.php" ) && header("location:index.php");

    include("HeaderViewController.php");
?>

<header>
    <div class="bg-secondary p-2"></div>
    <div class="bg-dark d-flex justify-content-between">
        <div class="logoLink d-flex d-row text-white p-2">
            <a href="index.php">
                <span class="fas fa-store-alt fa-2x"></span>
                <span class="p-2 font-weight-bold">Rennes Épicerie</span>
            </a>
        </div>
        <div class="popover-link d-flex d-row text-white">
            <div class="p-3">
                <!-- Link to MyAccountView if a session is set, otherwise link to LoginView-->
                <a <?php if (!isset($_SESSION["id"])) { ?> href="LoginView.php" <?php } else { ?> href="MyAccountView.php"<?php }; ?>
                   data-toggle="popover" data-placement="bottom" data-popover-content="#pop-over-1">
                    <span>Mon compte</span>
                    <span class="far fa-user"></span>
                    <span class="fas fa-sort-down"></span>
                </a>

                <!-- First popover : my account popover-->
                <div id="pop-over-1" class="d-none">
                    <div class="popover-title">
                        <h5 class="text-center">Votre compte</h5>
                    </div>
                    <div class="popover-body">

                        <!-- Popover body depends on the user status : not logged (1st content) -->
                        <?php if(!isset($_SESSION["id"])) { ?>
                        <div class="border-bottom mb-3">
                            <h6>Vous avez déjà un compte ?</h6>
                            <a href="LoginView.php">Connectez-vous ici</a>
                        </div>
                        <div class="border-bottom mb-3">
                            <h6>Vous êtes un nouveau utilisateur ?</h6>
                            <a href="NewAccountView.php">Inscrivez-vous ici</a>
                        </div>
                        <div>
                            <h6>Vous êtes administrateur ?</h6>
                            <a href="AdminAccountView.php">Cliquez-ici</a>
                        </div>
                        <?php
                            } else {
                        ?>

                        <!-- Popover body depends on the user status : logged (2nd content) -->
                        <div class="border-bottom mb-3 text-center">
                            <h6>Bonjour, <span class="font-weight-bold"><?php echo $_SESSION["firstName"]." ".$_SESSION["lastName"] ?></span></h6>
                        </div>
                        <div class="text-center border-bottom mb-3">
                            <h6>Pour modifier votre compte !</h6>
                            <a href="MyAccountView.php">Cliquez-ici</a>
                        </div>
                        <div class="text-center">
                            <a href="LogoutController.php">Se déconnecter</a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>

            <!-- Second popover : cart popover-->
            <div class="p-3">
                <a href="CartView.php" data-toggle="popover" data-placement="bottom" data-popover-content="#pop-over-2">
                    <span class="fas fa-shopping-cart"></span>
                    <span class="quantity_cart_style bg-danger p-1 m-1 rounded-circle"><?php echo $_SESSION["total_quantity"]; ?></span>
                    <span>article</span>
                    <span class="fas fa-sort-down"></span>
                </a>
                <div id="pop-over-2" class="d-none">
                    <div class="popover-title">
                        <h5 class="text-center">Votre panier</h5>
                    </div>
                    <div class="popover-body">
                        <?php
                            if (empty($_SESSION["cart_products"])) {
                        ?>
                            <div class="m-2">Votre panier est vide !</div>
                        <?php } else {
                                displayCartContentPopover();
                            }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>