<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

$arResult['DELAY_URL_TEMPLATE'] = $arResult['~DELAY_URL_TEMPLATE'] = SITE_DIR.'ajax/favorite.php?DELAY=Y&ID=#ID#';

$arResult["SECTION_PROPS"] = [];
foreach ($arResult["ITEMS"] as $item) {
    /** пока без сортировки */
    if (!$arResult["SECTION_PROPS"][$item["IBLOCK_SECTION_ID"]]) {
        $arResult["SECTION_PROPS"][$item["IBLOCK_SECTION_ID"]] = $arParams["SECTION_PROPS"][$item["IBLOCK_SECTION_ID"]];
    }
}
//tireosDump(["catSectArRezult" => $arResult]);
//tireosDump(["catSectArRezult" => count($arParams["SECTION_PROPS"])]);

foreach ($arResult["SECTION_PROPS"] as $key => $value) {
    $dbSection = CIBlockSection::GetList(array(), array("IBLOCK_ID" => 35, "ID" => $item['IBLOCK_SECTION_ID']),false,array("UF_NAME_UAE"))->Fetch();
    //if (LANGUAGE_ID != 'ru')
        $arResult["SECTION_PROPS"][$key]["SHORT_NAME"] = $dbSection["UF_NAME_UAE"];
}