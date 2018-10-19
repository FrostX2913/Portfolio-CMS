<?php 

require '/core/start.php';

if (isset($_GET['id'])) {
	$deletePage = $db->prepare("
		DELETE FROM blog
		WHERE id = :id 
	");

	$deletePage->execute(['id' => $_GET['id']]);
}

Redirect::to('panel2.php');