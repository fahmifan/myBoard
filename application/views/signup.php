<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome-4/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_index.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_signup.css">
</head>
<body>
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
					<form style="margin-bottom: 10px">
						<span class="signup-input"><input type="Text" name="name"></span>
					</form>
					<form style="margin-bottom: 10px">
						<input type="Text" name="username">
					</form>
					<form style="margin-bottom: 10px">
						<input type="Password" name="password">
					</form>
					<form style="margin-bottom: 10px">
						<input type="submit" value="Sign Up" method="post" class="signup-button">
					</form>
					</div>
			</div>
		</div>	<!-- end signup form -->
	</div>
</body>
</html>