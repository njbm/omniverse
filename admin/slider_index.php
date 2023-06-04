<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php // phpinfo();
	use \BITM\SEIP12\Slider;

	$slider = new Slider();
	$slides = $slider->index();
?>



<!DOCTYPE html>
<html lang="en">
<?php include_once($partials . 'head.php') ?>

<body>

    <?php include_once($partials . 'nav.php') ?>

    <!-- Page content -->
    <div class="page-content">

        <?php include_once($partials . 'sidebar.php') ?>

        <!-- Main content -->
        <div class="content-wrapper">

            <?php include_once($partials . 'pageHeader.php') ?>

            <!-- Content area -->
            <div class="content">

                <?php //include_once($partials.'chart.php') ?>

<!-- Dashboard content -->
<div class="row">
	<div class="col-xl-12">
					<!-- Bordered table -->
<div class="card">
				<?php
					//if(array_key_exists('message', $_GET) && !empty($_GET['message'])):
					// if(array_key_exists('message', $_SESSION) && !empty($_SESSION['message'])):
					$message = flush_session('message');
					if($message):
				?>
				<div class="alert alert-success"><?=$message?></div>
				<?php endif ?>

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
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th> <th>Title</th> <th>Alt</th> <th>Caption</th> <th>Src</th> <th>Action</th>
				</tr>
			</thead>
			<tbody>

	<?php foreach($slides as $key=>$slide): ?> 
			<tr>
				<td title="<?=$slide->uuid?>"><?=++$key?></td>
				<td><?=$slide->title?></td>
				<!-- <td><img src="<?php //=$slide->src?>" height="70"></td> -->
				<td><?=$slide->alt?></td>
				<td><?=$slide->caption?></td>
				<td><img src="<?=$webroot.'uploads/'.$slide->src?>" style="width:100px;height:100px"></td>

				<td> 
				<a href="slider_show.php?id=<?=$slide->id?>"><button class="btn btn-primary">Show</button></a>
				<a href="slider_edit.php?id=<?=$slide->id?>"><button class="btn btn-info">Edit</button></a>
				<a href="<?=$webroot.'uploads/'.$slide->src?>"><button class="btn btn-primary">Img</button></a>				
				
				<form action="slider_delete.php" method="post" style="margin-top: 10px; width:20px;">
				<!-- <a href="slider_delete.php?id=<?php //=$slide->id?>">Delete</a>  -->
					<button class="btn btn-danger" type="submit" onclick="return confirm('Are You Sure?')">Delete</button>
					<input type="hidden" name="id" value="<?=$slide->id?>" />
				</form>
				 <br>
				<a href="slider_update.php?id=<?=$slide->id?>">Active/InActive</a>
				
				</td>
			</tr>
	<?php endforeach ?>

			</tbody>
		</table>
	</div>
</div>
</div>
</div>
<!-- /dashboard content -->

            </div>
            <!-- /content area -->

            <?php include_once($partials . 'footer.php') ?>

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>
