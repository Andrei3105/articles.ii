<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("шаблоон");
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:catalog.section.list",
    "main_headings",
    Array(
        "ADD_SECTIONS_CHAIN" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "COUNT_ELEMENTS" => "Y",
        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
        "FILTER_NAME" => "sectionsFilter",
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "content",
        "SECTION_CODE" => "",
        "SECTION_FIELDS" => array("", ""),
        "SECTION_ID" => $_REQUEST["SECTION_ID"],
        "SECTION_URL" => "",
        "SECTION_USER_FIELDS" => array("", ""),
        "SHOW_PARENT_NAME" => "Y",
        "TOP_DEPTH" => "2",
        "VIEW_MODE" => "LINE"
    )
);?>

    <section class="my-5">
        <div class='container'>
            <div class="row g-4">
                <div class="col-xl-7">
                    <div class="title-underline">
                        <h3 class="title-underline__title">
                            <i class="bi bi-card-heading me-2"></i>
                            Последние статьи
                        </h3>
                        <a href="#" class="title-underline__link">
                            Все статьи
                            <i class="bi bi-arrow-right ms-3"></i>
                        </a>
                    </div>
                    <div class="list-recent-aticles">
                        <div class="item-article">
                            <div class="item-article__bookmark">
                                <i class="bi bi-bookmark-star-fill"></i>
                            </div>
                            <div class="item-article__category">
                                Налогообложение ИП / Таможенное регулирование
                            </div>
                            <a href="#" class="item-article__title">
                                <i class="bi bi-lock-fill me-3"></i>
                                Как изменить сроки уплаты таможенных платежей
                            </a>
                            <div class="item-article__text">В современных условиях индивидуальным предпринимателям
                                иногда требуется изменить срок уплаты платежей, взимаемых таможней. Как это
                                правильно сделать — ответ в настоящей публикации.
                            </div>
                            <div class="item-article__footer">
                                <div class="item-article__date date">
                                    <i class="bi bi-calendar me-2"></i>
                                    20.05.2022
                                </div>
                                <div class="item-article__list-tags">
                                    <i class="bi bi-tag"></i>
                                    <div class="d-flex flex-wrap">
                                        <div class="item-article__tag">Таможенные платежи</div>
                                        <div class="item-article__tag">ЕАЭС</div>
                                        <div class="item-article__tag">ЕАЭС</div>
                                        <div class="item-article__tag">Срок уплаты</div>
                                        <div class="item-article__tag">Срок уплаты</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-article__read-more">
                                <a href="#">
                                    Читать
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="item-article">
                            <div class="item-article__bookmark">
                                <i class="bi bi-bookmark-star-fill"></i>
                            </div>
                            <div class="item-article__category">
                                Налогообложение ИП / Таможенное регулирование
                            </div>
                            <a href="#" class="item-article__title">
                                <i class="bi bi-lock-fill me-3"></i>
                                Как изменить сроки уплаты таможенных платежей
                            </a>
                            <div class="item-article__text">В современных условиях индивидуальным предпринимателям
                                иногда требуется изменить срок уплаты платежей, взимаемых таможней. Как это
                                правильно сделать — ответ в настоящей публикации.
                            </div>
                            <div class="item-article__footer">
                                <div class="item-article__date date">
                                    <i class="bi bi-calendar me-2"></i>
                                    20.05.2022
                                </div>
                                <div class="item-article__list-tags">
                                    <i class="bi bi-tag"></i>
                                    <div class="d-flex flex-wrap">
                                        <div class="item-article__tag">Таможенные платежи</div>
                                        <div class="item-article__tag">ЕАЭС</div>
                                        <div class="item-article__tag">Срок уплаты</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-article__read-more">
                                <a href="#">
                                    Читать
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="item-article">
                            <div class="item-article__bookmark">
                                <i class="bi bi-bookmark-star-fill"></i>
                            </div>
                            <div class="item-article__category">
                                Налогообложение ИП / Таможенное регулирование
                            </div>
                            <a href="#" class="item-article__title">
                                <i class="bi bi-lock-fill me-3"></i>
                                Как изменить сроки уплаты таможенных платежей
                            </a>
                            <div class="item-article__text">В современных условиях индивидуальным предпринимателям
                                иногда требуется изменить срок уплаты платежей, взимаемых таможней. Как это
                                правильно сделать — ответ в настоящей публикации.
                            </div>
                            <div class="item-article__footer">
                                <div class="item-article__date date">
                                    <i class="bi bi-calendar me-2"></i>
                                    20.05.2022
                                </div>
                                <div class="item-article__list-tags">
                                    <i class="bi bi-tag"></i>
                                    <div class="d-flex flex-wrap">
                                        <div class="item-article__tag">Таможенные платежи</div>
                                        <div class="item-article__tag">ЕАЭС</div>
                                        <div class="item-article__tag">Срок уплаты</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-article__read-more">
                                <a href="#">
                                    Читать
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="mb-4">
                        <div class="title-full">
                            <h3 class="title-full__title">
                                <i class="bi bi-file-earmark-text me-2"></i>
                                Формы документов
                            </h3>
                            <a href="#" class="title-full__link">
                                Все
                                <i class="bi bi-arrow-right ms-3"></i>
                            </a>
                        </div>
                        <div class="list-documents scrollbar-y">
                            <a href="#" class="item-document">
                                <i class="bi bi-file-earmark-text me-2"></i>
                                <span>Договор найма жилого помещения частного жилищного фонда граждан</span>
                            </a>
                            <a href="#" class="item-document">
                                <i class="bi bi-file-earmark-text me-2"></i>
                                <span>Уведомление о начале (прекращении) осуществления ремесленной деятельности</span>
                            </a>
                            <a href="#" class="item-document">
                                <i class="bi bi-file-earmark-text me-2"></i>
                                <span>Договор аренды (субаренды) машино-мест</span>
                            </a>
                            <a href="#" class="item-document">
                                <i class="bi bi-file-earmark-text me-2"></i>
                                <span>Налоговая декларация (расчет) по подоходному налогу с физических лиц </span>
                            </a>
                            <a href="#" class="item-document">
                                <i class="bi bi-file-earmark-text me-2"></i>
                                <span>Уведомление о начале (прекращении) осуществления ремесленной деятельности</span>
                            </a>
                            <a href="#" class="item-document">
                                <i class="bi bi-file-earmark-text me-2"></i>
                                <span>Договор аренды (субаренды) машино-мест</span>
                            </a>
                            <a href="#" class="item-document">
                                <i class="bi bi-file-earmark-text me-2"></i>
                                <span>Налоговая декларация (расчет) по подоходному налогу с физических лиц </span>
                            </a>
                            <a href="#" class="item-document">
                                <i class="bi bi-file-earmark-text me-2"></i>
                                <span>Договор найма жилого помещения частного жилищного фонда граждан</span>
                            </a>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="title-full">
                            <h3 class="title-full__title">
                                <i class="bi bi-calendar2-week me-2"></i>
                                Налоговый календарь
                            </h3>
                        </div>
                        <div id="calendarFosm" class="calendar-container"></div>
                    </div>
                    <div class="mb-4">
                        <div class="title-full">
                            <h3 class="title-full__title">
                                <i class="bi bi-person-bounding-box me-2"></i>
                                Проверка контрагента
                            </h3>
                        </div>
                        <div class="сounterparty-check">
                            <div class="сounterparty-check__title">Сервис для поиска информации о бизнес-партнере
                            </div>
                            <div class="сounterparty-check__wrapper">
                                <div class="сounterparty-check__input">
                                    <input type="text" class=""/>
                                </div>
                                <button type="submit" class="button">Проверить<i class="bi bi-search ms-3"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>