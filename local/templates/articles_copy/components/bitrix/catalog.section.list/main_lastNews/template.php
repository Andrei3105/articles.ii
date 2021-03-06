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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>


<!--<form class="form-news__body">
	<div class="item-category">
		<input type="radio" id="news-1" name="category-news" value="all" checked>
		<label for="news-1" class="item-category__label">Все новости</label>
	</div>
		<?/* $i = 2; */?>
		<?/* foreach($arResult['SECTIONS'] as $arItem): */?>
			<div class="item-category">
				<input type="radio" id="news-<?/*=$i; */?>" name="category-news" value="<?/*=$arItem['CODE']; */?>">
				<a type="button" href="/news/<?/*=$arItem['CODE']; */?>/" for=" news-<?/*= $i; */?>" class="item-category__label" ><?/*=$arItem['NAME']; */?> </a>
			</div>
		<?/* $i++; */?>
		<?/* endforeach; */?>
</form>-->

<div class="form-news__body">
	<div class="item-category">

		<div class="filter item-category__label" data-filter="all">Все новости</div>
	</div>

		<? foreach($arResult['SECTIONS'] as $arItem): ?>
			<div class="item-category">
				<div class="filter item-category__label" data-filter="<?=$arItem['CODE']; ?>"><?=$arItem['NAME']; ?></div>

			</div>

		<? endforeach; ?>
</div>



