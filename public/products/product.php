<?php
$path = $_SERVER['REQUEST_URI'];
$path = strtok($path, '?');
$segments = explode('/', trim($path, '/'));

$product_id = null;
if (count($segments) >= 2 && $segments[0] === 'product') {
    $product_id = intval($segments[1]);
}

if ($product_id) {
    $sql = "SELECT * FROM items WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();

    if (!$product) {
        // Product not found, you might want to redirect or show an error
        header("Location: /404", true, 302);
        exit();
    }
} else {
    // No product ID provided
    header("Location: /404", true, 302);
    exit();
}?>
<?php require_once($root . 'templates/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APU Store</title>
    <link rel="icon" type="image/x-icon" href="/src/favicon/favicon.ico">
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<div class="content container">
    <div style="justify-content: center;" class="item-preview container">
        <div class="item">
            <div style="flex-direction: row-reverse;" class="product-image">
                <img src="<?php echo htmlspecialchars($product['image_path']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" alt="" />
            </div>
        </div>
        <div class="info">
            <div class="item-name-price">
                <div>
                    <h1><?php echo htmlspecialchars($product['name']); ?></h1>
                </div>
                <div>

                </div>
            </div>
            <p style="width: 100%;"><?php echo htmlspecialchars($product['category']); ?></p>
            <div class="product-desc">
                <p style="width: 100%;"><?php echo htmlspecialchars($product['description']); ?></p>
            </div>
            <div class="item-name-price">
                <div>
                    <p>RM<?php echo number_format($product['price'], 2); ?></p>
                </div>
                <div>
                </div>
            </div>
            <button onclick="AddToCart(<?= htmlspecialchars($product['id']) ?>)" class="add-to-cart-btn font-regular-14">Add to Cart</button>
        </div>
    </div>
</div>
<script src="/public/journey/index.js"></script>
</body>
<?php require_once($root . 'templates/footer.php'); ?>
</html>

