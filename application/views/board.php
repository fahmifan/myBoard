<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Board Page</title>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome-4/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_index.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_board.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_modal.css">
</head>

<body style="background-color:#FFDC89;background-image: url(http://localhost/myBoard/assets/image/monument-valley.jpg)">
	<div class="board-height">
		<div style="color: black">
			<center>
				<h3 style="color:white">
					Your Board
				</h3>
			</center>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 box-shadow" style="margin: 20;">
					<?php foreach ($dataBoard as $row) {
						?> 
						<div class="col-md-4 box" style="margin: 5px">
						<a href="<?php echo base_url('main_controller/boardList/'.$row->id) ?>">
							<span class="board_name"><?php echo $row->board_name ?></span>
						</a>
							<button class="btn-update" data-id="<?php echo $row->id ?>" value=""><i class="fa fa-pencil-square-o" aria-hidden=""></i></button>
							<form action="<?= base_url('main_controller/deleteBoard/'.$row->id);?>" method="POST">
								<button class="btn-delete" data-id="<?php echo $row->id ?>" value="" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
								<input type="hidden" name="id-board" id="id_board_delete">
							</form>
							<hr>
							<?= $row->board_desc ?>
						</div>
						<?php
					} ?>
					<!-- <a href="<?php //echo base_url('index.php/main_controller/boardList')?>">
						<div class="col-md-4 box" style="margin: 5px">
							Board1
						</div>
					</a> -->
					<a id="myBtn" href="#">
						<div class="col-md-4 box" id="new_board" style="margin: 5px">
							New Board..
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- The Modal -->
	<div id="myModal" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>
			<div class="modal-header">
				<h3>Create new Board</h3>
				<form style="color: black;" action="<?php echo base_url('main_controller/createBoard')?>" method="POST">
					<input type="text" name="boardName" placeholder="Board Name"> <br>
					<textarea name="boardDesc" id="" cols="22" rows="3" placeholder="Description"></textarea> <br>
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
	<!-- Update Modal  -->
	<div id="modal-update" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>
			<div class="modal-header">
				<h3>Change Board</h3>
				<form style="color: black;" method="POST" action="<?= base_url('main_controller/updateBoard')?>">
					<label for="name" class="modal_label">Name</label> <br>
					<input type="text" id="board_input" name="boardName" value=""> <br>
					<label for="desc" class="modal_label">Description</label> <br>
					<textarea name="boardDesc" id="board_input_desc" cols="22" rows="3" placeholder="Description"></textarea> <br>
					<input type="hidden" name="id-board" id="id_board">
					<button type="submit" value="" id="submit_update" data-id="">Update</button>
					<br> <br>	
				</form>
			</div>
			<!-- <div class="modal-footer"> -->
			</div>
		</div>
	</div>


	<script>
		function init_delete_btn() {
			$('.btn-delete').click(function() {
				id = $(this).data('id');
				$('.btn-delete').val(id);
			});
		}

		function init_create_board() {
			$('#new_board').click(function() {
				$('#myModal').show();
				$('.close').click(function() {
					$('#myModal').hide();
				});
			});
		};

		function init_update_btn(){
			var id;
			$('.btn-update').click(function(){
				id = $(this).data('id');
				$('.btn-update').val(id);
				$.ajax({
					type: 'GET',
					url: "getBoardById?id=" + id,
					success: function(data) {
						$( "form" ).on( "submit", function( event ) {
						});
						$('#board_input').val(data.board_name);
						$('#board_input_desc').val(data.board_desc);
						$('#id_board').val(id);
						$('#modal-update').show();
					},
					dataType: 'json'
				});
				$('.close').click(function(){
					$('#modal-update').hide();
				});
			});
		};
		/**
		 * ajax post for board update 
		 *
		 * @return void
		 */
		// function init_submit_update() {
		// 	// $('#submit_update').click(function(){
		// 	$(document).on('click', '#submit_update', function(){
		// 		alert("hello");
		// 		var id = $(this).data('id');
		// 		$.ajax({
		// 			type: 'POST',
		// 			url: "updateBoard?id=" + id,
		// 			data: $(this).serialize(),
		// 			success: function() {
		// 				alert('Data has been updated');						
		// 			},
		// 			dataType: 'json'
		// 		});				
		// 	});
		// }

		$(document).ready(function(){
			init_create_board();
			init_update_btn();
			init_delete_btn();
		});
	</script>
</body>
</html>