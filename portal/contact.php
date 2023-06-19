<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>

<!DOCTYPE html>
<html lang="en">

<?php include_once($portal_partials.'head.php') ?>
<?php include_once($portal_partials.'topnav.php') ?>
<?php include_once($portal_partials.'nav.php') ?>

<body>

<!-- Contact -->
<div class="container" id="contact">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fas fa-phone"> Phone</i>
                    <h6>+8801500000000</h6>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fas fa-envelope"> Email</i>
                    <h6>omiverse.admin@pondit.com</h6>
                </div>
            </div>
            <div class="col-md-4 py- py-md-0">
                <div class="card">
                    <i class="fas fa-location-dot"> Address</i>
                    <!-- <h6>Uttara Dhaka Bangladesh</h6> -->
                    Level-5, Plot-71, 
                    Rajuk Cosmo Shopping Complex <br>
                    Sector-7, Uttara, 
                    Dhaka 1230, Bangladesh <br>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-4 py-3 py-md-0">
                <input type="text" class="form-control form-control" placeholder="Name">
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <input type="text" class="form-control form-control" placeholder="Email">
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <input type="text" class="form-control form-control" placeholder="Phone">
            </div>
            <div class="form-group" style="margin-top: 30px;">
                <textarea class="form-control" id="" rows="5" placeholder="Message"></textarea>
            </div>
            <div class="messagebtn text-center"><button>Message</button></div>
        </div>
    </div>





</body>
<?php include_once($portal_partials.'footer.php') ?>