<?php
//проверка на коректность емайла
function check_email($email) {
	$email=trim($email);
	if (preg_match("/^[^\s()*|\^<>@,;:\"'\/\[\]?=]+@\w[\w-]*(\.\w[\w-]*)*\.[a-z]{2,}$/i", $email)) {
		return true;
	} else {
		return false;
	}
}

// получаем ID стартовой страницы
function get_start_pageID(){
	global $db;
	$start_page_config = (int)getConfig("start_page_id");
	$return = 0;
	if ($start_page_config>0){
		$tmp = $db->selectRow("SELECT * FROM structure WHERE id={$start_page_config}");
		if (count($tmp)>0){
			$return = $start_page_config;
		}
	}
	if ($return == 0){
		$tmp = $db->selectRow("SELECT * FROM structure WHERE pid=0 ORDER by sorting ASC");
		if (!empty($tmp)){
			$return = $tmp["id"];
		}
		else{
			$return = 1;
		}
	}
	return $return;
}


function get_url($params){
	global $db;
	$p_id = $params["id"];
	$p_lang = $params["lang"];
	
	$tmp_lang = $db->selectRow("SELECT * FROM langs WHERE id={$p_lang}");
	if ($tmp_lang['is_default'] != 'y'){
		$languageURL = '/'.$tmp_lang['prefix'].'/';
	}
	else{
		$languageURL = '/';
	}
	
	return $languageURL.make_url($p_id, $p_lang);
}

function make_url($id,$lang){
	global $db;
	$lang=$lang;
	$sql = "SELECT structure.id, structure.pid, structure.template, structure_ext.translit FROM structure,structure_ext WHERE structure.id=structure_ext.master_id AND structure.id={$id} AND structure_ext.lang={$lang}";
	$tmp = $db->selectRow($sql);
	
	if ($tmp['id']>0){
		if($tmp['pid']){
			@$url.=make_url($tmp['pid'],$lang);
		}
		@$url.=$tmp['translit']."/";
	}
	return $url;
}

function clearvar($var){
	return trim($var);
}

function getNoneId($id){
	global $db;
	$return = $id;
	$id = (int)$id;
	$template = $db->selectCell("SELECT template FROM structure WHERE id={$id}");
	if($template == 'none'){
		$sub_id = $db->selectCell("SELECT id FROM structure WHERE pid={$id} ORDER by sorting ASC");
		$return = (int) $sub_id;
	}
	return $return;
}

