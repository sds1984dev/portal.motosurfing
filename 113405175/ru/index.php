<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Все о мире серфинга с мотором: Электросерф, Jet Surf, Джет-Серф, Мотосерф, E-Foil. Купить доску для серфинга с мотором в нашем интернет-магазине ☎ +7(495)108-46-36");
$APPLICATION->SetPageProperty("title", "Купить доску для серфинга с мотором — интернет-магазин Motosurfing");
$APPLICATION->SetTitle("Мотосёрф");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
global $asset;
$asset->addCss(SITE_TEMPLATE_PATH . '/lib/swiper/swiper-bundle.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/css/catalog.min.css');
$asset->addJs(SITE_TEMPLATE_PATH . '/lib/swiper/swiper-bundle.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/js/catalog.js');

if (!function_exists('tireosDump')) {
    function tireosDump($arr)
    {
        if ($GLOBALS['USER'] && $GLOBALS['USER']->IsAdmin()) {
            echo '<pre style="color: yellow; background-color: blue;">';
            print_r($arr);
            echo '</pre>';
        }
    }
}

/* banner */
$APPLICATION->IncludeComponent("bitrix:news.list", "mainpage.banner",
    array(
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "IBLOCK_TYPE" => "temploid_im_iblock_s1",
        "IBLOCK_ID" => 40,
        "NEWS_COUNT" => 20,
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "ID",
        "SORT_ORDER2" => "ASC",
        "FIELD_CODE" => "",
        "PROPERTY_CODE" => array("BUTTON_LINK", "PICTURE", "BUTTON_NAME"),
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => 3600 * 24,
        "CACHE_FILTER" => "",
        "CACHE_GROUPS" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "",
        "PAGER_TEMPLATE" => "",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "",
        "PAGER_SHOW_ALL" => "",
        "PAGER_BASE_LINK_ENABLE" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "",
        "DISPLAY_DATE" => "",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "PREVIEW_TRUNCATE_LEN" => 0,
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "USE_PERMISSIONS" => "N",
        "GROUP_PERMISSIONS" => "N",
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "CHECK_DATES" => "N",
    )
);?>

<div class="main-catalog-slider">
	 <? $APPLICATION->IncludeComponent(
            "bitrix:catalog.section.list",
            "main",
            [
                "SECTION_USER_FIELDS" => ['UF_COLOR', 'UF_SHORT_NAME'],
                "IBLOCK_TYPE" => "temploid_im_iblock_s1",
                "CUR_PAGE" => CUR_PAGE,
                "IBLOCK_ID" => 35,
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => 3600 * 24,
                "CACHE_GROUPS" => "N",
                "COUNT_ELEMENTS" => "Y",
                "TOP_DEPTH" => 1,
                "SECTION_URL" => "",
                "VIEW_MODE" => "TEXT",
                "SHOW_PARENT_NAME" => "Y",
                "HIDE_SECTION_NAME" => "N",
                "ADD_SECTIONS_CHAIN" => "Y",
                "TS_CHANGE_ON_MOBILE" => "N"
            ],
            false
        ); ?>
</div>
 <? /* popular  */
