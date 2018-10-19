<?php

require 'core/start.php';

$pages = $db->query("
	SELECT title, author, slug, created, imgloc
	FROM blog
")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/blog.php';
?>