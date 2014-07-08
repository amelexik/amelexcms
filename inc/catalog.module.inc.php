<?php

if ($app->module["mode"] != ""){
	if ($app->module["mode"] == "show_categories"){
		$app->meta['title'] = $app->constants["catalog"]["titl_glavnoj_stranicy"];
		$app->meta['description'] = $app->constants["catalog"]["opisanie_glavnoj_stranicy"];
		$app->meta['keywords'] = $app->constants["catalog"]["kljuchevye_slova_glavnoj_stranicy"];
		
		//$categories = get_products_categories(array("pid"=>2220,"lang"=>1));
		$categories = get_products_categories(array("pid"=>0,"lang"=>1));
		//print_r($categories);
		$static_content = $db->selectCell("SELECT content FROM pages WHERE master_id=8 AND lang=1");
		$static_content = stripslashes($static_content);
		
		
		$smarty->assign("categories",$categories);
		$smarty->assign("static_content",$static_content);
	}
	if ($app->module["mode"] == "show_sub_categories"){
		$master_category_translit = str_replace("/","",clearvar($_GET["master_category_translit"]));
		$master_category_item_id = (int)$db->selectCell("SELECT product_categories_ext.item_master_id FROM product_categories_ext WHERE translit='{$master_category_translit}'");
		$static_content = $db->selectCell("SELECT product_categories_ext.static_content FROM product_categories_ext WHERE translit='{$master_category_translit}'");
		
		if ($master_category_item_id > 0){
			$display_status_of_this_cat = $db->selectCell("SELECT product_categories.display FROM product_categories WHERE product_categories.item_id={$master_category_item_id}");
			if ($display_status_of_this_cat == "n"){
				$app->error404 = true;
			}else{
				$app->meta = get_category_meta(array("category_item_id"=>$master_category_item_id,"lang"=>1));
				$categories = get_products_categories(array("pid"=>$master_category_item_id,"lang"=>1));
			}
		}
		//print_r($categories);
		$smarty->assign("categories",$categories);
		$smarty->assign("static_content",$static_content);
	}
	if ($app->module["mode"] == "show_products"){
		$master_category_translit = clearvar($_GET["master_category_translit"]);
		$master_category_item_id = (int)$db->selectCell("SELECT product_categories_ext.item_master_id FROM product_categories_ext WHERE translit='{$master_category_translit}'");
		$master_category_title = $db->selectCell("SELECT product_categories_ext.title FROM product_categories_ext WHERE translit='{$master_category_translit}'");

		$app->meta = get_category_meta(array("category_item_id"=>$master_category_item_id,"lang"=>1));
		
		$products = get_products(array("master_category_item_id"=>$master_category_item_id,"lang"=>1));
		
		if ($_SESSION["user"]["is_logged"]){
			if ($_SESSION["user"]["user_price"] != ''){
				$user_price_type = $_SESSION["user"]["user_price"];
			}
		}
		else{
			$user_price_type = "retail_price";
		}
		
		foreach($products as $key => $value){
			$products["{$key}"]["inCart"] = $cart->inCart($value["item_id"]);
			//$products["{$key}"]["price"] = $value[$user_price_type];
			$uPrice = $value[$user_price_type];
			$rate = getRate($value["currency"]);
			$products["{$key}"]["price"] = makePrice($uPrice,$rate);
		}
		//print_r($products);
		
		$smarty->assign("products",$products);
	}
	if ($app->module["mode"] == "show_product"){
		$product_translit = clearvar($_GET["product_translit"]);
		$product_master_item_id = (int)$db->selectCell("SELECT products_ext.item_master_id FROM products_ext WHERE products_ext.translit='{$product_translit}'");
		
		$product_data = get_product_data(array("product_master_item_id"=>$product_master_item_id,"lang"=>1));
		
		$app->meta = get_product_meta(array("product_master_item_id"=>$product_master_item_id,"lang"=>1));
		
		//print_r($product_data);
		if($product_data["display"] == "n"){
			$app->error404 = true;
		}
		
		/* get category master id */
		//echo $product_master_item_id;
		//echo "<br>";
		$category_id = $db->selectCell("SELECT products.category_master_id FROM products WHERE products.item_id={$product_master_item_id}");
		
		$other_products = get_products(array("master_category_item_id"=>$category_id,"current_id"=>$product_master_item_id,"lang"=>1));
		//print_r($other_products);

		$smarty->assign("other_products",$other_products);
		$smarty->assign("product_data",$product_data);
	}
}
?>
