<?php 
session_start();
if (!$_SESSION['active']){
    header('Location:login.php');
}
require 'inc/data/products.php';
require 'inc/head.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $_SESSION['cookie'][] = $_POST['cookie'];
    header('Location:cart.php');
}
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
                        <form method="post">
                            <button type="submit" class="btn btn-primary">
                                <input type="hidden" name="cookie" value="<?= $id ?>">
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
