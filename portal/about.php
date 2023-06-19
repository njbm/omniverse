<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>

<?php include_once($portal_partials.'head.php') ?>
<?php include_once($portal_partials.'topnav.php') ?>
<?php include_once($portal_partials.'nav.php') ?>

<body>
  <!-- About Us Section -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb-4">About TechWeb</h2>
          <p>TechWeb is a leading e-commerce platform that provides a wide range of technology products to customers worldwide. With our commitment to quality and exceptional customer service, we strive to make the online shopping experience seamless and enjoyable for our customers.</p>
          <p>At TechWeb, we carefully curate our product selection, ensuring that we offer the latest and most innovative technology solutions. From smartphones and laptops to smart home devices and accessories, we have it all.</p>
          <p>Our dedicated team of professionals is passionate about technology and stays up to date with the latest trends to provide accurate and helpful product information. We aim to assist our customers in making informed buying decisions.</p>
          <button>Read More...</button>
        </div>
        <div class="col-md-6">
          <img src="../people/frontend/img/background.png" alt="About Us Image" class="img-fluid">
        </div>
      </div>
<hr/>
      <!-- offer -->
    <div class="container" id="offer">
      <div class="row">
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-cart-shopping"></i>
          <h3>Free Shipping</h3>
          <p>On order over $1000</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-rotate-left"></i>
          <h3>Free Returns</h3>
          <p>Within 30 days</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-truck"></i>
          <h3>Fast Delivery</h3>
          <p>World Wide</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-thumbs-up"></i>
          <h3>Big choice</h3>
          <p>Of products</p>
        </div>
      </div>
    </div>

    <br/>
    <br/>
    
<!-- offer -->

     <br/>
     <hr/>
     <br/>
     <br/>
     <br/>
     <br/>

    <!-- newslater -->
      <div class="container" id="newslater">
        <h3 class="text-center">Subscribe To The TechWeb for The Latest Updates</h3>
        <div class="input text-center">
        <input type="text" placeholder="Enter Your Email">
        <button id="subscribe">Subscribe</button>
        </div>
      </div>
    <!-- newslater -->     
    </div>
  </section>

</body>
<?php include_once($portal_partials.'footer.php') ?>