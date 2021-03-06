<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

Loc::loadMessages(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>" >
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">



    <?$APPLICATION->ShowHead();?>

    <?
    CJSCore::Init( array("jquery3") );
    // bootstrap 5
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. "/js/bootstrap/bootstrap.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. "/js/script.js");

    // плагин jquery.mCustomScrollbar
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/js/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.js');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/js/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.css');

    // todo перенести в компонент 1
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. "/js/swiper.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. "/js/swiper-bundle.min.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/swiper.min.css");


     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap/bootstrap.css");
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap/bootstrap-grid.css");
//    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/bootstrap-icons.css");
    //    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/swiper-bundle.min.css");



    ?>
    <script src="https://cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.concat.min.js"></script>

	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div class="wrapper overlay">
    <header class="header">
        <div class="header-top">
            <div class="header-top__body">
                <a href="index.html" class="logo">
                    <img class="img-fluid" src="./img/logo.png" alt=""/>
                </a>
                <div class="header-search">
                    <div class="header-search__wrapper">
                        <div class="header-search__input">
                            <input type="text" class=""/>
                        </div>
                        <button type="submit" class="button">Найти<i class="bi bi-search ms-3"></i></button>
                    </div>
                </div>
                <div class="login-users">
                    Вход для пользователей
                    <i class="bi bi-person ms-3"></i>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom__body">
                    <div class="header-bottom__col">
                        <div class="header-bottom__item">USD: <span id="usd"></span></div>
                        <div class="header-bottom__item">EUR: <span id="eur"></span></div>
                        <div class="header-bottom__item">RUB: <span id="rub"></span></div>
                    </div>
                    <div class="header-bottom__col">
                        <div class="header-bottom__item">Базовая величина: <span>32 BYN</span></div>
                        <div class="header-bottom__item">Базовая арендная величина: <span>16,9 BYN</span></div>
                        <div class="header-bottom__item">Базовая ставка: <span>210 BYN</span></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="header-menu scrollbar-y">
            <button type="button" class="header-menu__burger">
                <i class="bi bi-arrow-right-circle"></i>
            </button>
            <nav class="menu-header">
                <ul class="menu-header__list">
                    <li>
                        <div class="menu-header__collapse">
                            <a href="#" class="menu-header__link" title="Статьи"><i class="bi bi-card-heading me-3"></i>Статьи</a>
                            <button class="menu-header__button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#articles-collapse" aria-expanded="false" aria-current="true">
                                <i class="bi bi-chevron-down"></i>
                            </button>
                        </div>
                        <ul class="submenu-header collapse" id="articles-collapse">
                            <li><a href="#" class="submenu-header__link">Налогообложение ИП</a></li>
                            <li><a href="#" class="submenu-header__link">Налогообложение организаций</a></li>
                            <li><a href="#" class="submenu-header__link">Бухгалтерский учет</a></li>
                            <li><a href="#" class="submenu-header__link">Государственное регулирование</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="menu-header__collapse">
                            <a href="#" class="menu-header__link" title="Новости"><i class="bi bi-newspaper me-3"></i>Новости</a>
                            <button class="menu-header__button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#news-collapse" aria-expanded="false" aria-current="true">
                                <i class="bi bi-chevron-down"></i>
                            </button>
                        </div>
                        <ul class="submenu-header collapse" id="news-collapse">
                            <li><a href="#" class="submenu-header__link">Новости законодательства</a></li>
                            <li><a href="#" class="submenu-header__link">Экономические новости</a></li>
                            <li><a href="#" class="submenu-header__link">Международные новости</a></li>
                            <li><a href="#" class="submenu-header__link">События</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="menu-header__collapse">
                            <a href="#" class="menu-header__link" title="Формы документов"><i
                                        class="bi bi-file-earmark-ruled me-3"></i>Формы документов</a>
                            <button class="menu-header__button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#forms-doc-collapse" aria-expanded="false" aria-current="true">
                                <i class="bi bi-chevron-down"></i>
                            </button>
                        </div>
                        <ul class="submenu-header collapse" id="forms-doc-collapse">
                            <li><a href="#" class="submenu-header__link">Для физических лиц</a></li>
                            <li><a href="#" class="submenu-header__link">Для индивидуальных предпринимателей</a></li>
                            <li><a href="#" class="submenu-header__link">Для юридических лиц</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-header__link" title="Налоговый календарь"><i
                                    class="bi bi-calendar2-week me-3"></i>Налоговый календарь</a>
                    </li>
                    <li>
                        <a href="#" class="menu-header__link" title="Курсы валют"><i
                                    class="bi bi-currency-exchange me-3"></i>Курсы валют</a>
                    </li>
                    <li>
                        <div class="menu-header__collapse">
                            <a href="#" class="menu-header__link" title="Справочная информация"><i
                                        class="bi bi-table me-3"></i>Справочная информация</a>
                            <button class="menu-header__button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ref-info-collapse" aria-expanded="false" aria-current="true">
                                <i class="bi bi-chevron-down"></i>
                            </button>
                        </div>
                        <ul class="submenu-header collapse" id="ref-info-collapse">
                            <li><a href="#" class="submenu-header__link">Курсы валют</a></li>
                            <li><a href="#" class="submenu-header__link">Налоговый календарь</a></li>
                            <li><a href="#" class="submenu-header__link">Основные показатели</a></li>
                            <li><a href="#" class="submenu-header__link">Проверка контрагента</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu-header__list">
                    <li>
                        <a href="#" class="menu-header__link" title="Авторам"><i class="bi bi-pencil-square me-3"></i>Авторам</a>
                    </li>
                    <li>
                        <a href="#" class="menu-header__link" title="Рекламодателям"><i class="bi bi-megaphone me-3"></i>Рекламодателям</a>
                    </li>
                    <li>
                        <a href="#" class="menu-header__link" title="Формы Помощь"><i
                                    class="bi bi-question-circle me-3"></i>Помощь</a>
                    </li>
                </ul>
            </nav>
        </div>

    </header>
    <body>
    <main class="page">