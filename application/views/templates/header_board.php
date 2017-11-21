<!DOCTYPE html>
<html>
	<body >
		<nav>
			<ul class="navback">
				<div class="row">
				<div class="col-sm-3">
					<span class="navbut" style="float: left; padding-top: 5px; color: white;">
    					Hello, <?php echo $this->session->userdata('username'); ?>
    				</span>
    			</div>
    			<div class="col-sm-6 center-logo">
                    <a href="" style="color: white; text-decoration: none;">
                        <img src="<?= base_url()?>assets/image/logo-myBoard-w.png" width="30px"> myBoard
                    </a>
    			</div>
    			<div class="col-sm-3 Right-Nav">
    				<a class="navbut" href="<?php echo base_url('index.php/main_controller/logout') ?>" style="float: right; padding: 5px 10px 0 0;">Logout</a>
                </div>
    			</div>
			</ul>
		</nav>
	</body>
</html>