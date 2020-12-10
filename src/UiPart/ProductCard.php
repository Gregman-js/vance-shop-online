<?php

namespace App\UiPart;


use App\Enum\ConfigEnum;

class ProductCard
{
    public static function getProductCard($params)
    {
        $defaultParams = [
            'name' => '',
            'img' => '',
            'category' => '',
            'price' => '',
            'slug' => '',
        ];
        $params = array_merge($defaultParams, $params);
        ?>
        <a class="product-card hvr-float-shadow hvr-round-corners" href="product.php?name=<?= $params['slug'] ?>">
            <div class="product-card-image">
                <img src="<?= htmlspecialchars($params['img']) ?>"
                     loading="lazy">
            </div>
            <div class="product-card-text">
                <div class="product-card-text-title">
                    <?= htmlspecialchars($params['name']) ?>
                    <span class="product-card-price">
                        <?= $params['price'] ?> zł
                    </span>
                </div>
                <div class="product-card-text-subtitle">
                    <?= htmlspecialchars($params['category']) ?>
                </div>
            </div>
        </a>
        <?php
    }
}