function _strtolower($string)  
{  
    $small = array('а','б','в','г','д','е','ё','ж','з','и','й',  
                   'к','л','м','н','о','п','р','с','т','у','ф',  
                   'х','ч','ц','ш','щ','э','ю','я','ы','ъ','ь',  
                   'э', 'ю','я','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');  
    $large = array('А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й',  
                   'К','Л','М','Н','О','П','Р','С','Т','У','Ф',  
                   'Х','Ч','Ц','Ш','Щ','Э','Ю','Я','Ы','Ъ','Ь',  
                   'Э', 'Ю','Я','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');  
    return str_replace($large, $small, $string);    
}
function _strtoupper($string)  
{  
    $small = array('а','б','в','г','д','е','ё','ж','з','и','й',  
                   'к','л','м','н','о','п','р','с','т','у','ф',  
                   'х','ч','ц','ш','щ','э','ю','я','ы','ъ','ь',  
                   'э', 'ю','я','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');  
    $large = array('А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й',  
                   'К','Л','М','Н','О','П','Р','С','Т','У','Ф',  
                   'Х','Ч','Ц','Ш','Щ','Э','Ю','Я','Ы','Ъ','Ь',  
                   'Э', 'Ю','Я','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');  
    return str_replace($small, $large, $string);    
}
function translit($string)
{
	$string=strip_tags($string);
	$string=trim(preg_replace("/[^\w\x7F-\xFF\s]/", "", $string));
	$string=str_replace(" ","-",$string);
	$string=str_replace("а","a",$string);
	$string=str_replace("б","b",$string);
	$string=str_replace("в","v",$string);
	$string=str_replace("г","g",$string);
	$string=str_replace("ґ","g",$string);
	$string=str_replace("д","d",$string);
	$string=str_replace("е","e",$string);
	$string=str_replace("ё","jo",$string);
	$string=str_replace("ж","zh",$string);
	$string=str_replace("з","z",$string);	
	$string=str_replace("и","i",$string);
	$string=str_replace("і","i",$string);
	$string=str_replace("ї","i",$string);
	$string=str_replace("й","j",$string);
	$string=str_replace("к","k",$string);
	$string=str_replace("л","l",$string);
	$string=str_replace("м","m",$string);
	$string=str_replace("н","n",$string);
	$string=str_replace("о","o",$string);
	$string=str_replace("п","p",$string);
	$string=str_replace("р","r",$string);
	$string=str_replace("с","s",$string);
	$string=str_replace("т","t",$string);
	$string=str_replace("у","u",$string);
	$string=str_replace("ф","f",$string);
	$string=str_replace("х","h",$string);
	$string=str_replace("ц","c",$string);
	$string=str_replace("ч","ch",$string);
	$string=str_replace("ш","sh",$string);
	$string=str_replace("щ","sch",$string);
	$string=str_replace("ь","",$string);
	$string=str_replace("ы","y",$string);
	$string=str_replace("ъ","",$string);
	$string=str_replace("э","je",$string);
	$string=str_replace("є","e",$string);
	$string=str_replace("ю","ju",$string);
	$string=str_replace("я","ya",$string);
	$string=str_replace("«","",$string);
	$string=str_replace("»","",$string);
	$string=str_replace('“',"",$string);
	$string=str_replace('”',"",$string);
	$string=ereg_replace("(_){2,}","_",$string);
	$string=str_replace('_','-',$string);
	$string=str_replace('--','-',$string);
	$string=str_replace('---','-',$string);
	$string=str_replace('----','-',$string);
	return $string;
}
function get_meta($params){
	global $app, $db;
	$meta = array();
	$p_id = $params["id"];
	$p_lang = $params["lang"];
	$sql = "SELECT structure.id, structure.pid, structure_ext.name,structure_ext.title,structure_ext.description,structure_ext.keywords FROM structure,structure_ext WHERE structure.id=structure_ext.master_id AND structure.id={$p_id} AND structure_ext.lang={$p_lang}";
	$tmp = $db->selectRow($sql);
	
	$meta["name"] = $tmp["name"];
	
	if ($tmp["title"] == '' and $app->module["mode"] != "show_product"){
		$meta["title"] = $tmp["name"];
	} elseif ($tmp["title"] == '' and $app->module["mode"] == "show_product") {
		$meta["title"] = $tmp["name"].". Купить. PMA-TOOLS";
	} else {
		$meta["title"] = $tmp["title"];
	}
	
	if ($tmp["description"] == '' and $app->module["mode"] != "show_product"){
		$meta["description"] = $meta["title"];
	} elseif ($tmp["description"] == '' and $app->module["mode"] == "show_product") {
		$meta["description"] = $tmp["name"].". Фото, купить в магазине pma-tools - все для автомобильных стекол.";
	} else{
		$meta["description"] = $tmp["title"];
	}
	
	if ($tmp["keywords"] == '' and $app->module["mode"] != "show_product"){
		$meta["keywords"] = $meta["title"];
	} elseif ($tmp["keywords"] == '' and $app->module["mode"] == "show_product") {
		$meta["keywords"] = str_replace(" ",",",$tmp["name"]).", фото, купить, магазин, pma-tools, автомобильные стекла,";
	} else{
		$meta["keywords"] = $tmp["keywords"];
	}
	
	return $meta;	
}


