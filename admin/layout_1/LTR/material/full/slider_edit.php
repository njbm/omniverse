<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php

   use \BITM\SEIP12\Slider;
   use \BITM\SEIP12\Utility\Validator;
   use \BITM\SEIP12\Utility\Utility;
	
   $id = Utility::sanitize($_GET['id']);
   
   if(!Validator::empty($id)){
	   $slider = new Slider();
	   $slide = $slider->edit($id);
	   
   }else{ // REfactor using Session based message
	   dd("Id cannot be null or empty");
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
                    <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Edit Slider Information</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

			                <div class="card-body">
			                	<form action="slider_edit_processor.php" method="post" enctype="multipart/form-data">
                                        <input name="id" type="hidden" class="form-control"  value="<?=$slide->id?>" />
										<input name="uuid" type="hidden" class="form-control"  value="<?=$slide->uuid?>" />
									<div class="form-group">
										<label>Title</label>
										<input name="title" type="text" class="form-control" placeholder="" value="<?=$slide->title?>">
									</div>

									<div class="form-group">
										<label>Caption</label>
										<input name="caption" type="text" class="form-control" placeholder="" value="<?=$slide->caption?>">
									</div>

									<div class="form-group">
										<label>Alt</label>
										<input name="alt" type="text" class="form-control" placeholder="" value="<?=$slide->alt?>">
									</div>

                                    <!-- <div class="form-group">
										<label>URL</label>
										<input name="url" type="text" class="form-control" placeholder="" value="<?//=$slide->src?>">
									</div> -->

                                    <div class="form-group">
										<label>Upload Picture</label>
										<input name="picture" type="file" class="form-control" placeholder="Choose a Picture">
										<img src="<?=$webportal."uploads/".$slide->src?>" style="width:100px;height:100px">
										<input name="old_picture" type="text" class="form-control"  value="<?=$slide->src?>" />
									</div>


									<div class="d-flex justify-content-start align-items-center">
										<button type="submit" class="btn btn-light legitRipple">Cancel</button>
										<button type="submit" class="btn bg-blue ml-3 legitRipple">Edit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
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