global $arrPopularFilter;
$arrPopularFilter = ["!PROPERTY_POPULAR" => false];
?> 
<section class="main__popular">
<div class="container">
	<h2>
	Популярное </h2>
	 <?
            $intSectionID = $APPLICATION->IncludeComponent(
                "bitrix:catalog.section",
                "popular",
                array(
                    "VIEW_TYPE" => "",
                    "MOBILE_VIEW_TYPE" => "",
                    "SECTION_PROPS" => $GLOBALS['SECTION_PROPS'],/*масив в catalog.section.list|main чтобы лишние запросы не делать*/
                    "SECTION_USER_FIELDS" => [],
                    "IBLOCK_TYPE" => "temploid_im_iblock_s1",
                    "IBLOCK_ID" => 35,
                    "ELEMENT_SORT_FIELD" => $_SESSION['SORT']['ELEMENT_SORT_FIELD'] ?: "SHOWS",
                    "ELEMENT_SORT_ORDER" => $_SESSION['SORT']['ELEMENT_SORT_ORDER'] ?: "desc",
                    "ELEMENT_SORT_FIELD2" => "ID",
                    "ELEMENT_SORT_ORDER2" => "desc",
                    "PROPERTY_CODE" => [
                        0 => "NEWPRODUCT",
                        1 => "SALELEADER",
                        2 => "SPECIALOFFER"
                    ],
                    "PROPERTY_CODE_MOBILE" => [],
                    "META_KEYWORDS" => "-",
                    "META_DESCRIPTION" => "-",
                    "BROWSER_TITLE" => "-",
                    "SET_LAST_MODIFIED" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "BASKET_URL" => "/ru/personal/cart/",
                    "ACTION_VARIABLE" => "action",
                    "PRODUCT_ID_VARIABLE" => "id",
                    "SECTION_ID_VARIABLE" => "SECTION_ID",
                    "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                    "PRODUCT_PROPS_VARIABLE" => "prop",
                    "FILTER_NAME" => "arrPopularFilter",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => 36000000,
                    "CACHE_FILTER" => "",
                    "CACHE_GROUPS" => "Y",
                    "SET_TITLE" => "N",
                    "MESSAGE_404" => "",
                    "SET_STATUS_404" => "N",
                    "SHOW_404" => "N",
                    "FILE_404" => "",
                    "DISPLAY_COMPARE" => "",
                    "PAGE_ELEMENT_COUNT" => 6,
                    "LINE_ELEMENT_COUNT" => 2,
                    "PRICE_CODE" => array(0 => "BASE"),
                    "USE_PRICE_COUNT" => "",
                    "SHOW_PRICE_COUNT" => 1,

                    "PRICE_VAT_INCLUDE" => 1,
                    "USE_PRODUCT_QUANTITY" => "",
                    "ADD_PROPERTIES_TO_BASKET" => "Y",
                    "PARTIAL_PRODUCT_PROPERTIES" => "Y",
                    "PRODUCT_PROPERTIES" => "",

                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "PAGER_TITLE" => "Товары",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => "",
                    "PAGER_DESC_NUMBERING" => "",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => 36000000,
                    "PAGER_SHOW_ALL" => "",
                    "PAGER_BASE_LINK_ENABLE" => "Y",
                    "PAGER_BASE_LINK" => "",
                    "PAGER_PARAMS_NAME" => "arrPager",
                    "LAZY_LOAD" => "N",
                    "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                    "LOAD_ON_SCROLL" => "N",

                    "OFFERS_CART_PROPERTIES" => array(
                        0 => "COLOR_REF",
                        1 => "SIZES_SHOES",
                        2 => "SIZES_CLOTHES"
                    ),
                    "OFFERS_FIELD_CODE" => array(
                        0 => "NAME",
                        1 => "PREVIEW_PICTURE",
                        2 => "DETAIL_PICTURE"
                    ),
                    "OFFERS_PROPERTY_CODE" => array(
                        0 => "ARTNUMBER",
                        1 => "COLOR_REF",
                        2 => "SIZES_SHOES",
                        3 => "SIZES_CLOTHES",
                        4 => "MORE_PHOTO"
                    ),

                    "OFFERS_SORT_FIELD" => "sort",
                    "OFFERS_SORT_ORDER" => "asc",
                    "OFFERS_SORT_FIELD2" => "id",
                    "OFFERS_SORT_ORDER2" => "desc",
                    "OFFERS_LIMIT" => 0,

                    "SECTION_ID" => 0,
                    "SECTION_CODE" => "",
                    "SECTION_URL" => "/ru/catalog/#SECTION_CODE_PATH#/",
                    "DETAIL_URL" => "/ru/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                    "USE_MAIN_ELEMENT_SECTION" => 1,
                    'CONVERT_CURRENCY' => "Y",
                    'CURRENCY_ID' => "EUR",
                    'HIDE_NOT_AVAILABLE' => "N",
                    'HIDE_NOT_AVAILABLE_OFFERS' => "N",

                    'LABEL_PROP' => ['LABEL'],
                    'LABEL_PROP_MOBILE' => ['LABEL' => 0],
                    'LABEL_PROP_POSITION' => "top-left",
                    'ADD_PICT_PROP' => "GALLERY",
                    'PRODUCT_DISPLAY_MODE' => "N",
                    'PRODUCT_BLOCKS_ORDER' => array(
                        0 => "price",
                        1 => "props",
                        2 => "sku",
                        3 => "quantityLimit",
                        4 => "quantity",
                        5 => "buttons",
                    ),
                    'PRODUCT_ROW_VARIANTS' => array(
                        0 => array(
                            "VARIANT" => 2,
                            "BIG_DATA" => ""
                        ),
                        1 => array(
                            "VARIANT" => 2,
                            "BIG_DATA" => ""
                        ),
                        2 => array(
                            "VARIANT" => 2,
                            "BIG_DATA" => ""
                        ),
                        3 => array(
                            "VARIANT" => 2,
                            "BIG_DATA" => ""
                        ),
                        4 => array(
                            "VARIANT" => 2,
                            "BIG_DATA" => ""
                        )
                    ),
                    'ENLARGE_PRODUCT' => "STRICT",
                    'ENLARGE_PROP' => "",
                    'SHOW_SLIDER' => "Y",
                    'SLIDER_INTERVAL' => 2000,
                    'SLIDER_PROGRESS' => "N",

                    'OFFER_ADD_PICT_PROP' => "GALLERY",
                    'OFFER_TREE_PROPS' => array(
                        0 => "COLOR_REF",
                        1 => "SIZES_SHOES",
                        2 => "SIZES_CLOTHES",
                        3 => ""
                    ),
                    'PRODUCT_SUBSCRIPTION' => "Y",
                    'SHOW_DISCOUNT_PERCENT' => "N",
                    'DISCOUNT_PERCENT_POSITION' => "bottom-right",
                    'SHOW_OLD_PRICE' => "Y",
                    'SHOW_MAX_QUANTITY' => "N",
                    'MESS_SHOW_MAX_QUANTITY' => "",
                    'RELATIVE_QUANTITY_FACTOR' => 5,
                    'MESS_RELATIVE_QUANTITY_MANY' => "",
                    'MESS_RELATIVE_QUANTITY_FEW' => "",
                    'MESS_BTN_BUY' => "Купить в 1 клик",
                    'MESS_BTN_ADD_TO_BASKET' => "В корзину",
                    'MESS_BTN_SUBSCRIBE' => "Подписаться",
                    'MESS_BTN_DETAIL' => "Подробнее",
                    'MESS_NOT_AVAILABLE' => "Нет в наличии",
                    'MESS_BTN_COMPARE' => "Сравнение",

                    'USE_ENHANCED_ECOMMERCE' => "N",
                    'DATA_LAYER_NAME' => "",
                    'BRAND_PROPERTY' => "BRAND",

                    'TEMPLATE_THEME' => "blue",
                    'TEMPLATE_TYPE' => 2,
                    "ADD_SECTIONS_CHAIN" => "Y",
                    'ADD_TO_BASKET_ACTION' => "ADD",
                    'SHOW_CLOSE_POPUP' => "N",
                    'COMPARE_PATH' => "/ru/catalog/compare.php?action=COMPARE",
                    'COMPARE_NAME' => "CATALOG_COMPARE_LIST",
                    'USE_COMPARE_LIST' => 'Y',
                    'BACKGROUND_IMAGE' => "",
                    'COMPATIBLE_MODE' => "Y",
                    'DISABLE_INIT_JS_IN_COMPONENT' => "N"
                ),
                false
            );
            ?>
	<div class="main__popular__button">
 <a href="/ru/catalog/" class="btn">
		Перейти в магазин </a>
	</div>
