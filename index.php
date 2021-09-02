<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");
?>

<ul>
    <li><a href ="/news/">Страница вывода новостей из инфоблока</a></li>
    <li><a href ="/reviews/">Страница отзывы</a></li>
</ul>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>