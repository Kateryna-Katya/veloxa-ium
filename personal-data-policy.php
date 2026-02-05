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
                <h1 class="text-accent">Политика обработки персональных данных</h1>

                <div class="pages__block">
                    <h2>1. Общие положения</h2>
                    <p>
                        Настоящая политика обработки персональных данных (далее —
                        «Политика») определяет порядок и условия обработки персональных
                        данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                        устанавливает меры по обеспечению безопасности этих данных в соответствии с регламентом GDPR (EU) 2016/679.
                    </p>
                    <p>
                        1.1. Важнейшей целью и условием осуществления своей деятельности
                        Оператор считает соблюдение прав и свобод человека и гражданина при
                        обработке его персональных данных, в том числе защиты прав на
                        неприкосновенность частной жизни.
                    </p>
                    <p>
                        1.2. Настоящая Политика применяется ко всей информации, которую
                        Оператор может получить о посетителях (далее — «Пользователи»)
                        веб-сайта <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="pages__block">
                    <h2>2. Основные понятия</h2>
                    <ul class="pages__list">
                        <li><strong>Веб-сайт</strong> — ресурс Оператора, доступный по адресу <strong><?= $fullDomain ?></strong>.</li>
                        <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                        <li><strong>Персональные данные</strong> — любая информация, относящаяся к Пользователю.</li>
                        <li><strong>Безопасность</strong> — защищенность данных от неправомерного доступа, изменения или уничтожения.</li>
                    </ul>
                </div>

                <div class="pages__block">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <p>Оператор может обрабатывать следующие категории данных:</p>
                    <ul class="pages__list">
                        <li>
                            <strong>Данные Пользователя:</strong>
                            <ul>
                                <li>Имя, Фамилия;</li>
                                <li>Адрес электронной почты (Email);</li>
                                <li>Номера телефонов (валидация по стандартам Италии +39).</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Автоматические данные:</strong>
                            <ul>
                                <li>Обезличенные данные о посетителях (файлы «cookie»), собранные сервисами Google Analytics.</li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="pages__block">
                    <h2>4. Цели обработки</h2>
                    <ul class="pages__list">
                        <li>Идентификация Пользователя для доступа к AI-практикам.</li>
                        <li>Установление обратной связи и экспертная поддержка.</li>
                        <li>Заключение договоров на консалтинговые услуги в Италии и ЕС.</li>
                        <li>Информирование об обновлениях платформы <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="pages__block">
                    <h2>5. Правовые основания</h2>
                    <p>Оператор обрабатывает данные на следующих основаниях:</p>
                    <ul class="pages__list">
                        <li>Добровольное согласие Пользователя при заполнении форм.</li>
                        <li>Разрешение на использование «cookie» в настройках браузера.</li>
                        <li>Необходимость выполнения преддоговорных обязательств.</li>
                    </ul>
                </div>

                <div class="pages__block">
                    <h2>6. Безопасность и хранение</h2>
                    <ul class="pages__list">
                        <li>Оператор принимает все меры по защите данных согласно нормам GDPR.</li>
                        <li>Данные не передаются третьим лицам без законного основания.</li>
                        <li>Пользователь может отозвать согласие, написав на <a href="mailto:hello@<?= $fullDomain ?>" class="text-accent">hello@<?= $fullDomain ?></a>.</li>
                    </ul>
                </div>

                <div class="pages__block">
                    <h2>7. Контакты</h2>
                    <p>
                        По любым вопросам обработки данных на <strong><?= $domainTitle ?></strong>:
                        <br><br>
                        Email: <a href="mailto:hello@<?= $fullDomain ?>" class="text-accent">hello@<?= $fullDomain ?></a><br>
                        Адрес: Via del Corso, 418, 00186 Roma RM, Italy
                    </p>
                </div>

                <div class="pages-footer">
                    <p>Актуальная версия Политики <strong><?= $domainTitle ?></strong>: Февраль 2026</p>
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