<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (CModule::IncludeModule("iblock")) {
    $iblock = intval($arParams['IBLOCK']);
    if ($iblock > 0) {
        $arFilter = array(
            "IBLOCK_ID" => $iblock
        );
        $arSelect = array(
            "ID", "NAME", "DETAIL_PICTURE", "DATE_CREATE", "PREVIEW_TEXT"
        );
        $dbRes = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
        while ($res = $dbRes->GetNext()) {
            $arResult['ITEMS'][] = $res;
        }
    }
}

$this->IncludeComponentTemplate();