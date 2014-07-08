<?
/*
Array
(
    [item] => Array
        (
            [title] => 
            [name] => 
            [1] => Array
                (
                    [value] => 
                )

            [2] => Array
                (
                    [value] => 
                )

        )

    [pAction] => add_constant
)
*/
if (!empty($gAction)){
	if ($gAction == "dropConstant"){
		$back_url = "?section=".$admin->section;
		if ($constant_master_id>0){
			$mainSQL = "DELETE FROM constants WHERE id={$constant_master_id}";
			$sql = "DELETE FROM constants_ext WHERE master_id={$constant_master_id}";
			$admin->db->query($mainSQL);
			$admin->db->query($sql);
		}
		header("location:$back_url");
		exit();
	}
}
if (!empty($pAction)){
	if ($pAction == "add_constant"){
		$back_url = "?section=".$admin->section."#g".$group_id;
		if ($group_id>0){
		
			//echo "<pre>";
			//print_r($_POST);
			//echo "<pre>";
			//exit;
			
			$title = clearvar($_POST["item"]["title"]);
			$name = clearvar($_POST["item"]["name"]);
			
			if ($name == ""){
				$name = translit(_strtolower($title));
			}
			else{
				$name = translit(_strtolower($name));
			}
			$name = str_replace("-","_",$name);	

			$mainSQL = "INSERT INTO constants(group_id,name,title) VALUES ({$group_id},'{$name}','{$title}')";
			$admin->db->query($mainSQL);
			$insert_id = (int) mysql_insert_id();			
			
			foreach ($admin->languages2 as $lang_id => $lang_prefix){
				$value = addslashes(htmlspecialchars(clearvar($_POST["item"][$lang_id]["value"])));
				$sql = "INSERT INTO constants_ext(master_id,lang,value)VALUES({$insert_id},{$lang_id},'{$value}');";
				$admin->db->query($sql);
			}
		}
		header("location:$back_url");
		exit();
	}

	if ($pAction == "update_group_constants"){
		$back_url = "?section=".$admin->section;
		if (count($_POST["items"])>0){
			foreach ($_POST["items"] as $lang_id => $data){
				$lang_id = (int)$lang_id;
				foreach($data as $group_id => $constantsData){
					$group_id = (int)$group_id;
					foreach($constantsData as $master_id => $value){
						$master_id = (int)$master_id;
						$value = addslashes(htmlspecialchars(clearvar($value)));
						$sql = "UPDATE constants_ext SET value='{$value}' WHERE constants_ext.master_id={$master_id} AND constants_ext.lang={$lang_id}";
						$admin->db->query($sql);
					}
				}
			}
		}
		header("location:$back_url");
		exit();
	}
	
	if ($pAction == "add_group"){
		
		$back_url = "?section=".$admin->section;
		
		$title = clearvar($_POST["item"]["title"]);
		$name = clearvar($_POST["item"]["name"]);
		
		if ($name == ""){$name = translit(_strtolower($title));}
		else{$name = translit(_strtolower($name));}
		$name = str_replace("-","_",$name);
		
		$sql = "INSERT INTO constants_groups(title,name) VALUES ('{$title}','{$name}')";
		$admin->db->query($sql);
		
		header("location:$back_url");
		exit();
	}
}

	if (!$admin->mode){
	$constants = array();
	$groups = $admin->db->select("SELECT id, name, title FROM constants_groups");

	if (count($groups)>0){
		foreach ($groups as $k => $value){
			$constants["{$value["id"]}"]["group_name"] = $value["name"];
			$constants["{$value["id"]}"]["group_title"] = $value["title"];
			$constants["{$value["id"]}"]["group_id"] = $value["id"];
			$constants["{$value["id"]}"]["items"] = array();
			
			$items_tmp = $admin->db->select("SELECT id, group_id, name, title FROM constants WHERE group_id={$value["id"]}");
			if (count($items_tmp)>0){
				$items = array();
				foreach($items_tmp as $i_key => $i_value){
					$items["{$i_value["id"]}"]["id"] = $i_value["id"];
					$items["{$i_value["id"]}"]["master_id"] = $i_value["id"];
					$items["{$i_value["id"]}"]["name"] = $i_value["name"];
					$items["{$i_value["id"]}"]["title"] = $i_value["title"];
					$items["{$i_value["id"]}"]["ext"] = array();
					$ext = array();
					foreach($admin->languages2 as $lang_id => $lang_prefix){
						$items_tmp_value = $admin->db->selectRow("SELECT value FROM constants_ext WHERE master_id={$i_value["id"]} AND lang={$lang_id}");
						$ext["{$lang_id}"] = stripslashes($items_tmp_value["value"]);
					}
					$items["{$i_value["id"]}"]["ext"] = $ext;
				}
			}
			$constants["{$value["id"]}"]["items"] = $items;
			unset($items);
			//$constants["{$value["id"]}"]["items"] = $items;
		}
	}

	//print_r($constants);
	$smarty->assign("constants",$constants);
}
else{
	if ($admin->mode == "add_edit_constant"){
		if ($group_id>0){
			$group_data = $admin->db->selectRow("SELECT * FROM constants_groups WHERE constants_groups.id={$group_id}");
			if (count($group_data)>0){
				$smarty->assign("group_title",$group_data["title"]);
			}
			else{
				echo "group <b>{$group_id}</b> is not exist! go away!";
				exit();
			}
		}
		else{
			echo "group_id false! go away!";
			exit();
		}
	}
}
?>