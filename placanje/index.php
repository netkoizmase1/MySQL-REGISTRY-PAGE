<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="pay.css">
</head>

<body>
  <div class="loginbox">
    <div class="card" style="width: 30rem;">
      <div class="card-body">
        <form action="gotovo.php" method="post">
        <img src="../slike/610UOC8xZpL._AC_UY1000_.jpg" class="avatar">
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Mobile</label>
            <input type="number" class="form-control" name="mobile" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Home Address</label>
            <input type="text" class="form-control" name="address" required>
          </div>

          


          <div class="mb-3">
            <label class="form-label">Total Price</label>
            <input id="total" type="number" class="form-control" name="total" value="<?php $total ?>" >
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Pay with PayPal</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  
</body>

</html>