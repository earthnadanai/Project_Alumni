<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');
      $this->load->view('header');
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    

</head>
<body>
       
        <br>
        
      
		<?php foreach ($re as $x){ ?>
        
       
                
    <div class="container">
    <nav aria-label="breadcrumb">
					<ol class="breadcrumb SpaceStyle" style="background-color: #111111">
						<li class="breadcrumb-item"><a href="<?php echo site_url('Show/profile'); ?>">Profile</a></li>
					</ol>
                </nav>
        <h1 align="center">You are Member</h1>
        <h2 align="center">Profile</h2>
        <div align="center">
    <div class="card" style="width: 30rem;">
    <img src="<?php echo base_url('img'); ?>/<?php echo $x->img;?>" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text" align="center">Hi, <?php echo $x->firstname; ?></p>
  </div>
</div>
</div>
    </div>
    <p align="center"><a href="<?php echo site_url('Show/showedit'); ?>" class="btn btn-outline-success">Edit Profile</a></p>      
<?php 
}
?>
<?php
$conn = null;
?>
    
</body>
<?php $this->load->view('footer1'); ?>
</html>


