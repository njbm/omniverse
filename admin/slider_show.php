<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>

<?php 

use \BITM\SEIP12\Utility\Utility;
use \BITM\SEIP12\Slider;
use \BITM\SEIP12\Utility\Validator;
 
$id = Utility::sanitize($_GET['id']);

if(!Validator::empty($id)){
	$slider = new Slider();
	$slide = $slider->show($id);
}else{ // REfactor using Session based message
	 //dd("Id cannot be null or empty");
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include_once($partials.'head.php') ?>

<body>

<?php include_once($partials.'nav.php') ?>


	<!-- Page content -->
	<div class="page-content">

	<?php include_once($partials.'sidebar.php') ?>


		<!-- Main content -->
		<div class="content-wrapper">

		<?php include_once($partials.'pageHeader.php') ?>

			<!-- Content area -->
			<div class="content">
			<?php //include_once($partials.'chart.php') ?>



<!-- Dashboard content -->
<div class="row">
	<div class="col-xl-12">
		
    <div class="card-group mb-6">
					<div class="card shadow-0 border-0">
						<img class="card-img-top img-fluid" src="<?=$webroot.'uploads/'.$slide->src?>" alt="<?=$slide->alt?>">

						<div class="card-body">
							<h5 class="card-title"><?=$slide->title?></h5>
							<p class="card-text"><?=$slide->caption?></p>
						</div>

					</div>
				</div>

	</div>
</div>
<!-- /dashboard content -->


			</div>
			<!-- /content area -->

			<?php include_once($partials.'footer.php') ?>
		</div>
		<!-- /main content -->
	</div>
	<!-- /page content -->
</body>
</html>
