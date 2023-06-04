<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>

<!DOCTYPE html>
<html lang="en">
	<?php include_once($partials.'head.php') ?> <!--head-->

<body>
<?php include_once($partials.'nav.php') ?> <!--nav-->

<div class="page-content">	<!--Start Page content -->

	<?php include_once($partials.'sidebar.php') ?>	<!--side bar-->

	<div class="content-wrapper">	<!-- Main content -->
		<?php include_once($partials.'pageHeader.php') ?>	<!--page header-->

		<!-- Content area -->
		<div class="content">
		<?php //include_once($partials.'chart.php') ?>


<!-- Dashboard content -->

<div class="row">
	<div class="col-xl-12">
		Content goes Here
	</div>
</div>

<!-- /dashboard content -->


		</div>	<!-- /content area -->
		
		<?php include_once($partials.'footer.php') ?>
	</div>	<!-- /main content -->
	
</div>	<!-- /page content -->	
</body>
</html>
