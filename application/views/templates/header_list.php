<!DOCTYPE html>
<!--Author : Sachi Hongo 140810160014-->
<html>
	<body>
		<nav>
			<ul>
				<div class="row">
				<div class="col-sm-3 col-xs-3 col-md-3">
					<span class="navbut" style="float: left; padding-top: 5px;">
    					Hello, <?php echo $this->session->userdata('username') ?>
    				</span>
    			</div>
    			<div class="col-sm-6 col-xs-6 col-md-6 center-logo">
                    <a href="<?= base_url(); ?>index.php/main_controller" style="color: #009688; text-decoration: none;">
                        <img src="<?= base_url()?>assets/image/logo-myBoard.png" width="30px"> myBoard
                    </a>
    			</div>
    			<div class="col-sm-3 col-xs-3 col-md-3 Right-Nav">
    				<a class="navbut" href="<?= base_url('index.php/main_controller/board')?>" style="float: right; padding: 5px 10px 0 0;">Board</a>
                </div>
    			</div>
			</ul>
		</nav>
	</body>

</html>