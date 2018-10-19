<?php 

require 'core/start.php';

if (!empty($_POST)) {
	$id 		= $_POST['id'];
	$title 		= $_POST['title'];
	$author 	= $_POST['author'];
	$slug 		= $_POST['slug'];
	$category 	= $_POST['category'];
	$content 	= $_POST['content'];

	$updatePage = $db->prepare("
		UPDATE blog
		SET 
			title = :title,
			author = :author,
			slug = :slug,
			category = :category,
			content = :content
		WHERE id = :id 
	");

	$updatePage->execute([
		'id' 		=> $id,
		'title' 	=> $title,
		'content' 	=> $content,
		'slug' 		=> $slug,
		'category' 	=> $category,
		'author' 	=> $author
	]);
}

//check url if false then send bac
if(!isset($_GET['id'])) {
	Redirect::to('panel2.php');
	die();
}

//call existing data into textboxes
$page = $db->prepare("
	SELECT *
	FROM blog
	WHERE id = :id
"); 

$page->execute(['id' => $_GET['id']]);

$page = $page->fetch(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/edit2.php';