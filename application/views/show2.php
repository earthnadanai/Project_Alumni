<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');
      $this->load->view('header');
        
?>
<html>
<head>
<title>ข้อมูล</title>
</head>

<body>


  <br>
<div class="container">
<nav aria-label="breadcrumb">
					<ol class="breadcrumb SpaceStyle" style="background-color: #111111">
						<li class="breadcrumb-item"><a href="<?php echo site_url('Welcome/showall'); ?>">home</a></li>
            <li class="breadcrumb-item active" aria-current="page">ดูเพิ่มเติม</li>
					</ol>
				</nav>
        <div class="p-3 mb-2" style="background-color: #111111 ">
<div class="card mb-3">
<br>
<h1 class="card-title">&nbsp&nbsp<?php echo "ข้อมูลส่วนตัว";?></h1>

<br>
		<?php foreach ($re as $x){ ?>
	 
  <div class="card-body">
  <div align="center">
    <img src="<?php echo base_url('img'); ?>/<?php echo $x->S_img;?>" class="d-block w-50" alt="...">
  <br>
  <h4 class="card-text">ชื่อ : <?php echo $x->S_firstname;?>&nbsp&nbsp<?php echo $x->S_lastname;?>
  &nbsp รหัสนักศึกษา :&nbsp<?php echo $x->S_codestu;?> &nbsp เพศ :&nbsp<?php echo $x->S_sex;?>
  &nbsp ป/ด/ว :&nbsp<?php echo $x->S_birthdate;?></h4>
  <h4 class="card-text">ที่อยู่ : <?php echo $x->S_addres;?>&nbsp เบอร์โทร :&nbsp<?php echo $x->S_tell;?>
  &nbsp facebook :&nbsp<?php echo $x->S_facebook;?></h4>
  <h4 class="card-text">จบการศึกษา : <?php echo $x->S_Graduate;?>&nbsp ที่อยู่ที่ทำงาน :&nbsp<?php echo $x->S_addressjob;?></h4>

    <?php } ?>
    </div>
    </div>
    </div>
</div>
</div>

<br>

</body>
<?php $this->load->view('footer1'); ?>
</html>