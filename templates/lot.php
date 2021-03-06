<li class="lots__item lot">
    <div class="lot__image">
        <img src="<?= $lot['img_url'] ?>" width="350" height="260" alt="<?= htmlspecialchars($lot['name']) ?>">
    </div>
    <div class="lot__info">
        <span class="lot__category"><?= $lot['category'] ?></span>
        <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= htmlspecialchars($lot['name']) ?></a></h3>
        <div class="lot__state">
            <div class="lot__rate">
                <span class="lot__amount">Стартовая цена</span>
                <span class="lot__cost"><?= price_format($lot['price']) ?></span>
            </div>
            <div class="lot__timer timer <?php if (time_until_midnight() <= 3600) {print('timer--finishing');} ?>">
                <?= gmdate('H:i', time_until_midnight()) ?>
            </div>
        </div>
    </div>
</li>
