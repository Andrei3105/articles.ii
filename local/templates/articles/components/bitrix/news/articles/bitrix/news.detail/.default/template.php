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

<div class="article-header">
    <div class="article-header__top">
        <? if($arResult['SECTION']):?>
        <div class="article-header__rubric"><?= $arResult['SECTION']['NAME'] ?></div>
        <? endif;?>
        <?if( $arResult["DISPLAY_ACTIVE_FROM"]):?>
            <div class="article-header__date"><b>Дата публикации:</b> <?=$arResult["DISPLAY_ACTIVE_FROM"]?> </div>
        <?endif;?>

    </div>

    <?if($arResult["NAME"]):?>
        <h1 class="article-header__title"> <?= $arResult["NAME"]?>  </h1>
    <?endif;?>
    <div class="article-header__authors">
        <? if( $arResult['PROPERTIES']['AUTHOR']['VALUE'] ):?>
            <div class="article-authors">
                <?= $arResult['PROPERTIES']['AUTHOR']['~VALUE']['TEXT'] ?>
            </div>
        <? endif;?>
        <? if($arResult['PROPERTIES']['PREVIEWER']['VALUE'] ):?>
            <div class="article-reviewer">
                <div class="article-reviewer__title">Рецензент:</div>
                <div>
                    <?= $arResult['PROPERTIES']['PREVIEWER']['~VALUE']['TEXT'] ?>
                </div>
            </div>
        <? endif;?>
    </div>
</div>
<?echo $arResult["DETAIL_TEXT"];?>

<?php if($arResult['PROPERTIES']['TAGS']['VALUE']):?>
    <div class="mb-5"> Теги:
    <? foreach ($arResult['PROPERTIES']['TAGS']['VALUE'] as $tag):?>
        <?= $tag ?>
    <? endforeach; ?>
    </div>
<?php endif;?>



