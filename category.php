<?php
include_once 'loader.php';

use App\Enum\ConfigEnum;
use App\Enum\ProductsEnum;
use App\UiPart\Navbar;

if (false === isset($_GET['cat'])) {
    header("Location: index.php");
    die();
}
$category = \App\Enum\CategoryEnum::getCategoryBySlug($_GET['cat']);
if (null === $category) {
    header("Location: index.php");
    die();
}

?>
<!doctype html>
<html lang="pl">
<head>
    <title>Vance.pl - obuwie</title>
    <link rel="stylesheet" href="assets/css/category.css">
    <?php Navbar::getMeta() ?>
</head>
<body style="background-image: url('<?= $category['img'] ?? '/assets/img/prod.webp' ?>');">
<?php Navbar::renderNavbar() ?>
<section class="hero">
    <div class="hero-container">
        <div class="hero-text">
            <div class="hero-text-title">
                Buty <?= $category['name'] ?>
            </div>
            <p>
                VANCE
            </p>
        </div>
    </div>
</section>
<section class="prepand">
    <h1>
        <?= $category['header'] ?>
    </h1>
    <p>
        <?= $category['desc'] ?>
    </p>
</section>
<section class="show">
    <?php foreach (ProductsEnum::getProducts($category) as $product): ?>
        <div class="show-item">
            <?php \App\UiPart\ProductCard::getProductCard([
                'name' => $product['name'],
                'img' => isset($product['img']) ? '/assets/products/'.$product['img'] : '/assets/img/prod.webp',
                'category' => $product['category']['name'],
                'price' => $product['price'],
                'slug' => ProductsEnum::generateProductSlug($product) ?? '',
            ]); ?>
        </div>
    <?php endforeach; ?>
</section>
<?php \App\UiPart\Footer::renderFooter() ?>
</body>
</html>