function makeTreeMenuArray($array,$lang){
	foreach ($array as $k => $value){
		$menu["{$value["id"]}"]["id"] = $value["id"];
		$menu["{$value["id"]}"]["name"] = $value["name"];
		$id = getNoneId($value["id"]);
		$menu["{$value["id"]}"]["url"] = get_url(array("id"=>$id,"lang"=>$lang));
		if ($value["childNodes"]){
			$menu["{$value["id"]}"]["sub"] = makeTreeMenuArray($value["childNodes"],$lang);
		}
	}
	return $menu;
}
function getConfig($config_name=""){
	global $db;
	$return = "";
	$config_name = trim($config_name);
	if (!empty($config_name)){
		$tmp = $db->selectRow("SELECT value FROM siteconfig WHERE name='{$config_name}'");
		if (!empty($tmp)){
			$return = $tmp['value'];
		}
	}
	return $return;
}
function getConstants($lang){
	global $db;
	$constants = array();
	$groups = $db->select("SELECT id, name, title FROM constants_groups");
	if (count($groups)>0){
		foreach ($groups as $k => $value){
			$items = array();
			$sql = "SELECT constants.id,constants.group_id,constants.name FROM constants WHERE constants.group_id={$value["id"]}";
			$tmp_items = $db->select($sql);
			
			if (count($tmp_items)>0){
				foreach($tmp_items as $i_k => $i_value){
					$constant_value_tmp = $db->selectRow("SELECT constants_ext.value FROM constants_ext WHERE constants_ext.master_id={$i_value["id"]} AND constants_ext.lang={$lang}");
					$constant_value = htmlspecialchars_decode($constant_value_tmp["value"]);
					$items["{$i_value["name"]}"] = $constant_value;
				}
			}
			
			$constants["{$value["name"]}"]=$items;
		}
	}
	return $constants;
}

function pageLister($all_quantity,$onpage_quantity,$getVar_name="p"){
	$pages = ceil($all_quantity/$onpage_quantity);
	$lister;
	$getVar_value = $_GET[$getVar_name];
	for($i=1; $i<=$pages; $i++){
		$link_num_value = $i;
		
		$href = "?".$getVar_name."=".$link_num_value;
		
		if (($i == $getVar_value) or ($i == 1 and !$getVar_value)){
			$item = "<span>{$i}</span> ";
		}
		else{
			$item = "<a href=\"".$href."\">{$i}</a> ";
		}
		
		$lister.= $item;
	
	}
	return $lister;
}

function pageLister2($all_quantity,$onpage_quantity,$getVar_name="p"){
	$pages = ceil($all_quantity/$onpage_quantity);
	$getVar_value = $_GET[$getVar_name];
	
	$current = (int)$getVar_value;
	
	$prev_link_number = abs($current - 1);
	$next_link_number = abs($current + 1);
	
	$prev_link = modify_url(array('p' => $prev_link_number));
	$next_link = modify_url(array('p' => $next_link_number));
	
	if ($current == 0 or $current == 1){
		$prev_link_disabled = true;
	}
	if ($current == $pages){
		$next_link_disabled = true;
	}
	

	$lister = "<ul>";
	if (!$prev_link_disabled){
		$lister.=" <li><a href=\"".$prev_link."\" class=\"prevnext\">&#8592; предыдущая</a></li> ";
	}
	else{
		$lister.=" <li><a class=\"prevnext disablelink\">&#8592; предыдущая</a></li> ";
	}

	
	
	for($i=1; $i<=$pages; $i++){
		$link_num_value = $i;
		
		$href = modify_url(array('p' => $link_num_value));
		
		if (($i == $getVar_value) or ($i == 1 and !$getVar_value)){
			$item = " <a class=\"currentpage\" href=\"".$href."\">{$i}</a> ";
		}
		else{
			$item = " <a href=\"".$href."\">{$i}</a> ";
		}
		
		$lister.= $item;
	
	}
	if(!$next_link_disabled){
		$lister.=" <li><a href=\"".$next_link."\" class=\"prevnext\">следующая &#8594;</a></li> ";
	}
	else{
		$lister.=" <li><a class=\prevnext disablelink\">следующая &#8594;</a></li> ";
	}
	$lister.="</ul>";
	return $lister;
}

/*
function pageLister2($all_quantity,$onpage_quantity,$getVar_name="p"){
	$pages = ceil($all_quantity/$onpage_quantity);
	$getVar_value = $_GET[$getVar_name];
	
	
	for($i=1; $i<=$pages; $i++){
		$link_num_value = $i;
		
		$href = modify_url(array('p' => $link_num_value));
		
		if (($i == $getVar_value) or ($i == 1 and !$getVar_value)){
			$item = " <span>{$i}</span> ";
		}
		else{
			$item = " <a href=\"".$href."\">{$i}</a> ";
		}
		
		$lister.= $item;
	
	}
	return $lister;
}*/

