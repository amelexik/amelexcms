<?
$app->meta['title'] = "Карта сайта";

$mytree = $db->select("SELECT structure.id AS ARRAY_KEY, structure.pid AS PARENT_KEY, structure.id, structure_ext.name FROM structure, structure_ext WHERE structure_ext.master_id=structure.id AND structure_ext.lang={$app->current_lang['id']} ORDER BY structure.sorting ASC");
//print_r($mytree);

function make_map($array){
	$map = $map."<ul>";
	foreach ($array as $key => $value){
		$url = get_url(array("id"=>$value['id'],"lang"=>1));
		$map = $map."<li><a href=\"".$url."\">".$value['name']."</a></li>";
		if (count($value['childNodes']) > 0){
			$map = $map.make_map($value['childNodes']);
		}
	}
	$map = $map."</ul>";
	return $map;
}

$products_map = "<ul>";
	$products_map.= '<li><a href="/">Каталог</a></li>';
	//$products = get_products(array("master_category_item_id"=>2220,"lang"=>1));
	$categories = get_products_categories(array("pid"=>0,"lang"=>1));
	//print_r($categories);
	$products_map.= "<ul>";
		foreach($categories as $key => $category){
			$products_map.= "<li><a href=\"{$category["url"]}\">{$category["title"]}</a></li>";
			
			$products_map.= "<ul>";
			
			$category_id = $category["item_id"];
			$products = get_products(array("master_category_item_id"=>$category_id,"lang"=>1));
			//print_r($products);
			foreach($products as $key => $product){
				$products_map.= "<li><a href=\"{$product["url"]}\">{$product["title"]}</a></li>";
			}
			
			$products_map.= "</ul>";
			
		}
	$products_map.= "</ul>";
$products_map.= "</ul>";


$map = make_map($mytree);


$result_map = $products_map.$map;

$smarty->assign("map", $result_map);
?>