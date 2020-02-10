<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Localization\Loc;

$arComponentDescription = [
    "NAME" => Loc::getMessage("DELIVERY_COMPONENT"),
    "DESCRIPTION" => Loc::getMessage("DELIVERY_COMPONENT_DESCRIPTION"),
    "COMPLEX" => "N",
    "PATH" => [
        "ID" => Loc::getMessage("DELIVERY_COMPONENT_PATH_ID"),
        "NAME" => Loc::getMessage("DELIVERY_COMPONENT_PATH_NAME"),
    ],
];
?>