function modify_url($mod){ 
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
	$query = explode("&", $_SERVER['QUERY_STRING']); 
	// modify/delete data 
	foreach($query as $q){ 
		list($key, $value) = explode("=", $q); 
		if(array_key_exists($key, $mod)){ 
			if($mod[$key]){ 
				$url = preg_replace('/'.$key.'='.$value.'/', $key.'='.$mod[$key], $url); 
			}
			else { 
				$url = preg_replace('/&?'.$key.'='.$value.'/', '', $url); 
			} 
		} 
	} 
	// add new data 
	foreach($mod as $key => $value){ 
		if($value && !preg_match('/'.$key.'=/', $url)){ 
			$url .= '&'.$key.'='.$value; 
		} 
	} 
	return $url; 
} 

function item_total_price($currency,$price,$quantity){
	$price = make_price($currency,$price);
	$price = ($price * $quantity);
	return $price;
}


function getRate($CharCode=""){
	global $db;
	$return = 0;
	if ($CharCode != ""){
		if ($CharCode == "EUR"){
			$return = getConfig("euro_rate");
		}
		else{
			$tmp = $db->selectRow("SELECT * FROM rate_of_currency WHERE CharCode='{$CharCode}'");
			if (count($tmp)>0){
				$NumCode = $tmp["NumCode"];
				$CharCode = $tmp["CharCode"];
				$Nominal = (int)$tmp["Nominal"];
				$Name = (string)$tmp["Name"];
				$Value = floatval($tmp["Value"]);
				$return = floatval($Value/$Nominal);
				$return = round($return,2);
			}
		}
	}
	$return = round($return,2);	
	return $return;
}


function makePrice($price,$rate){
	$return = 0;
	
	if (!empty($price) && !empty($rate)){
		$return = floatval($price * $rate);
	}
	if($_SESSION["user"]["discount"]>0){
		$discount = (int)$_SESSION["user"]["discount"];
		$onePercent = ($return/100);
		$discountPrice = $onePercent * $discount;
		$return = $return - $discountPrice;
	}
	$return = round($return,2);	
	return $return;
}

function makeTotalPrice($price,$quantity){
	$return = 0.00;
	$quantity = (int)$quantity;
	$return = ($quantity * $price);
	$return = round($return,2);	
	return $return;	
}

//проверка достуаности логина
function checkLogin($login,$table="users"){
	global $db;
	$login = trim($login);
	//echo "SELECT * FROM {$table} WHERE login='{$login}'";
	$tmp = $db->selectRow("SELECT * FROM {$table} WHERE login='{$login}'");
	if (count($tmp) > 0){
		if ($tmp["login"] == $login){
			return false;
		}
	}
	else{
		return true;
	}
}


