
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>

    <link rel="stylesheet" href="style1.css">

</head>
<body>
<br>

    <div class="container" align="center">
<div class="card border-success mb-3" style="max-width: 45rem;">
  <div class="bg-success"><h2>Login</h2></div>
  <div class="card-body text-success">
    <p class="card-text">   
    <form action="Register" method="post">
  <div class="form-group">
    <label for="username">ชื่อผู้ใช้</label>
    <input class="form-control" type="text" name="username" placeholder="Username" required>
  </div>
  <div class="form-group">
    <label for="password">รหัสผ่าน</label>
    <input class="form-control" type="password" name="password" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="email">อีเมล</label>
    <input class="form-control" type="text" name="email" placeholder="email" required>
  </div>
  <div class="form-group">
    <label for="password">ชื่อจริง</label>
    <input class="form-control" type="text" name="firstname" placeholder="Enter your firstname" required>
  </div>
  <div class="form-group">
    <label for="password">นามสกุล</label>
    <input class="form-control" type="text" name="lastname"  placeholder="Enter your lastname" required>
  </div>
  <div class="form-group">
    <label for="codestu">รหัสนักศึกษา</label>
    <input class="form-control" type="number" name="codestu" placeholder="codestu" required>
  </div>
  <div class="form-group">
    <label for="birthdate">วันที่เกิด</label><br>
    <input type="date" class="form-control" name="birthdate"  placeholder="birthdate" required>
  </div>
  <div class="form-group">
    <label for="username">เพศ</label><br>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sex" id="sex1" value="ชาย">
  <label class="form-check-label" for="sex1">ชาย</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sex" id="sex2" value="หญิง">
  <label class="form-check-label" for="sex2">หญิง</label>
</div>
  </div>
  <div class="form-group">
    <label for="addres">ที่อยู่ที่ติดต่อได้</label><br>
    <textarea type="text" name="addres" class="form-control"  rows="3"   placeholder="address" required></textarea>
  </div>
  <div class="form-group">
    <label for="tell">เบอร์มือถือ</label><br>
    <input class="form-control" type="number" name="tell"  placeholder="tell" required>
  </div>  
  <div class="form-group">
    <label for="facebook">Facebook</label><br>
    <input class="form-control" type="text" name="facebook" placeholder="facebook" required>
  </div>
  <div class="form-group">
    <label for="position">ตำแหน่ง</label><br>
    <input class="form-control" type="text" name="position"  placeholder="position" required>
  </div>  
  <div class="form-group">
    <label for="addressjob">ที่อยู่ที่ทำงาน</label><br>
    <textarea type="text" name="addressjob" class="form-control"  rows="3"   placeholder="address" required></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-success"> Regiter</button>
  <br><br>
  <p align="center"><a href="<?php echo site_url('Welcome/index'); ?>">Go back to login</a></p>
</form>
  </div>
  <div class="card-footer bg-success"></div>
</div>
</div>
    

</body>
</html>

