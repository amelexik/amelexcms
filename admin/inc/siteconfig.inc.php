<?

if (!empty($pAction)){
	if ($pAction == "update_config"){
		$back_url = "?section=".$admin->section;
		if (!empty($_POST["config"])){
			foreach ($_POST["config"] as $config_name => $config_value){
				$config_name = clearvar($config_name);
				$config_value = (clearvar($config_value));
				$check = $admin->db->selectRow("SELECT id FROM siteconfig WHERE name='{$config_name}'");
				if (count($check)>0){
					$sql = "UPDATE siteconfig SET value='{$config_value}' WHERE name='{$config_name}'";
				}
				else{
					$sql = "INSERT INTO siteconfig(name,value) VALUES ('{$config_name}','{$config_value}')";
				}
				$admin->db->query($sql);
			}
		}
		header("location:$back_url");
		exit();
	}
}


$tmp = $admin->db->select("SELECT id,name,value FROM siteconfig");
$config = array();
foreach($tmp as $k => $item){
	$config["{$item["name"]}"] = $item["value"];
}
$smarty->assign("config",$config);

?>