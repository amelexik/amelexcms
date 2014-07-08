<?
if (!empty($gAction)){
	if ($gAction == "drop_album"){
		$back_url = "?section=".$admin->section."&structure_master_id=".$structure_master_id;
		if($album_id>0){
			$sql_1 = "DELETE FROM photoalbums WHERE id={$album_id}";
			$sql_2 = "DELETE FROM photoalbums_ext WHERE master_id={$album_id}";
			$sql_3 = "DELETE FROM photo WHERE master_id={$album_id}";
			//$photo_ext = $admin->db->select("SELECT id, lang FROM photo_ext WHERE ");
			//echo $sql_1."<br>";
			//echo $sql_2."<br>";
			//echo $sql_3."<br>";
			$admin->db->query($sql_1);
			$admin->db->query($sql_2);
			$admin->db->query($sql_3);
			
		}
		header("location:$back_url");
		exit();
	}
}
if (!empty($pAction)){
	if ($pAction == "add_photoalbum" or $pAction == "update_photoalbum"){
		
		$structure_master_id = (int)clearvar($_POST["item"]["structure_master_id"]);// from HIDDEN field
		$display = clearvar($_POST["item"]["display"]);
		
		if ($pAction == "add_photoalbum"){
			$back_url = "?section=".$admin->section."&structure_master_id=".$structure_master_id;
		}
		if ($pAction == "update_photoalbum"){
			$back_url = "?section=".$admin->section."&structure_master_id=".$structure_master_id;
		}
		
			
		$mainSQL = "INSERT INTO photoalbums (display,structure_master_id)VALUES('{$display}',{$structure_master_id})";
		$admin->db->query($mainSQL);
		$insert_id = (int) mysql_insert_id(); //$insert_id = 876;
		if ($insert_id>0){
			foreach ($admin->languages2 as $lang_id => $lang_prefix){
				$title = htmlspecialchars(clearvar($_POST["item"][$lang_id]["title"]));
				$sql = "INSERT INTO photoalbums_ext(master_id,title,lang)VALUES('{$insert_id}','{$title}','{$lang_id}')";
				$admin->db->query($sql);//echo $sql."<br>";
			}
		}
		
		header("location:$back_url");
		exit();
	
	}
}
if (!$admin->mode){

	$photoalbums = array();
	if ($structure_master_id>0){
		
		$tmp = $admin->db->select("SELECT * FROM photoalbums WHERE photoalbums.structure_master_id={$structure_master_id} ORDER by add_date DESC");
			if (!empty($tmp)){
				foreach($tmp as $key => $item){
					
					$photoalbums["{$item["id"]}"]["id"] = $item["id"];
					$photoalbums["{$item["id"]}"]["add_date"] = $item["add_date"];
					if ($item["id"] > 0){
						foreach($admin->languages2 as $lang_id => $lang_prefix){
							$album_ext_data = $admin->db->selectRow("SELECT photoalbums_ext.title FROM photoalbums_ext WHERE photoalbums_ext.master_id={$item["id"]} AND photoalbums_ext.lang={$lang_id}");
							$photoalbums["{$item["id"]}"]["ext"]["{$lang_id}"]["title"] = stripslashes($album_ext_data["title"]);
						}
					}
					$photoalbums["{$item["id"]}"]["display"] = $item["display"];
					$photoalbums["{$item["id"]}"]["structure_master_id"] = $item["structure_master_id"];
					
					$photoalbums["{$item["id"]}"]["edit_photos_url"] = "?section=".$admin->section."&mode="."add_edit_photos&album_id=".$item["id"];
				}
			}
	}
	
	$smarty->assign("photoalbums",$photoalbums);

}
else{
	if ($admin->mode == "add_edit_photoalbum"){
		if ($album_id > 0){
			$item = array();
			$mainData = $admin->db->selectRow("SELECT * FROM photoalbums WHERE id={$album_id}");
			
			$item["id"] = $mainData["id"];
			$item["add_date"] = $mainData["add_date"];
			$item["display"] = $mainData["display"];
			
			foreach($admin->languages2 as $lang_id => $lang_prefix){
				$item_ext_data_tmp = $admin->db->selectRow("SELECT photoalbums_ext.title FROM photoalbums_ext WHERE photoalbums_ext.master_id={$album_id} AND photoalbums_ext.lang={$lang_id}");
				$item["ext"]["{$lang_id}"] = $item_ext_data_tmp;
			}
			//print_r($item);
			$smarty->assign("item",$item);
		}
	}
	if ($admin->mode == "add_edit_photos"){
		if ($album_id > 0){
			$photos = array();
			$tmp = $admin->db->select("SELECT photo.id,photo.album_master_id,photo.file FROM photo WHERE photo.album_master_id={$album_id}");
			foreach($tmp as $key => $value){
				$photos["{$value["id"]}"]["id"] = $value["id"];
				$photos["{$value["id"]}"]["file"] = $value["file"];
				foreach($admin->languages2 as $lang_id => $lang_prefix){
					$ext_tmp = $admin->db->selectRow("SELECT photo_ext.* FROM photo_ext WHERE photo_ext.photo_master_id={$value["id"]} AND photo_ext.lang={$lang_id}");
					$photos["{$value["id"]}"]["ext"]["{$lang_id}"] = $ext_tmp;
				}
			}
			//print_r($photos);
			$smarty->assign("photos",$photos);
		}
	}
}
?>