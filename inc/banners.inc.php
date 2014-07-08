<?
$banners_IDs_forPage = array();
$banners_IDs_displayEverywhere = array();
$banners = array();


if ($app->currentPage['id'] > 0){
	$seralize_row = $db->selectCell("SELECT structure_ext.banners FROM structure_ext WHERE structure_ext.lang={$app->current_lang['id']} AND structure_ext.master_id={$app->currentPage['id']}");
	if ($seralize_row != ""){
		$banners_IDs_forPage = unserialize($seralize_row);
	}
}

$banners_IDs_displayEverywhere_tmp = $db->select("SELECT banners_ext.master_id FROM banners_ext WHERE banners_ext.display='everywhere'");
if (!empty($banners_IDs_displayEverywhere_tmp)){
	foreach ($banners_IDs_displayEverywhere_tmp as $key => $value){
		$banners_IDs_displayEverywhere[] = $value["master_id"];
	}
}

$banners_IDs = array_merge($banners_IDs_forPage,$banners_IDs_displayEverywhere);


if (count($banners_IDs)>0){
	foreach ($banners_IDs as $key => $banner_master_id){
		$get_banners_sql = "
				SELECT 
				banners.*, 
				banners_ext.title, 
				banners_ext.content
				FROM 
				banners, 
				banners_ext
				WHERE banners_ext.lang = {$app->current_lang['id']}
				AND banners_ext.master_id = {$banner_master_id}
				AND banners_ext.display != 'n'
			";
		$tmp = $db->selectRow($get_banners_sql);
		//print_r($tmp);
		$banners["{$key}"]["title"] = stripslashes($tmp["title"]);
		$banners["{$key}"]["content"] = stripslashes($tmp["content"]);
	}
}

//print_r($banners);
$smarty->assign("banners",$banners);


?>