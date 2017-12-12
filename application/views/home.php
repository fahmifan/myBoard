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
		<div class="bg-image"> <!-- Background Image -->
			<div class="text-jumbo">
				<p class="text-jumbo">Lets you work more <br>
				collaboratively and get more done.</p>
			</div>
			<div class="text-desc">
				<p>myBoard's boards, lists, and cards enable you to organize and prioritize <br>
				your projects in a fun, flexible and rewarding way.</p><br>
				<a href="#login" class="login-button">Login</a>
			</div>
		</div> <!-- end Bg-Image -->
	</div>
	<div id="login" class="login"> <!-- Login -->
		<h1>Welcome to myBoard</h1>
		<div class="login-form">
			<?php echo form_open('main_controller/login'); ?>	
				<table>
					<tr>
						<td>
							<label>Username</label>
						</td>
						<td>
							<input type="Text" name="username" placeholder=" e.g. myUname" >
						</td>
					</tr>
					<tr>
						<td>
							<label>Password</label> 
						</td>
						<td>
							<input type="Password" name="password" placeholder=" e.g. myPrivate" >	
						</td>
					</tr>
				</table>
				<div class="btn-login">
					<input type="submit" name="login" value="Login">
				</div>
			</form>
			<div class="btn-login">
				<a href="<?= base_url('main_controller/signup')?>"><button class="btn-signup">Sign Up</button></a>
			</div>
		</div>
		<br>
		<center><?php echo validation_errors();  ?></center>
		<center><?php echo $error;  ?></center>
	</div> <!-- end login -->
	
