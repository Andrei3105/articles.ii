<?
$cp = $this->__component;

// получаем данные раздела
$section = '';
$res = CIBlockSection::GetByID($arResult['IBLOCK_SECTION_ID']);
if($ar_res = $res->GetNext()){
    $section = $ar_res;
}

if (is_object($cp) && $section) {
    $cp->arResult['SECTION'] = $section;
    $cp->SetResultCacheKeys(array('SECTION'));
}

?>