<?php 
require_once "user_auth.php";
$title="Skill";
require_once "header.php";
require_once "db.php";

$Skill_query = $dbcon->query("SELECT * FROM Skill");




?>



	<div class="card text-dark mb-3" >
	  <div style="" class="card-header bg-success text-center "><h2>Skill</h2></div>
	  <div class="card-body">



	  	<!-- service add alert  -->

	  	<?php if(isset($_SESSION['skill_add'])){ ?>
					
					<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong><?=$_SESSION['skill_add']?></strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>


	  	<?php }
	  	unset($_SESSION['skill_add']);
	  	?>

	  	<!-- aleart end -->

			<!-- update alert  -->

	  	<?php if(isset($_SESSION['skill_update'])){ ?>
					
					<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong><?=$_SESSION['skill_update']?></strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>


	  	<?php }
	  	unset($_SESSION['skill_update']);
	  	?>

	  	<!-- aleart end -->

	  	<!-- delete message alert  -->

	  	<?php if(isset($_SESSION['skill_delete'])){ ?>
					
					<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong><?=$_SESSION['skill_delete']?></strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>


	  	<?php }
	  	unset($_SESSION['skill_delete']);
	  	?>

	  	<!-- aleart end -->
		


			<table id='example' class="table table-bordered text-center">
				<thead>
					<tr>
						<th>Serial</th>
						<th>Icon</th>
						<th>Service Title</th>
						<th>Service Details</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

				<!-- php code foreach -->
					<?php 
					$serial = 1;
					foreach ($Skill_query as $result) {
						
					 ?>


					<tr>
						<td><?=$serial++?></td>
						<td><i style="font-size: 28px;" class="<?=$result['icon']?>"></i></td>
						<td><?=$result['title']?></td>
						<td><?=$result['some_text']?></td>
						<td>
							<div class="btn-group">
								<a class="btn btn-sm btn-warning" href="skill_update.php?id=<?=base64_encode($result['id'])?>" >Update</a>

								<a class="btn btn-sm btn-danger" href="skill_delete.php?id=<?=base64_encode($result['id'])?>">Delete</a>
							</div>
						</td>
					</tr>

					<!-- end foreach -->
				<?php } ?>

				</tbody>

			</table>

			<a class="btn btn-block btn-success mt-2" href="skill_add.php">Add Another Skill</a>

	  </div>
	</div>





<!-- ============ footer content =============== -->
<?php 
    require_once "footer.php";
?>
