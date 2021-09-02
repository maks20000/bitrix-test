<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("Новости");
?>

<?$APPLICATION->IncludeComponent("custom:news","", array("IBLOCK" => 2));?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>