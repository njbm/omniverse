<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>

<?php
$dataSlides=file_get_contents($datasource. 'slideritems.json');
$slides= json_decode($dataSlides);


?>

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
	<div class="card">
	<div class="card-header header-elements-inline">
		<h5 class="card-title">Slides</h5>
		<div class="header-elements">
			<div class="list-icons">
				<a class="list-icons-item" data-action="collapse"></a>
				<a class="list-icons-item" data-action="reload"></a>
				<a class="list-icons-item" data-action="remove"></a>
			</div>
		</div>
	</div>

	<div class="card-body">
		<ul>
			<li><a href="slider_index_grid.php">Grid View</a></li>
			<li><a href="slider_index.php">List View</a></li>
		</ul>

		<a href="slider_create.php">Create</a>
		|<a href="slider_create.php"> Trash </a> |

		|<a href="slider_download_xl.php">  Download XL</a>
		|<a href="slider_download_pdf.php"> Download PDF</a>
		|<a href="slider_print.php"> Print View </a>

	</div>

	<div class="table-responsive">
		<div class="row mx-0">

	<?php foreach($slides as $key=>$slide): ?>

		<div class="col-sm-6 col-xl-3">
			<div class="card">
				<div class="card-img-actions mx-1 mt-1">
					<img class="card-img img-fluid" src="<?=$webroot.'uploads/'.$slide->src?>"
					 alt="<?=$slide->alt?>" style="height:150px">
					<div class="card-img-actions-overlay card-img">
						<a href="<?=$webroot.'uploads/'.$slide->src?>" 
			class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round legitRipple" 
						data-popup="lightbox" rel="group">
							<i class="icon-plus3"></i>
						</a>

						<a href="#" 
		class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2 legitRipple">
							<i class="icon-link"></i>
						</a>
					</div>
				</div>

				<div class="card-body">
					<div class="d-flex align-items-start flex-nowrap">
						<div>
							<div class="font-weight-semibold mr-2"><?=$slide->title?></div>
							<span class="font-size-sm text-muted"><?=$slide->caption?></span>
						</div>

						<div class="list-icons list-icons-extended ml-auto">
							<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
							<a href="slider_edit.php?id=<?=$slide->id?>" class="list-icons-item"><i class="icon-pencil7"></i></a>
							<a href="slider_show.php?id=<?=$slide->id?>" class="list-icons-item"><i class="icon-eye2"></i></a>
							<!-- <a href="slider_delete.php?id=<?php //=$slide->id?>" class="list-icons-item"><i class="icon-bin top-0"></i></a> -->
							<form action="slider_delete.php" method="post" >
								<button class="btn btn-danger" type="submit" onclick="return confirm('Are You Sure?')"><i class="icon-bin top-02"></i></button>
								<input type="hidden" name="id" value="<?=$slide->id?>" />
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach ?>
		</div>
	</div>
	</div>
</div>
</div>


<!-- /dashboard content -->


		</div>	<!-- /content area -->
		
		<?php include_once($partials.'footer.php') ?>
	</div>	<!-- /main content -->
	
</div>	<!-- /page content -->	
</body>
</html>