</div>
 </section>
<?
/*- popular -*/

/*+ brands  +*/
$APPLICATION->IncludeComponent("bitrix:news.list", "mainpage.brands",
    array(
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "IBLOCK_TYPE" => "temploid_im_iblock_s1",
        "IBLOCK_ID" => 37,
        "NEWS_COUNT" => 10,
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "ID",
        "SORT_ORDER2" => "ASC",
        "FIELD_CODE" => "",
        "PROPERTY_CODE" => array(""),
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => 3600 * 24,
        "CACHE_FILTER" => "",
        "CACHE_GROUPS" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "",
        "PAGER_TEMPLATE" => "",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "",
        "PAGER_SHOW_ALL" => "",
        "PAGER_BASE_LINK_ENABLE" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "",
        "DISPLAY_DATE" => "",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "PREVIEW_TRUNCATE_LEN" => 70,
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "USE_PERMISSIONS" => "N",
        "GROUP_PERMISSIONS" => "N",
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "CHECK_DATES" => "N",
    )
);
/*- brands  -*/ ?>
<?
/*+ news +*/
$APPLICATION->IncludeComponent("bitrix:news.list", "mainpage.news",
    array(
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "IBLOCK_TYPE" => "temploid_im_iblock_s1",
        "IBLOCK_ID" => 43,
        "NEWS_COUNT" => 4,
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "ID",
        "SORT_ORDER2" => "ASC",
        "FIELD_CODE" => "",
        "PROPERTY_CODE" => array("DATE"),
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => 3600 * 24,
        "CACHE_FILTER" => "",
        "CACHE_GROUPS" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "",
        "PAGER_TEMPLATE" => "",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "",
        "PAGER_SHOW_ALL" => "",
        "PAGER_BASE_LINK_ENABLE" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "",
        "DISPLAY_DATE" => "",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "PREVIEW_TRUNCATE_LEN" => 70,
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "USE_PERMISSIONS" => "N",
        "GROUP_PERMISSIONS" => "N",
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "CHECK_DATES" => "N",
    )
);
/*- news -*/

/* events  */
$APPLICATION->IncludeComponent("bitrix:news.list", "mainpage.events",
    array(
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "IBLOCK_TYPE" => "temploid_im_iblock_s1",
        "IBLOCK_ID" => 42,
        "NEWS_COUNT" => 3,
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "ID",
        "SORT_ORDER2" => "ASC",
        "FIELD_CODE" => "",
        "PROPERTY_CODE" => array("DATE"),
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => 3600 * 24,
        "CACHE_FILTER" => "",
        "CACHE_GROUPS" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "",
        "PAGER_TEMPLATE" => "",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "",
        "PAGER_SHOW_ALL" => "",
        "PAGER_BASE_LINK_ENABLE" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "",
        "DISPLAY_DATE" => "",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "PREVIEW_TRUNCATE_LEN" => 70,
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "USE_PERMISSIONS" => "N",
        "GROUP_PERMISSIONS" => "N",
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "CHECK_DATES" => "N",
    )
);

/* info text*/ ?> <section class="main__bottom">
<div class="container">
	 <?
            $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/includes/main_page_text.php",
                    "AREA_FILE_RECURSIVE" => "N",
                    "EDIT_MODE" => "html",
                ),
                false,
                array('HIDE_ICONS' => 'Y')
            ); ?>
</div>
 </section> <br><?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>