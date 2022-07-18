<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?/*if($arParams["DISPLAY_TOP_PAGER"]):*/?><!--
	<?/*=$arResult["NAV_STRING"]*/?><br />
--><?/*endif;*/?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <div class="item-article" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
        <div class="item-article__bookmark">
            <i class="bi bi-bookmark-star-fill"></i>
        </div>
        <div class="item-article__category">

            <? foreach ($arResult["SECTIONS"] as $section): ?>
                <? if($section["ID"] === $arItem["IBLOCK_SECTION_ID"]): ?>
                <?=$section['PARENTS_NAME']; ?>
                <!--Налогообложение ИП / Таможенное регулирование-->
                <? endif; ?>
            <? endforeach; ?>
        </div>
        <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>/" class="item-article__title">
            <i class="bi bi-lock-fill me-3"></i>
            <?= $arItem["NAME"]; ?>
        </a>
        <div class="item-article__text">
            <?= $arItem["PREVIEW_TEXT"]; ?>
        </div>
        <div class="item-article__footer">
            <div class="item-article__date date">
                <i class="bi bi-calendar me-2"></i>
                <?= $arItem["ACTIVE_FROM"]; ?>
            </div>
            <div class="item-article__list-tags">
                <i class="bi bi-tag"></i>
                <div class="d-flex flex-wrap">
                    <? foreach($arItem['DISPLAY_PROPERTIES']['TAGS']["VALUE_ENUM"] as $key=>$element ): ?>
                        <div class="item-article__tag"><?=$element; ?></div>
                    <? endforeach; ?>
                    <!--<div class="item-article__tag">Таможенные платежи</div>
                    <div class="item-article__tag">ЕАЭС</div>
                    <div class="item-article__tag">ЕАЭС</div>
                    <div class="item-article__tag">Срок уплаты</div>
                    <div class="item-article__tag">Срок уплаты</div>-->
                </div>
            </div>
        </div>
        <div class="item-article__read-more">
            <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>/">
                Читать
                <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>

<?endforeach;?>
<?/*if($arParams["DISPLAY_BOTTOM_PAGER"]):*/?><!--
	<br /><?/*=$arResult["NAV_STRING"]*/?>
--><?/*endif;*/?>

