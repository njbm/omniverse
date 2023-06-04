<?php 
    $dataProducts= file_get_contents($datasource.'productitems.json');
    $products= json_decode($dataProducts);

?>
<section id="list">
<div class="container" style="margin-top: 50px;">
  <h1>Product List</h1>
  <div class="row">
    <?php foreach($products as $key=>$product): ?>
    
    <div class="col-sm-6 col-md-4" style=" margin-top:20px;">
      <div class="card">
        <img class="card-img-top" src="<?=$webroot.'uploads/'.$product->src?>" alt="Product" height="400">
        <div class="card-body">
          <h5 class="card-title"><?=$product->title?></h5>
          <p class="card-text"><?=$product->caption?></p>
          <p class="card-text"><strong>Price:</strong><?=$product->price?></p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
          <a href="partials/product_details.php?id=<?=$product->id?>" class="btn btn-primary">Details</a>
        </div>
      </div>
    </div>
    
    <?php endforeach ?>
  </div>
</div>
</section>