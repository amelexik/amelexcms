<?php

$pAction = clearvar(@$_POST['pAction']);
$gAction = clearvar(@$_GET['gAction']);
$gSection = clearvar(@$_GET['section']);
$id = clearvar(@$_GET['id']);
$item_id = (int)(clearvar(@$_GET['item_id']));
$submit_mode = clearvar(@$_POST['submit_mode']);

$parent_id = clearvar(@$_GET['parent_id']);

/* section=structure
================================================================= */
$structure_item_id = (int)(clearvar(@$_GET['structure_item_id']));


/* section=users
================================================================= */
$user_id = (int)(clearvar(@$_GET['user_id']));

/* section=constants
================================================================= */
$group_id = (int)(clearvar(@$_GET['group_id']));
$constant_master_id = (int)(clearvar(@$_GET['constant_master_id']));

/* section=articles
================================================================= */
$structure_master_id = (int)(clearvar(@$_GET['structure_master_id']));
$article_master_id = (int)(clearvar(@$_GET['article_master_id']));

/* section=customer_orders
================================================================= */
$order_item_id = (int)(clearvar(@$_GET['order_item_id']));

/* section=admins
================================================================= */
$admin_id = (int)(clearvar(@$_GET['admin_id']));

/* section=GALLERY
================================================================= */
$structure_master_id = (int)(clearvar(@$_GET['structure_master_id']));
$album_id = (int)(clearvar(@$_GET['album_id']));
$photo_master_id = (int)(clearvar(@$_GET['photo_master_id']));

/* ?section=products
================================================================= */
$category_item_id = (int)(clearvar(@$_GET['category_item_id']));
$product_item_id = (int)(clearvar(@$_GET['product_item_id']));

/* ?section=banners
================================================================= */
$banner_id = (int)(clearvar(@$_GET['banner_id']));
?>