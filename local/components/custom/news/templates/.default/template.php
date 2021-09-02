<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?if (!empty($arResult['ITEMS'])):?>
    <div class="news">
        <?foreach ($arResult['ITEMS'] as $newsItem):?>
            <?$img = (!empty($newsItem['DETAIL_PICTURE'])) ? CFile::ResizeImageGet($newsItem['DETAIL_PICTURE'], array('width' => 300, 'height' => 300))['src'] : "/images/no-photo.jpg";?>
            <div class="news__item">
                <div class="news__img"><img src="<?=$img?>" alt="<?=$newsItem['NAME']?>"></div>
                <div class="news__title"><?=$newsItem['NAME']?></div>
                <div class="news__date"><?=$newsItem['DATE_CREATE']?></div>
                <div class="news__text"><?=$newsItem['PREVIEW_TEXT']?></div>
            </div>
        <?endforeach;?>
    </div>
<?endif;?>