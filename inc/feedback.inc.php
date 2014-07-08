<?
$currentPageId = $app->currentPage['id']; // 'id' - in table 'structure'
$currentLangId = $app->current_lang['id'];
$content = stripslashes($db->selectCell("SELECT content FROM pages WHERE master_id='{$currentPageId}' AND lang={$currentLangId}"));
$smarty->assign("content",$content);
?>