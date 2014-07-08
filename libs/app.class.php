<?php


class App{
	
	var $error404;
	var $uri;
	var $branchKeys = array();
	var $branchKeysCount;
	var $branchKeys2 = array();
	var $currentPage;
	var $siteStart;
	var $module=array();
	
	var $db;
	var $smarty_display_file;
	
	var $theme_name = 'pmatools';
	var $smarty_theme_path;
	var $theme_path;
	
	var $languages;
	var $languages2;
	var $default_lang;
	var $current_lang;
	
	var $meta=array();
	var $breadCrumbs;
	
	var $siteMapUrl;
	var $registrationPageUrl;
	var $constants;
	
	var $gallery_path;
	var $gallery_thumbs_path;
	
	
	
	function __construct(){
		global $db;
		
		$this->module['name'] = @$_GET["module"];
		$this->module['mode'] = @$_GET["mode"];
		
		$this->gallery_path = GALLERY_PATH;
		$this->gallery_thumbs_path = GALLERY_THUMBS_PATH;
		
		$this->smarty_display_file = "index.html";
		
		$this->db = $db;	
		$this->uri = addslashes($_SERVER["REQUEST_URI"]);
		
		/*
			--------------------------------------------------------------------------------------------
			определение шаблона сайта ("тема")
			--------------------------------------------------------------------------------------------
		*/		
		
		if ((!$this->theme_name) or ($this->theme_name == "")){
			$path = ROOT."/themes/default/";
			$path2 = "/themes/default/";
		} 
		else{
			$path = ROOT."/themes/".$this->theme_name."/";
			$path2 = "/themes/".$this->theme_name."/";
		}
		$this->smarty_theme_path = $path;
		$this->theme_path = $path2;
		
		/*
			--------------------------------------------------------------------------------------------
			var $languages;
			var $default_lang;
			при запуске скрипта определяем язык сайта "по умолчанию". он же и будет текущий язык.
			в дальнейшем current_lang("текущий язык") может переопределится.
			--------------------------------------------------------------------------------------------
		*/
		$tmp_langs = $this->db->select('SELECT * FROM langs');
		if (!empty($tmp_langs)){
			foreach ($tmp_langs as $lang){
				$this->languages["{$lang["id"]}"]["id"] = $lang["id"];
				$this->languages["{$lang["id"]}"]["title"] = $lang["title"];
				$this->languages["{$lang["id"]}"]["prefix"] = $lang["prefix"];
				$this->languages["{$lang["id"]}"]["is_default"] = $lang["is_default"];
				$this->languages2["{$lang["id"]}"]=$lang["prefix"];
				if ($lang["is_default"] == 'y'){
					$this->default_lang["id"] = $lang["id"];
					$this->default_lang["title"] = $lang["title"];
					$this->default_lang["prefix"] = $lang["prefix"];
					
					$this->current_lang["id"] = $lang["id"];
					$this->current_lang["title"] = $lang["title"];
					$this->current_lang["prefix"] = $lang["prefix"];
				}
			}
		}
		
		
		
		/*
			--------------------------------------------------------------------------------------------
			урл...
			--------------------------------------------------------------------------------------------
		*/	
		foreach ($this->languages2 as $langId => $langPrefix){
			$langPrefix = "/".$langPrefix;
			if ($this->uri == $langPrefix){
				$goto = $langPrefix."/";
				header("location:$goto");
				exit();
			}
		}
		if (!empty($this->module['name'])){
			$this->module['html_template'] = $this->module['name'].".module.html";
			
			if ($this->module['name'] == "cartoverlay"){
				$this->smarty_display_file = "cartoverlay.module.html";
			}
			if ($this->module['name'] == "printcart"){
				$this->smarty_display_file = "printcart.module.html";
			}
			if ($this->module['name'] == "catalog"){
				//$this->breadCrumbs = $this->breadCrumbsofProducts();
			}			
		
		}
		else{
					$uri_array = parse_url($this->uri);
					$path_array_tmp = explode("/",$uri_array['path']); //print_r($path_array);
					
					$path_array = array();
					foreach($path_array_tmp as $key => $value){
						if ($value != ""){
							$path_array[] = $value;
						}
					}
					
					if (count($path_array) > 0){
						$url_lang = $path_array[0];
						if ($url_lang == $this->default_lang['prefix']){
							// если в 
							//echo "формируем урл без ПРЕФИКСА и перенаправляем";
							unset($path_array[0]);
							$noPrefixUrl = '/';
							foreach ($path_array as $k => $val){
								$noPrefixUrl = $noPrefixUrl.$val.'/';
							}
							Header("Location:$noPrefixUrl");
							exit();
						}
						elseif(in_array($url_lang,$this->languages2)){
							//echo "удаляем префикс БЕЗ РЕДИРЕКТА";
							$tmp_lang = $this->db->selectRow("SELECT * FROM langs WHERE prefix='{$url_lang}'");
							$this->current_lang["id"] = $tmp_lang["id"];
							$this->current_lang["title"] = $tmp_lang["title"];
							$this->current_lang["prefix"] = $tmp_lang["prefix"];
							
							$path_array2 = $path_array;
							unset($path_array2[0]);
							unset($path_array);
							$path_array = array();
							foreach ($path_array2 as $k => $val){
								$path_array[] = $val;
							}
						}
					}
					if (count($path_array) > 0){
						
						$this->currentPage["translit"] = end($path_array);
						
						$id = 0;
						foreach($path_array as $key => $val)
						{
							//echo "SELECT structure.id,structure.template,structure_ext.master_id,structure_ext.translit FROM structure, structure_ext WHERE structure_ext.translit='{$val}' AND structure.pid = '{$id}' AND structure_ext.master_id = structure.id";
							$tmp = $db->selectRow("SELECT structure.id,structure.template,structure_ext.master_id,structure_ext.translit FROM structure, structure_ext WHERE structure_ext.translit='{$val}' AND structure.pid = '{$id}' AND structure_ext.master_id = structure.id");
							//print_r($tmp);
							if (!empty($tmp['id'])) {
								$this->branchKeys[] = $tmp['id'];
								$id = $tmp['id'];
							}
							else
							{
								$this->branchKeys2[] = $val;
							}
						}
						//print_r($this->branchKeys);
						if (!empty($this->branchKeys)){
							$this->currentPage["id"] = end($this->branchKeys);
						}
					
					}
					else{
						$this->siteStart = true;
						$this->currentPage["id"] = get_start_pageID();
						$this->branchKeys[0] = get_start_pageID();
					}
					
					if ($this->currentPage["id"]>0){
						$this->currentPage["template"] = $db->selectCell("SELECT template FROM structure WHERE id={$this->currentPage['id']}");
						$this->currentPage["html_template"] = $this->currentPage["template"].".html";
						$this->meta = get_meta(array("id"=>$this->currentPage["id"],"lang"=>$this->current_lang["id"]));
						$this->breadCrumbs = $this->breadCrumbs($this->branchKeys);
					}
					else{
						$this->error404 = true;
					}
		}
		
	
		
		/*echo "<hr />";
		echo "<p>result</p>";
		echo "<pre>"; print_r($path_array); echo "</pre>";
		echo "<hr />";
		echo "<b>current_lang:</b> ".$this->current_lang['prefix']."<br />";
		echo "<b>start page:</b> ".$this->get_start_pageID();*/
		
		$this->siteMapUrl = "/sitemap/";
		$this->registrationPageUrl = "/user/registration/";
		$this->editProfileUrl = "/user/editprofile/";
		
		//getConfig("start_page_id");
		
		$this->constants = getConstants($this->current_lang['id']);
		
		$this->branchKeysCount = count($this->branchKeys);
	}
	
	
	/*
		--------------------------------------------------------------------------------------------
		функция getMenu() возращает масив с елементами меню
		--------------------------------------------------------------------------------------------
	*/	
	
