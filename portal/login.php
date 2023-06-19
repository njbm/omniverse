<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>

<?php include_once($portal_partials.'head.php') ?>
<?php include_once($portal_partials.'topnav.php') ?>
<?php include_once($portal_partials.'nav.php') ?>

<body>
    <div class="container" id="login">
        <div class="row">
            <div class="col-md-5 py-3 py-md-0" id="side1">
                <h3 class="text-center">Welcome to TechWeb!</h3>
            </div>
            <div class="col-md-7 py-3 py-md-0" id="side2">
                <h3 class="text-center">Account login</h3>
                <p class="text-center">Please use valid information.</p>
                <div class="input2 text-center">
                <input type="name" placeholder="User Name">
                <input type="password" placeholder="Password">
                </div>
                <p class="text-center" id="btnlogin"><a href="#">LOG IN</a></p>
                <p class="text-center">Don't have account?<a href="../portal/register.php">Create Here</a></p>
            </div>
        </div>
    </div>

</body>
<?php include_once($portal_partials.'footer.php') ?>