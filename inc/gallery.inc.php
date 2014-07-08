<?
/*
[currentPage] => Array
	(
		[translit] => fotogalereya
		[id] => 5
		[template] => gallery
		[html_template] => gallery.html
	)
[current_lang] => Array
	(
		[id] => 1
		[title] => Русский
		[prefix] => ru
	)
*/

//SELECT `id`, `add_date`, `display`, `structure_master_id` FROM `pmatools`.`photoalbums` LIMIT 0, 1000;
//SELECT `id`, `master_id`, `title`, LEFT(`description`, 256), `lang` FROM `pmatools`.`photoalbums_ext` ORDER BY `id` DESC LIMIT 0, 1000;

$sql_albums = "
	SELECT 
	photoalbums.id,
	photoalbums.add_date,
	photoalbums.display,
	photoalbums.structure_master_id,
	photoalbums_ext.master_id,
	photoalbums_ext.lang,
	photoalbums_ext.title,
	photoalbums_ext.description
	FROM
	photoalbums,
	photoalbums_ext
	WHERE 
	photoalbums.display='y'
	AND photoalbums.structure_master_id={$app->currentPage["id"]}
	AND photoalbums_ext.master_id=photoalbums.id 
	AND photoalbums_ext.lang={$app->current_lang["id"]}
	";
$photoalbums = $db->select($sql_albums);

/*
    [0] => Array
        (
            [id] => 1
            [add_date] => 2011-04-14 21:37:26
            [display] => y
            [structure_master_id] => 5
            [master_id] => 1
            [lang] => 1
            [title] => Фотки
            [description] => 
        )
*/

foreach ($photoalbums as $key => $value){
	$album_master_id = (int)$value["master_id"];
	$photoalbums["{$key}"]["photos"] = array();
	//SELECT `id`, `album_master_id`, `file` FROM `pmatools`.`photo` LIMIT 0, 1000;
	//SELECT `id`, `photo_master_id`, `lang`, `title`, `description` FROM `pmatools`.`photo_ext` LIMIT 0, 1000;
	$photos_sql = "
		SELECT 
		photo.id,
		photo.album_master_id,
		photo.file,
		photo_ext.photo_master_id,
		photo_ext.lang,
		photo_ext.title,
		photo_ext.description
		FROM
		photo,
		photo_ext
		WHERE 
		photo.album_master_id={$album_master_id}
		AND photo_ext.photo_master_id=photo.id
		AND photo_ext.lang={$app->current_lang["id"]}
	";
	$photos = $db->select($photos_sql);
	$photoalbums["{$key}"]["photos"] = $photos;
}

$smarty->assign("photoalbums",$photoalbums);


?>