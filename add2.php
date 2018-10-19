<?php 

require 'core/start.php';

if (!empty($_POST)) {
	$filename = basename($_FILES['fileupload']['name']); //result = abc.jpg
	$checkfilesize = $_FILES['fileupload']['size'];
	$getFileType = pathinfo($filename,PATHINFO_EXTENSION); // abc.jpg become jpg
	$destination = "uploads/".$filename; // follow the previous item name
	$fileupload = true; //check counter
	if($checkfilesize > 20000000)
	{
		$fileupload = false;
		Session::flash('error', 'File size exceeded 20MB.');
	}

	//check for the file type
	if($getFileType != "jpg" && $getFileType != "jpeg" && $getFileType != "png")
	{
		$fileupload = false;
		Session::flash('error', 'Wrong File Format.');
	}

	if($fileupload == true) {
		//move the file with the function called move_uploaded_file('$source','$destination')
		if(!move_uploaded_file($_FILES['fileupload']['tmp_name'], $destination))
		{
			Session::flash('error', 'Technical Problem: File not uploaded!');
		}
		
		$title = $_POST['title'];
		$author = $_POST['author'];
		$slug = $_POST['slug'];
		$category = $_POST['category'];
		$content = $_POST['content'];
		$imgloc = $destination;

		$insertPage = $db->prepare("
			INSERT INTO blog (author, title, slug, content, category, imgloc, created)
			VALUES (:author, :title, :slug, :content, :category, :imgloc, NOW())
		");

		$insertPage->execute([
			'author' => $author,
			'title' => $title,
			'slug' => $slug,
			'content' => $content,
			'category' => $category,
			'imgloc' => $imgloc
		]);

		Session::flash('successful', 'Successfully Uploaded Entry');
		Redirect::to('panel2.php');
	}
}

require VIEW_ROOT . '/admin/add2.php';