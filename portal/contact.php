<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta title="creator" name="Jaber Masud">
    <title>Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>

<body>

<div class="container" style="margin-top:50px">
  <h2 class="text-center" style=" margin-bottom:50px; color:red;">Contact Us</h2>
  <div class="row">
    <div class="col-md-6">
      <h4>Contact Information</h4>
      <p><strong>Address:</strong> 123 Main Street, City, Dhaka, Bangladesh</p>
      <p><strong>Phone:</strong> +880 18713-44252</p>
      <p><strong>Email:</strong> info@jabermasud.xyz</p>
    </div>

    <div class="col-md-6">
      <h4>Send us a message</h4>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
  </div>
</div>  
</body>
</html>