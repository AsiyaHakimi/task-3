<?php
// index.php
include 'db.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>E-commerce</title>
</head>
<body>
    <h1>Product List</h1>
    <div class="container">
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="product">
                <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                <h2><?php echo $row['name']; ?></h2>
                <p><?php echo $row['description']; ?></p>
                <p>$<?php echo $row['price']; ?></p>
                <button onclick="addToCart(<?php echo $row['id']; ?>)">Add to Cart</button>
            </div>
        <?php endwhile; ?>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
<?php $conn->close(); ?>
