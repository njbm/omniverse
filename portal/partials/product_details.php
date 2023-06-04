<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>

<?php 
   $id = $_GET['id'];
    
   /** communicate with datasource and get data for that id */
   $dataProducts= file_get_contents($datasource.'productitems.json');
   $products= json_decode($dataProducts);
  
  $product = null;
  foreach($products as $aproduct){
      if($aproduct->id == $id){
          $product = $aproduct;
          break;
      }
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Details Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<style>
    .container{
      margin-top: 50px;
    }
    .product-image {
      max-width: 100%;
      height: auto;
    }

    .product-price {
      font-weight: bold;
      font-size: 20px;
      color: #f00;
    }

    .product-description {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="<?=$webroot.'uploads/'.$product->src?>" alt="Alt" class="product-image">
      </div>
      <div class="col-md-6">
        <h2><?=$aproduct->title?></h2>
        <p class="product-price"><?=$aproduct->price?>  TK</p>
        <p class="product-caption"><?=$aproduct->caption?></p>
        <p class="product-description">
          <?=$aproduct->description?>
        </p>
        <button class="btn btn-primary">Add to Cart</button>
      </div>
    </div>
  </div>
  
</body>
</html>
