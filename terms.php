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
                <h1 class="text-accent">Условия использования</h1>

                <p>
                    Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                    (далее — «Условия» или «Соглашение») представляют собой юридически
                    обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>
                    (далее — «Компания», «мы», «нас»). Пожалуйста, внимательно
                    ознакомьтесь с ними. Используя наш сайт и любые связанные с ним
                    услуги, вы подтверждаете свое полное и безоговорочное согласие с
                    данными Условиями.
                </p>

                <div class="pages__block">
                    <h2>1. Предмет Соглашения</h2>
                    <p>
                        Компания предоставляет Пользователю доступ к использованию сайта
                        <strong><?= $fullDomain ?></strong> и его функционала, включая, но не ограничиваясь: доступ к
                        инновационным материалам, статьям в блоге, экспертным консультациям и инструментам 
                        AI-развития. Настоящее Соглашение регулирует все аспекты взаимодействия Пользователя с платформой.
                    </p>
                </div>

                <div class="pages__block">
                    <h2>2. Правила платформы</h2>
                    <p>При использовании платформы <strong><?= $domainTitle ?></strong> запрещается:</p>
                    <ul class="pages__list">
                        <li>Публиковать или распространять незаконный, вредоносный или клеветнический контент.</li>
                        <li>Предпринимать действия, нарушающие безопасность цифровой инфраструктуры платформы.</li>
                        <li>Использовать автоматизированные скрипты (ботов) без нашего разрешения.</li>
                        <li>Предоставлять недостоверную информацию при регистрации на консультации.</li>
                    </ul>
                </div>

                <div class="pages__block">
                    <h2>3. Интеллектуальная собственность</h2>
                    <p>
                        Весь контент на сайте <strong><?= $fullDomain ?></strong> (тексты, код, графика, логотипы) 
                        является объектом интеллектуальной собственности Компании. Вам предоставляется ограниченная 
                        лицензия для личного некоммерческого использования. Копирование или распространение материалов 
                        без письменного разрешения строго запрещено.
                    </p>
                </div>

                <div class="pages__block">
                    <h2>4. Ограничение ответственности</h2>
                    <p>
                        Материалы предоставляются по принципу «как есть». Мы не гарантируем абсолютную точность данных 
                        в контексте динамично меняющегося рынка в <strong>Италии</strong> и странах ЕС. Компания не 
                        несет ответственности за убытки, возникшие в результате использования или невозможности 
                        использования платформы.
                    </p>
                </div>

                <div class="pages__block">
                    <h2>5. Разрешение споров</h2>
                    <p>
                        Все разногласия стороны стремятся разрешить путем переговоров. В случае недостижения согласия, 
                        спор подлежит рассмотрению в соответствии с действующим законодательством по месту регистрации 
                        Компании и нормами международного права ЕС.
                    </p>
                </div>

                <div class="pages__block">
                    <h2>6. Контакты</h2>
                    <div class="pages__contacts-box">
                        <p>Email: <a href="mailto:hello@<?= $fullDomain ?>" class="text-accent">hello@<?= $fullDomain ?></a></p>
                        <p>Телефон: <a href="tel:+390697637603" class="text-accent">+39 06 9763 7603</a></p>
                        <p>Адрес: Via del Corso, 418, 00186 Roma RM, Italy</p>
                    </div>
                </div>

                <div class="pages-footer">
                    <p>Последнее обновление: Февраль 2026. Редакция для региона Италия.</p>
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