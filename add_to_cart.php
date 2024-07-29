<?php
// add_to_cart.php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$productId = $_POST['id'];

if (!in_array($productId, $_SESSION['cart'])) {
    $_SESSION['cart'][] = $productId;
    echo "Product added to cart!";
} else {
    echo "Product is already in the cart!";
}
?>
