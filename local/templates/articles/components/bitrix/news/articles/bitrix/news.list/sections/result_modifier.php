<?php

$db_list = CIBlockSection::GetList(
    Array(),
    array(
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'GLOBAL_ACTIVE'=>'Y',
        'DEPTH_LEVEL' => 1
    ),
    true
);

$sections = array();
while($ar_result = $db_list->GetNext())
{
     $sections[] = $ar_result;
}
$arResult['ITEMS'] = $sections;
