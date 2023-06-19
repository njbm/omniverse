<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>

<?php include_once($portal_partials.'head.php') ?>
<?php include_once($portal_partials.'topnav.php') ?>
<?php include_once($portal_partials.'nav.php') ?>

<body>
<div class="container py-5">
    <div class="login-container">
    <!-- <div class="col-md-5 py-3 py-md-0" id="side1">
            <h3 class="text-center">Welcome Back!</h3>
    </div> -->
      <h2>Login to TechWeb</h2>
      <form class="login-form" >
        <input type="text" placeholder="Username" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="#">Sign up</a></p>
      </form>
    </div>
  </div>

  <style>
    body {
      background-color: #f8f9fa;
    }

    .login-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .login-form button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      border: none;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      border-radius: 3px;
      cursor: pointer;
    }

    .login-form button:hover {
      background-color: #0056b3;
    }

    .login-form p {
      margin-top: 15px;
      text-align: center;
    }

    .login-form p a {
      color: #007bff;
    }

    .login-form p a:hover {
      text-decoration: underline;
    }
  </style>

</body>
<?php include_once($portal_partials.'footer.php') ?>