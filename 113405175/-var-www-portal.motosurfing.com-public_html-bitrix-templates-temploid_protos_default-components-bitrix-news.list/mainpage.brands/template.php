<?
$this->setFrameMode(true); ?>
<? if (!empty($arResult["ITEMS"])) { ?>
    <div class="main__brands">
        <div class="container">
            <h2>
                <?=GetMessage("SHOP")?>
            </h2>
            <div class="main__brands__wrapper">
                <div class="main__brands__container swiper-container">
                    <div class="swiper-wrapper">
                        <? foreach ($arResult["ITEMS"] as $item) { ?>
                            <a href="<?= 'ru' . $item["DETAIL_PAGE_URL"] ?>" class="main__brands__item swiper-slide">
                                <? if ($item["PICTURE"]["THUMB"]["src"]) {
                                    $item["PICTURE"]["WEBP_THUMB"]["src"] = pngToWebp($item["PICTURE"]["THUMB"]["src"]);
                                    $item["PICTURE"]["WEBP_NORMAL"]["src"] = pngToWebp($item["PICTURE"]["NORMAL"]["src"]);
                                    $item["PICTURE"]["WEBP_FULL"]["src"] = pngToWebp($item["PICTURE"]["FULL"]["src"]); ?>
                                    <picture>
                                        <?if($item["PICTURE"]["WEBP_THUMB"]["src"] && $item["PICTURE"]["WEBP_THUMB"]["src"] != $item["PICTURE"]["THUMB"]["src"]) {?>
                                            <source type="image/webp" srcset="<?= $item["PICTURE"]["WEBP_THUMB"]["src"] ?> 1x, <?= $item["PICTURE"]["WEBP_NORMAL"]["src"] ?> 2x, <?= $item["PICTURE"]["WEBP_FULL"]["src"] ?> 3x">
                                        <?}?>
                                        <img src="<?= $item["PICTURE"]["THUMB"]["src"] ?>"
                                             srcset="<?= $item["PICTURE"]["NORMAL"]["src"] ?> 2x, <?= $item["PICTURE"]["FULL"]["src"] ?> 3x"
                                             alt="<?= $item["NAME"] ?>"/>
                                    </picture>
                                <? } else { ?>
                                    <?= $item["NAME"] ?>
                                <? } ?>
                            </a>
                        <? } ?>
                        <a href="/brand/" class="main__brands__item swiper-slide">
                            <div class="text">
                                <?=GetMessage('ALL_BRANDS')?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const mainBrandsSlider = new Swiper('.main__brands__container', {
                slidesPerView: "auto",
                spaceBetween: 8,
                watchOverflow: true,
                observer: true,
                observeParents: true,
                breakpoints: {
                    991: {
                        spaceBetween: 19,
                    }
                },
            });
        });
    </script>
<? } ?>