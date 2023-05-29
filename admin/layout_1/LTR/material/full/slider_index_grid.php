<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php
    $dataSlides = file_get_contents($datasource.DIRECTORY_SEPARATOR.'slideritems.json');
    $slides = json_decode($dataSlides);
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
						
            <!-- Bordered table -->
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
					<li class=""><a href="slider_index_grid.php"> Grid View</a></li>
						 <li class=""><a href="slider_index.php">List View</a></li>
					</ul>	 
					<a href="slider_create.php" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2 legitRipple"><i class="icon-plus2">Create</i></a>
					<a href="slider_download_pdf.php" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon "><i class="icon-file-pdf mr-3"></i></a>
					
						 
						  Trash (Delete | Restore) |
						  <a href="slider_download_xl.php">Download XL </a>
						  |
						  <a href="slider_download_pdf.php">Download PDF </a>
						  | 
						  <a href="slider_index_print.php" target="_blank">Print View</a>
						   
					</div>

					<div class="table-responsive">
					<div class="row mx-0">

					<?php
    foreach($slides as $key=>$slide):

     ?> 
					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="<?=$slide->src?>" alt="<?=$slide->alt?>" style="height:200px">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<h6 class="font-weight-semibold mr-2"><?=$slide->title?></h6>
										<span><?=$slide->caption?></span>
									</div>

									<div class="d-flex flex-wrap align-items-center">
									<a href="http://omniverse.test/admin/layout_1/LTR/material/full/slider_show.php?id=1" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2 legitRipple"><i class="icon-eye"></i></a>
									<a href="#" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2 legitRipple"><i class="icon-pencil"></i></a>
									<a href="#" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2 legitRipple"><i class="icon-trash"></i></a>
								</div>
								</div>
							</div>
						</div>
					</div>
<?php
 endforeach
?>

				</div>
					</div>
				</div>
				<!-- /bordered table -->



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


<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Src</th>
									<th>Alt</th>
									<th>Caption</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>




								<tr>
									<td title="<?=$slide->uuid?>"><?=++$key?></td>
									<td></td>
									<td><img src="" ></td>
									<td></td>
									<td></td>
									<td> Show | Edit | Delete | Activate/InActive | Copy</td>
								</tr>

							</tbody>
						</table>
