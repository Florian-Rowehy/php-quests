<?php
session_start();

$cart = array();
$total = 0;
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    header('Location: /');
}

require_once('./inc/data/products.php');
require 'inc/head.php';
?>

<section class="container-fluid">
    <div class="row">
        <h1>Cart content:</h1>
            <ul>
                <?php foreach ($cart as $id => $quantity): ?>
                <li>
                    <div style="display: flex">
                        <img src="/assets/img/product-<?= $id; ?>.jpg" alt="<?= $catalog[$id]['name']; ?>" class="img-responsive" style="max-width: 50%;">
                        <div style="margin-left: 1rem;">
                            <h2><?= $catalog[$id]['name'] . ": ". $catalog[$id]['price'] . ' € ' ?></h2>
                            <p> <?= 'Quantity: ' . $quantity ?> </p>
                            <?php
                                $subtotal = $quantity * $catalog[$id]['price'];
                                $total += $subtotal;
                            ?>
                            <p>Subtotal: <?= $subtotal . ' €' ?></p>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        <h2>Total: <?= $total . ' €' ?></h2>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
