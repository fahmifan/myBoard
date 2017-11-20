<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome-4/css/font-awesome.css">	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom/style_signup.css">

</head>
<body>
	<?php $this->load->library('form_validation');?>	
		
		<?php echo form_open('main_controller/signup'); ?>
		<div class="signup"> <!-- Signup form -->
			<h2 id="signup">Signup</h2>	
			<label>Name</label> <br>
			<input type="Text" name="name" aria-hidden="true">
			<?php echo form_error('name', '<div class="error">', '</div>')?>
		
			<label>Username</label> <br>
			<input type="Text" name="username" value="<?= set_value('username')?>">
			<?php echo form_error('username', '<div class="error">', '</div>')?>

			<label>Password</label> <br>
			<input type="Password" name="password"> <br>
			<?php echo form_error('password', '<div class="error">', '</div>')?>

			<label>Confirm Password</label> <br>
			<input type="Password" name="passconf"><br>	
			<?php echo form_error('passconf', '<div class="error">', '</div>')?>
			
			<br><input type="submit" value="Sign Up" method="post" class="signup-button">
		
		</div>	<!-- end signup form -->
		</form>
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