	function getMenu($pid=0){
		$pid = (int) $pid;
		$menu = array();
		$sql = "SELECT 
		structure.id, structure.pid, structure.sorting, structure_ext.master_id, structure_ext.lang, structure_ext.name
		FROM structure, structure_ext 
		WHERE 
		structure.pid={$pid}
		AND structure_ext.lang={$this->current_lang['id']}
		AND structure_ext.display = 'y' 
		AND structure_ext.master_id=structure.id
		ORDER by structure.sorting
		";
		
		$tmp = $this->db->select($sql);
		if ($tmp){
			foreach ($tmp as $item){
				$menu["{$item["id"]}"]["id"] = $item["id"];
				$menu["{$item["id"]}"]["name"] = $item["name"];
				$id = getNoneId($item["id"]);
				$menu["{$item["id"]}"]["url"] = get_url(array("id"=>$id, "lang"=>$this->current_lang['id']));
			}
		}
		return $menu;
	}
	
	/*
		--------------------------------------------------------------------------------------------
		breadCrumbs
		--------------------------------------------------------------------------------------------
	*/
	function breadCrumbs($branchKeys){
		$breadCrumbs = '';
		if (count($branchKeys)>1){
			foreach($branchKeys as $k => $id){
				$tmp_meta = get_meta(array("id"=>$id,"lang"=>$this->current_lang["id"]));
				$name = $tmp_meta["name"];
				$url = get_url(array("id"=>$id, "lang"=>$this->current_lang['id']));
				if ($id == $this->currentPage["id"]){
					$item = "<span>".$name."</span>";
				}
				else{
					$item = "<a href=\"".$url."\">".$name."</a>  &raquo; ";
				}
				$breadCrumbs = $breadCrumbs.$item;
			}
		}
		return $breadCrumbs;
	}
	
