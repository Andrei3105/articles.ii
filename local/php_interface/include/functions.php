<?php

/**
 * PrintR function
 */
CModule::IncludeModule('security');
function pr($o, $show = false, $die = false, $fullBackTrace = false)
{
    global $USER;
    if ($USER->IsAdmin() || $show) {
        $bt = debug_backtrace();

        $firstBt = $bt[0];
        $dRoot = $_SERVER["DOCUMENT_ROOT"];
        $dRoot = str_replace("/", "\\", $dRoot);
        $firstBt["file"] = str_replace($dRoot, "", $firstBt["file"]);
        $dRoot = str_replace("\\", "/", $dRoot);
        $firstBt["file"] = str_replace($dRoot, "", $firstBt["file"]);
        ?>
        <div style='font-size:9pt; color:#000; background:#fff; border:1px dashed #000;'>
            <div style='padding:3px 5px; background:#99CCFF;'>

                <? if ($fullBackTrace == false): ?>
                    File: <b><?= $firstBt["file"] ?></b> [line: <?= $firstBt["line"] ?>]
                <? else: ?>
                    <? foreach ($bt as $value): ?>
                        <?
                        $dRoot = str_replace("/", "\\", $dRoot);
                        $value["file"] = str_replace($dRoot, "", $value["file"]);
                        $dRoot = str_replace("\\", "/", $dRoot);
                        $value["file"] = str_replace($dRoot, "", $value["file"]);
//                        echo '<pre>';
//                        print_r($value);
//                        echo '</pre>';
                        ?>

                        File: <b><?= $value["file"] ?></b> [line: <?= $value["line"] ?>] <?= $value['class'] . '->'.$value['function'].'()'?><br>
                    <? endforeach ?>
                <?endif; ?>
            </div>
            <pre style='padding:10px;'><? is_array($o) ? print_r($o) :  print_r(htmlspecialcharsbx($o)) ?></pre>
        </div>
        <?if ($die == true) {
            die();
        }?>
        <?
    } else {
        return false;
    }
}

function getAllSectionsByIblockId($id,array $filter, array $fields)
{
    $result = array();
    $arFilter = array_merge(array('IBLOCK_ID' => $id), $filter);
    $sec_query = CIBlockSection::GetList(
        array(),
        $arFilter,
        false,
        $fields
    );

    while ($sec_result = $sec_query->GetNext()){
        $result[$sec_result['ID']] = $sec_result;
    }
    return $result;
}

function makePhoneLink($val)
{
    $chars = ['!','#','-','(',')',' ']; // символы для удаления
    $link =  str_replace($chars, '', $val); // PHP код
    return 'tel:'.$link;
}

function isLastSection($sectionId)
{
    $result = true;
    $res = CIBlockSection::GetList(
        Array('left_margin'=>'asc'),
        array(
            'ACTIVE'=>'Y',
            'GLOBAL_ACTIVE'=>'Y',
            'SECTION_ID' => $sectionId
        )
    );

    while($ob = $res->GetNextElement())
    {
        $result = false;
    }

    return $result;
}

// функция для обрезания текста
function my_crop($text, $length, $clearTags = true)
{
    $text = trim($text);
    if ($clearTags === true)
        $text = strip_tags($text);
    if ($length <= 0 || strlen($text) <= $length)
        return $text;
    $out = mb_substr($text, 0, $length);
    $pos = mb_strrpos($out, ' ');
    if ($pos)
        $out = mb_substr($out, 0, $pos);
    return $out.'…';
}