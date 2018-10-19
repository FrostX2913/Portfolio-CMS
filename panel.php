<?php 

require_once '/core/start.php';

$pages = $db->query("
	SELECT id, label, title, slug, imgloc
	FROM images
	ORDER BY label ASC
")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/list.php';