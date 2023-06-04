<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php
use BITM\SEIP12\Product;
$product =new Product();
$products= $product->index();

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
				<?php
					//if(array_key_exists('message', $_GET) && !empty($_GET['message'])):
					// if(array_key_exists('message', $_SESSION) && !empty($_SESSION['message'])):
					$message = flush_session('message');
					if($message):
				?>
				<div class="alert alert-success"><?=$message?></div>
				<?php endif ?>

	<div class="card-header header-elements-inline">
		<h5 class="card-title">Products</h5>
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
			<li><a href="product_index_grid.php">Grid View</a></li>
			<li><a href="product_index.php">List View</a></li>
		</ul>

		<a href="product_create.php">Create</a>
		|<a href="product_create.php"> Trash </a> |

		|<a href="product_download_xl.php">  Download XL</a>
		|<a href="product_download_pdf.php"> Download PDF</a>
		|<a href="product_print.php"> Print View </a>

	</div>

	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Src</th>
					<th>price</th>
					<th>Caption</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

	<?php foreach($products as $key=>$product): ?> 
			<tr>
				<td title="<?=$product->uuid?>"><?=++$key?></td>
				<td><?=$product->title?></td>
				<!-- <td><img src="<?php //=$slide->src?>" height="70"></td> -->
				<td><img src="<?= $webroot.'uploads/'.$product->src?>" style="width:100px;height:100px"></td>

				<td><?=$product->price?></td>
				<td><?=$product->caption?></td>
				<td> 
				<a href="product_show.php?id=<?=$product->id?>"><button class="btn btn-primary">Show</button></a>
				<a href="product_edit.php?id=<?=$product->id?>"><button class="btn btn-info">Edit</button></a>
				<a href="product_update.php?id=<?=$product->id?>"><button class="btn btn-primary">Copy</button></a>
				
				
				
				<form action="product_delete.php" method="post" style="margin-top: 10px; width:20px;">
				<!-- <a href="product_delete.php?id=<?php //=$slide->id?>">Delete</a>  -->
					<button class="btn btn-danger" type="submit" onclick="return confirm('Are you Sure')">Delete</button>
					<input type="hidden" name="id" value="<?=$product->id?>" />
				</form>
				 <br>
				<a href="product_update.php?id=<?=$product->id?>">Active/InActive</a>
				
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


		</div>	<!-- /content area -->
		
		<?php include_once($partials.'footer.php') ?>
	</div>	<!-- /main content -->
	
</div>	<!-- /page content -->	
</body>
</html>
