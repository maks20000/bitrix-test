<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?if ($arResult['ITEMS']):?>
    <div class="reviews">
        <?foreach ($arResult['ITEMS'] as $arItem):?>
            <div class="reviews__item">
                <div class="reviews__name"><?=$arItem['user_name']?></div>
                <div class="reviews__date"><?=$arItem['create_date']?></div>
                <div class="reviews__text"><?=$arItem['text']?></div>
            </div>
        <?endforeach;?>
    </div>
<?endif;?>

<div class="review_form">
    <h2>Оставить отзыв</h2>
    <form method="POST" action="<?=$APPLICATION->GetCurDir()?>">
    <label>Ваше имя</label>
    <?if (isset($arResult['ERRORS']['user_name']))?> <span class="error"><?=$arResult['ERRORS']['user_name']?></span>
    <input type="text" name="user_name">
    <label>Отзыв</label>
    <?if (isset($arResult['ERRORS']['comment']))?> <span class="error"><?=$arResult['ERRORS']['comment']?></span>
    <textarea name="comment" cols="30" rows="10"></textarea>
    <input type="submit">
    <input type="hidden" name="ADD_REVIEW" value="Y">
    <?=bitrix_sessid_post()?>
    </form>
</div>