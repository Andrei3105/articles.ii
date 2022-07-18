<?if(!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) die();?>
<?php
$cp = $this->__component;
$arSections = array();
foreach ($arResult['ITEMS'] as $arItem) {
    if (!in_array($arItem["IBLOCK_SECTION_ID"], $arSections)) {
        $arSections[] = $arItem['IBLOCK_SECTION_ID'];
    }
}

$arSectionsValue = array();
if($arSections){
    $dbSecttions = CIBLockSection::GetList(
        array('SORT'=>'ASC'),
        array('IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ID' => $arSections)
        );
}
    while ( $db_result = $dbSecttions->GetNext() ){

        $arSectionsValue[] = $db_result;

    }

foreach ($arSectionsValue as $key=>$arSection){
    if($arSection["IBLOCK_SECTION_ID"]){
        $res = CIBLockSection::GetList(
                array('SORT'=>'ASC'),
                array("ID"=> $arSection["IBLOCK_SECTION_ID"])
        );
        if($ar_res = $res->GetNext()){

           $arSectionsValue[$key]["PARENTS_NAME"] = $ar_res['NAME']." / ". $arSection['NAME'];
        }
        if(is_object($cp))
        {
            $cp->arResult['SECTIONS'] = $arSectionsValue;
            $cp->SetResultCacheKeys( array('SECTIONS') );
        }
    }
}

?>