/*************************************************************/

	function get_products_categories($params){
		global $db;
		$pid = (int)$params["pid"];
		$lang = (int)$params["lang"];
		$sql = "
				SELECT 
				product_categories.item_id,
				product_categories.item_pid,
				product_categories.category_image,
				product_categories_ext.item_master_id,
				product_categories_ext.lang,
				product_categories_ext.title
				FROM 
				product_categories,
				product_categories_ext
				WHERE 
				product_categories.display='y'
				AND product_categories_ext.item_master_id=product_categories.item_id 
				AND product_categories_ext.lang={$lang}
				AND product_categories.item_pid={$pid}
				";
		$return = $db->select($sql);
		
		if ($_GET["module"] == "catalog"){
			if ($_GET["mode"] == "show_products" or $_GET["mode"] == "show_product"){
				if ($_GET["mode"] == "show_products"){
					$master_category_item_id = (int)$db->selectCell("SELECT product_categories_ext.item_master_id FROM product_categories_ext WHERE translit='{$_GET["master_category_translit"]}'");
					$catID = $master_category_item_id;
				}
				if ($_GET["mode"] == "show_product"){
					//$product_master_item_id = (int)$db->selectCell("SELECT products_ext.item_master_id FROM products_ext WHERE products_ext.translit='{$_GET["product_translit"]}'");
					//$category_item_id = (int)$db->selectCell("SELECT products.item_master_id FROM products_ext WHERE products_ext.translit='{$_GET["product_translit"]}'");
				}
				
			}
		}
		
		foreach($return as $key => $value){
			$return["{$key}"]["url"] = get_category_url($category_item_id=$value["item_id"],$lang=$lang);
			if ($catID == $value["item_id"]){
				$return["{$key}"]["current"] = 1;
			}
			else{
				$return["{$key}"]["current"] = 0;
			}
		}
		return $return;
	}
	
	function get_products($params){
		global $db;
		$sql_string = "";
		$master_category_item_id = (int)$params["master_category_item_id"];
		$lang = (int)$params["lang"];
		$current_id =  (int)$params["current_id"];
		
		if ($current_id>0){
			$sql_string = " AND products.item_id !={$current_id} LIMIT 5";
		}
		
		//`id`, `item_id`, `category_master_id`, `eurocode`, `currency`, `trade_price`, `retail_price` FROM `pmatools`.`products` LIMIT 0, 1000;
		// SELECT `id`, `item_master_id`, `lang`, LEFT(`title`, 256), `translit`, `units` FROM `pmatools`.`products_ext` LIMIT 0, 1000;
		
		//$sql = "SELECT * FROM products";
		
		$sql = "
				SELECT 
				products.*,
				products_ext.title,
				products_ext.translit

				FROM 
				products,
				products_ext
				WHERE 
				products.category_master_id={$master_category_item_id} 
				AND products.display='y'
				AND products_ext.item_master_id=products.item_id
				$sql_string
				";
				
		//echo $sql;
		
		$return = $db->select($sql);
		
		foreach($return as $key => $value){
			$return["{$key}"]["url"] = get_product_url($value["item_id"],$lang);
			//$return["{$key}"]["url"] = "Product-".$value["translit"]."/";
			$return["{$key}"]["title"] = str_replace("&quot;&quot;","&quot;",($value["title"]));
		}
		
		//print_r($return);
		
		return $return;
	}
	
	function get_product_data($params){
		global $db;
		$product_master_item_id = (int)$params["product_master_item_id"];
		$lang = (int)$params["lang"];
		
		//`id`, `item_id`, `category_master_id`, `eurocode`, `currency`, `trade_price`, `retail_price` FROM `pmatools`.`products` LIMIT 0, 1000;
		// SELECT `id`, `item_master_id`, `lang`, LEFT(`title`, 256), `translit`, `units` FROM `pmatools`.`products_ext` LIMIT 0, 1000;
		
		//$sql = "SELECT * FROM products";
		
		$sql = "
				SELECT 
				products.*,
				products_ext.*

				FROM 
				products,
				products_ext
				WHERE 
				products.item_id={$product_master_item_id} 
				AND products_ext.item_master_id=products.item_id
				";
				
		//echo $sql;
		
		$return = $db->selectRow($sql);
		
		$return["title"] = str_replace("&quot;&quot;","&quot;",($return["title"]));
		
		if ($_SESSION["user"]["is_logged"]){
			if ($_SESSION["user"]["user_price"] != ''){
				$user_price_type = $_SESSION["user"]["user_price"];
			}
		}
		else{
			$user_price_type = "retail_price";
		}		
		
		
		$user_price_type;
		$uPrice = $return[$user_price_type];
		
		$rate = getRate($return["currency"]);
		
		$price = makePrice($uPrice,$rate);
		
		$return['price'] = $price;
		
		$start_photo = $db->selectRow("SELECT products_photos.id,products_photos.file FROM products_photos WHERE products_photos.product_item_id={$product_master_item_id} AND products_photos.sorting=1");
		
		//print_r($start_photo);
		
		$photos_tmp = $db->select("SELECT products_photos.id,products_photos.file FROM products_photos WHERE products_photos.product_item_id={$product_master_item_id} ORDER BY products_photos.sorting ASC");
		
		foreach($photos_tmp as $key => $value){
			$photos["{$value["id"]}"]["id"] = $value["id"];
			$photos["{$value["id"]}"]["file"] = $value["file"];
		}
		
		
		$return["photos"] = $photos;
		
		$return["start_photo"] = $start_photo;
		
		return $return;
	}		
	
	function make_category_url($category_item_id,$lang){
		global $db;
		$category_item_id = (int)$category_item_id;
		$lang = (int)$lang;
		
		$sql = "
				SELECT 
				product_categories.item_id,
				product_categories.item_pid,
				product_categories_ext.item_master_id,
				product_categories_ext.lang,
				product_categories_ext.translit
				FROM 
				product_categories, 
				product_categories_ext
				WHERE 
				product_categories_ext.lang={$lang} 
				AND product_categories.item_id={$category_item_id} 
				AND product_categories_ext.item_master_id=product_categories.item_id
				";	
		$tmp = $db->selectRow($sql);
		
		//print_r($tmp);
		
		if ($tmp['item_id']>0){
			if($tmp['item_pid']>=0){
				@$url.=make_category_url($tmp['item_pid'],$lang);
			}
			@$url.=$tmp['translit']."/";
		}		
		return $url;
	}
	function get_category_url($category_item_id,$lang){
		return CATALOG_BASE_URL.make_category_url($category_item_id,$lang);
	}
	
	function get_categoryID_by_productID($product_item_id){
		global $db;
		//$return = 0;
		$product_item_id = (int)$product_item_id;
		if ($product_item_id > 0){
			$sql = "SELECT products.category_master_id FROM products WHERE products.item_id={$product_item_id}";
			//echo $sql;
			$category_master_id = $db->selectCell($sql);
			$return = (int)$category_master_id;
		}
		return $return;
	}
	
	function get_product_url($product_item_id,$lang){
		global $db;
		$product_item_id = (int)$product_item_id;
		if ($product_item_id > 0){
			$category_master_id = get_categoryID_by_productID($product_item_id);
		}
		$category_url = get_category_url($category_master_id,$lang);
		
		$sql = "SELECT products_ext.translit FROM products_ext WHERE products_ext.item_master_id={$product_item_id} AND products_ext.lang={$lang}";
		$product_translit = $db->selectCell($sql);
		$product_url = "Product-".$product_translit."/";
		
		$url = $category_url.$product_url;
		
		return $url;
	}
	
	function get_category_meta($params){
		global $db;
		$category_item_id = (int)$params["category_item_id"];
		$lang = (int)$params["lang"];
		
		$sql = "
			SELECT
			product_categories_ext.title,
			product_categories_ext.translit,
			product_categories_ext.meta_title,
			product_categories_ext.meta_description,
			product_categories_ext.meta_keywords 
			FROM 
			product_categories_ext
			WHERE
			product_categories_ext.item_master_id={$category_item_id}
			AND product_categories_ext.lang={$lang};
		";
		$tmp = $db->selectRow($sql);
		//print_r($tmp);
		$meta["name"] = $tmp["title"];
		
		if ($tmp["meta_title"] == ''){
			$meta["title"] = $meta["name"].". Купить. PMA-TOOLS";
		}
		else{
			$meta["title"] = $tmp["meta_title"];
		}
		
		if ($tmp["meta_description"] == ''){
			$meta["description"] = $meta["name"].". Фото, купить в магазине pma-tools - все для автомобильных стекол.";
		}
		else{
			$meta["description"] = $tmp["meta_description"];
		}
		
		if ($tmp["meta_keywords"] == ''){
			$meta["keywords"] = str_replace(" ",",",$meta["name"]).", фото, купить, магазин, pma-tools, автомобильные стекла,";
		}
		else{
			$meta["keywords"] = $meta["meta_keywords"];
		}
		
		//print_r($meta);
		return $meta;			
		
	}
	
	function get_product_meta($params){
		global $db;
		$product_master_item_id = (int)$params["product_master_item_id"];
		$lang = (int)$params["lang"];
		
		$sql = "
			SELECT
			products_ext.title,
			products_ext.translit,
			products_ext.meta_title,
			products_ext.meta_description,
			products_ext.meta_keywords 
			FROM 
			products_ext
			WHERE
			products_ext.item_master_id={$product_master_item_id}
			AND products_ext.lang={$lang};
		";
		$tmp = $db->selectRow($sql);
		//print_r($tmp);
		
		$meta["name"] = $tmp["title"];
		
		if ($tmp["meta_title"] == ''){
			$meta["title"] = $meta["name"].". Купить. PMA-TOOLS";
		}
		else{
			$meta["title"] = $tmp["meta_title"];
		}
		
		if ($tmp["meta_description"] == ''){
			$meta["description"] = $meta["name"].". Фото, купить в магазине pma-tools - все для автомобильных стекол.";
		}
		else{
			$meta["description"] = $tmp["meta_description"];
		}
		
		if ($tmp["meta_keywords"] == ''){
			$meta["keywords"] = str_replace(" ",",",$meta["name"]).", фото, купить, магазин, pma-tools, автомобильные стекла,";
		}
		else{
			$meta["keywords"] = $tmp["meta_keywords"];
		}
		
		//print_r($meta);
		return $meta;			
		
	}	


?>