<?php require 'inc/data/products.php';?>
<?php require 'inc/head.php';



if ($_POST) {
    if(empty($_SESSION['loginname'])) {
        header("Location: /login.php");
        exit();
    }
    if (!empty($_POST['selected_cookie'])) {
        $cookie = $_POST['selected_cookie'];
        if (isset($_SESSION['cartCookies'])) {
            array_push($_SESSION['cartCookies'], $cookie);
        } else {
            $_SESSION['cartCookies'] = [];
            array_push($_SESSION['cartCookies'], $cookie);
        }
    }
    header("Location: /index.php");
}
;
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <form method="post" action="">
                            <input type="hidden" name="selected_cookie" value="<?= $id; ?>">
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                            </button>
                        </form>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
