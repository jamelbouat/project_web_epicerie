
<header>
    <div class="bg-secondary p-2"></div>

    <div class="bg-dark d-flex justify-content-between">

        <div class="d-flex d-row text-white p-2">
            <span class="fas fa-store-alt fa-2x"></span>
            <span class="p-2 font-weight-bold">Rennes Épicerie</span>
        </div>

        <div class="popover-link d-flex d-row text-white">
            <div class="p-3">
                <a href="MyAccountView.php" data-toggle="popover" data-placement="bottom" data-popover-content="#pop-over-1">
                    <span>Mon compte</span>
                    <span class="far fa-user"></span>
                    <span class="fas fa-sort-down"></span>
                </a>
                <div id="pop-over-1" class="d-none">
                    <div class="popover-title ">
                        <h5 class="text-center">Votre compte</h5>
                    </div>
                    <div class="popover-body">
                        <div class="border-bottom mb-3">
                            <h6>Vous avez déjà un compte ?</h6>
                            <a href="LoginView.php">Connectez-vous ici</a>
                        </div>
                        <div>
                            <h6>Vous êtes un nouveau utilisateur ?</h6>
                            <a href="NewAccountView.php">Inscrivez-vous ici</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3">
                <a href="CartView.php" data-toggle="popover" data-placement="bottom" data-popover-content="#pop-over-2">
                    <span class="fas fa-shopping-cart"></span>
                    <span class="bg-danger px-1 rounded-circle">01</span>
                    <span>article</span>
                    <span class="fas fa-sort-down"></span>
                </a>
                <div id="pop-over-2" class="d-none">
                    <div class="popover-title ">
                        <h5 class="text-center">Votre panier</h5>
                    </div>
                    <div class="popover-body">Vous avez sélectionnez </div>
                </div>
            </div>
        </div>

    </div>
</header>