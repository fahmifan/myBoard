<!DOCTYPE html>
<html>
<head>
	<?php header('Control-Allow-Origin'); ?>
	<title>Home</title>
	
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome-4/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom/style_index.css">

</head>
<body>
	<?php $this->load->library('form_validation') ?>
	<div class="text-container">
		<div class="bg-image" style="background-image: url(<?php echo base_url(); ?>assets/image/home-image-v2.jpg);"> <!-- Background Image -->
			<div class="text-jumbo">
				<p class="text-jumbo">Lets you work more <br>
				collaboratively and get more done.</p>
			</div>
			<div class="text-desc">
				<p>myBoard's boards, lists, and cards enable you to organize and prioritize <br>
				your projects in a fun, flexible and rewarding way.</p><br>
				
			</div>
		</div> <!-- end Bg-Image -->
	</div>

	<div class="login"> <!-- Login -->
			<h1>Welcome to myBoard</h1>
			<div class="login-form">
				<?php echo form_open('main_controller/login'); ?>	
					<labe>Username</labe> <?php echo form_error('username', '<div class="error">', '</div>')?>
					<input type="Text" name="username" placeholder=" e.g. myUname" size="35" value="<?= set_value('username')?>"> <br> <br>
					<labe>Password</labe> <?php echo form_error('password', '<div class="error">', '</div>')?>
					<input type="Password" name="password" placeholder=" e.g. myPrivate" size="35" > <br> <br>
					<div class="btn-login">
						<input type="submit" name="login" value="Login">
					</div>
				</form>
				<div class="btn-login">
					<a href="<?= base_url('main_controller/signup')?>"><button class="btn-signup">Sign Up</button></a>
				</div>
			</div>
			<br>
			<center class="error"><?php echo $error;  ?></center>
	</div> <!-- end login -->
