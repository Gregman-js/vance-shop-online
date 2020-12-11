<?php
include_once 'loader.php';

use App\Enum\ConfigEnum;
use App\Enum\ProductsEnum;
use App\UiPart\Navbar;

if (false === isset($_GET['name'])) {
    header("Location: index.php");
    die();
}
$product = ProductsEnum::getProductBySlug($_GET['name']);
if (null === $product) {
    header("Location: index.php");
    die();
}

?>
<!doctype html>
<html lang="pl">
<head>
    <title>Vance.pl - <?= $product['name'] ?></title>
    <link rel="stylesheet" href="assets/css/product.css">
    <?php Navbar::getMeta() ?>
</head>
<body style="background-image: url('<?= isset($product['img']) ? '/assets/products/'.$product['img'] : '/assets/img/prod.webp' ?>');">
<?php Navbar::renderNavbar() ?>
<section class="hero">
    <div class="hero-container">
        <div class="hero-text">
            <div class="hero-text-title">
                <?= $product['name'] ?>
            </div>
            <p>
                <?= $product['category']['name'] ?>
            </p>
        </div>
    </div>
</section>
<section class="product">
    <div class="product-container">
        <div class="product-img">
            <img src="<?= isset($product['img']) ? '/assets/products/'.$product['img'] : '/assets/img/prod.webp' ?>" alt="">
        </div>
        <div class="product-info">
            <h1 class="product-info-header">
                <?= $product['name'] ?>
            </h1>
            <hr>
            <h3>
                <?= $product['price'] ?> zł
            </h3>
            <p>
                <?= $product['desc'] ?? '' ?>
            </p>
            <button class="product-add-card" onclick="superRichSiteForMyFutureJobWhichProbablyIsGoogle()">
                Dodaj do koszyka
            </button>
        </div>
    </div>
    <h3 class="other-header">
        Zobacz inne produkty
    </h3>
    <div class="show">
        <?php
        $otherProducts = array_slice(ProductsEnum::getProducts($product['category'], $product), 0, 10);
        shuffle($otherProducts);
        foreach ($otherProducts as $otherProduct): ?>
            <div class="show-item">
                <?php \App\UiPart\ProductCard::getProductCard([
                    'name' => $otherProduct['name'],
                    'img' => isset($otherProduct['img']) ? '/assets/products/'.$otherProduct['img'] : '/assets/img/prod.webp',
                    'category' => $otherProduct['category']['name'],
                    'price' => $otherProduct['price'],
                    'slug' => ProductsEnum::generateProductSlug($otherProduct) ?? '',
                ]); ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php \App\UiPart\Footer::renderFooter() ?>
</body>
</html>