<?php
session_start();
if (!$_SESSION['active']){
    header('Location:login.php');
}
require 'inc/head.php';
require 'inc/data/products.php';
?>
<section class="cookies container-fluid">
    <div class="row bg-success">
    <h2>Votre panier:</h2>
    <?php foreach ($catalog as $id => $cookie): ?>
        <?php if(isset($_SESSION['cookie'])): ?>
            <?php if (in_array($id, $_SESSION['cookie'])): ?>
                <div class="col-md-3">
                    <?= $cookie['name'] . "<br>" . $cookie['description'] . "<br>"?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; ?>
    </div>
    <a class="btn btn-primary" href="index.php">Continuer mes achats</a>
</section>
<?php require 'inc/foot.php'; ?>
