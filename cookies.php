<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — AI-инструменты для реальных задач
    </title>
<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M16 2L30 16L16 30L2 16L16 2Z' stroke='%2300f2ff' stroke-width='2' stroke-linejoin='round'/%3E%3Cpath d='M16 8L24 16L16 24L8 16L16 8Z' fill='%2300f2ff'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Space+Grotesk:wght@500;700&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#features" class="nav__link">Возможности</a></li>
                    <li><a href="./#cases" class="nav__link">Практики</a></li>
                    <li><a href="./#about" class="nav__link">Об ИИ</a></li>
                    <li><a href="./#faq" class="nav__link">FAQ</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--outline header__cta">Связаться</a>

            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
    <main>
    <section class="pages">
        <div class="container">
            <div class="pages__content fade-in">
                <h1 class="text-accent">Политика использования файлов cookie</h1>

                <p>
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии. Настоящая политика подробно объясняет, какие
                    именно технологии мы применяем, для каких целей, и как вы можете ими
                    управлять.
                </p>

                <div class="pages__block">
                    <h2>Что такое файлы cookie?</h2>
                    <p>
                        Файл cookie — это небольшой фрагмент данных (текстовый файл),
                        который веб-сайт сохраняет на вашем устройстве (компьютере, планшете
                        или смартфоне), когда вы его посещаете. Это позволяет платформе 
                        <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                        (например, логин, язык, настройки региона Италия и другие параметры) 
                        в течение определенного времени, чтобы вам не приходилось вводить их 
                        повторно при каждом визите.
                    </p>
                </div>

                <div class="pages__block">
                    <h2>Какие типы файлов cookie мы используем?</h2>
                    <p>
                        Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                        следующим категориям:
                    </p>
                    <ul class="pages__list">
                        <li>
                            <strong>Строго необходимые файлы cookie:</strong> Эти файлы
                            критически важны для функционирования сайта. Они позволяют вам
                            перемещаться по страницам <strong><?= $domainTitle ?></strong> и использовать его базовые возможности. 
                        </li>
                        <li>
                            <strong>Аналитические и производительные файлы cookie:</strong>
                            Эти файлы собирают анонимную информацию о том, как посетители
                            используют наш сайт, помогая нам улучшать контент.
                        </li>
                        <li>
                            <strong>Функциональные файлы cookie:</strong> Эти файлы позволяют
                            сайту запоминать ваш выбор для предоставления более
                            персонализированного опыта в рамках AI-практик.
                        </li>
                        <li>
                            <strong>Рекламные (маркетинговые) файлы cookie:</strong> Эти файлы
                            используются для доставки объявлений, соответствующих вашим интересам.
                        </li>
                    </ul>
                </div>

                <div class="pages__block">
                    <h2>Зачем мы используем файлы cookie?</h2>
                    <p>Основные цели использования файлов cookie на сайте <strong><?= $domainTitle ?></strong>:</p>
                    <ul class="pages__list">
                        <li>Обеспечение стабильной и безопасной работы сайта.</li>
                        <li>Анализ пользовательского поведения для оптимизации структуры.</li>
                        <li>Персонализация контента и настроек для удобства пользователей в Европе.</li>
                        <li>Предоставление релевантных маркетинговых материалов.</li>
                    </ul>
                </div>

                <div class="pages__block">
                    <h2>Ваш выбор и управление</h2>
                    <p>
                        Вы имеете полный контроль над файлами cookie. Вы можете в любой
                        момент изменить свои настройки в браузере. Однако, обратите
                        внимание: отключение строго необходимых cookie может привести к
                        некорректной работе некоторых функций нашего сайта.
                    </p>
                </div>

                <div class="pages__block">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики
                        использования файлов cookie на <strong><?= $domainTitle ?></strong>, пожалуйста, свяжитесь с нами:
                    </p>
                    <div class="pages__contacts-box">
                        <p>Email: <a href="mailto:hello@<?= $fullDomain ?>" class="text-accent">hello@<?= $fullDomain ?></a></p>
                        <p>Телефон: <a href="tel:+390697637603" class="text-accent">+39 06 9763 7603</a></p>
                        <p>Адрес: Via del Corso, 418, 00186 Roma RM, Italy</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
   <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__tagline">Инновационная технология, которая меняет правила игры в повседневной жизни.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#features">Возможности</a></li>
                    <li><a href="./#cases">Практики</a></li>
                    <li><a href="./#about">Об ИИ</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+390697637603">+39 06 9763 7603</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>Via del Corso, 418, 00186 Roma RM, Italy</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026
                <?= $domainTitle ?>. Платформа года. Все права защищены.
            </p>
        </div>
    </footer>
<div id="cookie-popup" class="cookie-popup">
    <div class="cookie-popup__content">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button id="cookie-accept" class="btn btn--primary">Принять</button>
    </div>
</div>

<div class="mobile-menu" id="mobile-menu">
    <nav class="mobile-nav">
        <a href="./#hero" class="mobile-nav__link">Главная</a>
        <a href="./#features" class="mobile-nav__link">Возможности</a>
        <a href="./#cases" class="mobile-nav__link">Практики</a>
        <a href="./#about" class="mobile-nav__link">Об ИИ</a>
        <a href="./#faq" class="mobile-nav__link">FAQ</a>
        <a href="./#contact" class="mobile-nav__link btn btn--primary">Начать сейчас</a>
    </nav>
</div>

<script src="script.js" defer></script>

</body>

</html>