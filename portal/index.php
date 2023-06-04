<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php'); ?>

<!doctype html>
<html lang="en">

<?php include_once($portal_partials . 'head.php'); ?>


<body>
    <!--START NAVBAR--->
    <?php include_once($portal_partials . 'nav.php'); ?>        <!-- Nav--> 


    <?php include_once($portal_partials . 'slider.php'); ?>     <!-- Slider--> 

    <?php include_once($portal_partials. 'product_list.php') ?> <!-- Product--> 

    <?php include_once($portal_partials. 'offer.php') ?> <!-- Product Offer--> 

    <?php //include_once($portal_partials. 'product_categories.php') ?> <!-- Product_categories -->
    
    
    <?php include_once($portal_partials. 'shoping_cart.php') ?> <!-- shoping Cart--> 


    <?php include_once($portal_partials. 'review.php') ?> <!-- Customer Review--> 


    <?php include_once($portal_partials.'footer.php') ?>         <!-- Footer--> 



</body>

</html>