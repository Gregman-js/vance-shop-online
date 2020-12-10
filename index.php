<?php
include_once 'loader.php';

use App\Enum\CategoryEnum;
use App\Enum\ProductsEnum;
use App\UiPart\Navbar;

?>
<!doctype html>
<html lang="pl">
<head>
    <title>Vance.pl - obuwie</title>
    <?php Navbar::getMeta() ?>
    <link rel="stylesheet" href="assets/css/homepage.css">
    <script src="assets/js/homepage.js"></script>
</head>
<body>
<?php Navbar::renderNavbar() ?>
<section class="hero">
    <div class="hero-container">
        <div class="hero-text">
            <div class="hero-text-title">
                VANCE
            </div>
            <p>
                Nowy wymiar butów
            </p>
        </div>
    </div>
</section>
<section class="prepand">
    <h1>
        Nowy styl butów
    </h1>
    <p>
        Inspiracją dla naszych nowych produktów była idea powrotu do natury i nowego początku nowego sezonu,
        podczas gdy przyglądamy się polskim miasteczkom targowym i targom antyków, które mają fascynujące sklepy,
        stragany i galerie, na których można odkryć najbardziej niesamowite pamiątki.
    </p>
</section>
<?php
$categories = CategoryEnum::getCategories();
$countCategories = count($categories);

foreach ($categories as $idx => $category): ?>
<section class="for-men slides">
    <div class="slides-head-box">
        <?php if ($idx % 2 == 0): ?>
            <div class="slides-head-img" style="background-image: url('<?= $category['img'] ?>');"></div>
        <?php endif; ?>
        <div class="slides-head-text">
            <div class="slides-head-text-content">
                <h2>
                    <?= $category['header'] ?>
                </h2>
                <hr>
                <p>
                    <?= $category['desc'] ?>
                </p>
            </div>
        </div>
        <?php if ($idx % 2 == 1): ?>
            <div class="slides-head-img" style="background-image: url('<?= $category['img'] ?>');"></div>
        <?php endif; ?>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach (ProductsEnum::getProducts($category) as $product): ?>
                <div class="swiper-slide">
                    <?php \App\UiPart\ProductCard::getProductCard([
                        'name' => $product['name'],
                        'img' => isset($product['img']) ? 'assets/products/'.$product['img'] : 'assets/img/prod.webp',
                        'category' => $product['category']['name'],
                        'price' => $product['price'],
                        'slug' => ProductsEnum::generateProductSlug($product) ?? '',
                    ]); ?>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
    </div>
</section>
<?php if ($countCategories !== $idx + 1): ?>
    <section class="space-section"></section>
<?php endif; ?>
<?php endforeach; ?>
<?php \App\UiPart\Footer::renderFooter() ?>
</body>
</html>