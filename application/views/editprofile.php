<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');
      $this->load->view('header');
        
?>
<html>
<head>
<title>OFG</title>
</head>
<body>

<br><br>
<div class="container">
  <div class="row">
    <div class="col">
    
    </div>
    <?php foreach ($re as $x){ ?>
      
    <div class="col-md-10 ">
<div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
  <div class="card-header">Edit Profile</div>
  <div class="card-body">
    <h5 class="card-title">
    <form action="edit"  method="post">
  <div class="form-group">
    <label for="txtid" >ID  : </label>
    <input type="hidden" name="txtid" value="<?php echo $x->id;?>"><?php echo $x->id;?>
  </div>
  <div class="form-group">
    <label for="txtusername">User Name : </label>
    <input type="hidden" name="txtusername"  value="<?php echo $x->username;?>"><?php echo $x->username;?>
  </div>
  <div class="form-group">
  <label for="txtemail">Email : </label>
  <input class="form-control" type="email" name="txtemail"  value="<?php echo $x->email;?>">
  </div>
  <div class="form-group">
  <label for="txtfirstname">First Name : </label>
  <input class="form-control" type="text" name="txtfirstname" size="20" value="<?php echo $x->firstname;?>">
  </div>
  <div class="form-group">
  <label for="txtlastname">Last Name : </label>
  <input class="form-control" type="text" name="txtlastname" size="20" value="<?php echo $x->lastname;?>">
  </div>
  <div class="form-group">
  <label for="txtaddres">Addres : </label>
  <input class="form-control" type="text" name="txtaddres" size="20" value="<?php echo $x->addres;?>">
  </div>
  <div class="form-group">
  <label for="txttell">Tell : </label>
  <input class="form-control" type="text" name="txttell" size="20" value="<?php echo $x->tell;?>">
  </div>
  <div class="form-group">
  <label for="txtfacebook">Facebook : </label>
  <input class="form-control" type="text" name="txtfacebook" size="20" value="<?php echo $x->facebook;?>">
  </div>
  <div class="form-group">
  <label for="txtposition">Position : </label>
  <input class="form-control" type="text" name="txtposition" size="20" value="<?php echo $x->position;?>">
  </div>
  <div class="form-group">
  <label for="txtaddressjob">Addres Job : </label>
  <input class="form-control" type="text" name="txtaddressjob" size="20" value="<?php echo $x->addressjob;?>">
  </div>
  <div align="center">


  <input type="submit" class="btn btn-success" name="submit" value="ตกลง">
  <a href="<?php echo site_url('Welcome/profile'); ?>"><input type="button" value=" ยกเลิก " class="btn btn-danger" />



</form>
</div>
</h5>
<div class="card">
  <div class="card-body">

  <div align="center">
				<img src="<?php echo base_url('img'); ?>/<?php echo $x->img;?>" width="200" height="200" />
			</div>
      <br>
  <form method="post" enctype="multipart/form-data">
<div class="custom-file">
   <input type="file" class="custom-file-input form-control"  id="img" name="img">
    <label class="custom-file-label" for="fileUpload">แนบไฟล์</label> 
    <input type="submit" class="btn btn-outline-info" value="อัพโหลดรูป">
 </div>
 <br>
      <?php } ?>
  </form>
</div>
<br>
</div>
<br>

  </div>
</div>
    </div>
    <div class="col">
  
    </div>
  </div>
</div>

<br><br>

</body>
<?php $this->load->view('footer1'); ?>
</html>

