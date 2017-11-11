<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome-4/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_signup.css">
</head>
<body>
	<?php $this->load->library('form_validation');?>
	
	<div class="container-fluid" style="padding: 0px">
		<div class="signup">
			<div class="row"> <!-- Signup form -->
				<h1 style="text-align: center;">Sign Up</h1>
					<div class="col-md-6">
						<p>Name</p>
						<p>Username</p>
						<p>Password</p>
					</div>
					<div class="col-md-6" style="position: relative; top: 10px; left: -50px">
					<?php echo form_open('main_controller/signup'); ?>
						<span class="signup-input"><input type="Text" name="name"></span>
						<input type="Text" name="username">
						<input type="Password" name="password">
						<input type="submit" value="Sign Up" method="post" class="signup-button">
					</form>
					</div>
			</div>
			<?php echo validation_errors(); ?>
		</div>	<!-- end signup form -->
		<div class="alamat">
			<div class="row">
				<div class="col-md-4">
					<p>Contact Us</p>
					<p>0822-xxxx-xxxx</p>
				</div>
				<div class="col-md-4">
					<center>
						<p><i class="fa fa-facebook-square" aria-hidden="true"></i> @myBoard</p>
						<p><i class="fa fa-instagram" aria-hidden="true"></i> @myBoard</p>
						<p><i class="fa fa-twitter-square" aria-hidden="true"></i> @myBoard</p>
					</center>
				</div>
				<div class="col-md-4">
					<center>
					<p style="text-align: right;">
						Address<br/>
						Bandung Sumedang Avenue KM.21,<br/>
						Hegarmanah, Jatinangor, Sumedang District,<br/>
						Jawa Barat 45363
					</p>
					</center>
				</div>			
			</div>
		</div>
	</div>
</body>
</html>