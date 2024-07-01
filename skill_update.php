<?php 
require_once "user_auth.php";
ob_start();
$title="Update Skill";
require_once "header.php";
require_once "db.php";

$id = base64_decode($_GET['id']);

$skill_from_db = $dbcon->query("SELECT * FROM skill WHERE id=$id");
$skill_data = $skill_from_db->fetch_assoc();

if(isset($_POST['submit'])){
	$icon         = $_POST['icon'];
	$title        = $_POST['title'];
	$some_text    = $_POST['some_text'];
 	

	if(!empty($title) &&!empty($some_text)){
		$skill_update = $dbcon->query("UPDATE skill SET icon='$icon',title='$title',some_text='$some_text' WHERE id=$id");
		if($skill_update){
			$_SESSION['skill_update'] = "Update Successfully!";
			header('location: skill.php');
			ob_end_flush();

		}
		
	}

}




?>
	<div class="card text-dark mb-3" >
	  <div class="card-header bg-success text-center display-4">Update Skill</div>
	  	<div class="card-body">

						<form action="" method="post" >

							<div class="form-group">
								<label for="project_name">Skill Icon</label>
								<input type="text" class="form-control" name="icon" value="<?=$skill_data['icon']?>">
							</div>

							<div class="form-group">
								<label for="project_name">Skill Name</label>
								<input type="text" class="form-control" name="title" value="<?=$skill_data['title']?>">
							</div>

							<div class="form-group">
								<label for="project_catagory">Add Details</label>
								<textarea name="some_text" class="form-control" cols="100%" rows="10"><?=$skill_data['some_text']?></textarea>
							</div>



							<div class="form-group">
								<input class="btn btn-block btn-success" type="submit" value="Update" name="submit">
							</div>

						</form>
				</div>
		</div>



<!-- ============ footer content =============== -->
<?php 
    require_once "footer.php";
?>
