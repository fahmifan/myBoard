<!DOCTYPE html>
<!--Author : Sachi Hongo 140810160014-->
<html>
	<head>
		<title>List Page</title>
		<meta charset="utf-8">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-grid.min.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_list.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_modal.css">
	</head>
	<body>
		<div class="container-card" id="card-height">
            <?php foreach ($dataList as $row) {
            	?>
            		<div class="card">
				    	<div class="board-data">
				    		<div class="card-scroll-y">
			    				<div><span class="top-label"><?php echo $row->list_name ?></span></div>
			   					<button class="btn_card" id="<?php echo $row->id ?>" style="background-color: limegreen;color:white">Add Card </button>
			    			</div>
				    	</div>
		            </div>
             	<?php
            } ?>
            <div class="card">
             	<div class="board-data">
		    		<div class="card-scroll-y">
	             		<div></div>
	    				<button class="btn_list" style="background-color: red;color:white">Add New List </button>
	    			</div>
             	</div>
		 	</div>
	 	 <!-- </div> -->
		</div>

	
	<!-- Modal Card -->
	<div id="modal_card" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<span id="close_card" class="close">&times;</span>
				<h2>Progress In Progress</h2>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('index.php/main_controller/createCard/')?>" method="POST">
					<input value="" type="hidden">
					<input type="text" name="card_name">
					<input type="submit" value="Create Card">
				</form>
			</div>
			<div class="modal-footer">
				<h3>Footer</h3>
			</div>
		</div>	
	</div>
	
	<!-- Modal List -->
	<div id="modal_list" class="modal">
		
		  <!-- Modal content -->
		  <div class="modal-content">
			<div class="modal-header">
			  <span id="close_list" class="close">&times;</span>
			  <h2>Add New List</h2>
			</div>
			<div class="modal-body">
			 <form action="<?php echo base_url('index.php/main_controller/createList/'.$this->uri->segment(3))?>" method="POST">
					<input type="text" name="listName" placeholder="List Name">
					<input type="submit" value="Submit">
			 </form>
			</div>
			<div class="modal-footer">
			  <h3>Footer</h3>
			</div>
		  </div>
		
	</div>
	</body>
	<script>

	function init_btn_modal_card() {
		$('.btn_card').click(function(){
			$('#modal_card').show();
		});
		$('#close_card').click(function(){
			$('#modal_card').hide();
		});
	}

	function init_btn_modal_list() {
		$('.btn_list').click(function(){
			$('#modal_list').show();
		});
		$('#close_list').click(function(){
			$('#modal_list').hide();
		});
	}
	$(document).ready(function (){
		init_btn_modal_card();
		init_btn_modal_list();
	});

	</script>		
</html>