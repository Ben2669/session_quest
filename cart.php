<?php require 'inc/head.php';

// On prolonge la session
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
        TODO : Display shopping cart items from $_COOKIES here.
    </div>
</section>
<?php require 'inc/foot.php'; ?>
