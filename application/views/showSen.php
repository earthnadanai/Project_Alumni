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
						<li class="breadcrumb-item active" aria-current="page">ข้อมูลรุ่นพี่</li>
					</ol>
				</nav>
                <div class="row">
  
                <?php foreach ($query2 as $z){ ?>

     <div class="col-sm"><div class="card" style="width: 21rem;">
    <img src="<?php echo base_url('img'); ?>/<?php echo $z->S_img;?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title" >
    ชื่อ <?php echo $z->S_firstname;?>
    <?php echo $z->S_lastname;?>
    <br>รหัสนักศึกษา <?php echo $z->S_codestu;?>
    </h4>
    <form action="./info1" method="POST">
    <input type="text" name="S_id" value="<?php echo $z->S_id; ?>" hidden>
    <input type="submit" class="btn btn-success" name="submit" value="ดูรายละเอียด"></form></a>
    </form>


</div></div><br>
</div>
        <?php }; ?>
</div>

</div>

</body>
<?php $this->load->view('footer1'); ?>
</html>