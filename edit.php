<?php 

require 'core/start.php';

if (!empty($_POST)) {
	$id 		= $_POST['id'];
	$label 		= $_POST['label'];
	$title 		= $_POST['title'];
	$slug 		= $_POST['slug'];
	$category 	= $_POST['category'];
	$body 		= $_POST['body'];

	$updatePage = $db->prepare("
		UPDATE images
		SET 
			label = :label,
			title = :title,
			slug = :slug,
			category = :category,
			body = :body
		WHERE id = :id 
	");

	$updatePage->execute([
		'id' 		=> $id,
		'label' 	=> $label,
		'title' 	=> $title,
		'slug' 		=> $slug,
		'category' 	=> $category,
		'body' 		=> $body
	]);
}

//check url if false then send bac
if(!isset($_GET['id'])) {
	Redirect::to('panel.php');
	die();
}

//call existing data into textboxes
$page = $db->prepare("
	SELECT id, title, label, body, slug, category
	FROM images
	WHERE id = :id
"); 

$page->execute(['id' => $_GET['id']]);

$page = $page->fetch(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/edit.php';