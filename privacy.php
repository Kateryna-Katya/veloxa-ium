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
                <h1 class="text-accent">Политика конфиденциальности</h1>

                <p>
                    Политика конфиденциальности распространяется на персональные данные,
                    предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания различного рода
                    услуг по консалтингу, так и для других взаимодействий в электронном
                    формате, а также при участии клиентов в экспертных программах и акциях, оказывая
                    техническую поддержку и информационное сопровождение.
                </p>

                <p>
                    <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                    в действующие положения Политики конфиденциальности. Эти изменения будут иметь приоритет над текущими
                    положениями. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц, которые имеют свои
                    собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за содержание и соблюдение
                    конфиденциальности любой сторонней компании. Предоставляя свои данные, вы даете полное согласие
                    на их обработку способами, предусмотренными настоящей Политикой.
                </p>

                <div class="pages__block">
                    <h2>Порядок сбора, хранения и уничтожения данных</h2>
                    <p>
                        <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                        пользователя и исключительно для предоставления качественных услуг: доступа к платформе,
                        участия в стратегических сессиях и внедрения инноваций. Для
                        предотвращения утечки данных мы используем полный комплекс мер информационной безопасности, включая современные протоколы шифрования.
                    </p>
                    <p>
                        Максимальный срок хранения персональных данных составляет 75
                        лет с даты получения информации. В остальных случаях компания хранит данные клиента до
                        завершения своей деятельности или до момента официального отзыва согласия пользователем.
                    </p>
                </div>

                <div class="pages__block">
                    <h2>Техническая информация</h2>
                    <ul class="pages__list">
                        <li>время доступа и IP-адрес;</li>
                        <li>источники обращения на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                        <li>Интернет-страницы, посещаемые пользователем;</li>
                        <li>просмотры информационных и рекламных блоков;</li>
                        <li>иная техническая информация, предоставляемая браузером;</li>
                        <li>номер телефона (в случае звонка по контактам, указанным на сайте).</li>
                    </ul>
                </div>

                <div class="pages__block">
                    <h2>Цели обработки данных</h2>
                    <ul class="pages__list">
                        <li>предоставление консалтинговых услуг и доступа к аналитической платформе;</li>
                        <li>учет пожеланий при разработке новых технологических решений;</li>
                        <li>информирование об акциях и новых материалах через e-mail;</li>
                        <li>обеспечение качественной экспертной поддержки в Италии и ЕС.</li>
                    </ul>
                </div>

                <div class="pages__block">
                    <h2>Передача данных третьим лицам</h2>
                    <p><strong><?= $domainTitle ?></strong> не предоставляет данные клиентов третьим лицам, за исключением:</p>
                    <ul class="pages__list">
                        <li>получения прямого согласия пользователя на такую передачу;</li>
                        <li>по требованию компетентных органов Италии в соответствии с законодательством;</li>
                        <li>случаев стратегического слияния или поглощения компании.</li>
                    </ul>
                </div>

                <div class="pages__block">
                    <h2>Права пользователя (GDPR)</h2>
                    <p>
                        Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами GDPR, 
                        пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong> по адресу: 
                        <br><br>
                        Email: <a href="mailto:hello@<?= $fullDomain ?>" class="text-accent">hello@<?= $fullDomain ?></a>
                    </p>
                </div>

                <div class="pages-footer">
                    <p>Последнее обновление: Февраль 2026. Платформа года.</p>
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