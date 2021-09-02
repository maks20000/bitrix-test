<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

<h3>Новости</h3>
<?$APPLICATION->IncludeComponent("custom:news","", array("IBLOCK" => 2));?>

<h3>Отзывы</h3>
<?$APPLICATION->IncludeComponent("custom:reviews","");?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>