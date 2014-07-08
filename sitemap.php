<?php

    header("Content-type: text/xml");
    error_reporting(E_WARNING || E_ERROR);
    require_once($_SERVER['DOCUMENT_ROOT'].'/sturtup.inc.php');
    include (LIBS_PATH."functions.php");                                    // файл функцій
    //include (LIBS_PATH."app.class.php");

    $tmp = $db->select("
            SELECT
			structure.id,
            structure_ext.lang
            FROM
            structure,structure_ext
            WHERE
            structure.id=structure_ext.master_id
			AND structure_ext.display!='n'
			AND structure.template!='none'
			ORDER BY
			structure.up_date DESC
            ");
    $loc = array();
    $i=0;
    foreach ($tmp as $key=>$value) {
        $id = $value["id"];
        //$url_tmp = get_url(array("id"=>$id,"lang"=>$value["lang"]));
        
		    $loc[$i]["url"] = "http://".$_SERVER['HTTP_HOST'].get_url(array("id"=>$id,"lang"=>$value["lang"]));
            $loc[$i]["date"] = $db->selectCell("SELECT up_date FROM structure WHERE id='$id'");
		    $loc[$i]["date"] = substr($loc[$i]["date"],0,10);
        $i++;
    }
    //print_r($loc);

$sitemap = <<<EOF
<?xml version="1.0" encoding="UTF-8"?>
<?xml-stylesheet type="text/xsl" href="sitemap.xsl"?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"
         xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

EOF;


    foreach ($loc as $key=>$value) {
        $sitemap .= '<url>'."\n";
		$sitemap .= '    <loc>'.$value["url"].'</loc>'."\n";
		$sitemap .= '    <lastmod>'.$value["date"].'</lastmod>'."\n";
		$sitemap .= '    <changefreq>daily</changefreq>'."\n";
		$sitemap .= '    <priority>0.8</priority>'."\n";
		$sitemap .= '</url>'."\n";
    }

$sitemap .= '</urlset>';

echo $sitemap;

?>