<?php
include_once 'loader.php';

use App\Enum\CategoryEnum;
use App\Enum\ProductsEnum;
use App\UiPart\Navbar;

?>
<!doctype html>
<html lang="pl">
<head>
    <title>Vance.pl - kontakt</title>
    <?php Navbar::getMeta() ?>
    <link rel="stylesheet" href="assets/css/contact.css">
</head>
<body>
<?php Navbar::renderNavbar() ?>
<section class="hero">
    <div class="hero-container">
        <div class="hero-text">
            <div class="hero-text-title">
                Kontakt
            </div>
            <p>
                Skontaktuj się z nami lub wypełnij formularz poniżej.
            </p>
        </div>
    </div>
</section>
<section class="contact">
<div class="contact-container">
    <div class="contact-form">
        <h1>
            Wyślij wiadomość
        </h1>
        <div class="input-group">
            <input type="text" id="input-firstName" class="contact-input" placeholder="Imię">
            <label for="input-firstName" class="input-label">Imię</label>
        </div>
        <div class="input-group">
            <input type="text" id="input-lastName" class="contact-input" placeholder="Nazwisko">
            <label for="input-lastName" class="input-label">Nazwisko</label>
        </div>
        <div class="input-group">
            <input type="text" id="input-topic" class="contact-input" placeholder="Tytuł">
            <label for="input-topic" class="input-label">Tytuł</label>
        </div>
        <div class="input-group">
            <textarea id="input-message" class="contact-input" cols="30" rows="10" placeholder="Wiadomość"></textarea>
            <label for="input-message" class="input-label">Wiadomość</label>
        </div>
        <div class="contact-form-button-box">
            <button class="contact-form-button" onclick="superRichSiteForMyFutureJobWhichProbablyIsGoogle()">
                Wyślij
            </button>
        </div>
    </div>
    <div class="contact-info">
        <h1 class="contact-info-header">
            Jak możemy ci pomóc?
        </h1>
        <p>
            Wybierz sposób w jaki chcesz się z nami skontaktować
        </p>
        <h2>
            Adres
        </h2>
        <p>
            Vance sp. Z o.o,<br> ul Burkacja 4,<br> 43,333 Wrocław
        </p>
        <h2>
            Email
        </h2>
        <p>
            jan.zapolski@vance.pl
        </p>
        <h2>
            Telefon
        </h2>
        <p>
            tel.: 712-232-135
        </p>
        <h2>
            Praca
        </h2>
        <p>
            Dołącz do nas już teraz i zyskaj stabilną posadę<br> w zaufanym zespole.
        </p>
    </div>
</div>
</section>
<?php \App\UiPart\Footer::renderFooter() ?>
</body>
</html>