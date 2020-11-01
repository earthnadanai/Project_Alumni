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
						<li class="breadcrumb-item active" aria-current="page">ข้อมูลนักศึกษาในระบบ</li>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <div class="row" >
                                <form method="post" action="<?php echo site_url('Welcome/search'); ?>">
                                    <div class="row" >
                                        <div class="col-9">
                                            <input class="form-control" type="text" placeholder="ค้นหาโดยใช้ รหัส" name="search" />
                                        </div>
                                        <div class="col-3">
                                            <input type="submit" class="btn btn-block btn-primary" style="width:100px" name="submit" value="ค้นหา">
                                        </div>
                                        </div>
                                </form>
              </div>
					</ol>
                   
				</nav>

  <div class="row">
  
  <?php 
  if ($xx != null)
  foreach ($xx as $x){ ?>
    
     <div class="col-sm"><div class="card" style="width: 21rem;">
    <img src="<?php echo base_url('img'); ?>/<?php echo $x->img;?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title" >
    ชื่อ <?php echo $x->firstname;?>
    <?php echo $x->lastname;?>
    <br>รหัสนักศึกษา <?php echo $x->codestu;?>
    </h4>
    <form action="./info" method="POST">
    <input type="text" name="id" value="<?php echo $x->id; ?>" hidden>
    <input type="submit" class="btn btn-success" name="submit" value="ดูรายละเอียด"></form></a>
    </form>
</div></div><br>
</div>
  <?php }; ?>
    
  </div>
</div>

</div>

</body>
<?php $this->load->view('footer1'); ?>
</html>