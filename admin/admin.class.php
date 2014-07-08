<?class Admin{		var $db;	var $adminMenu = array();	var $adminMessage;	var $adminErrorMessage;	var $templates = array();	var $section;	var $section_title;	var $mode;	var $breadCrumbs;		var $languages;	var $languages2;		var $theme_name;	var $smarty_theme_path;	var $smarty_display_file;	var $theme_path;		var $gallery_path;	var $gallery_thumbs_path;	var $gallery_dir;	var $gallery_thumbs_dir;		var $catalog_base_url;	var $catalog_categories_image_path;	var $catalog_products_image_path;	var $catalog_products_image_thumbs_path;	var $catalog_categories_image_dir;	var $catalog_products_image_dir;	var $catalog_products_image_thumbs_dir;		function __construct(){				$this->gallery_path = GALLERY_PATH;		$this->gallery_thumbs_path = GALLERY_THUMBS_PATH;			$this->gallery_dir = GALLERY_DIR;		$this->gallery_thumbs_dir = GALLERY_THUMBS_DIR;				$this->catalog_base_url = CATALOG_BASE_URL;		$this->catalog_categories_image_path = CATALOG_CATEGORIES_IMAGE_PATH;		$this->catalog_products_image_path = CATALOG_PRODUCTS_IMAGE_PATH;		$this->catalog_products_image_thumbs_path = CATALOG_PRODUCTS_IMAGE_THUMBS_PATH;		$this->catalog_categories_image_dir = CATALOG_CATEGORIES_IMAGE_DIR;		$this->catalog_products_image_dir = CATALOG_PRODUCTS_IMAGE_DIR;		$this->catalog_products_image_thumbs_dir = CATALOG_PRODUCTS_IMAGE_THUMBS_DIR;			/* 			--------------------------------------------------------------------------------------------			Меню администратора			--------------------------------------------------------------------------------------------		*/			$this->adminMenu[1]["section"] = "structure";		$this->adminMenu[1]["title"] = "Разделы";		$this->adminMenu[1]["target"] = "";				$this->adminMenu[2]["section"] = "banners";		$this->adminMenu[2]["title"] = "Баннера";		$this->adminMenu[2]["target"] = "";				$this->adminMenu[3]["section"] = "users";		$this->adminMenu[3]["title"] = "Пользователи";		$this->adminMenu[3]["target"] = "";				$this->adminMenu[4]["section"] = "siteconfig";		$this->adminMenu[4]["title"] = "Настройки";		$this->adminMenu[4]["target"] = "";			$this->adminMenu[5]["section"] = "constants";		$this->adminMenu[5]["title"] = "Константы";		$this->adminMenu[5]["target"] = "";					$this->adminMenu[6]["section"] = "customer_orders";		$this->adminMenu[6]["title"] = "Заказы";		$this->adminMenu[6]["target"] = "";				$this->adminMenu[7]["section"] = "rate_of_currency";		$this->adminMenu[7]["title"] = "Курсы валют";		$this->adminMenu[7]["target"] = "";					$this->adminMenu[8]["section"] = "products";		$this->adminMenu[8]["title"] = "Продукция";				$this->adminMenu[9]["section"] = "admins";		$this->adminMenu[9]["title"] = "Администраторы";						$this->adminMenu[98]["gAction"] = "logout";		$this->adminMenu[98]["title"] = "Выход";				$this->adminMenu[99]["url"] = "/";		$this->adminMenu[99]["section"] = "";		$this->adminMenu[99]["title"] = "На сайт &raquo;";		$this->adminMenu[99]["target"] = "_blank";				global $db;		$this->db = $db;				$this->section = @$_GET["section"];		$this->mode = @$_GET["mode"];				if ($this->section != ""){			foreach($this->adminMenu as $key => $value){				//echo $value['title']."<br>";				if ($this->section == $value['section']){					$this->section_title = $value['title'];					break;				}			}		}						/* 			--------------------------------------------------------------------------------------------			шаблоны страниц			--------------------------------------------------------------------------------------------		*/				$this->templates["page"] = "страница";		$this->templates["none"] = "без страницы";		$this->templates["articles"] = "Новости";		$this->templates["feedback"] = "Контакты";		$this->templates["products"] = "Продукция";		$this->templates["gallery"] = "Фото-галерея";						$tmp_langs = $this->db->select('SELECT * FROM langs');		if (!empty($tmp_langs)){			foreach ($tmp_langs as $lang){				$this->languages["{$lang["id"]}"]["id"] = $lang["id"];				$this->languages["{$lang["id"]}"]["title"] = $lang["title"];				$this->languages["{$lang["id"]}"]["prefix"] = $lang["prefix"];				$this->languages["{$lang["id"]}"]["is_default"] = $lang["is_default"];				$this->languages2["{$lang["id"]}"]=$lang["prefix"];			}		}				/* 			--------------------------------------------------------------------------------------------			определение шаблона сайта ("тема")			--------------------------------------------------------------------------------------------		*/						if ((!$this->theme_name) or ($this->theme_name == "")){			$path = ADMIN_ROOT."themes/default/";			$path2 = "/".ADMIN_FOLDER."/themes/default/";		} 		else{			$path = ADMIN_ROOT."themes/".$this->theme_name."/";			$path2 = "/".ADMIN_FOLDER."/themes/".$this->theme_name."/";		}		$this->smarty_theme_path = $path;		$this->theme_path = $path2;				$this->smarty_display_file = "index.html";		if ($this->is_logged() == false){			$this->smarty_display_file = "login.html";		}						$this->breadCrumbs = $this->breadCrumbs();		}		/*		--------------------------------------------------------------------------------------------		проверка авторизации администратора		--------------------------------------------------------------------------------------------	*/	function is_logged(){		if ($_SESSION['admin']['is_logged'] == 1){			return true;		}		else{			return false;		}	}		/*		--------------------------------------------------------------------------------------------		авторизация		--------------------------------------------------------------------------------------------	*/	function login($back_url=''){		if ($back_url == "/admin/" or $back_url == "/admin" or $back_url == "/admin/index.php"){			$back_url = "/admin/?section=structure";		}		//echo $back_url; exit;		$login = clearvar($_POST['login']);		$password = clearvar($_POST['password']);		if (!empty($login) && !empty($password)){			$user_row = $this->db->selectRow("SELECT * FROM admins WHERE login='{$login}'");			if(count($user_row)>0){				if ($login == $user_row['login']){					if (md5($password) == $user_row['password']){						$_SESSION["admin"]["is_logged"] = 1;						$_SESSION["admin"]["name"] = $user_row["name"];						$_SESSION["admin"]["login"] = $user_row["login"];						$_SESSION["admin"]["root"] = $user_row["root"];						$_SESSION["admin"]["id"] = $user_row["id"];						header("location:$back_url");						exit;					}				}			}		}	}		/*		--------------------------------------------------------------------------------------------		завершение сеанса		--------------------------------------------------------------------------------------------	*/	function logout(){		unset($_SESSION["admin"]);		header("location:index.php");		exit;	}		/*		--------------------------------------------------------------------------------------------		breadCrumbs		--------------------------------------------------------------------------------------------	*/	function breadCrumbs(){		$breadCrumbs = "";		if ($this->section_title != ""){			$breadCrumbs.= "<a href=\"index.php?section=".$this->section."\">".$this->section_title."</a> -> ";		}				if ($id>0){					}		return $breadCrumbs;	}	}?>