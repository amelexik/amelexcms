<?

session_start();
error_reporting(E_WARNING || E_ERROR);
//error_reporting(E_ALL);

include ($_SERVER['DOCUMENT_ROOT'].'/sturtup.inc.php');
include (LIBS_PATH."functions.php");
include (ADMIN_ROOT."admin.class.php");
$admin = new Admin();

$ajaxSection = @$_POST["ajaxSection"];
$ajaxMode = @$_POST["ajaxMode"];
$ajaxAction = @$_POST["ajaxAction"];


if ($ajaxSection == "sortable"){
	if ($ajaxMode == "sortable_site_structure"){
		if ($ajaxAction == "sorting_structure_items"){
		
		#####
		$sql="";
		$i=1;
		foreach ($_POST["sorting_result"] as $sorting => $itemId){
			$itemId = str_replace("id_","",$itemId);
			$sorting = (int) $sorting;
			$sorting = $sorting + $i;

			$sql = "UPDATE structure SET structure.sorting={$sorting} WHERE structure.id={$itemId}";
			$admin->db->query($sql);
		}
		#####
		
		}
	}
	if ($ajaxMode == "sortable_product_pics"){
		$product_id = (int) $_POST["product_id"];
		//echo $product_id;
		$i = 1;
		foreach ($_POST["sorting_result"] as $sorting => $photoId){
			$photoId = str_replace("id_","",$photoId);
			$sorting = (int) $sorting;
			$sorting = $sorting + $i;
			
			$sql = "UPDATE products_photos SET products_photos.sorting={$sorting} WHERE products_photos.id={$photoId}";
			$admin->db->query($sql);
			echo $sql."\n";
		
		}
	}
	if ($ajaxMode == "sortable_banners"){
		$i = 1;
		foreach ($_POST["sorting_result"] as $sorting => $banner_id){
			$banner_id = str_replace("id_","",$banner_id);
			$sorting = (int) $sorting;
			$sorting = $sorting + $i;
			
			$sql = "UPDATE banners SET banners.sorting={$sorting} WHERE banners.id={$banner_id}";
			$admin->db->query($sql);
			echo $sql."\n";
		
		}
	}
}
if ($ajaxSection == "catalog"){
	if ($ajaxAction == "set_default_product_picture"){
		$default_product_picture = (int)$_POST["default_product_picture"];
		$product_item_id = (int)$_POST["product_item_id"];
		if ($default_product_picture > 0 && $product_item_id >0){
			$sql = "UPDATE products SET products.default_product_picture={$default_product_picture} WHERE item_id={$product_item_id}";
			if ($admin->db->query($sql)){
				echo "Сохранено";
			}
			else{
				echo "Unknow error";
			}
		}
	}
	if ($ajaxAction == "drop_product_pic"){
		$photo_id = (int)$_POST["photo_id"];
		if($photo_id>0){
			
			$file = $admin->db->selectCell("SELECT products_photos.file FROM products_photos WHERE products_photos.id={$photo_id}");
			
			$admin->db->query("DELETE FROM products_photos WHERE products_photos.id={$photo_id}");
			
			@unlink(CATALOG_PRODUCTS_IMAGE_DIR."100x/".$file);
			@unlink(CATALOG_PRODUCTS_IMAGE_DIR."300x/".$file);
			@unlink(CATALOG_PRODUCTS_IMAGE_DIR."600x/".$file);
			
			//@unlink(CATALOG_PRODUCTS_IMAGE_DIR."100x/"$_POST["category"]["drop_image"]);
		}
	}
}

?>