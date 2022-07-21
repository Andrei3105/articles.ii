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

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <a href="/events<?=$arItem["DETAIL_PAGE_URL"]; ?>" class="item-event">
			<span class="item-event__photo">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="фото">
            </span>
            <span class="item-event__info">
			    <h5 class="item-event__title"><?=$arItem["NAME"]; ?></h5>
			    <span class="item-event__text"><?=$arItem["PREVIEW_TEXT"]; ?></span>
			    <span class="item-event__row">
			        <span class="date">
			            <i class="bi bi-calendar me-2"></i>
			            <?=$arItem["ACTIVE_FROM"]; ?>
			        </span>
			        <span class="item-event__read-more">
			            Читать
			        <i class="bi bi-arrow-right ms-2"></i>
			        </span>
			    </span>
			</span>
        </a>
    </div>

<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
