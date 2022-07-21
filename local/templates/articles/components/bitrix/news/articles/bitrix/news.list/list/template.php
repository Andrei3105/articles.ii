<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(count($arResult["ITEMS"])>0):?>
<div class="sidebar-wrapper__content">
    <br/>
    <br/>
    <br/>
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
        <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>" class="item-article__title">
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
                </div>
            </div>
        </div>
        <div class="item-article__read-more">
            <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>">
                Читать
                <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
    <?endforeach;?>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>
</div>
<?endif?>
