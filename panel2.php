<?php 

require_once '/core/start.php';

$pages = $db->query("
	SELECT id, author, title, content, slug, category, imgloc
	FROM blog
	ORDER BY created DESC
")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/list2.php';