	/*
		--------------------------------------------------------------------------------------------
		breadCrumbsofProducts
		--------------------------------------------------------------------------------------------
	*/
	function breadCrumbsofProducts($item_id){
		$breadCrumbs = '<a href="/">Каталог</a> -> ';
		return $breadCrumbs;
	}
	
	/*
		--------------------------------------------------------------------------------------------
		функция authorization()
		--------------------------------------------------------------------------------------------
	*/
	
	function authorization($login,$password,$back_url="/"){
		$login = clearvar($login);
		$password = clearvar($password);
		$back_url = clearvar($back_url);
		
		$tmp = $this->db->selectRow("SELECT * FROM users WHERE login='{$login}'");
		
		if(count($tmp)>0){
			if ($tmp["login"] == $login){
				if ($tmp["password"] == md5($password)){
					if ($tmp['active'] == 'y'){
						$_SESSION['user']['is_logged'] = true;
						$_SESSION['user']['id'] = $tmp["id"];
						$_SESSION['user']['name'] = stripslashes($tmp["name"]);
						$_SESSION['user']['email'] = stripslashes($tmp["email"]);
						$_SESSION['user']['discount'] = (int)($tmp["discount"]);
						$_SESSION['user']['user_price'] = $tmp["user_price"];
						
						$tmp2 = $this->db->selectRow("SELECT * FROM structure WHERE structure.pid=0 AND structure.template='registration'");
						
						if(count($tmp2)>0){
							$registration_page_id = $tmp2['id'];
							if ($registration_page_id>0){
								$edit_profile_url = get_url(array("id"=>$registration_page_id, "lang"=>$this->current_lang['id']));
								$_SESSION['user']['edit_profile_url'] =$edit_profile_url."?mode=edit&user_id={$tmp["id"]}";
							}
						}
						
						header("location:$back_url");
						exit;
					}
				}
			}
		}
	}
	/*
		--------------------------------------------------------------------------------------------
		функция logout()
		--------------------------------------------------------------------------------------------
	*/
	
	function logout($back_url="/"){
		$parse_arr = parse_url($back_url);
		$url = $parse_arr['path'];
		//session_destroy();
		unset($_SESSION["user"]);
		unset($_SESSION["cart"]);
		header("location:$url");
		exit;
	}
	
}

?>
