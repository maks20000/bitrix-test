<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->reviewsTableName = "b_reviews";
$this->connection = Bitrix\Main\Application::getConnection();
$this->sqlHelper = $this->connection->getSqlHelper();


if (!$this->connection->isTableExists($this->reviewsTableName)) {
    $this->createTable();
}

if ($_REQUEST['ADD_REVIEW'] && check_bitrix_sessid()) {
    if (empty($_REQUEST['user_name'])) {
        $arResult['ERRORS']['user_name'] = "Поле не должно быть пустым";
    }
    if (empty($_REQUEST['comment'])) {
        $arResult['ERRORS']['comment'] = "Поле не должно быть пустым";
    }
    if (!isset($arResult['ERRORS'])) {
        $this->addReview($_REQUEST);
        LocalRedirect($APPLICATION->GetCurPage());
    }
}

$arResult['ITEMS'] = $this->getReviews();

$this->IncludeComponentTemplate();