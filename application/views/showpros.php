<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');
      $this->load->view('header');
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
<br>

  <nav aria-label="breadcrumb">
					<ol class="breadcrumb SpaceStyle" style="background-color: #111111">
						<li class="breadcrumb-item active" aria-current="page">ข้อมูลอาจารย์</li>
					</ol>
				</nav>
                <div class="row">
  
    <?php foreach ($query1 as $y){ ?>
    
     <div class="col-sm"><div class="card" style="width: 21rem;">
    <img src="<?php echo base_url('img'); ?>/<?php echo $y->P_img;?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title" >
    <?php echo $y->P_name;?>
    </h4>
    <?php echo $y->P_position;?>
    <?php echo $y->P_email;?>

</div></div><br>
</div>
    <?php }; ?>
</div>


</div>

</div>

</body>
<?php $this->load->view('footer1'); ?>
</html>