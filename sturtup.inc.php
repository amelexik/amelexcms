<?php

define("LIBS_FOLDER","libs");
define("INC_FOLDER","inc");
define("ADMIN_FOLDER","admin");
define("ADMIN_INC_FOLDER","inc");

define("ROOT",$_SERVER["DOCUMENT_ROOT"]);
define("LIBS_PATH",ROOT."/".LIBS_FOLDER."/");
define("INC_PATH",ROOT."/".INC_FOLDER."/");

define("ADMIN_ROOT",ROOT."/".ADMIN_FOLDER."/");
define("ADMIN_INC_PATH",ADMIN_ROOT.ADMIN_INC_FOLDER."/");

define("GALLERY_PATH","/upload/images/gallery/");
define("GALLERY_THUMBS_PATH","/upload/images/gallery/thumbs/");
define("GALLERY_DIR",ROOT.GALLERY_PATH);
define("GALLERY_THUMBS_DIR",ROOT.GALLERY_THUMBS_PATH);


define("CATALOG_BASE_URL","/catalog/");

define("CATALOG_CATEGORIES_IMAGE_PATH","/upload/images/catalog/categories/");
define("CATALOG_PRODUCTS_IMAGE_PATH","/upload/images/catalog/products/");
define("CATALOG_PRODUCTS_IMAGE_THUMBS_PATH","/upload/images/catalog/products/thumbs/");

define("CATALOG_CATEGORIES_IMAGE_DIR",ROOT.CATALOG_CATEGORIES_IMAGE_PATH);
define("CATALOG_PRODUCTS_IMAGE_DIR",ROOT.CATALOG_PRODUCTS_IMAGE_PATH);
define("CATALOG_PRODUCTS_IMAGE_THUMBS_DIR",ROOT.CATALOG_PRODUCTS_IMAGE_THUMBS_PATH);



//define("USD_RATE",$rate["USD"]);
//define("EUR_RATE",$rate["EUR"]);


define("USD_RATE",700);
define("EUR_RATE",1050);

require_once LIBS_PATH."dbsimple/config.php";
require_once LIBS_PATH."dbsimple/DbSimple/Generic.php";
//$db = DbSimple_Generic::connect("mysql://root:1@localhost/pmatools");
$db = DbSimple_Generic::connect("mysql://web154_user:gbpltw@localhost/web154_db");

$db->setErrorHandler('databaseErrorHandler');

function databaseErrorHandler($message, $info)
{
    if (!error_reporting()) return;
    echo "SQL Error: $message<br><pre>"; print_r($info); echo "</pre>";
    exit();
}

?>