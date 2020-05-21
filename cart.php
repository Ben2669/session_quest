<?php require 'inc/data/products.php';?>
<?php require 'inc/head.php';

// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['loginname']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: login.php');
    exit();
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        if (!empty($_SESSION['cartCookies'])) {
            foreach ($_SESSION['cartCookies'] as $cookie) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <figure class="thumbnail text-center">
                            <img src="assets/img/product-<?= $cookie; ?>.jpg" alt="<?= $catalog[$cookie]['name']; ?>" class="img-responsive">
                            <figcaption class="caption">
                                <h3><?= $catalog[$cookie]['name']; ?></h3>
                                <p><?= $catalog[$cookie]['description']; ?></p>
                            </figcaption>
                        </figure>

                    </div>
                <?php } ?>

            <?php } ?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
