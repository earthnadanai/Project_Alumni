
<html>

	<head>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<!-- Favicon -->   
	<link href="img/favicon-16x16.png" rel="shortcut icon"/>
	

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->

	</head>
<body>

<header class="header-section">
<a class="site-logo" href="<?php echo site_url('Welcome/showall'); ?>"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img src="<?php echo base_url('img'); ?>/unnamed.png" width="100" height="50" alt=""></a>
		<div class="container">
			<!-- logo -->
			
			
			<div class="user-panel">
				
				
			<?php if (isset($this->session->userdata['firstname'])) { ?>
				<h5><li><?php echo $this->session->userdata['firstname'];?></li></h5>
				<p align="center"><a href="<?php echo site_url('Login/logout'); ?>">Logout</a></p> 	
			<?php } else{ ?>	
				<a href="<?php echo site_url('Welcome/index'); ?>">login</a>  /  <a href="<?php echo site_url('Welcome/page_register'); ?>">Register</a>
			<?php } ?>
			</div>

			
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>

				<?php if (isset($this->session->userdata['firstname'])) { ?>
					<li><a href="<?php echo site_url('Welcome/profile'); ?>">Proflie</a></li>
					<?php } ?>
				<?php if (isset($this->session->userdata['firstname'])) { ?>
					<li><a href="<?php echo site_url('Welcome/showpros'); ?>">showprofessor</a></li>
					<?php } ?>
				<?php if (isset($this->session->userdata['firstname'])) { ?>
					<li><a href="<?php echo site_url('Welcome/showSen'); ?>">showseniors</a></li>
					<?php } ?>
					
				</ul>
			</nav>
			
		</div>
		
	</header>
	
</body>
</html>