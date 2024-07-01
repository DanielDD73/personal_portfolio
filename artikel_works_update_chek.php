<?php
session_start();
require_once 'db.php';
ob_start();

$id = base64_decode($_GET['id']); 

if(isset($_POST['submit'])){
	$works_name = $_POST['works_name'];
	$catagory = $_POST['catagory'];


	if(!empty($works_name) && !empty($catagory) ){
		$work_insert = $dbcon->query("UPDATE my_best_artikel SET works_name='$works_name',catagory='$catagory' WHERE id=$id");
		if($work_insert){
		
			$_SESSION['artikel_works_update_success'] = "Update Successfully!";
			header('location: artikel_works.php');
			ob_end_flush();
		} 
	}

}

// photo validation
if(isset($_POST['photo_submit'])){
	$photo      = $_FILES['photo']['name'];
	$photo_ext_array  = explode('.', $photo);
	$photo_ext = end($photo_ext_array);
	$photo_name =$id .".".$photo_ext;

	if(!empty($photo)){
		// if not empty
		if($_FILES['photo']['size']<5000000){
			// if photo in specific size
			$accepted_extension_list = ['png','jpg','jpeg'];
			if( in_array(strtolower($photo_ext),$accepted_extension_list) ){
				// remove present image
				$old_photo_query =$dbcon->query("SELECT photo FROM my_best_artikel WHERE id=$id");
				$old_photo = $old_photo_query->fetch_assoc();

				$photo_link = "image/my_best_artikel/".$old_photo['photo'];
				unlink($photo_link);

				// upload photo
				$update_photo =$dbcon->query("UPDATE my_best_artikel SET photo='$photo_name' WHERE id=$id");
				if($update_photo){
					move_uploaded_file($photo = $_FILES['photo']['tmp_name'],"image/my_best_artikel/". $photo_name);
					$_SESSION['artikel_works_photo_success'] = "Photo attached successfully!";
					header('location: artikel_works_update.php?id=' . base64_encode($id));
					ob_end_flush();
				}


			}else{
				// if extension not match
				$_SESSION['artikel_works_photo_extension'] = "Atached a jpg,png or jpeg photo";
				header('location: artikel_works_update.php?id=' . base64_encode($id));
				ob_end_flush();
			}

		}else{
			// if not in specific size
			$_SESSION['artikel_works_photo_size'] = "Attached a photo under 1MB";
			header('location: artikel_works_update.php?id=' . base64_encode($id));
			ob_end_flush();
		}



	} else{
		// if empty
		$_SESSION['artikel_works_photo_emty'] = "Attached a Photo";
		header('location: artikel_works_update.php?id=' . base64_encode($id));
		ob_end_flush();
	}

}

?>