<?php

require 'core/start.php';

$pages = $db->query("
	SELECT id, title, slug, imgloc,label
	FROM images
	ORDER BY label ASC
")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/portfolio.php';
?>