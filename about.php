<?php
include_once 'loader.php';

use App\Enum\CategoryEnum;
use App\Enum\ProductsEnum;
use App\UiPart\Navbar;

?>
<!doctype html>
<html lang="pl">
<head>
    <title>Vance.pl - O nas</title>
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
                O nas
            </div>
            <p>
                Naszą pasją są buty
            </p>
        </div>
    </div>
</section>
<section class="prepand">
    <h1>
        O Vance
    </h1>
    <p>
        Vance oferuje swoim klientom więcej niż tylko buty!
        Vance gwarantuje niezapomniane przeżycia podczas zakupów.
        Naszym celem jest zapewnienie naszym klientom szerokiego asortymentu najmodniejszego obuwia i odzieży,
        w połączeniu z doskonałą obsługą klienta oraz zaletami prostego
        i bezpiecznego robienia zakupów przez internet.
    </p>
</section>
<section class="slides">
    <div class="slides-head-box">
            <div class="slides-head-img" style="background-image: url('assets/img/about-shop.jpg');"></div>
        <div class="slides-head-text">
            <div class="slides-head-text-content">
                <h2>
                    Łatwa nawigacja i intuicyjna obsługa
                </h2>
                <hr>
                <p style="text-align: justify">
                    Nasz sklep internetowy jest przejrzyście zorganizowany i łatwy w obsłudze. Zarówno podczas pierwszej wizyty na stronie startowej jak i szukania konkretnych modeli, nasi klienci są tak prowadzeni przez sklep, aby mogli szybko i łatwo dokonać zakupów.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="slides">
    <div class="slides-head-box">
        <div class="slides-head-text">
            <div class="slides-head-text-content">
                <h2>
                    Nieskomplikowane i szybkie zakupy
                </h2>
                <hr>
                <p style="text-align: justify">
                    W momencie, gdy artykuły znajdą się już w koszyku, nasi klienci mogą wybrać pomiędzy różnymi, bezpiecznymi rodzajami płatności. Można ich dokonać kartą kredytową lub PayPalem, z góry albo za pobraniem. Po pomyślnym złożeniu zamówienia nasi klienci zostaną szczegółowo poinformowani o aktualnym statusie ich zamówienia. Każdy klient otrzyma numer wysyłki, dzięki któremu będzie mógł śledzić swoją paczkę aż do jej otrzymania.
                </p>
            </div>
        </div>
        <div class="slides-head-img" style="background-image: url('assets/img/about-shoes.jpg');"></div>
    </div>
</section>
<section class="slides">
    <div class="slides-head-box">
        <div class="slides-head-img" style="background-image: url('assets/img/about-sizes.jpg');"></div>
        <div class="slides-head-text">
            <div class="slides-head-text-content">
                <h2>
                    Bezpłatna przesyłka i bezpłatny zwrot
                </h2>
                <hr>
                <p style="text-align: justify">
                    W Vance klient nie płaci za przesyłkę swojego zamówienia ani grosza! Inaczej niż w pozostałych sklepach internetowych, w Vance nie ma minimalnej kwoty zamówienia. Nie ma dla nas znaczenia, czy buty kosztują 39 zł czy 399 zł – przesyłka jest zawsze darmowa!
                    Obuwie i odzież mogą się różnić rozmiarami – dlatego też zrozumiemy, jeśli na przykład jakieś buty nie będą pasować lub się nie spodobają! Z tego powodu także przesyłka zwrotna jest w Vance bezpłatna.
                </p>
            </div>
        </div>
    </div>
</section>
<?php \App\UiPart\Footer::renderFooter() ?>
</body>
</html>