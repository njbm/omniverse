<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>

<?php 
use \BITM\SEIP12\Utility\Utility;
use \BITM\SEIP12\Product;
use \BITM\SEIP12\Utility\Validator;
 
$id = Utility::sanitize($_GET['id']);

if(!Validator::empty($id)){
	$product = new Product();
	$products = $product->show($id);
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
						<img class="card-img-top img-fluid" src="<?=$webroot.'uploads/'.$products->src?>" 
						alt="">

						<div class="card-body">						
							<h5 class="card-title"><?=$products->title?></h5>
							<h4 class="card-title">Price  : <?=$products->price?>  TK</h4>
							<p class="card-text"><?=$products->caption?></p>
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
