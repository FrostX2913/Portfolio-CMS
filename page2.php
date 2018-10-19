<?php

require 'core/start.php';

if(empty($_GET['page'])) {
	$page = false;
} else {
	$slug = $_GET['page'];

	$page = $db->prepare("
		SELECT *
		FROM images
		WHERE slug = :slug /*This is why I used PDO */
	");

	$page->execute(['slug' => $slug]);

	$page = $page->fetch(PDO::FETCH_ASSOC);

	if ($page) {
		$page['created'] = new DateTime($page['created']);
	}
}

require VIEW_ROOT . '/page/show.php';