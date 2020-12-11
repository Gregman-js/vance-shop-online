<?php
namespace App\UiPart;


use App\Enum\CategoryEnum;
use App\Enum\ConfigEnum;

class Footer
{
    public static function renderFooter() { ?>
        <footer>
            <div class="footer-content">
                <div>
                    <h1>
                        <a class="main-link" href="index.php">
                            Vance
                        </a>
                    </h1>
                    <p>Znajdź najlepsze buty dla siebie!</p>
                </div>
                <div>
                    <h3>Strony</h3>
                    <ul class="footer-list">
                        <li><a href="index.php">Strona główna</a></li>
                        <li><a href="contact.php">Kontakt</a></li>
                        <li><a href="about.php">O nas</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Kategorie</h3>
                    <ul class="footer-list">
                        <?php foreach (CategoryEnum::getCategories() as $category) { ?>
                            <li><a href="category.php?cat=<?= $category['slug'] ?>"><?= $category['name'] ?></a></li>

                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                © 2020, Grzegorz Libiszewski<br>
                Zdjęcia produktów oraz ich opis nie są własnością ten strony. Stanowią materiał prezentacyjny. <br>

            </div>
        </footer>
    <?php }
}