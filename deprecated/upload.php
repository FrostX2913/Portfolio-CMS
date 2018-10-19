<?php
if(isset($_FILES['file'])) {
	$file = $_FILES['file'];

	//File Properties
	$file_name = $file['name'];
	$file_tmp = $file['tmp_name'];
	$file_size = $file['size'];
	$file_error = $file['error'];

	//Work Out File Extension
	$ext = pathinfo($file_name, PATHINFO_EXTENSION);﻿

	//allowed file extensions
	$allowed = array('png', 'jpg');

	if(in_array($file_ext, $allowed)) {
		if($file_error ===0) {
			if(file_size <= 20971520) //20 megabytes space maximum

				$file_new_name = uniqid('', true) . '.'. $file_ext; //prevent overwrite without producing error
				$file_destination = 'uploads/' . $file_new_name;

				if(move_uploaded_file($file_tmp, $file_destination)) {
					echo $file_destination;
				}

		}
	}
}