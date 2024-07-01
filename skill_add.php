<?php 
require_once "user_auth.php";
ob_start();
$title="Add Skill";
require_once "header.php";
require_once "db.php";

if(isset($_POST['submit'])){
	$icon         = $_POST['icon'];
	$title        = $_POST['title'];
	$some_text    = $_POST['some_text'];
 	

	if(!empty($title) && !empty($some_text)){
		$query = "INSERT INTO Skill (icon,title,some_text) VALUES('$icon','$title','$some_text')";
			$skill_insert = $dbcon->query($query);
			if($skill_insert){
			$_SESSION['skill_add'] = "Add successfully!";
			header("location: skill.php");
			ob_end_flush();
			}		
		}
		
	}






?>


<!-- Start Page content -->
 	<div class="card text-dark mb-3" >
	  <div class="card-header bg-success text-center "><h2>Skill</h2></div>
	  <div class="card-body">

					<form action="" method="post" >

					<div class="form-group">
							<label for="project_name">Skill Icon</label>
							<input type="text" class="form-control" name="icon">
						</div>


						<div class="form-group">
							<label for="project_name">Skill Name</label>
							<input type="text" class="form-control" name="title">
						</div>

						<div class="form-group">
							<label for="project_catagory">Barprogrres</label>
							<textarea name="some_text" class="form-control"></textarea>
						</div>

						
						<div class="form-group">
							<input class="btn btn-block btn-success" type="submit" value="Add" name="submit">
						</div>

					</form>
				</div>
			</div>


                               
<!-- ============ footer content =============== -->
<?php 
    require_once "footer.php";
?>
