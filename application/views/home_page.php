<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

    <link rel="stylesheet" href="style1.css">

</head>
<body>
<br><br>

    <div class="container" align="center">
<div class="card border-success mb-3" style="max-width: 45rem;">
  <div class="bg-success"><h2>Login</h2></div>
  <div class="card-body text-success">
    <p class="card-text">   
    <form action="Login/login_x" method="post">
  <div class="form-group">
    <label for="email">ชื่อผู้ใช้</label>
    <input type="email" name="email" placeholder="email" required>
  </div>
  <div class="form-group">
    <label for="password">รหัสผ่าน</label>
    <input type="password" name="password" placeholder="Password" required>
  </div>
  <input type="submit" name="login"  class="btn btn-success" value="Login" />
  <br><br>
  <p align="center"><a href="<?php echo site_url('Register'); ?>">Go to register</a></p>
</form>
  </div>
  <div class="card-footer bg-success"></div>
</div>
</div>

    <br>

</body>
</html>
