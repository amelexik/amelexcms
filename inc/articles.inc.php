<?

$lister_get_var_name = "p"; // название переменной номера страницы, пример: /?p=2
$u = clearvar(@$_GET['u']); // url новости

if (!empty($u)){
	$article = array();
	$sql = "
		SELECT 
		articles_ext.name,
		articles_ext.content
		FROM
		articles_ext
		WHERE 
		articles_ext.translit='{$u}'
		AND articles_ext.lang = {$app->current_lang['id']}
		AND articles_ext.display != 'n'
		";
	$tmp = $db->selectRow($sql);
	
	if (count($tmp) == 0){
		$app->error404 = true;
	}
	
	$article["name"] = stripslashes($tmp["name"]);
	$article["content"] = stripslashes($tmp["content"]);
	
	$back_url = get_url(array("id"=>$app->currentPage['id'],"lang"=>$app->current_lang['id']));
	if ($_GET[$lister_get_var_name]>0){
		$back_url.="?".$lister_get_var_name."=".$_GET[$lister_get_var_name];
	}

	$smarty->assign("article",$article);
	$smarty->assign("back_url",$back_url);
}
else{
	
	$limit_start;
	$articles_count = (int) getConfig("articles_count");;
	
	if (($_GET[$lister_get_var_name]) == 1 or !($_GET[$lister_get_var_name])){
		$limit_start = 0;
	}
	else{
		$limit_start = $articles_count * ($_GET[$lister_get_var_name]);
		$limit_start = $limit_start - $articles_count;
	}
	
	$articles = array();
	$sql = "
		SELECT 
		articles.id,
		articles.structure_master_id,
		articles.add_date,
		articles_ext.master_id,
		articles_ext.lang,
		articles_ext.name,
		articles_ext.translit,
		articles_ext.preview
		FROM
		articles,articles_ext
		WHERE 
		articles.id=articles_ext.master_id
		AND articles.structure_master_id={$app->currentPage['id']}
		AND articles_ext.lang={$app->current_lang['id']}
		AND articles_ext.display='y'
		ORDER by add_date DESC
		LIMIT {$limit_start},{$articles_count}
		";
	$tmp = $db->select($sql);

	foreach($tmp as $key => $value){
		$articles["{$value["id"]}"]["id"] = $value["id"];
		$articles["{$value["id"]}"]["add_date"] = $value["add_date"];
		$articles["{$value["id"]}"]["name"] = $value["name"];
		$articles["{$value["id"]}"]["preview"] = $value["preview"];
		
		$url = "?u=".$value["translit"];
		
		if ($_GET[$lister_get_var_name]>0){
			$url.="&".$lister_get_var_name."=".$_GET[$lister_get_var_name];
		}
		
		$articles["{$value["id"]}"]["url"] = $url;
	}
	
	# pageLister
	
	$countSQL = 
		"SELECT 
		COUNT(articles.id) 
		FROM 
		articles,articles_ext 
		WHERE
		articles_ext.display='y'
		AND articles.id=articles_ext.master_id 
		AND articles.structure_master_id={$app->currentPage['id']}
		";
		
	$all = (int) $db->selectCell($countSQL);
	$articles_count = getConfig("articles_count");
	$pageLister = pageLister($all,$articles_count,$lister_get_var_name);
	$smarty->assign("articles",$articles);
	$smarty->assign("pageLister",$pageLister);
}

?>